@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Login</h2>
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        @if(session('status'))
                            <p class="alert alert-danger text-center"><strong>{{ session('status') }}</strong></p>
                        @endif
                        @if (count($errors) > 0)
                            <p class="alert alert-danger text-center"><strong>Authentication failed. Please try again.</strong></p>
                        @endif

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="emausernameil" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="password" >Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
