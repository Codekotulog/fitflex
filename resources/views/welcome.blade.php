<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            background-image: url('img/bg.jpg'); /* Replace 'your-background-image.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh; /* Adjust to fit your content */
        }

        .container {
            text-align: center;
            background-color: whitesmoke; /* Add a semi-transparent background color for better readability */
            padding: 20px;
            border-radius: 10px;
           
        }

        h1 {
            font-size: 36px;
            color: #000;
        }

        p {
            font-size: 18px;
            color: #000;
            margin-bottom: 40px;
        }

        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin: 0 10px;
        }

        button:hover {
            color: #000;
            background-color: #e37514;
        }

        button:focus {
            outline: none;
        }

        button:focus-visible {
            outline: none;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Fitflex</h1>
        <p>Please login or register to continue</p>
        <div class="buttons">
            <button onclick="window.location.href='{{ route('login') }}'" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Log in</button>
            <button onclick="window.location.href='{{ route('register') }}'" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</button>
        </div>
    </div>
</body>
</html>
