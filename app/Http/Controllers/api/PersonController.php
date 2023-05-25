<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Получаем значение параметра 'department' из запроса
        $department = $request->input('department');
        $isDeanery = $request->input('isDeanery');
    
        // Если параметр 'department' не пустой, то ищем записи по полю 'department'
        if (!empty($department)) {
            $people = Person::where('department', (int)$department)->get();
        } elseif(!empty($isDeanery)) {
            $people = Person::where('isDeanery', (int)$isDeanery)->get();
            
        } else {
            $people = Person::all();
        }
    
        return $people;
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
        return Person::find($id);
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
