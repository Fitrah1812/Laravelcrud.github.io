<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Request as FacadesRequest;

class TaskController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }

    public function index()
    {
            $tasks = Task::paginate(10);
            return view('welcome', compact('tasks'));
    }

    public function store(Request $request)
    {
    	
    	Task::create([ 
    		'name' => $request->name
    	]);
    	return redirect()->back();
    }

    public function edit($id)
    {
    	$task = Task::find($id);
    	return view('edit', compact('task'));
    }

    public function update(Request $request)
    {
    	Task::where('id', $request->id)->update([
    			'name' =>$request->name
    	]);
    	return redirect()->route('index');    
    }

    public function delete($id)
    {
        $task =Task::find($id);
        $task->delete();
        return redirect()->route('index'); 
    }

    public function search(Request $request)
    {
        // return "masuk search";
        $search = $request->search;

        $tasks = Task::where('name','like',"%".$search."%")->paginate(10);
        return view('welcome', compact('tasks'));

    }
} 
