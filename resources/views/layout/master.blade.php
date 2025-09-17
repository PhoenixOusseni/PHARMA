<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.style')
    <style>
        .step {
            display: none;
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .step.active {
            display: block;
            opacity: 1;
        }

        input.is-invalid,
        select.is-invalid {
            border-color: #dc3545;
        }

        .steps {
            position: relative;
        }

        .step-item {
            position: relative;
            flex: 1;
        }

        .step-circle {
            width: 40px;
            height: 40px;
            margin: 0 auto 10px;
            border-radius: 50%;
            background-color: #dee2e6;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .step-item.active .step-circle {
            background-color: #0d6efd;
            color: #fff;
        }

        .step-label {
            font-weight: 500;
            color: #495057;
        }

        .step-item.active .step-label {
            color: #0d6efd;
        }

        .content-background {
            background-color: #f1f3f5;
            /* ou utilise la couleur exacte pipettée de l'image */
            min-height: 100vh;
            /* pour occuper toute la hauteur */
            padding: 20px;
            /* optionnel pour espacer un peu le contenu */
        }

        .table th {
            background-color: #e9f5ee;
            color: #14532d;
        }

        .badge.bg-success {
            background-color: #14532d !important;
        }

        .page-link {
            border-radius: 0.3rem;
            transition: background-color 0.3s ease;
        }

        .page-link:hover {
            background-color: #e6f4ea;
            color: #14532d;
        }

        .table-header-custom {
            background-color: #6c757d !important;
            color: white !important;
        }

        .table-header-custom th {
            background-color: #6c757d !important;
            color: white;
            vertical-align: middle;
        }

        .table-striped-custom tbody tr:nth-child(odd) {
            background-color: #f8f9fa !important;
        }

        .table-striped-custom tbody tr:hover {
            background-color: #e6f4ea !important;
        }
    </style>
</head>

<body class="index-page">

    @include('require.header')

    <main class="container main py-4" style="background-color: #FFFF; !important;">
        @yield('content')
        @if (session('success') || session('error'))
            <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
                <div class="toast align-items-center text-white {{ session('success') ? 'bg-success' : 'bg-danger' }} border-0 show"
                    role="alert" aria-live="assertive" aria-atomic="true" id="statusToast">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ session('success') ?? session('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
    </main>

    @include('require.footer')
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- <div id="preloader"></div> -->
    @include('layout.script')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastEl = document.getElementById('statusToast');
            if (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
        });
    </script>
    <!-- autres scripts ici -->
    @yield('scripts')
</body>

</html>
