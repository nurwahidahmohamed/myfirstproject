

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Index Tasks') }}
                    <span style="float:right;">
                        <a href="{{ route('tasks.create')}}" class="btn btn-primary">+ Create Task</a>
                    </span>

                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Task ID</th>
                                <th>Task Title</th>
                                <th>Task Description</th>
                                <th>User ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id}}</td>
                                <td>{{ $task->title}}</td>
                                <td>{{ $task->description}}</td>
                                <td>{{ $task->user->name}}</td>
                            <td>

                                <a href="{{ route('tasks.show', $task)}}" class="btn btn-primary">View</a>
                                <a href="{{ route('tasks.edit', $task)}}" class="btn btn-success">Edit</a>
                                <a href="{{ route('tasks.destroy', $task)}}" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
