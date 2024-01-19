@extends('layouts.app')

@section('head',$task->title)

@section('content')
    <div>
        <a href="{{ route('tasks.index') }}" class="text-amber-700 rounded-full bt-link hover:bg-amber-500 hover:text-white duration-300">
           @svg('icons/arrow-left-circle.svg')
        </a>
    </div>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>
    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{ $task->long_description }}</p>       
    @endif
    <p class="mb-4 text-slate-500 text-xs">
        Created {{ $task->created_at->diffForHumans() }} 
        <svg class="inline w-5 h-5 mx-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <circle cx="10" cy="10" r="3" />
        </svg>
        Updated {{ $task->updated_at->diffForHumans() }}
    </p>
    <div>
        @if ($task->completed)
        <p class="text-medium text-green-500 mb-4">Completed</p>
        @else
        <p class="text-medium text-red-500 mb-4">Not Completed</p>
        @endif
    </div>
    
    <div class="flex gap-2">
        <a href="{{ route('tasks.update',['task'=>$task]) }} " class="btn bg-teal-500 hover:bg-teal-600">
            Edit
        
        </a>
    
        <form action="{{ route('tasks.toggle',['task'=>$task]) }}" method="post">
            @csrf
            @method('PUT')
            <button type="submit" class="{{ $task->completed ? 'btn bg-yellow-500 hover:bg-yellow-700' : 'btn bg-green-500 hover:bg-green-700'  }}">Mark as {{ $task->completed ? 'not completed' : 'completed'  }}</button>
        </form>
    
        <form action="{{ route('tasks.delete',['task'=>$task->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn bg-red-500 hover:bg-red-700">Delete Task</button>
        </form>
    </div>
@endsection