<!DOCTYPE html>
<html lang="en">
@include('_partials/head')
<body>
<!-- Responsive navbar -->
@include('_partials/nav')
<!-- Header -->
@include('_partials/header')
<!-- Page content -->
@yield('content')
<!-- Footer -->
@include('_partials/footer')


<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
