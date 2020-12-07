<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/eczite/style.css">
    <link rel="stylesheet" href="/eczite/home.css">
    <title>Title</title>
</head>
<body class="main-body">
<header class="header">
    <div class="logo">
        Eczite
    </div>
    <div class="top-nav">
        <a class="nav-btn  " href="{{route('login')}}">login</a>
        <a href="{{route('register')}}" class="nav-btn">sign up</a>
    </div>
</header>
<section class="content-1">
    <div class=" content-text">
        <div class="body-logo">
            <x-logo/>
        </div>
        <h1 class="content-1-head">Get a ride at your convenience</h1>
        <span class="quotes">Eczite is fueled for your movement</span>
    </div>
    <div class="content-signup">
        <div class="t">
            <a class="body-btn" href="{{route('login')}}">login</a>
            <a href="{{route('register')}}" class="body-btn">sign up</a>
        </div>
    </div>
</section>
<section class="content-3">
    <div class="part-one">
        <div class="content">
            <h1 class="HIW">How it works?</h1>
            <ol class="item">
                <li class="i01">
                    <h2>Register</h2>
                    <p>Quick and easy sign up</p>
                </li>
                <li class="i01">
                    <h2>Save Contact</h2>
                    <p>Save the eczite whatsapp number +2347064400337 on your mobile phone</p>
                </li>
                <li class="i03">
                    <h2>Get Location</h2>
                    <p>Send your pickup location to Eczite on Whatsapp</p>
                </li>
                <li class="i04">
                    <h2>Ready? </h2>
                    <p>Wait for your driver. Rate your ride after dropoff.</p>
                </li>
            </ol>
        </div>
    </div>
    <div class="part-two">
        <div class="content">
            <img src="/eczite/mobile-phone-chat-2652.svg" alt="">
        </div>
    </div>
</section>
<section class="eczite-section eczite-section-four">
    <h1>Why Eczite?</h1>
    <ul>
        <li> <i class="fa fa-bolt" aria-hidden="true"></i> Fast Pick Up</li>
        <li> <i class="fa fa-life-ring" aria-hidden="true"></i> Reliable</li>
        <li> <i class="fa fa-phone" aria-hidden="true"></i> Easy communication</li>
        <li><i class="fa fa-level-down" aria-hidden="true"></i> <i class="fa fa-level-up" aria-hidden="true"></i> Flexible Price</li>
        <li> <i class="fa fa-car" aria-hidden="true"></i> Riders Support</li>
        <li> <i class="fa fa-handshake-o" aria-hidden="true"></i> Tested and Trusted </li>
    </ul>
</section>
</body>
</html>
