<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="icon">
    <title>Allure Industries</title>
    <x-style></x-style>

    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- navbar -->
    <x-navbar></x-navbar>

    <!-- sidebar -->
    <!-- <x-sidebar></x-sidebar> -->

    <!-- content -->
    @yield('content')

    <!-- footer -->
    {{-- <x-footer></x-footer> --}}
    <!-- welcome modal end -->
    <!-- js -->
    <x-script></x-script>
</body>

</html>