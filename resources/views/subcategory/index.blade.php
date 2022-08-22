@extends('master')
@section('title','subCategoey-index-page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4" >
        <a href="{{ route('subcategory.create') }}" class="btn btn-success">Create subCategory</a>
    </div>
    <div class="col-8 m-auto my-4">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">sl</th>
                <th scope="col">category Name</th>
                <th scope="col">SubCategory Name</th>
                <th scope="col">created</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory )
                <tr>
                    <th scope="row">{{ $subcategory->id }}</th>
                    <td>{{$subcategory->category->name }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <td>{{  $subcategory->created_at->diffForHumans()}}</td>
                    <td>
                       <a href="{{ route('subcategory.edit',['subcategory'=>$subcategory->id]) }}" class="btn btn-info">edit</a>
                      <form action="{{ route('subcategory.destroy',['subcategory'=>$subcategory->id]) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Del</button>
                      </form>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</div>
@endsection
