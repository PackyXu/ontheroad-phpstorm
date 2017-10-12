@extends('layouts.app')
@section('content')
    @include('inc.sidebar')
    <div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="row">
            @include('inc.fromError')
            <h1>Home page</h1>
            <div class="panel panel-default">
                <div class="panel-heading">Home Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>

        </div>
        @include('inc.showcase')
    </div>
    @include('inc.thumbnail')
    @include('inc.footer')
@endsection
