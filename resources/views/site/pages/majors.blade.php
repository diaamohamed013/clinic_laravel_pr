@extends('site.master')

@section('title')
    {{ 'Majors' }}
@endsection

@section('name')
    {{ 'Majors' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <div class="majors-grid">
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('site/images/major.jpg')}}" class="card-img-top rounded-circle card-image-circle" alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">Major title</h4>
                    <a href="{{route('doctor')}}" class="btn btn-outline-primary card-button">Browse Doctors</a>
                </div>
            </div>
        </div>

        <nav class="mt-5" aria-label="navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link page-prev" href="#" aria-label="Previous">
                        <span aria-hidden="true"> < </span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link page-next" href="#" aria-label="Next">
                        <span aria-hidden="true"> > </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
