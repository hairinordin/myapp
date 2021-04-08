@extends('layout.main')

@section('title','Film Detail')

@section('content')
<table class="table">
  <tbody>
    <tr>
      <th scope="row">Title</th>
      <td>{{ $film->title }}</td>
    </tr>
    <tr>
      <th scope="row">Description</th>
      <td>{{ $film->description }}</td>
    </tr>
    <tr>
      <th scope="row">Release Year</th>
      <td>{{ $film->release_year }}</td>
    </tr>
    <tr>
      <th scope="row">Language</th>
      <td>{{ $film->language->name }}</td>
    </tr>
    <tr>
      <th scope="row">Rating</th>
      <td>{{ $film->rating }}</td>
    </tr>
  </tbody>
</table>
@endsection