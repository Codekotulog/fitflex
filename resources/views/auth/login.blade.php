<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-image: url('img/landing.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            height: 90vh;
        }

        .container {
            max-width: 250px;
            margin: 190px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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

        .checkbox-label {
            display: inline-flex;
            align-items: center;
            font-size: 14px;
            color: #000;
        }

        .checkbox-input {
            margin-right: 6px;
        }

        .login-button {
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

        .login-button:hover {
            background-color: #d97a00;
            
        }
         /* Footer styles */
         footer {
            text-align: center;
            margin-top: 250px;
            color: #666;
            font-size: 20px;
            color: #ff9900;
            font-weight:bold;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="http://localhost:8000/">
            <img src="img/FFlogo.PNG" alt="Logo" class="logo">
        </a>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password">
            </div>
            <div class="form-group">
                <label for="remember_me" class="checkbox-label">
                    <input id="remember_me" class="checkbox-input" type="checkbox" name="remember">
                    Remember me
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="login-button">Log in</button>
            </div>
        </form>
                    <footer>
                    <strong>&copy; All rights reserved.<br> 
                                    Sasa Dev</strong> 
                    </footer>
    </div>

</body>
</html>
