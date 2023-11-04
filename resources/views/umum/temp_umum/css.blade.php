{{-- Bosstrap 5.3 --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<Style>
    /* CSS untuk tampilan desktop */
    @media screen and (min-width: 768px) {
        body {
            background-image: url("{{ asset('assets/images/kud.jpeg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    /* CSS untuk tampilan mobile */
    @media screen and (max-width: 767px) {
        .bg-gambar {
            background-image: url("{{ asset('assets/images/kud.jpeg') }}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    }
</Style>

<!-- Custom fonts for this template-->
<link href="{{ asset('asset_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('asset_admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
