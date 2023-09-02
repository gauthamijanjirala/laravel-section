@extends('master')

@section('main')

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-se  rif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
    <body>
        <div class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#news">News</a>
          <a href="#contact">Contact</a>
          <a href="#about">About</a>x
        </div>

        <div style="padding-left:16px">
          <h2>Top Navigation Example</h2>
          <p>Some content..</p>
        </div>
    </body>
@endsection

    
