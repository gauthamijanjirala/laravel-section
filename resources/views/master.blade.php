<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Registration_Section</title>
</head>
<style>

    /* navbarbar section */
    .navbar {
        width: 100%;
        height:60px;
        background-color: #c3bcbc;
        overflow: auto;
    }

    .navbar a {
        float: left;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 20px;
    }

    .navbar a:hover {
        height: 60px;
        background-color: #555;
    }

    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    }

    /* siderbar section */
    .sidebar {
        margin:0;
        padding: 0;
        margin-top:-20px;
        width: 150px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
        font-size: 20px;
    }
    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }   
    .sidebar a.active {
        background-color: #04AA6D;
        color: white;
    }
    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }
    @media screen and (max-width: 700px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: relative;
      }
      .sidebar a {float: left;}
      div.content {margin-left: 0;}
    }
    @media screen and (max-width: 400px) {
      .sidebar a {
        text-align: center;
        float: none;
      }
    }
</style>
<body>
    <div class="navbar">
        <a href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="#"><i class="fa fa-fw fa-search"></i> Search</a> 
        <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
        <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>
    </div>
    <div class="sidebar">
        <!-- <a class="active" href="#home">Home</a> -->
        <a href="{{ route('news.index') }}">News</a>
        <a href="{{ route('contact.index')}}">Contact</a>
        <a href="{{ route('about.index')}}">About Us</a>
    </div>    
    
    @yield('main')

</body>
</html>