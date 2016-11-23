<?php
namespace App\Http\Controllers;
use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class TasksController extends Controller
{
  public function show($id){
    $task = Task::find($id);
    return view('tasks.show', compact('task'));
  }

  public function index(){
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
  }

  public function store(){
    $input = Input::all();
    Task::create( $input );
    // return Redirect::back();
    return redirect()->back();
  }
}
