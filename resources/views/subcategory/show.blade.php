@extends('master')
@section('title', 'subcategory-create-page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-start my-4" >
        <a href="{{ route('subcategory.edit') }}" class="btn btn-info">ShowCategory</a>
    </div>
    <div class="col-8 m-auto  my-5">
        <div class="card p-5">
            <form action="{{ route('subcategory.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="categoryItem" class="form-label">Category Item</label>

            <select class="form-select @error('category_id')
                is-invalid
            @enderror" aria-label="Default select example" name="category_id">
                <option selected>Open this select menu</option>
                 @foreach ($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                 @endforeach
              </select>
              @error('category_id')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
              @enderror
        </div>

          <div class="mb-3">
            <label for="subcategoryName" class="form-label">Subcategory Name</label>
            <input type="text" name="subcategoy_name" placeholder="Please Enter your subcategory Name" class="form-control @error('subcategoy_name')
            is-invalid
            @enderror">
            @error('subcategoy_name')
                <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" id="is_active">
            <label class="form-check-label" for="is_active">Active/Inactive</label>
        </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-danger">submit</button>
          </div>
            </form>
        </div>


    </div>
</div>


@endsection
