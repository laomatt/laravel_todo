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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Task</h4>
      </div>
      <div class="task-modal-body modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script>
    $('body').on('click', '.edit-task', function(event) {
        event.preventDefault();
        var id = $(this).attr('data-id');
        var that = $(this);
        $.ajax({
            url: '/tasks/show_edit/' + id,
        })
        .done(function(data) {
            var token = that.attr('token');
            $('.task-modal-body').html(data);
            $('#myModal').modal('show');
        })

    });
</script>
@endsection
