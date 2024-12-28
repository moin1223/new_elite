<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/user-management-html/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 17:07:52 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('frontend.includes.head')
    {{-- @livewireStyles --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- Include Font Awesome (for the scroll arrow) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/fe1ecc4ddb.js" crossorigin="anonymous"></script>

    {{-- Google font shilagrur and Roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Hind Siliguri", "Roboto", serif !important;
            /* font-family: "Roboto", serif; */
        }
    </style>
</head>

{{-- <section class="main_content dashboard_part large_header_bg"> --}}

@include('frontend.includes.navbar')

@yield('content')


@include('frontend.includes.footer')

@include('frontend.includes.scripts')

</body>

<!-- Mirrored from demo.dashboardpack.com/user-management-html/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 17:07:52 GMT -->

</html>
