@extends('layouts.app')
@include('include.navbar')
@section('content')
    @if (count($tasks))
        @foreach ($tasks as $task)
            <div class="d-flex justify-content-center mt-2">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('tasks.show', ['task' => $task]) }}"
                            class="link-secondary"
                            style="text-decoration: none">{{ $task->title }}</a>
                    </div>
                </div>
            </div>
        @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $tasks->links() }}
            </div>
    @endif
@endsection
