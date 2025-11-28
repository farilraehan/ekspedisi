<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <title>@yield('title', 'Kaiadmin - Bootstrap 5 Admin Dashboard')</title>

    <link rel="icon" href="{{ asset('assets/img/kaiadmin/favicon.ico') }}" type="image/x-icon" />

    {{-- Fonts and icons --}}
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('assets/css/fonts.min.css') }}"]
            },
            active: () => sessionStorage.fonts = true
        });
    </script>

    {{-- CSS Core --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .search-box {
            display: flex;
            align-items: center;
            background-color: white;
            border-radius: 999px;
            padding: 5px 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .custom-search-input {
            border: none;
            outline: none;
            padding: 6px 12px;
            border-radius: 999px;
            background: transparent;
            width: 200px;
        }

        .custom-search-btn {
            border: none;
            background: transparent;
            padding: 6px 10px;
            color: #333;
            cursor: pointer;
            border-radius: 999px;
        }

        .custom-search-input::placeholder {
            color: #aaa;
        }

        .content {
            flex: 1;
            padding: 30px 20px 20px 20px;
            overflow-y: auto;
        }

        .sidebar {
            width: 240px;
            height: auto;
            background-color: #ffffff !important;
            border-radius: 20px;
            margin: 3px 3px 3px auto;
            /* kanan */
            float: right;
            /* geser ke kanan */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .sidebar .nav-item a {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 12px;
            transition: 0.3s ease;
            color: #333;
            font-weight: 500;
        }

        .sidebar .nav-item a i {
            width: 20px;
            font-size: 16px;
            margin-right: 12px;
        }

        .sidebar .nav-item a:hover {
            background-color: #f0f0f0;
        }

        body {
            background-color: #fff3e6;
        }

        .main-panel {
            background-color: transparent;
        }

        .logo-header {
            background-color: transparent !important;
        }

        .nav-item>a {
            border-radius: 8px;
            margin-bottom: 6px;
        }

        .nav-item.active>a {
            background-color: #ff9933 !important;
            border-radius: 8px;
            padding: 10px 16px;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff !important;
            width: 100%;
            box-sizing: border-box;
            text-decoration: none;
            font-weight: 600;
        }

        .nav-secondary {
            margin-top: 10px !important;
        }

        .nav-item.active>a::before {
            display: none !important;
        }

        .nav-item.active>a i,
        .nav-item.active>a p {
            color: #ffffff !important;
        }

        .navbar-orange {
            background-color: #ff9933 !important;
            color: #fff !important;
        }

        .sidebar .nav-item.active>a i.fas.fa-home,
        .sidebar .nav-item.active>a p {
            color: #ffffff !important;
        }

        .sidebar .nav-item.active>a>p.dashboard-text {
            color: #ffffff !important;
        }

        .logo-text-wrapper img {
            height: 90px;
            /* ukuran logo yang pas */
            width: auto;
            object-fit: contain;
            margin: 0;
            margin-top: 60px;
            margin-top: 1px;
            /* hilangkan margin atas bawah */
        }

        /* Default: semua ikon sidebar abu */
        .sidebar .nav-item a i {
            color: #666 !important;
        }

        /* Hover dan focus juga tetap abu */
        .sidebar .nav-item a:hover i,
        .sidebar .nav-item a:focus i {
            color: #666 !important;
        }

        /* Aktif: tetap abu, kecuali dashboard */
        .sidebar .nav-item.active a i {
            color: #666 !important;
        }

        /* Hanya ikon dashboard yang putih saat aktif */
        .sidebar .nav-item.active a i.fa-home,
        .sidebar .nav-item.active a p.dashboard-text {
            color: #ffffff !important;
        }

        /* Jika Kaiadmin pakai pseudo-element ::before dari FontAwesome */
        .sidebar .nav-item a i::before {
            color: #666 !important;
        }

        .sidebar .nav-item.active a i.fa-home::before {
            color: #ffffff !important;
        }

        .select2-container .select2-selection--single {
            height: calc(2.25rem + 8px) !important;
            /* samakan tinggi dengan .form-control */
            padding: 0.375rem 0.75rem !important;
            border: 1px solid #ced4da !important;
            border-radius: 0.375rem !important;
            display: flex;
            align-items: center;
        }

        .select2-container .select2-selection__rendered {
            padding-left: 0 !important;
            line-height: normal !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 100% !important;
            right: 10px;
        }

        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable {
            background-color: #d1d1d1 !important;
            /* warna hover */
            color: #333 !important;
        }

        .card {
            margin-top: 90px;
            /* jarak dari navbar */
        }

        #add-row.table td,
        #add-row.table th {
            padding: 4px 8px !important;
        }
    </style>

    @yield('styles')
</head>

<body>
    <div class="wrapper" id="app">
        {{-- Sidebar --}}
        @include('layouts.sidebar')

        {{-- Main Panel --}}
        <div class="main-panel" id="main">
            {{-- Navbar --}}
            <div class="main-header navbar-orange">
                @include('layouts.navbar')
            </div>

            {{-- Content --}}
            <div class="content">
                @yield('content')
            </div>

            {{-- Footer --}}
            @include('layouts.footer')
        </div>
    </div>

    {{-- Optional modal --}}
    @yield('modal')

    {{-- Core JS --}}
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Kaiadmin & Plugins --}}
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $("#add-row").DataTable({
            pageLength: 5,
        });
    </script>
    {{-- Optional Charts --}}
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

    {{-- Demo --}}
    <script src="{{ asset('assets/js/setting-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo.js') }}"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                timer: 4000,
                showConfirmButton: false
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ $errors->first() }}",
                timer: 4000,
                showConfirmButton: true
            });
        </script>
    @endif

    @yield('script')
</body>

</html>
