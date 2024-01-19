@extends('layouts.app')

@section('head', isset($task) ? 'Edit Task' : 'Create Task')


@section('content')
    <form action="{{ isset($task) ? route('tasks.update',['task'=>$task->id]) : route('tasks.store') }}" method="POST">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" @class(['border-red-500' => $errors->has('title')])>
            @error('title')
                <p class='error-msg'>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" @class(['border-red-500' => $errors->has('description')])>{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class='error-msg'>{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" @class(['border-red-500' => $errors->has('long_description')]) rows="10">{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class='error-msg'>{{ $message }}</p>
            @enderror
        </div>
        <div class="flex gap-2">
            <button type="submit" class="btn bg-emerald-500 hover:bg-emerald-700 shadow-lg">{{ isset($task) ? 'Update' : 'Create' }} Task</button>
            <a href="{{ route('tasks.index') }}" class="btn bg-red-500 hover:bg-red-700 shadow-lg">Cancel</a>
        </div>
    </form>
@endsection