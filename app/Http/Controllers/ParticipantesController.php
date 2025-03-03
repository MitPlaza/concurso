<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Participante;
use App\Http\Requests\ParticipanteRequest;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ParticipantesController extends Controller
{
    public function index(){
        $participantes = Participante::paginate(10);


        return view('participantes.index', compact('participantes'));
    }

    public function seleccionados()
{
    $participantes = Participante::where('seleccion', 1)->paginate(10);

    return view('participantes.seleccionados', compact('participantes'));
}


    public function show(Participante $participante){
        

        return view('participantes.show', compact('participante'));
    }

    public function store(ParticipanteRequest $request){

        // Verificar si el email ya tiene un registro en los últimos 30 días
    $email = $request->input('email');
    $ultimoRegistro = Participante::where('email', $email)
        ->where('created_at', '>=', Carbon::now()->subDays(30))
        ->exists();

    if ($ultimoRegistro) {
        return redirect()->back()->withErrors(['email' => 'Solo puedes enviar un formulario cada 30 días.']);
    }
       
        $file = $request->file('imagen');
        if($file){
            $filename = time(). 'bambino.' .$file->extension();
            $file->move( public_path('images'), $filename);

        }else{
           $file = null;
        }

        $participante = new Participante();

        $participante->nombretutor = $request->input('nombretutor');
        $participante->apellidotutor = $request->input('apellidotutor');
        $participante->email = $request->input('email');
        $participante->telefono = $request->input('telefono');
        $participante->nombrebebe = $request->input('nombrebebe');
        $participante->nacimiento = $request->input('nacimiento');
        $participante->sexo = $request->input('sexo');
        $participante->direccion = $request->input('direccion');
        $participante->acepto = $request->has('acepto') ? 1 : 0;
        $participante->imagen = $filename;
        $participante->save();
        
        return redirect()->route('gracias');


    }

    public function gracias(){
        return view('gracias');
    }

    public function toggleSeleccion(Participante $participante)
{
    // Cambiar el valor de 'seleccion' entre 0 y 1
    $participante->seleccion = $participante->seleccion == 0 ? 1 : 0;
    $participante->save();

    // Retornar una respuesta JSON con el nuevo estado
    return response()->json([
        'seleccion' => $participante->seleccion,
        'message' => 'Estado actualizado correctamente.',
    ]);
}


public function destroy(Participante $participante)
{
    // Verificar si el participante existe
    if (!$participante) {
        return redirect()->back()->with('error', 'El participante no existe.');
    }

    // Eliminar la imagen si existe
    if ($participante->imagen) {
        $rutaImagen = public_path('images/' . $participante->imagen);
        if (file_exists($rutaImagen)) {
            unlink($rutaImagen);
        }
    }

    // Eliminar el participante de la base de datos
    $participante->delete();

    // Redirigir con un mensaje de éxito
    return redirect()->route('participantes.index')->with('success', 'Participante eliminado correctamente.');
}


public function exportarExcel()
    {
        $participantes = Participante::all();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Definir encabezados
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Nombre Tutor');
        $sheet->setCellValue('C1', 'Apellido Tutor');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Teléfono');
        $sheet->setCellValue('F1', 'Nombre Bebé');
        $sheet->setCellValue('G1', 'Fecha de Nacimiento');
        $sheet->setCellValue('H1', 'Sexo');
        $sheet->setCellValue('I1', 'Dirección');
        $sheet->setCellValue('J1', 'Aceptó Términos');

        // Llenar los datos
        $fila = 2;
        foreach ($participantes as $participante) {
            $sheet->setCellValue('A' . $fila, $participante->id);
            $sheet->setCellValue('B' . $fila, $participante->nombretutor);
            $sheet->setCellValue('C' . $fila, $participante->apellidotutor);
            $sheet->setCellValue('D' . $fila, $participante->email);
            $sheet->setCellValue('E' . $fila, $participante->telefono);
            $sheet->setCellValue('F' . $fila, $participante->nombrebebe);
            $sheet->setCellValue('G' . $fila, $participante->nacimiento);
            $sheet->setCellValue('H' . $fila, $participante->sexo);
            $sheet->setCellValue('I' . $fila, $participante->direccion);
            $sheet->setCellValue('J' . $fila, $participante->acepto ? 'Sí' : 'No');
            $fila++;
        }

        // Crear archivo Excel en memoria y enviarlo como respuesta
        $writer = new Xlsx($spreadsheet);
        $filename = 'participantes.xlsx';

        return new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        }, 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment;filename="' . $filename . '"',
            'Cache-Control' => 'max-age=0',
        ]);
    }

    
}
