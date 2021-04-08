@extends('layout.main')

@section('title','Rental');

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Inventory Id</th>
      <th scope="col">Customer Id</th>
      <th scope="col">Staff Id</th>
    </tr>
  </thead>
  <tbody>

  @foreach($rentals as $rental)
    <?php $bil++ ?>
    <tr>
        <th scope="row">{{ $bil }}</th>
        <th>{{ $rental->inventory->film->title }}</th>
        <td>{{ $rental->inventory_id }}</td>
        <td>{{ $rental->customer_id }}</td>
        <td>{{ $rental->staff_id }}</td>
        </tr>
  @endforeach
   
  </tbody>
</table>

{{ $rentals->links() }}

@endsection