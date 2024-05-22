<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .dashboard {
            display: flex;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: white;
            color: black;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 23px;
            background-color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar-header img {
            width: 50px; /* Adjust the width of the logo as needed */
            height: auto; /* Maintain aspect ratio */
            margin-right: 10px; /* Add some spacing between the logo and text */
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
        }

        .sidebar-menu li {
            border-bottom: 1px solid #34495e;
        }

        .sidebar-menu a {
            display: block;
            background-color: white;
            padding: 15px 20px;
            color: black;
            text-decoration: none;
        }

        .sidebar-menu a:hover {
            background-color: #d97a00;
        }
        
        form {
            display: inline-block;
            margin-top: auto; /* Align the logout form to the bottom of the sidebar */
        }

        button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            margin-bottom: 50px;
            margin-left: 60px;
        }

        button:hover {
            background-color: #d97a00;
        }

        .main-content {
            flex-grow: 1;
            background-color: whitesmoke;
            display: flex;
            flex-direction: column;
        }

        .header {
            background-color: white;
            color: black;
            padding: 19px;
            text-align: center;
        }

        .content {
            padding: 20px;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            margin: 10px 0;
        }
        .card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 200px;
            max-width: 500px;
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the content horizontally */
            text-align: center; /* Center the content vertically */
        
        }

        .card img {
            width: 400px; /* Adjust the width of the image as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 10px; /* Add some spacing between the image and text */
            border-radius: 20%; /* Make the image circular */
        }
        .card 1 {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center the content horizontally */
            text-align: center; /* Center the content vertically */
        }

        .card img {
            width: 300px; /* Adjust the width of the image as needed */
            height: auto; /* Maintain aspect ratio */
            margin-bottom: 10px; /* Add some spacing between the image and text */
            border-radius: 20%; /* Make the image circular */
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="img/ff.PNG" alt="Logo"> <!-- Replace "your_logo.png" with the path to your logo image -->
                <h2>Dashboard</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>       
            </form>
        </aside>
        <main class="main-content">
            <header class="header">
                <h1>Welcome</h1>
            </header>
            <section class="content">
                <div class="card">
                <img src="img/Happy 2x2.jpg" alt="Use Data To See Photos.">
                    <h3>Name</h3>
                    <p>Custodio, Happy C.</p>
                </div>
                <div class="card 1">
                <img src="img/gp.jpg" alt="Use Data To See Photos.">
                    <h3>Section</h3>
                    <p>BSIS-I202</p>
                </div>
                <div class="card">
                <img src="img/hobbies.jpg" alt="Use Data To See Photos.">
                    <h3>Hobbies</h3>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
