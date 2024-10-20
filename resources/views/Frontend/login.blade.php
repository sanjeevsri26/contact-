<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/Frontend-asset/asset/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Get in Touch</h2>
        <form action="{{ route('form.store') }}" method="POST">
            @csrf
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" id="name" placeholder="Name" name="name" required>
            </div>
            <div class="input-container">
                <i class="fas fa-phone"></i>
                <input type="tel" id="phone" placeholder="Phone" name="phone" required>
            </div>
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
