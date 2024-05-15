@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show User') }}</div>

                <div class="card-body">

                        <div class="form-group">
                            <label>Name</label>
                            <input value="{{ $user->name}}"   type="type" name="name" class="form-control" readonly>
                        </div>
                        <div>
                            <label>Email</label>
                            <input value="{{ $user->email}}"   type="type" name="email" class="form-control" readonly>

                        </div>
                        <div>
                            <label>Password</label>
                            <input value="{{ $user->password}}"   type="type" name="password" class="form-control" readonly>

                        </div>
                    <div class="form-group">
                        <a href="{{ route('users.index')}}" class="btn btn-primary"> Back To User Home</a>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
