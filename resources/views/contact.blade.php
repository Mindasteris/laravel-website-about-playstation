@extends('layouts.master')

@section('title', 'Contact - Playstation')

@section('content')
    <div class="container contact-page">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Contact Us') }}</div>

                    <div class="card-body">
                        <form method="GET" action="#">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required="required" autofocus oninvalid="this.setCustomValidity('Name field cannot be empty')" onchange="this.setCustomValidity('')">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required oninvalid="this.setCustomValidity('Email field cannot be empty and it need @ symbol')" onchange="this.setCustomValidity('')" >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="message_content" class="col-md-4 col-form-label text-md-end">{{ __('Your Message') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="message_content" id="message_content" cols="30" rows="10" required="required" oninvalid="this.setCustomValidity('Message cannot be empty')" onchange="this.setCustomValidity('')"></textarea>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" name="send" class="btn btn-primary" value="Send">
                                        {{-- {{ __('Send') }} --}} Send
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