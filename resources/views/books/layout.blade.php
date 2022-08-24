<!DOCTYPE html>
<html >
<head>
    <title>Library of Babel</title>
    <style>
    .back{
    background-color: rgba(0, 0, 0, 0.9)!important;
    border: 0ch!important;
}
.daftar{
    color: white; 
    background-color:#242424!important;
}
.textPutih{
    color: white; 
}
table{
    border: 0ch;
}
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1419640303358-44f0d27f48e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=785&q=80');background-repeat: no-repeat; background-position: center; background-size: cover;">
    
    <div id="app" >
    <div class="container">
        @yield('content')
    </div>
   
</body>
</html>