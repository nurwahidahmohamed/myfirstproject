@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task Edit') }}</div>

                <div class="card-body">
                    <form method='POST' action="">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="type" value="{{ $task->title}}" name="title" class="form-control" required>
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description"
                            class="form-control"
                            rows="5"
                            required>{{ $task->description}}</textarea>
                        </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary"> Update My Info </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
