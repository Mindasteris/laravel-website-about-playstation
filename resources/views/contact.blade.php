@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact Us') }}</div>
                    
                    <div class="card-body">

                        {{-- Success Contact Message --}}
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center contact-message">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                       
                        <form method="POST" action="{{ url('/contact') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" autofocus>
                                    {{-- Error --}}
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control " name="email">
                                    {{-- Error --}}
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="message" class="col-md-4 col-form-label text-md-end">{{ __('Your Message') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                                    {{-- Error --}}
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" name="send" class="btn btn-primary" value="Send">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop