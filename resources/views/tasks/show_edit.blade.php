
{!! Form::model($task, [
  'method' => 'PUT',
  'route' => array('tasks.update', $task->id)
]) !!}
  {!! csrf_field() !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('completed', 'completed:') !!}
        {!! Form::hidden('completed', 0) !!}
        @if ($task->completed == 1)
          {!! Form::checkbox('completed', 1, true, array('class' => 'form-control')) !!}
        @else
          {!! Form::checkbox('completed', 1, array('class' => 'form-control')) !!}
        @endif
    </div>

    <div class="form-group">
      {!! Form::submit('submit', ['class'=>'btn primary']) !!}
    </div>
  {!! Form::close() !!}
