@extends('layout.main')

@section('title','Sample File Upload')

@section('content')
    <form action="{{ url('save-file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input name="file" type="file" class="form-control" id="exampleFormControlFile1">
        
            @error('file')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
             @enderror 
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">date</label>
            <input name="start_date" type="text" class="form-control date-start" id="exampleFormControlFile1">
        </div>

        <div>
            <button type="submit" class="btn btn-success">Upload</button>
        </div>
    </form>

    <script type="text/javascript">
    $('.date-start').datepicker({ 
        uiLibrary: 'bootstrap4', 
       format: 'dd/mm/yyyy'
     });  
</script> 
@endsection
