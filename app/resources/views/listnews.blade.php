@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <div class="row">
        <table  class="tablesorter display compact">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date created</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
        @if (count($news) > 0 )
            @foreach ($news as $item)
                <tr>
                    <td><a href="{{ url('/post/' . $item->url )}}">{{ $item->title }}</a></td>
                    <td>{{ date("F j, Y, g:i a", strtotime($item->created_at)) }}</td>
                    <td>{{ $item->active == '1' ? 'Yes' : 'No'}}</td>
                    <td><a href="/admin/news/edit/{{ $item->id }}" class="btn btn-default btn-sm btn-edit"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
        @endif
        </table>

        @section('js-scripts')
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    // datatable config
                    $('table').DataTable({
                        "columnDefs": [
                            { "orderable": false, "targets": [3] }
                            ],
                        order: [[ 0, "asc" ]],
                        info: false,
                        paging: false,
                    });
                });
            </script>
        @endsection
    </div>

@endsection
