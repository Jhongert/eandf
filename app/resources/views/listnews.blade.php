@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Admin: news</h1>
            <h3 class="text-center"><a href="/admin/news/create">ADD NEWS ARTICLE</a></h3>
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
                        <a href="/admin/news/{{ $item->id }}" class="btn btn-success">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal">Delete</button>
                        <!-- <a href="/admin/news/delete/{{ $item->id }}" class="btn btn-default btn-sm btn-edit">Delete</a> -->
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <!-- <h4 class="modal-title" id="myModalLabel">Modal title</h4> -->
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this news?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="/admin/news/delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
