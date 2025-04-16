@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Create Blog</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group mb-3">
                  <label class="form-label">Category</label>
                  <select name="category" id="" class="form-control">
                    <option value="">Select</option>
                    @foreach ($categories as $categories)

                    <option value="">{{ $categories->name }}</option>
                    @endforeach
                    </select>

                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" id="" name="title">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Body</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" id="" class="form-control">
                      <option value="1">Show</option>
                      <option value="0">Hide</option>
                      </select>

                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
