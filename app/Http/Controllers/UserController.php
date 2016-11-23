<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   public function __construct(){
      $this->middleware('Second');
   }
   public function showPath(Request $request){
      $uri = $request->path();
      echo '<br>URI: '.$uri;

      $url = $request->url();
      echo '<br>';

      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';

      echo 'Method: '.$method;
   }

   public function index(Request $request){
    echo $request;
   }
   public function create(){
      echo 'create';
   }
   public function store(Request $request){
      echo 'store';
   }
   public function show($id){
      echo 'show';
      echo $id;
   }
   public function edit($id){
      echo 'edit';
   }
   public function update(Request $request, $id){
      echo 'update';
   }
   public function destroy($id){
      echo 'destroy';
   }

}
