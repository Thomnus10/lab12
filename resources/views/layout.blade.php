<!DOCTYPE html>
<html>
<head>
    <title>Blog App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a {
            text-decoration: none;
            color: #3490dc;
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background-color: #3490dc;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2779bd;
        }
        form {
            margin-top: 10px;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            padding: 10px;
            border-radius: 5px;
            color: #155724;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
