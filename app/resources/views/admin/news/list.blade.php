@extends('admin.layouts.app')

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
                        <form action="/admin/news/{{ $item->id }}" method="post" id="form-{{$item->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <button type="button" class="btn btn-danger delete" data-id="{{$item->id}}">Delete</button>

                        <!-- <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#modal">Delete</button> -->
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
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this news?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="delete">Delete</delete>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-scripts')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.delete', function(){
                var id = $(this).data('id');
                $('#modal').modal();
                $('#delete').data('id', id);
            });

            $('#delete').click(function(){ 
                var form = $('#form-' + $(this).data('id'));
                form.submit();
            });
        });
    </script>
@endsection
