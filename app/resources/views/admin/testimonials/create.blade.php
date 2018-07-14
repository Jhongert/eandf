@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h3>Create Testimonial</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div id="msg-container">
                <p id="msg"></p>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" placeholder="Max 56 characters" autofocus>
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <textarea id="content" name="content" placeholder="Content"></textarea>
                <span class="help-block"></span>
            </div>
        
            <!-- <div class="input-group" id="status">
                <label class="form-control">Active</label>
                <span class="input-group-addon">
                    <input type="checkbox" id="active" aria-label="...">
                </span>
            </div> -->

            <div class="form-group">  
                <button class="btn btn-primary" id="save">Save</button>
            </div>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/createtestimonial.js') }}"></script>
@endsection