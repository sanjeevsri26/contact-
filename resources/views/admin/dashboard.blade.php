<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('public/Frontend-asset/asset/style.css') }}">
    <style>
        body {
            display: flex;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            flex: 2;
            margin-left: 0; 
            padding: 20px;
            background-color: #32cd9c;  
            min-height: 100vh;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 1em;
            text-align: left;
        }
        table thead th {
            background-color: #f2f2f2;
            padding: 12px;
            border: 1px solid #ddd;
        }
        table tbody td {
            padding: 12px;
            border: 1px solid #ddd;
        }
     
        table tbody tr:nth-child(even) {
            background-color: yellow;
        }

        table tbody tr:nth-child(odd) {
            background-color: #ff0000;
            color: white; 
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        form {
            display: inline-block; /* Align forms next to the edit button */
        }
    </style>
</head>
<body>

    <div class="container">
        <h2 style="background-color: red;">Submitted Data</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($formData as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>
