@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Create Blog</h3>
        </div>
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                  </div>
                @endforeach
            @endif

            @if (session()->has('Success'))
            <div class="alert alert-success" role="alert">
                {{ session('Success') }}
            </div>
            @endif

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="image" class="form-control">
                      @error('image')
                          <code>{{ $message }}</code>
                      @enderror

                </div>

                <div class="form-group mb-3">
                  <label class="form-label">Category</label>
                  <select name="category" id="" class="form-control">
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                    </select>
                    @error('category')
                        <code>{{ $message }}</code>
                    @enderror

                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" id="" name="title">

                  @error('title')
                        <code>{{ $message }}</code>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Body</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>

                    @error('body')
                        <code>{{ $message }}</code>
                    @enderror
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                      <option value="1">Show</option>
                      <option value="0">Hide</option>
                      </select>

                      @error('status')
                        <code>{{ $message }}</code>
                    @enderror
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
