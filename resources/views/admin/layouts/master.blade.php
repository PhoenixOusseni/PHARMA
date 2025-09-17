<!DOCTYPE html>
<html lang="fr">

<head>
    @include('admin.partials.meta')
    @yield('title')
    <title>ORDRE PHARMACIEN</title>
    @yield('style')
    @include('admin.partials.style')
    <style>
        .inset-0 {
            z-index: 999999999 !important;
        }
    </style>

<body class="nav-fixed">
    @include('admin.partials.header')
    <div id="layoutSidenav_content">

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

        @include('admin.partials.footer')
    </div>
    </div>
    @include('admin.partials.script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toastEl = document.getElementById('statusToast');
            if (toastEl) {
                var toast = new bootstrap.Toast(toastEl);
                toast.show();
            }
        });
    </script>
</body>

</html>
