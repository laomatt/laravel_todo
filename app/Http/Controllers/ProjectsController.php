<?php
namespace App\Http\Controllers;
use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function __construct(){
    // $this->middleware('Auth');
  }

  public function index(){
    $projects = Project::all();
    return view('projects.index', compact('projects'));
  }

  public function show($project){
    $proj = Project::find($project);
    return view('projects.show', compact('proj'));
  }

  public function store(){
    $input = Input::all();
    Project::create( $input );
    return Redirect::route('projects.index')->with('message', 'Project created');
  }
}
