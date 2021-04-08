@extends('layout.main')

@section('title','Film > Edit')

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


<form action="{{ url('film/'.$film->film_id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group row">
    <label for="inputTitle3" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        @if(!empty(old('title')))
            <?php $value = old('title'); ?>
        @else
            <?php $value = $film->title; ?> 
        @endif
      <input type="text" name="title" value="{{ $value }}" class="form-control" id="inputTitle3" placeholder="Title">
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
        @if(!empty(old('description')))
            <?php $value = old('description'); ?>
        @else
            <?php $value = $film->description; ?> 
        @endif
      <textarea type="text" name="description" class="form-control" id="inputdescription3" placeholder="Description"> {{ $value }}</textarea>
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
        @if(!empty(old('release_year')))
            <?php $value = old('release_year'); ?>
        @else
            <?php $value = $film->release_year; ?> 
        @endif
      <input type="text" name="release_year" value="{{ $value }}" class="form-control" id="inputYear3" placeholder="Year">
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
        @if(!empty(old('language_id')))
            <?php $valueselected = old('language_id'); ?>
        @else
            <?php $valueselected = $film->language_id; ?> 
        @endif
        <select class="form-control" name="language_id">
            <option value="">Select Language</option>
            @foreach($language as $key => $value)
                <option value="{{ $key }}" {{ ($key == $valueselected) ? "selected": "" }}>
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
        @if(!empty(old('rating')))
            <?php $valueselected = old('rating'); ?>
        @else
            <?php $valueselected = $film->rating; ?> 
        @endif
        <select class="form-control" name="rating">
            <option value="">Select Rating</option>
            @foreach($rating as $key => $value)
                <option value="{{ $key }}" {{ ($key == $valueselected) ? "selected": "" }}>
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