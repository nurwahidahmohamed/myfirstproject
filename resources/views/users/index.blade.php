@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Details') }}
                    <span style="float:right;">
                        <a href="{{ route('users.create')}}" class="btn btn-primary">+ Create User</a>
                    </span>

                </div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Title</th>
                                <th>User Description</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>

                            <td>

                                <a href="{{ route('users.show', $user)}}" class="btn btn-primary">View</a>
                                <a href="{{ route('users.edit', $user)}}" class="btn btn-success">Edit</a>
                                <a onclick="return confirm('Betul ke nak Delete')" href="{{ route('users.destroy', $user)}}" class="btn btn-danger">Delete</a>

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
