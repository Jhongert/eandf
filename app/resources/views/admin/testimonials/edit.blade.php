@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>Edit Testimonial</h3>

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

            <form method="post" action="/admin/testimonials/{{ $data->id }}">
                {{ csrf_field() }}
                {{ method_field('PUT')}}

                <div class="form-group">
                    <label for="content">Testimonial:</label>
                    <textarea id="content" name="content">{{ htmlentities($data->content) }}</textarea>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{ $data->author }}">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" class="form-control">
                        @for($i=0; $i < 3; $i++)
                            <option 
                                value="{{ strtolower($categories[$i])}}"
                                @if($data->category === strtolower($categories[$i]))
                                    selected
                                @endif
                            >{{ $categories[$i] }}</option>
                        @endfor
                     </select>
                    <span class="help-block"></span>
                </div>

                <div class="form-group" id="status">
                    <input type="checkbox" id="active" name="active" value="1"
                        @if($data->active == 1)
                            checked  
                        @endif
                    >
                    <label for="active">Active?</label>
                </div>
            </form>
            <div class="form-group col-sm-6 text-right">  
                <button class="btn btn-primary" id="save">Update testimonial</button>
            </div>
            <div class="form-group col-sm-6 text-left">  
                <a href="/admin/testimonials" class="btn btn-primary" id="cancel">Cancel</a>
            </div>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('/js/helpers.js') }}"></script>
    <script src="{{ asset('/js/testimonials.js') }}"></script>
@endsection