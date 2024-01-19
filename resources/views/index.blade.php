@extends('layouts.app')

@section('head','Hola Senor')

@section('content')
    <div>
        <a href="{{ route('tasks.create') }}" class="text-green-700 rounded-full bt-link hover:bg-green-500 hover:text-white duration-300">
            @svg('icons/plus-circle.svg')
        </a>
        
    </div>
    @forelse ($tasks as $task)
        <div class="relative">
            <a href="{{ route('tasks.show',['task'=>$task->id]) }}" @class(['flex items-center justify-between rounded-xl p-4 hover:bg-slate-100','line-through'=>$task->completed])>
                {{ $task->title }}
            </a>
        </div>
    @empty
        <h2>No Tasks found.</h2>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4 text-xs">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection