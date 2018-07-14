@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Admin</h1>
        <div class="col-md-6 text-center">
            <h1><a href="{{ url('/admin/news') }}">News</a></h1>
        </div>
        <div class="col-md-6 text-center">
            <h1><a href="{{ url('/admin/testimonials') }}">Testimonials</a></h1>
        </div>
    </div>
</div>
@endsection
