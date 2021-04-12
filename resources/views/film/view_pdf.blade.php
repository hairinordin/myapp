<link href="{{ asset('bootstrap4/dist/css/bootstrap.min.css') }}" rel="stylesheet">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Release Year</th>
      <th scope="col">Language</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
    <?php $bil = 1 ?>
  @foreach($films as $film)
    <tr>
        <th scope="row">{{ $bil }}</th>
        <td>{{ $film->title }}</td>
        <td>{{ $film->description }}</td>
        <td>{{ $film->release_year }}</td>
        <td>{{ $film->language->name }}</td>
        <td>{{ $film->rating }}</td>
    </tr>
    <?php $bil++ ?>
  @endforeach
   
  </tbody>
</table>