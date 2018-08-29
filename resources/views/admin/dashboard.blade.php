
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script> window.Laravel = { csrfToken: 'csrf_token() ' } </script>
    <title> Welcome to the Admin dashboard </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style>
        html, body {
        background-color: #202B33;
        color: #738491;
        font-family: "Open Sans";
        font-size: 16px;
        font-smoothing: antialiased;
        overflow: hidden;
        }
    </style>
    
</head>
<body>


<div id="app">
<Homepage :user-name="{{ json_encode(Auth::user()->name) }}" :user-i-d="{{ json_encode(Auth::user()->id) }}"></Homepage>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>