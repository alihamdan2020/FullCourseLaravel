<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laragigis</title>
</head>
<body>
    <header>
        <a href="/listings">
        <img src="/images/logo.png" alt="">
        </a>
        <div class="sort">
            <a href="/listings/?sort=asc">sort acs</a>
            <a href="/listings/?sort=desc">sort desc</a>
        </div>
        <div class="sort">
            <!-- mean if user has logged in this will appear -->
        @auth
        <span>welcome {{auth()->user()->name}}
       
        </span>
        <a href="/lisitngs/manage/{{auth()->user()->id}}"> <i class="fas fa-cogs"></i>manage</a>
        <a href="/logout"> <i class="fa-solid fa-door-closed"></i>logout</a>
        <!-- <form action="/logout" method="post">
            @csrf
            <button>log out</button>
        </form>
    we can make the log out as button, but in this cas in your route file web.php
    do not forget to ay route::post, and in your controller you should pass 
    Request $req
        -->
        @else
        <!-- mean if user has not logged in this will appear -->
        <a href="/register"><i class="fas fa-user"></i> sign up</a>
        <a href="/login"> <i class="fas fa-sign-in-alt"></i> log in</a>
        @endauth
        </div>
    </header>
    
    <div class="container">
    @yield('content')
    </div>
  
</body>
</html>