@extends('app')
@section('content')
<ul class='list-group'>
  @foreach( $tasks as $task)
    @include('tasks.task_item', array('task' => $task))
  @endforeach
</ul>
@endsection