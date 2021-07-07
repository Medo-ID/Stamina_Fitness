<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
class ToDoController extends Controller
{
    //
    public function index()
    {
        return ToDo::all();
    }
 
    public function show($id)
    {
        return ToDo::find($id);
    }

    public function store(Request $request)
    {
        return ToDo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $ToDo = ToDo::findOrFail($id);
        $ToDo->update($request->all());

        return $ToDo;
    }

    public function delete(Request $request, $id)
    {
        $ToDo = ToDo::findOrFail($id);
        $ToDo->delete();

        return 204;
    }
}
