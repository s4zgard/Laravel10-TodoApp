<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/task', function (){
    $tasks = Task::latest()->paginate(10);
    return view('index', ['tasks'=>$tasks]);
})->name('tasks.index');

Route::view('/task/create','components.form')->name('tasks.create');

Route::get('/task/{task}/edit', function (Task $task){

    return view('components.form',['task'=> $task]);
})->name('tasks.edit');

Route::get('/task/{task}', function (Task $task){

    return view('show',['task'=> $task]);
})->name('tasks.show');

Route::post('/task',function(TaskRequest $request){
    
    $task = Task::create($request->validated());

    return redirect()->route('tasks.show',['task'=>$task->id])
                    ->with('success','Task created successfuly');
})->name('tasks.store');

Route::put('/task/{task}',function(Task $task, TaskRequest $request){
    
    $task->update($request->validated());

    return redirect()->route('tasks.show',['task'=>$task->id])
                    ->with('success','Task updated successfuly');
})->name('tasks.update');

Route::delete('/task/{task}', function(Task $task){
    $task->delete();

    return redirect()->route('tasks.index')
            ->with('success','Task has been deleted');
})->name('tasks.delete');

Route::put('/task/{task}/toggle',function(Task $task){
    $task->taskComplete();

    return redirect()->back()->with('success','Task Updated!');
})->name('tasks.toggle');

Route::fallback(function (){
    return 'Where are you going?';
});