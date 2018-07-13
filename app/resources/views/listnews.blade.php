@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Admin: news</h1>
            <h3 class="text-center"><a href="#">ADD NEWS ARTICLE</a></h3>
            @if (count($news) > 0 )
                @foreach ($news as $item)
                <div style="background-color: #ececec; padding: 20px; margin-bottom: 40px">
                    <h2>{{ $item->title }} <small>| {{ date("F j, Y", strtotime($item->created_at)) }}</small></h2>
                    <p> By: {{ $item->author }}</p>
                    <p>active: {{ $item->active == '1' ? 'Yes' : 'No'}} </p>
                    <div>
                        {!! $item->content !!}
                    </div>
                    <div class="text-center">
                        <a href="/admin/news/edit/{{ $item->id }}" class="btn btn-default btn-sm btn-edit">Edit</a>
                        <a href="/admin/news/delete/{{ $item->id }}" class="btn btn-default btn-sm btn-edit">Delete</a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <!-- @section('js-scripts')
        @endsection -->
    </div>

@endsection
