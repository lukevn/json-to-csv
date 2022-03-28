@extends('layout.index')
@section('content')
    <div class="container">
        <form method="POST" enctype="multipart/form-data" action="{{ route('csv.export') }}">
            @method('POST')
            @csrf
            <div class="form-check">
                <input type="radio" class="form-check-input" name="exportOptions" id="export-brands-option" value="1"/>
                <label class="form-check-label" for="export-brands-option">Brands</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="exportOptions" id="export-categories-option" value="2"/>
                <label class="form-check-label" for="export-categories-option">Categories</label>
            </div>
            <div class="mb-3">
                <label for="exportFile" class="form-label">Choose a file to convert</label>
                <input class="form-control" type="file" name="exportFile" id="exportFile">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
