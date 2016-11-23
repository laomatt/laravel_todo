@extends('app')

@section('content')
<h1>{{ $proj->name }}</h1>

    @if ( !$proj->tasks->count() )
        Your proj has no tasks.
    @else
        <ul class='list-group'>
            @foreach( $proj->tasks as $task )
                @include('tasks.task_item', array('task' => $task))
            @endforeach
        </ul>
    @endif

  <h3>New Task</h3>

  {!! Form::model(new App\Task, ['route' => ['tasks.store'], 'id' => 'createTask']) !!}
  {!! csrf_field() !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description:') !!}
        {!! Form::textarea('description', null, array('class' => 'form-control')) !!}
    </div>
    <input type="hidden" name='project_id' value='{{ $proj->id }}'>
    <div class="form-group">
      {!! Form::submit('submit', ['class'=>'btn primary']) !!}
    </div>
  {!! Form::close() !!}

@endsection
