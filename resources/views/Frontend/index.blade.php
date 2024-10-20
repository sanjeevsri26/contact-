<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            background: url('{{ asset('public/Frontend-asset/asset/img/green-park-view.jpg') }}') no-repeat center center fixed; /* Fixes background image */
            background-size: cover; /* Ensures it covers the entire area */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.2); /* Adds a transparent white overlay */
            backdrop-filter: blur(4px); /* Applies the blur effect */
            border-radius: 10px; /* Optional: adds rounded corners */
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #555;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .login-link {
            text-decoration: none;
            background-color: #4CAF50; 
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .login-link:hover {
            background-color: #45a049; 
        }

        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 16px;
            color:black;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>Explore the world of endless possibilities. Our platform offers a wide range of services and resources to help you achieve your goals. Whether you're here to learn, explore, or just pass the time, we're glad to have you.</p>
        <a href="{{asset('/form')}}" class="login-link">Go to Login Page</a>
    </div>

    <footer>
        &copy; 2024 Our Website. All rights reserved.
    </footer>

</body>
</html>
