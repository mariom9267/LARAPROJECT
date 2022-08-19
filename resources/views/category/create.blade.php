@extends('master')
@section('title','Category_Create_Page')
@section('content')
    <div class="row">
        <div class="col-8 m-auto mt-5">
            @if ('status')
            <div class=" bg-info text-center text-white">{{ session('status') }}</div>
            @endif
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name </label>
                    <input type="text" class="form-control  @error('name')
                    is-invalid
                @enderror" name="name" id="name" placeholder="Pldease Provide Category Name" value="{{ old('name') }}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>


                {{-- <div class="mb-3">
                    <label for="slug" class="form-label">Slug </label>
                    <input type="text" class="form-control @error('slug')
                        is-invalid
                    @enderror" name="slug" id="slug" placeholder="Pldease Provide Category slug">
                    @error('slug')
                        <span class="invalid-feedback" role="alert">

                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div> --}}
                  <div class="form-check mb-3">
                      <input type="checkbox" name="is_active" class="form-check-input" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">Active/Inactive</label>
                  </div>
                  <button type="submit" class="btn btn-danger">submit</button>

            </form>
        </div>
    </div>

@endsection
