<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Kanakku provides clean Admin Templates for managing Sales, Payment, Invoice, Accounts and Expenses in HTML, Bootstrap 5, ReactJs, Angular, VueJs and Laravel.">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Ing. Elvira Terán">

    {{-- <meta property="og:url" content="https://kanakku.dreamguystech.com/">
    <meta property="og:title" content="Finance & Accounting Admin Website Templates | Kanakku">
    <meta property="og:description"
        content="Kanakku is a Sales, Invoices & Accounts Admin template for Accountant or Companies/Offices with various features for all your needs. Try Demo and Buy Now.">
    <meta property="og:image" content="../../../../kanakku.dreamguystech.com/assets/img/kanakku.html">
    <meta property="og:image:secure_url" content="../../../../kanakku.dreamguystech.com/assets/img/kanakku.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> --}}
    <title>{{ 'INTERSALUD' }}</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    {{-- @include('layouts.admin.css') --}}

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/plugins/scrollbar/scroll.min.css">
    <script src="assets/js/layout.js"></script>
</head>

<body>

    <div class="main-wrapper">

        @include('layouts.admin.menu_superior')
        @include('layouts.admin.menu_izq')

        <div class="page-wrapper">
            <div class="content container-fluid">
                @include('layouts.admin.barra_superior')
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.admin.setting')

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/scrollbar/scrollbar.min.js"></script>
    <script src="assets/plugins/scrollbar/custom-scroll.js"></script>
    <script src="assets/js/theme-settings.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/intlTelInput/js/intlTelInput-jquery.min.js"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
