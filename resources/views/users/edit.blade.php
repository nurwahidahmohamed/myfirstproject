@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Edit') }}</div>

                <div class="card-body">
                    <form method='POST' action="">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="type" value="{{ $user->name}}" name="name" class="form-control" required>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="type" value="{{ $user->email}}" name="email" class="form-control" required>

                        </div>

                        <div>
                            <label>Password</label>
                            <input type="type" value="{{ $user->password}}" name="password" class="form-control" required>

                        </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary"> Update User Info </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
