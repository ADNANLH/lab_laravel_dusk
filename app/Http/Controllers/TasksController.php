<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(Request $request){
        $tasks = Task::paginate(3);
        if($request->ajax()){
            $searchQuery = $request->get('searchValue');
            $searchQuery = str_replace(' ', '%', $searchQuery);
            $tasks = Task::query()->where('nom','like','%'.$searchQuery.'%')->orWhere('description' , 'like', '%' . $searchQuery . '%')->paginate(3);
            return view('search', compact('tasks'))->render();
        }
        return view('home', compact('tasks'));
    }

    public function create(){
        $projects = Project::all();
        return view('add', compact('projects'));
    }

    public function store(Request $request){
        $task = new Task;
        $validateData = $request->validate([
            'nom' => 'required|max:50',
            'projetId'=> 'required',
            'description' => 'required'
        ]);
        $task::create($validateData);
        return redirect()->route('add.task')->with('success', 'tach a été ajouter avec succés');
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('edit', compact('task', 'projects'));
    }

    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $validatedData = $request->validate([
            'nom' => 'required| max:50',
            'projetId' => 'required',
            'description' => 'required'
        ]);
        $task->update($validatedData);
        return redirect()->route('edit.task', ['id' => $task->id])->with('success', 'La tache a été modifier avec succés');
    }

    public function delete($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }

}
