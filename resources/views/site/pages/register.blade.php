@extends('site.master')

@section('title')
    {{ 'Register' }}
@endsection

@section('name')
    {{ 'Register' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
            @include('site.inc.success')
            <form class="form" method="POST" action="{{ route('site.register.store') }}">
                @csrf
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="password">password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div>
                            <input type="radio" name="type" id="doctor" value="doctor">
                            <label for="doctor">Doctor</label>
                            <input type="radio" name="type" id="patient" value="patient">
                            <label for="patient">Patient</label>
                        </div>
                        @error('type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create account</button>
            </form>
            <div class="d-flex justify-content-center gap-2">
                <span>already have an account?</span><a class="link" href="{{ route('site.login.show') }}"> login</a>
            </div>
        </div>
    </div>
@endsection
