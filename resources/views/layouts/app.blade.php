<!DOCTYPE html>
<html lang="fa" dir="rtl">
<!--begin::Head-->
<head><base href=""/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    @livewireStyles
</head>
<body>

<!-- Navbar -->
        @include('layouts.navbar')


<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            {{ $slot }}
        </div>
    </div>
</div>
<!--begin::Javascript-->
        @livewireScripts
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--end::Javascript-->

</body>
</html>
