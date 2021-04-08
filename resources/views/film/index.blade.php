@extends('layout.main')

@section('title','Film');

@section('content')


@if(Session::get('success'))
    <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
    </div>
@elseif($msg = Session::get('danger'))
    <div class="alert alert-danger">
        <p>{{ $msg }}</p>
    </div>
@endif

<a class="btn btn-primary" href="{{ url('film/create') }}" role="button">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Release Year</th>
      <th scope="col">Language</th>
      <th scope="col">Rating</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($films as $film)
    <?php $bil++ ?>
    <tr>
        <th scope="row">{{ $bil }}</th>
        <td>{{ $film->title }}</td>
        <td>{{ $film->description }}</td>
        <td>{{ $film->release_year }}</td>
        <td>{{ $film->language->name }}</td>
        <td>{{ $film->rating }}</td>
        <td>
            <a class="btn btn-warning" href='{{ url("film/$film->film_id/edit") }}' role="button">Edit</a>
            <a class="btn btn-info" href='{{ url("film/$film->film_id") }}' role="button">Show</a>
        </td>
    </tr>
  @endforeach
   
  </tbody>
</table>

{{ $films->links() }}

@endsection