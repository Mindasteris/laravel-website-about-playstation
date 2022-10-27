@extends('layouts.master')

@section('content')
<div class="container logged-user">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') . " " . Auth::user()->name }} &nbsp;| {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Explore the world of gaming!</h1> <br>
                    <h1 class="text-center">Dive in to the world of Playstation!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
