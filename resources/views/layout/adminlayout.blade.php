<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Farmer's Point</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
</head>
<body>

  <header>
        <nav class="navbar navbar-default navbar-fixed-top"> <!--navbar will be fixed on the top.. not static top-->

                <div class="container-fluid"> <!--this will take up the entire screen space-->
                            <!---->

                <!--logo inside navbar-->

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> <!--creating 3-line button-->
                        <span class="icon-bar"></span>
                      </button>

                          <a href="/" class="navbar-brand">Farmer's Point</a>
                    </div>

                <!--Menu Items-->

                <div class="collapse navbar-collapse" id="mainNavBar">

                       <ul class="nav navbar-nav  navbar-right">
                          <li><a href="/">Home</a></li>
                          <li><a href="/farmerPoint">Point List</a></li>
                          <li><a href="/crop">Crop List</a></li>
                          <li><a href="/AboutUs">About Us</a></li>
                          <li><a href="/SiteAdmin">Site Admin</a></li>
                          <li><a href="/ContactUs">Contact Us</a></li>
                          
                          <li><a href="/AdminPanel">Admin</a></li>
                          
                         @if(Auth::guest())
                          <li><a href="/login">Log in</a></li>
                          @else
                          <li><a href="/logout">Logout</a></li>
                          @endif
                       </ul>
                  </div>

                </div>

        </nav>
</header>
<div class="TopSpace"></div>

@yield('content')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>