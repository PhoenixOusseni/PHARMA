@extends('layout.master')

@section('content')
    <style>
        .login-container {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            background: #FFFF;
        }

        .login-card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .login-left {
            flex: 1;
            background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            top: -100px;
            right: -100px;
        }

        .login-left::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            bottom: -50px;
            left: -50px;
        }

        .login-left-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .login-logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .login-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .login-left h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-left p {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .login-right {
            flex: 1;
            padding: 60px 50px;
        }

        .login-header {
            margin-bottom: 40px;
        }

        .login-header h3 {
            font-size: 32px;
            font-weight: 700;
            color: #14532d;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #6b7280;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 10px;
            font-size: 14px;
            display: block;
        }

        .form-control-modern {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid #e5e7eb;
            border-radius: 5px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9fafb;
        }

        .form-control-modern:focus {
            outline: none;
            border-color: #14532d;
            background: white;
            box-shadow: 0 0 0 4px rgba(20, 83, 45, 0.1);
        }

        .form-control-modern.is-invalid {
            border-color: #ef4444;
            background: #fef2f2;
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 13px;
            margin-top: 6px;
        }

        .input-icon-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            font-size: 18px;
        }

        .input-icon-wrapper .form-control-modern {
            padding-left: 50px;
        }

        .password-toggle {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #9ca3af;
            font-size: 18px;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: #14532d;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .custom-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .custom-checkbox input {
            width: 18px;
            height: 18px;
            margin-right: 8px;
            cursor: pointer;
            accent-color: #14532d;
        }

        .custom-checkbox label {
            font-size: 14px;
            color: #6b7280;
            cursor: pointer;
            margin: 0;
        }

        .forgot-link {
            font-size: 14px;
            color: #14532d;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s;
        }

        .forgot-link:hover {
            color: #22c55e;
        }

        .btn-login {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #14532d 0%, #22c55e 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(20, 83, 45, 0.3);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(20, 83, 45, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 30px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e5e7eb;
        }

        .divider span {
            padding: 0 15px;
            color: #9ca3af;
            font-size: 14px;
        }

        .signup-link {
            text-align: center;
            margin-top: 30px;
        }

        .signup-link p {
            color: #6b7280;
            font-size: 15px;
            margin: 0;
        }

        .signup-link a {
            color: #14532d;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .signup-link a:hover {
            color: #22c55e;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
            }

            .login-left {
                padding: 40px 30px;
            }

            .login-right {
                padding: 40px 30px;
            }

            .login-header h3 {
                font-size: 26px;
            }
        }
    </style>

    <div class="login-container">
        <div class="login-card">
            <!-- Left Side - Branding -->
            <div class="login-left">
                <div class="login-left-content">
                    <div class="d-flex justify-content-center">
                        <div class="login-logo">
                        <img src="{{ asset('assets/img/22_a9ad743c.jpg') }}" alt="Logo ONPBF">
                    </div>
                    </div>
                    <h2>Ordre National des Pharmaciens</h2>
                    <p>Bienvenue sur votre plateforme de gestion des procédures administratives et des membres</p>
                </div>
            </div>

            <!-- Right Side - Login Form -->
            <div class="login-right">
                <div class="login-header">
                    <h3>Connexion</h3>
                    <p>Accédez à votre espace membre</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Adresse Email</label>
                        <div class="input-icon-wrapper">
                            <i class="bi bi-envelope input-icon"></i>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control-modern @error('email') is-invalid @enderror"
                                   placeholder="exemple@email.com"
                                   required
                                   autofocus
                                   value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <div class="input-icon-wrapper">
                            <i class="bi bi-lock input-icon"></i>
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control-modern @error('password') is-invalid @enderror"
                                   placeholder="••••••••"
                                   required>
                            <i class="bi bi-eye password-toggle" onclick="togglePassword()"></i>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="remember-forgot">
                        <div class="custom-checkbox">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Se souvenir de moi</label>
                        </div>
                        <a href="#" class="forgot-link">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="btn-login">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Se connecter
                    </button>

                    <div class="divider">
                        <span>OU</span>
                    </div>

                    <div class="signup-link">
                        <p>Pas encore de compte ?
                            <a href="{{ route('inscription') }}">Créer un compte</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.password-toggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        }
    </script>
@endsection
