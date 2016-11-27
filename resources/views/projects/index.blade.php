@extends('app')
@section('content')
  <h2>Projects</h2>

  @if ( !$projects->count() )
      You have no projects
  @else
      <ul class='list-group'>
          @foreach( $projects as $project )
              <li class='list-group-item project-item'>
                <a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
                <div class="right-controls">
                  <a href="#" class="edit-proj btn btn-sm btn-primary">edit</a>
                  <a href="#" data-id='{{ $project->id }}' token='<?php echo csrf_token(); ?>' class="delete-proj btn btn-sm btn-danger">delete</a>
                </div>
              </li>
          @endforeach
      </ul>
  @endif
  <h3>New Project</h3>

  {!! Form::model(new App\Project, ['route' => ['projects.store'], 'id' => 'createProj']) !!}
  {!! csrf_field() !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::submit('submit', ['class'=>'btn primary']) !!}
    </div>
  {!! Form::close() !!}

@endsection
