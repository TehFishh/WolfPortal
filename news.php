<!DOCTYPE html>
<!--News Web Page Made By fionster_fish_1 For WolfPrison ©-->
<html>
<head>
    <meta name="og:description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Search Engine Description-->
    <meta name="description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"
    <!--Tab Icon-->
    <link href="assets/images/logo.jpg" rel="shortcut icon"/>
    <!--Google Font // Montserrat-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'/>
    <!--Custom CSS File-->
    <link href="css/NewsPageCSS.css" rel="stylesheet"/>
    <!--BootStrap Import-->
    <link href="css/bootstrap.min.css" rel="stylesheet"
    <!--Tab Title-->
    <title>WolfPrison | News</title>
</head>
<body background="assets/images/bg.png">
<!--NavBar-->
<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <strong>WolfPrison</strong>
            </a>
        </div>
        <div>
            <ul class="navbar-header navbar-right">
                <a class="navbar-brand">
                    <div id="btn" data-clipboard-text="wolfprison.myserver.gs" data-toggle="tooltip"    data-placement="top" trigger="hover focus" title="Click to Copy IP">
                        <strong>IP: wolfprison.myserver.gs</strong>
                    </div>
                </a>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="https://wolfprison.net"><p>Portal</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/shop"><p>Donate</p></a></li>
                <li><a href="staff.php"><p>Staff</p></a></li>
                <li><a href="https://forums.wolfprison.net/"><p>Forums</p></a></li>
                <li class="highlight"><a href="news.php"><p>News</p></a></li>
                <li><a href="vote.php"><p>Vote</p></a></li>
                <li><a href="gallery.php#gallery"><p>Gallery</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<!--NavBar-->
<br>
<br>
<br>
<!--News Box 1-->
<div class="container">
    <div id="newforumsandportal" class="newsbox">
        <img src="assets/images/user_fish.png" width="150px" height="100px">
        <br>
        <strong><font color="red">[Owner] </font><font color="black">fionster_fish_1</font></strong>
        <div class="text-center">
            <br>
            <h2><font color="black">New Forums And Portal</font></h2>
        </div>
        <h3>Hello All,</h3>
        <h3>I am exetremely exited to anounce that we have a new forums as well as a all new portal page! For now we will be keeping our enjin donation craft. But soon hope to move to buycraft once we can afford it. Please report all bugs on the forums as I can imagine there are many!</h3>
        <h3>The Links For The Forums And Portal Are As Follows.</h3>
        <strong><font color="black">Portal: <a href="https://wolfprison.net">https://wolfprison.net</a> <br> <br> Forums: <a href="https://forums.wolfprison.net">https://forums.wolfprison.net</a></font></strong>
        <br>
        <br>
        <h3>Along With The Portal I Have Introduced 3 Other Web-pages.</h3>
        <strong><font color="black">News: (Well Your On That Page...) <br> <br> Gallery: <a href="https://wolfprison.net/gallery.php#gallery">https://wolfprison.net/gallery.php</a> <br> <br> Vote: <a href="https://wolfprison.net/vote.php">https://wolfprison.net/vote.php</a> <br> <br> Portal: <a href="https://wolfprison.net/">https://wolfprison.net/</a></font></strong>
        <br>
        <br>
        <br>
        <br>
        <h3>If You Wish To Access The Old Enjin Forums The Link Is:</h3>
        <strong><font color="black">Old Enjin Forums: <a href="http://wolfprison-wolf.enjin.com">http://wolfprison-wolf.enjin.com</a></font></strong>
        <br>
        <br>
        <h3>Special Thank To These People For Help Making This A Reality:</h3>
        <strong><font color="black">ChrisWolf_co <br> <br> TheOneAndOnly <br> <br> RollyPonny <br> <br> iToxicMC</font></strong>
        <br>
        <br>
        <h4><font color="black">Thank You For Your Support,</font></h4>
        <strong><font color="black">fionster_fish_1</font></strong>
        <h6>Owner/HOS/Head-Developer</h6>
    </div>
</div>
<!--News Box 1-->
<!--Scripts-->
<script>window.jQuery || document.write('<script data-cfasync="true" src="js/jquery-1.12.3.min.js"><\/script>')</script>
<!--Copy To Clipboard Script-->
<script data-cfasync="true" src="js/clipboard.min.js"></script>
<script>
    if ($(window).width() > 739) {
        window.onload = function () {
            document.getElementById("disableclick").addEventListener("click", function (e) {
                e.stopPropagation();

            });
        };
    }
    else {
    }
</script>
<script>
    var btn = document.getElementById('btn');
    var clipboard = new Clipboard(btn);

    clipboard.on('success', function (e) {
        console.log(e);
    });

    clipboard.on('error', function (e) {
        console.log(e);
    });
</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!--Copy To Clipboard Script-->
<!--Scripts-->
</body>
</html>