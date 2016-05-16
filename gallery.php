<!DOCTYPE html>
<!--Gallery Webpage Made For WolfPrison © By fionster_fish_1-->
<html>
<head>
    <meta name="og:description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Search Engine Description-->
    <meta name="description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"
    <!--Tab Icon-->
    <link href="assets/images/logo.jpg" rel="shortcut icon"/>
    <!--Custom CSS Hover File-->
    <link href="css/hover.css" rel="stylesheet"/>
    <!--Google Fonts // Montserrat-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'/>
    <!--Custom CSS File-->
    <link href="css/cstyles.css" rel="stylesheet"/>
    <!--BootStrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--Tab Title-->
    <title>WolfPrison | Gallery</title>
</head>
<body background="assets/images/bg.png">
<!--NavBar-->
<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <strong data-hover="WolfPrison">WolfPrison</strong>
            </a>
        </div>
        <div>
            <ul class="navbar-header navbar-right">
                <a class="navbar-brand">
                    <div id="btn" data-clipboard-text="wolfprison.myserver.gs" data-toggle="tooltip" data-placement="top" trigger="hover focus" title="Click to Copy IP">
                        <strong data-hover="Click On This Message To Copy IP">IP: wolfprison.myserver.gs</strong>
                    </div>
                </a>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="https://wolfprison.net"><p>Portal</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/shop"><p>Donate</p></a></li>
                <li><a href="staff.php"><p>Staff</p></a></li>
                <li><a href="https://forums.wolfprison.net/"><p>Forums</p></a></li>
                <li><a href="news.php"><p>News</p></a></li>
                <li><a href="vote.php"><p>Vote</p></a></li>
                <li class="highlight"><a href="gallery.php#gallery"><p>Gallery</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<!--NavBar-->
<!--Carousel/Gallery-->
    <div class="row">
        <div class="col-sm-12">

            <div id="gallery" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#gallery" data-slide-to="0" class="active"></li>
                    <li data-target="#gallery" data-slide-to="1"></li>
                    <li data-target="#gallery" data-slide-to="2"></li>
                    <li data-target="#gallery" data-slide-to="3"></li>
                    <li data-target="#gallery" data-slide-to="4"></li>
                    <li data-target="#gallery" data-slide-to="5"></li>
                    <li data-target="#gallery" data-slide-to="6"></li>
                    <li data-target="#gallery" data-slide-to="7"></li>
                    <li data-target="#gallery" data-slide-to="8"></li>
                    <li data-target="#gallery" data-slide-to="9"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="assets/images/c1.png" alt="WolfPrison Img 1">
                    </div>
                    <div class="item">
                        <img src="assets/images/c2.png" alt="WolfPrison Img 2">
                    </div>
                    <div class="item">
                        <img src="assets/images/c3.png" alt="WolfPrison Img 3">
                    </div>
                    <div class="item">
                        <img src="assets/images/c4.png" alt="WolfPrison Img 4">
                    </div>
                    <div class="item">
                        <img src="assets/images/c5.png" alt="WolfPrison Img 5">
                    </div>
                    <div class="item">
                        <img src="assets/images/c6.png" alt="WolfPrison Img 6">
                    </div>
                    <div class="item">
                        <img src="assets/images/c7.png" alt="WolfPrison Img 7">
                    </div>
                    <div class="item">
                        <img src="assets/images/c8.png" alt="WolfPrison Img 8">
                    </div>
                    <div class="item">
                        <img src="assets/images/c9.png" alt="WolfPrison Img 9">
                    </div>
                    <div class="item">
                        <img src="assets/images/c10.png" alt="WolfPrison Img 10">
                    </div>
                </div>


                <a class="left carousel-control" href="#gallery" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#gallery" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>
</div>
<!--Carousel/Gallery-->
<!--Scripts-->
<script data-cfasync="true" src="js/jquery-1.12.3.min.js"></script>
<script data-cfasync="true" src="js/bootstrap.min.js"></script>
<!--Copy To Clipboard Script-->
<script>window.jQuery || document.write('<script src="js/jquery-1.12.3.min.js"><\/script>')</script>
<script data-cfasync="true" src="js/clipboard.min.js"></script>
<script>
    if ( $(window).width() > 739) {
        window.onload = function(){
            document.getElementById("disableclick").addEventListener("click", function(e){
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

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<!--Copy To Clipboard Script-->
<!--Scripts-->
</body>
</html>
