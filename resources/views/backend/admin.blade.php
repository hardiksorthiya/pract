@include('backend.common.head')
<div class="wrapper">
    @include('backend.common.sidebar')
    <div class="main">
        @include('backend.common.navbar')
        @yield('content')
        @include('backend.common.footer')
    </div>
</div>
@include('backend.common.bottom')




