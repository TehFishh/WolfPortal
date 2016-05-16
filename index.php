<!DOCTYPE html>
<!--Website Made By fionster_fish_1 For WolfPrison ©-->
<html>
<head>
    <meta name="og:description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Search Engine Description-->
    <meta name="description" content="WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Tab Icon-->
    <link href="assets/images/logo.jpg" rel="shortcut icon"/>
    <!--Custom CSS Hover File-->
    <link href="css/hover.css" rel="stylesheet"/>
    <!--Google Font // Montserrat-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'/>
    <!--Bootstrap Import-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--Custom CSS Styles-->
    <link href="css/cstyles.css" rel="stylesheet"/>
    <!--Tab Title-->
    <title>WolfPrison | Portal</title>
</head>
<body background="assets/images/bg.png">
<!--NavBar-->   
<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">
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
                <li class="highlight"><a href="https://wolfprison.net"><p>Portal</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/shop"><p>Donate</p></a></li>
                <li><a href="staff.php"><p>Staff</p></a></li>
                <li><a href="https://forums.wolfprison.net/"><p>Forums</p></a></li>
                <li><a href="news.php"><p>News</p></a></li>
                <li><a href="vote.php"><p>Vote</p></a></li>
                <li><a href="gallery.php#gallery"><p>Gallery</p></a></li>
            </ul>
        </div>
    </div> 
</nav>
<!--NavBar-->
<!--Copy To Clipboard Script-->
<script>window.jQuery || document.write('<script data-cfasync="true" src="js/jquery-1.12.3.min.js"><\/script>')</script>
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
</body>
</html>
