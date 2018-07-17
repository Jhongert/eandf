@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Create News</h3>

            <!-- Display server side validation errors  -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="/admin/news">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Max 70 characters" autofocus value="{{ old('title') }}">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="author">Article:</label>
                    <textarea id="content" name="content">{{ old('content') }}</textarea>
                    <span class="help-block"></span>
                </div>
            
                <div class="form-group" id="status">
                    <input type="checkbox" id="active" name="active" value="1"
                    @if(old('active') == 1)
                        checked
                    @endif
                    >
                    <label for="active">Active?</label>
                </div>
            </form>
        </div>
        <div class="text-center">  
            <button class="btn btn-primary" id="save">Add news article</button>
            <a href="/admin/news" class="btn btn-primary" id="cancel">Cancel</a>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/news.js') }}"></script>
@endsection