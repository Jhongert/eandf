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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" id="author" name="author" class="form-control">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group" id="status">
                        <input type="checkbox" id="active" name="active" value="1">
                        <label for="active">Active?</label>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <!-- @for($i = 0; $i < count($categories); $i++)
                            <div class="radio">
                                <label>
                                    <input type="radio" name="category" value="{{ $categories[$i]['value'] }}">{{ $categories[$i]['label'] }}
                                </label>
                            </div>
                        @endfor -->
                        <select id="category" name="category" class="form-control">
                            <option value="">Choose...</option>
                            @for($i = 0; $i < count($categories); $i++)
                                <option value="{{ $categories[$i]['value'] }}">{{ $categories[$i]['label'] }}</option>
                            @endfor
                        </select>
                        <span class="help-block"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="text-center">  
            <button class="btn btn-primary" id="save">Add testimonial</button>
            <a href="/admin/news" class="btn btn-primary" id="cancel">Cancel</a>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/testimonials.js') }}"></script>
@endsection