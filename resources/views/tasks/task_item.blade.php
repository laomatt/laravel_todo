@if($task->completed == 1)
  <li class='list-group-item completed'>
      <a href="{{ route('tasks.show', $task->id ) }}">{{ $task->name }}:</a><br> {{ $task->description }} - from <a href="{{ route('projects.show', $task->project->id ) }}">{{ $task->project->name}}</a> - completed

@else
  <li class='list-group-item incomplete'>
      <a href="{{ route('tasks.show', $task->id ) }}">{{ $task->name }}:</a><br> {{ $task->description }} - from <a href="{{ route('projects.show', $task->project->id ) }}">{{ $task->project->name}}</a> - incomplete
@endif
      <div class="right-controls">
        <a href="#" data-id='{{ $task->id }}' token='<?php echo csrf_token(); ?>' class="edit-task btn btn-sm btn-primary">edit</a>
        <a href="#" data-id='{{ $task->id }}' token='<?php echo csrf_token(); ?>' class="delete-task btn btn-sm btn-danger">delete</a>
      </div>
  </li>
