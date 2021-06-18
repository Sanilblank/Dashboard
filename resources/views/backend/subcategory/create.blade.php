@extends('backend.layouts.app')
@push('styles')

@endpush
@section('content')
<div class="right_col" role="main">
    <h1 class="mt-3">Create Subcategories  <a href="{{route('subcategory.index')}}" class="btn btn-primary btn-sm"> <i class="fa fa-plus" aria-hidden="true"></i> View Subcategories</a></h1>
    <div class="card mt-3">
        <div class="row">
            <div class="col-md-6">
               <form action="{{route('subcategory.store')}}" method="POST" class="bg-light p-3">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="category">Select Category</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Subcategory Title: </label>
                        <input type="text" name="title" class="form-control" value="{{@old('title')}}" placeholder="Enter Subcategory Title">
                        @error('title')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="status">Status: </label>
                                <input type="radio" name="status"  value="1"> Approved
                                <input type="radio" name="status"  value="0"> Not Approved
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="featured">Featured: </label>
                                <input type="radio" name="featured"  value="1"> Yes
                                <input type="radio" name="featured"  value="0"> No
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('scripts')

@endpush
