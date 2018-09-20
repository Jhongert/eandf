@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">Admin: Testimonials</h1>
            <h3 class="text-center"><a href="/admin/testimonials/create">ADD TESTIMONIAL</a></h3>
            @if (count($testimonials) > 0 )
                @foreach ($testimonials as $testimonial)
                <div style="background-color: #ececec; padding: 20px; margin-bottom: 40px">
                    <p class="text-right">active: {{ $testimonial->active == '1' ? 'Yes' : 'No'}} </p>
                    <div>
                        {!! $testimonial->content !!}
                    </div>
                    <p class="text-center"> By: {{ $testimonial->author }}, {{ date("Y", strtotime($testimonial->created_at)) }}</p>
                    
                    <div class="text-center">
                        <form action="/admin/testimonials/{{ $testimonial->id }}" method="post" id="form-{{$testimonial->id}}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                        <a href="/admin/testimonials/{{ $testimonial->id }}/edit" class="btn btn-success">Edit</a>
                        <button type="button" class="btn btn-danger delete" data-id="{{$testimonial->id}}">Delete</button>
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
                    <p>Are you sure you want to delete this testimonial?</p>
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
