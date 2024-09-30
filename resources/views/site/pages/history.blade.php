@extends('site.master')

@section('title')
    {{ 'History' }}
@endsection

@section('name')
    {{ 'History' }}
@endsection

@section('content')
    <div class="container">
        @include('site.layouts.breadcrumb')
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">major</th>
                        <th scope="col">location</th>
                        <th scope="col">completed</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{ asset('site/images/major.jpg') }}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="{{route('appointement')}}">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>yes</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{ asset('site/images/major.jpg') }}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="{{route('appointement')}}">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>8/11/2023</td>
                        <td class="d-flex align-items-center gap-2"><img src="{{ asset('site/images/major.jpg') }}" alt="" width="25"
                                height="25" class="rounded-circle">
                            <a href="{{route('appointement')}}">hamada</a>
                        </td>
                        <td>bone</td>
                        <td><a href="https://www.google.com/maps" target="_blank">eraasoft</a></td>
                        <td>no</td>
                    </tr>
                </tbody>
            </table>
    </div>
@endsection
