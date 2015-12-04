<html>
<head>
  <title>Farmer's Point</title>
  <meta charset ="utf-8">
  <link rel="icon" type="png" href="img/favicon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--viewport means user screen, content width means device er width ta joto she onujai set koro and initial scale 1 means use default zoom which is 100% -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" ></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                          <li><a href="/AgentPanel">Agent</a></li>
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

<div class="bottom-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="bottom-links">
              <li> <a href="/">Home</a> </li>
              <li><a href="/farmerPoint">Point List</a></li>
              <li><a href="/crop">Crop List</a></li>
              <li><a href="/AboutUs">About Us</a></li>
              <li><a href="/SiteAdmin">Site Admin</a></li>
              <li><a href="/ContactUs">Contact Us</a></li>

        </ul>
      </div>

    </div>
  </div>
</div>


</body>
</html>


