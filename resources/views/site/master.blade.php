@include('site.layouts.header')

<div class="page-wrapper">
    @include('site.layouts.navbar')
    @yield('content')
</div>

@include('site.layouts.footer')
