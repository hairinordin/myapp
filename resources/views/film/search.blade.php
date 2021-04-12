<div class="form-control">
    <form method="GET" action="{{ url('film') }}">
        <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-6">
                <input type="text" name="title" class="form-control" name="title" id="inputTitle" placeholder="Title" value="{{ old('title') }}">
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a class="btn btn-info" href="{{ url('film') }}">Reset</a>
                </div>
            </div>
        </div>
    </form>
</div>
