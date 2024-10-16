<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{route('home.index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    @yield('name')
                </li>
            </ol>
        </nav>
