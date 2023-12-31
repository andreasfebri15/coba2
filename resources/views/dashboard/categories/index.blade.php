@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Post Categories </h1>

</div>

<div class="table-responsive small col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
            
      
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name}}</td>
          
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i class="bi bi-eye-fill"></i></a>
            <a href="" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
          </td>
          
        </tr>

        @endforeach

      </tbody>
    </table>
  </div>
@endsection