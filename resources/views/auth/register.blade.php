<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/register bg.jpg'); /* Replace with your background image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-right: 100px;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: block;       
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px; /* Adjust width as needed */
            height: auto;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .login-link {
            display: inline-block;
            margin-top: 20px;
            font-size: 14px;
            color: #000;
            text-decoration: none;
            text-align: center;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .register-button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background-color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
           
        }

        .register-button:hover {
            background-color: #d97a00;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="img/FFlogo.PNG" alt="Logo" class="logo">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" class="form-input" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @if ($errors->get('name'))
                    <div class="error-message">{{ $errors->get('name')[0] }}</div>
                @endif
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @if ($errors->get('email'))
                    <div class="error-message">{{ $errors->get('email')[0] }}</div>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password">
                @if ($errors->get('password'))
                    <div class="error-message">{{ $errors->get('password')[0] }}</div>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password">
                @if ($errors->get('password_confirmation'))
                    <div class="error-message">{{ $errors->get('password_confirmation')[0] }}</div>
                @endif
            </div>

            <!-- Register Button -->
            <div class="form-group">
                <button type="submit" class="register-button">{{ __('Register') }}</button>
            </div>

            <!-- Already registered -->
            <a class="login-link" href="{{ route('login') }}">{{ __('Already registered?') }}</a>
        </form>
    </div>
</body>
</html>
