@extends('site.master')

@section('title')
    {{ 'Contact' }}
@endsection

@section('name')
    {{ 'Contact' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
            @include('site.inc.success')
            <form class="form" action="{{ route('site.contact.store') }}" method="POST">
                @csrf
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="msg_name">
                        @error('msg_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                        @error('phone')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="subject">subject</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                        @error('subject')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="message">message</label>
                        <textarea class="form-control" id="message" name="message"></textarea>
                        @error('message')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
@endsection
