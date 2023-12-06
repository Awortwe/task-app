@extends('layouts.app')
@include('include.navbar')
@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="POST" action="{{ route('tasks.update', ['task'=>$task]) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" value="{{ $task->title }}" name="title">
                  @error('title')
                        <p class="text-danger"
                        style="font-size: 12px">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description"
                  name="description" rows="5">{{ $task->description }}</textarea>
                  @error('description')
                    <p class="text-danger"
                    style="font-size: 12px">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="long_description" class="form-label">Long Description</label>
                    <textarea class="form-control" id="long_description"
                    name="long_description" rows="8">{{ $task->long_description }}</textarea>
                    @error('long_description')
                        <p class="text-danger"
                        style="font-size: 12px">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
              </form>
        </div>
    </div>
@endsection
