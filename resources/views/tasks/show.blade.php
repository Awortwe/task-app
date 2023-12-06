@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $task->title }}</h3>
                </div>
                <div class="card-body">
                    <p>{{ $task->description }}</p>
                    <p>{{ $task->long_description }}</p>
                    <p class="mb-2">
                        @if ($task->completed)
                          <span class="text-primary">Completed</span>
                        @else
                          <span class="text-danger">Not completed</span>
                        @endif
                      </p>
                      <p>
                        Updated : <span class="badge bg-info text-dark">{{ $task->updated_at->diffForHumans() }}</span>
                        Created : <span class="badge bg-primary text-dark">{{ $task->created_at->diffForHumans() }}</span>
                      </p>
                      <p>

                      </p>
                    <div>
                        <a href="{{ route('tasks.edit',['task'=>$task]) }}"
                        class="btn btn-outline-primary btn-sm">Edit</a>
                        <form style="display: inline-block"
                        action="{{ route('tasks.toggle-complete',['task'=>$task]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-outline-danger btn-sm" type="submit">
                                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
                            </button>
                        </form>
                        <form style="display: inline-block"
                        action="{{ route('tasks.destroy',['task'=>$task]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('tasks.index') }}"
                class="btn btn-outline-success btn-sm">Go Back</a>
            </div>

        </div>
    </div>
@endsection
