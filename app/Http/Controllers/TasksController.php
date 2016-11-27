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

  public function show_edit($id){
    $task = Task::find($id);
    return view('tasks.show_edit', compact('task'));
  }

  public function update($task){
    $task = Task::find($task);
    $input = Input::all();
    $task->fill($input)->save();

    return redirect()->back();
  }

  public function destroy($id){
    $task = Task::find($id);
    $task->delete();
  }

  public function store(){
    $input = Input::all();
    $task = Task::create( $input );
    $task->completed = 0;
    $task->save;
    return redirect()->back();
  }
}
