@extends('site.master')

@section('title')
    {{ 'Doctors' }}
@endsection

@section('name')
    {{ 'Doctors' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <div class="doctors-grid">
            @foreach ($doctors as $doctor)
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ FileHelper::get_file_url($doctor->doctor_image) }}"
                        class="card-img-top rounded-circle card-image-circle" alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">
                            {{ $doctor->name }}
                        </h4>
                        <h6 class="card-title fw-bold text-center">
                            {{ $doctor->major->title }}
                        </h6>
                        <a href="{{ route('site.appointement', $doctor->id) }}" class="btn btn-outline-primary card-button">
                            Book an appointement
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <nav class="mt-5" aria-label="navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link page-prev" href="#" aria-label="Previous">
                        <span aria-hidden="true">
                            < </span>
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

@push('doctor-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
