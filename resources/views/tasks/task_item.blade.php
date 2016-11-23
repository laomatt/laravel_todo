@if($task->completed = 1)
  <li class='list-group-item completed'>
      <a href="{{ route('tasks.show', $task->id ) }}">{{ $task->description }}</a> from {{ $task->project->name}} - completed

@else
  <li class='list-group-item incomplete'>
      <a href="{{ route('tasks.show', $task->id ) }}">{{ $task->description }}</a> from {{ $task->project->name}} - incomplete
@endif
      <div class="right-controls">
        <a href="#" class="edit-task btn btn-sm btn-primary">edit</a>
        <a href="#" class="delete-task btn btn-sm btn-danger">delete</a>
      </div>

  </li>
