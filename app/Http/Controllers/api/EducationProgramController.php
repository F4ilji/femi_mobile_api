<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\EducationProgram;
use Illuminate\Http\Request;

class EducationProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
                // Получаем значение параметра 'department' из запроса
        $department = $request->input('department');
    
        // Если параметр 'department' не пустой, то ищем записи по полю 'department'
        if (!empty($department)) {
            $EducationProgram = EducationProgram::where('department_id', (int)$department)->get();
        } else {
            // Иначе возвращаем все записи
            $EducationProgram = EducationProgram::all();
        }
    
        return $EducationProgram;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return EducationProgram::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
