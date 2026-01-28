<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification du compte - ONPBF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #34e858 0%, #81c17a 25%, #77ac7c 50%, #92e2a9 75%, #81c17a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .verification-container {
            width: 90%;
            max-width: 850px;
            margin: 20px auto;
        }

        .btn-return {
            background-color: #4cb520;
            color: white;
            border: none;
            padding: 13px 27px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .btn-return:hover {
            background-color: rgba(220, 53, 69, 1);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .header-box {
            background-color: rgba(0, 0, 0, 0.85);
            padding: 20px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo-container {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 70px;
            height: 70px;
        }

        .logo-container img {
            max-width: 50px;
            height: auto;
        }

        .header-title {
            color: #f4c430;
            font-size: 22px;
            font-weight: 600;
            line-height: 1.3;
            margin: 0;
        }

        .form-box {
            background-color: white;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            color: #6c757d;
            font-size: 24px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            color: #495057;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 12px 16px;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #4cb520;
            box-shadow: 0 0 0 0.2rem rgba(76, 181, 32, 0.25);
        }

        .form-control::placeholder {
            color: #adb5bd;
        }

        .btn-verify {
            background-color: #4cb520;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            margin-top: 20px;
        }

        .btn-verify:hover {
            background-color: #3d9419;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(76, 181, 32, 0.3);
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            .header-box {
                flex-direction: column;
                text-align: center;
            }

            .header-title {
                font-size: 18px;
            }

            .form-box {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="verification-container">
        <!-- Bouton Retour -->
        <div class="text-center">
            <a href="{{ route('home') }}" class="btn-return">
                <i class="bi bi-house-door-fill"></i>
                Retour à l'accueil
            </a>
        </div>

        <!-- En-tête avec logo -->
        <div class="header-box">
            <div class="logo-container">
                <img src="{{ asset('assets/img/22_a9ad743c.jpg') }}" alt="Logo Burkina Faso"
                    class="img-fluid">
            </div>
            <h1 class="header-title">
                ORDRE NATIONAL DES PHARMACIENS DU BURKINA FASO (ONPBF)
            </h1>
        </div>

        <!-- Formulaire -->
        <div class="form-box">
            <h2 class="form-title">Vérification du compte</h2>

            <form action="{{ route('verify_account') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom"
                        name="nom" placeholder="Entrez votre nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="text" class="form-control @error('code') is-invalid @enderror" id="code"
                        name="code" placeholder="Entrez votre numéro membre" value="{{ old('code') }}" required>
                    @error('code')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-verify">
                    <i class="bi bi-check-lg"></i>
                    Vérifier
                </button>
            </form>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger mt-3">
                    <i class="bi bi-x-circle-fill me-2"></i>
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
