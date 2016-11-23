@extends('app')

@section('content')
<h1>{{ $task->name }}</h1>
<p>
  {{ $task->description }}
</p>

@endsection