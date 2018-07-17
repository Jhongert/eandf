@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Create Testimonial</h3>

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

            <form method="post" action="/admin/testimonials">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="content">Testimonial:</label>
                    <textarea id="content" name="content" autofocus></textarea>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control">
                        <option value="">Choose...</option>
                        <option value="divorce and family low">Divorve and Family Law</option>
                        <option value="bankruptcy">Bankruptcy</option>
                        <option value="personal injury">Personal Injury</option>
                    </select>
                    <span class="help-block"></span>
                </div>

                <div class="form-group" id="status">
                    <input type="checkbox" id="active" name="active" value="1">
                    <label for="active">Active?</label>
                </div>
            </form>
            <div class="form-group col-sm-6 text-right">  
                <button class="btn btn-primary" id="save">Add testimonial</button>
            </div>
            <div class="form-group col-sm-6 text-left">  
                <button class="btn btn-primary" id="cancel">Cancel</button>
            </div>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/testimonials.js') }}"></script>
@endsection