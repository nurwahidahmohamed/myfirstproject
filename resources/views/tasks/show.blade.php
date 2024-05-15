@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Task Show') }}</div>

                <div class="card-body">

                        <div class="form-group">
                            <label>Title</label>
                            <input value="{{ $task->title}}"   type="type" name="title" class="form-control" readonly>
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="description" class="form-control" rows="5" readonly>{{$task->description}}
                            </textarea>

                        </div>
                    <div class="form-group">
                        <a href="{{ route('tasks.index')}}" class="btn btn-primary"> Back To Index Tasks</a>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
