@extends('layout.main')

@section('title','Film > Create')

@section('content')

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error!</strong>
        <ul>
            @foreach($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


<form action="{{ url('film') }}" method="POST">
  @csrf
  <div class="form-group row">
    <label for="inputTitle3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="inputTitle3" placeholder="Title">
        @error('title')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror   
    </div>
  </div>

  <div class="form-group row">
    <label for="inputdescription3" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <textarea type="text" name="description" value="{{ old('description') }}" class="form-control" id="inputdescription3" placeholder="Description"> {{ old('description') }}</textarea>
      @error('description')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror   
    </div>
  </div>

  <div class="form-group row">
    <label for="inputYear3" class="col-sm-2 col-form-label">Release Year</label>
    <div class="col-sm-10">
      <input type="text" name="release_year" value="{{ old('release_year') }}" class="form-control" id="inputYear3" placeholder="Year">
      @error('release_year')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror 
    
    </div>
   
  </div>

  <div class="form-group row">
    <label for="inputYear3" class="col-sm-2 col-form-label">Language</label>
    <div class="col-sm-10">
        <select class="form-control" name="language_id">
            <option value="">Select Language</option>
            @foreach($language as $key => $value)
                <option value="{{ $key }}" {{ ($key == old('language_id')) ? "selected": "" }}>
                    {{ $value }}
                </option>
            @endforeach
            <!-- <option value="1">english</option>
            <option value="2">italian</option> -->
        </select>
        @error('language_id')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror 
    </div>
  </div>

  <div class="form-group row">
    <label for="inputYear3" class="col-sm-2 col-form-label">Rating</label>
    <div class="col-sm-10">
        <select class="form-control" name="rating">
            <option value="">Select Rating</option>
            @foreach($rating as $key => $value)
                <option value="{{ $key }}" {{ ($key == old('rating')) ? "selected": "" }}>
                    {{ $value }}
                </option>
            @endforeach
        </select>
        @error('rating')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
        @enderror 
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection