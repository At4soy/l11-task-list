@extends('layouts.app')

@section('title', 'Edit Task')

@section('styles')
<style>
  body{
    background-color: #dde7e7;
  }

  .error-message{
    color: red;
    font-size: 0,8rem;
  }
</style>
@endsection

@yield('dash_head')

@section('content')
<div id="layoutSidenav_content">
  <main >
    <div class="container-fluid px-4">
      <div class="container me-5">
        <div class="col-lg-7 mt-5">
          <div class="card shadow-lg border-0 rounded-lg mt-5 ms-5">
            <div class="card-header">
              <h3 class="text-center font-weight-light my-4">Add Product</h3>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                  <input class="form-control" id="title" name="title" type="text" value="{{ $task->title }}" placeholder="Enter product name" />
                  <label for="title">Product Title</label>
                  @error('title')
                      <p class="error-message">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="description" name="description" type="text" placeholder="Enter product name">{{ $task->description }}</textarea>
                  <label for="description">Product Description</label>
                  @error('description')
                      <p class="error-message">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control" id="price" name="price" type="number" placeholder="Enter price">{{ $task->price }}</textarea>
                  <label for="price">Price</label>
                  @error('price')
                      <p class="error-message">{{ $message }}</p>
                  @enderror
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                      <input class="form-control" id="image" name="image" type="file" placeholder="Select product image" />
                      <label for="image">Select Product Image</label>
                    </div>
                  </div>
                </div>
                <div class="mt-4 mb-0">
                  <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Edit Task</button></div> <div class="d-grid"><button type="submit" class="inline-block rounded bg-primary-100 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-200 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200 motion-reduce:transition-none dark:bg-primary-300 dark:hover:bg-primary-400 dark:focus:bg-primary-400 dark:active:bg-primary-400">Cancel</button></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection

@yield('dash_foot')