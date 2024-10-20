<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
   
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('public/Frontend-asset/asset/img/green-park-view.jpg') }}');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            height: 100vh; 
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            
            padding: 20px;
            border-radius: 10px; 
        }

        h2 {
            font-size: 2em;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You!</h2>
        <p>Your submission has been received. We will get back to you shortly.</p>
    </div>
</body>
</html>

