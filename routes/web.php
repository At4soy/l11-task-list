<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        'tasks' => Task::latest()->paginate(5)
    ]); 
}) -> name('tasks.index');

Route::view('/tasks/create', 'create')
  -> name('tasks.create');

// Task Edit Page Route
Route::get('/tasks/{task}/edit', function(Task $task){
  return view('edit', [
    'task' => $task
  ]);
})-> name('tasks.edit');

// Task List/Show Route
Route::get('/tasks/{task}', function(Task $task){
  return view('show', [
    'task' => $task
  ]);
})-> name('tasks.show');

// Task Create Route
Route::post('/tasks', function (TaskRequest $request){
  $task = Task::create($request->validated());

  return redirect()->route('tasks.show', ['task' => $task->id])
      ->with('success', 'Task created succesfully!');
})-> name('tasks.store');


// Task Update Route
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request){
  $task->update($request->validated());

  return redirect()->route('tasks.show', ['task' => $task->id])
      ->with('success', 'Task updated succesfully!');
})-> name('tasks.update');

Route::delete('/tasks/{task}', function(Task $task) {
  $task->delete();

  return redirect()->route('tasks.index')
      ->with('succes', 'Task deleted succesfully!');
})->name('tasks.destroy');