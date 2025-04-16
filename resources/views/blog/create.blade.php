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
                  <select name="" id="" class="form-control">
                    <option value="">Tech</option>
                    </select>

                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Title</label>
                  <input type="text" class="form-control" id="">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Body</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form-label">Status</label>
                    <select name="" id="" class="form-control">
                      <option value="">Show</option>
                      <option value="">Show</option>
                      </select>

                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
