@extends('layouts.app')
@section('content')

    <div class="col-xs-12 col-sm-10 col-sm-offset-1  col-md-8 col-md-offset-2 main">
        <div class="row">
            @include('inc.fromError')
            <h2>Home page</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard for Admin</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <strong>Admin</strong>
                    {{--@component('components.who')
                    @endcomponent--}}
                </div>
            </div>

        </div>
        @include('inc.showcase')
    </div>

    @include('inc.footer')
@endsection
