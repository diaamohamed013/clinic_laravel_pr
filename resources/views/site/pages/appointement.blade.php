@extends('site.master')

@section('title')
    {{ 'Make-Appointement' }}
@endsection

@section('name')
    {{ 'Doctors' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <div class="d-flex flex-column gap-3 details-card doctor-details">
            @include('site.inc.success')
            <div class="details d-flex gap-2 align-items-center">
                <img src="{{ FileHelper::get_file_url($doctor->doctor_image) }}" class="img-fluid rounded-circle"
                    height="150" width="150" />
                <div class="details-info d-flex flex-column gap-3">
                    <h4 class="card-title fw-bold">
                        {{ $doctor->name }}
                    </h4>
                    <h6 class="card-title fw-bold">
                        doctor major {{ $doctor->major->title }}
                    </h6>
                </div>
            </div>
            <hr />
            <form class="form" method="POST" action="{{ route('site.appointement.store', $doctor->id) }}">
                @csrf
                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" />
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required-label" for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    Confirm Booking
                </button>
            </form>
        </div>
    </div>
@endsection
