<!DOCTYPE html>
<html>
<head>
    <!--Encoding Level-->
    <meta charset="UTF-8">

    <meta name="og:description" content="WolfPrison Staff Page. WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Search Engine Description-->
    <meta name="description" content="WolfPrison Staff Page. WolfPrison A UpComing Prison Server With Active And Friendly Staff"/>
    <!--Tab Icon-->
    <link href="assets/images/logo.jpg" rel="shortcut icon"/>
    <!--Google Font // Montserrat-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'/>
    <!--Meta Keywords-->
    <meta name="keywords" content="WolfPrison Staff, WolfPrison Staff Page.">
    <!--Bootstrap Import-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--Custom CSS Styles-->
    <link href="css/cstyles.css" rel="stylesheet"/>
    <!--Custom Staff Page CSS File-->
    <link href="css/StaffPageCSS.css" rel="stylesheet"/>
    <!--Tab Title-->
    <title>WolfPrison | Staff</title>
</head>
<!--NavBar-->
<body background="assets/images/bg.png">
<nav class="nav navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <strong data-hover="WolfPrison">WolfPrison</strong>
            </a>
        </div>
        <div>
            <ul class="navbar-header navbar-right">
                <a class="navbar-brand">
                    <div id="btn" data-clipboard-text="play.wolfprison.net" data-toggle="tooltip" data-placement="top" trigger="hover focus" title="Click to Copy IP">
                        <strong data-hover="Click On This Message To Copy IP">IP: play.wolfprison.net</strong>
                    </div>
                </a>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="https://wolfprison.net"><p>Portal</p></a></li>
                <li><a href="http://wolfprisonstore.buycraft.net/"><p>Donate</p></a></li>
                <li class="highlight"><a href="staff.php"><p>Staff</p></a></li>
                <li><a href="https://forums.wolfprison.net/"><p>Forums</p></a></li>
                <li><a href="news.php"><p>News</p></a></li>
                <li><a href="vote.php"><p>Vote</p></a></li>
                <li><a href="gallery.php#gallery"><p>Gallery</p></a></li>
                <li><a href="https://plug.dj/wolfprisonmc"><p>Plug.DJ</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<!--NavBar-->
<br>
<br>
<br>
<br>
<!--StaffList Box-->
<div class="container">
    <div class="staffbox">
        <div class="text-center">
            <br>
            <h1>The Official WolfPrison Staff List!</h1>
            <br>
        </div>
        <h3>Owners:</h3>
        <strong><font color="black">ChrisWolf_co // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=2">Forums Profile</a> // About: This Person Is The #1 Incharge. And Overseas Everything That Happens. He is also a good builder.</font></strong>
        <br>
        <br>
        <strong><font color="black">fionster_fish_1 // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=1">Forums Profile</a> // About: This Person Is Incharge Of All Development And Web-Development. He Co-Owns The Server With ChrisWolf_co.</font></strong>
        <h3>Co-Owners:</h3>
        <strong><font color="black">ItzDrew_ // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=31">Forums Profile</a> // About: This Person Is Also A Long Time Staff Member And Is Incharge Of Forum Moderation.</font></strong>
        <h3>Admins:</h3>
        <strong><font color="black">VanillaHusky // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=9">Forums Profile</a> // About: This Person Is Our Lead Community Manager. And Looks after you guys as much as possible!</font></strong>
        <br>
        <br>
        <strong><font color="black">Cattistic // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=36">Forums Profile</a> // About: This person is the owner of the upcoming skyblock server. He is also a great builder.</font></strong>
        <h3>Developers:</h3>
        <strong><font color="black">Benwager12 // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=39">Forums Profile</a> // About: This Person Is Our Lead Java Developer And Is Currently Working On Some Big Projects ;)</font></strong>
        <h3>Builders:</h3>
        <strong><font color="black">Viisualization // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=53">Forums Profile</a> // About: This person is our head builder and is working on some of our most secret new editions ;)</font></strong>
        <h3>Moderators:</h3>
        <strong><font color="black">XenonUnityYT // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=16">Forums Profile</a> //</font></strong>
        <br>
        <br>
        <strong><font color="black">Kayyos // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=35">Forums Profile</a> //</font></strong>
        <br>
        <br>
        <strong><font color="black">run21 // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=54">Forums Profile</a> //</font></strong>
        <h3>Helpers:</h3>
        <strong><font color="black">DragonicWolf872 // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=28">Forums Profile</a> //</font></strong>
        <h3>Trainees:</h3>
        <strong><font color="black">lnform // <a href="https://forums.wolfprison.net/member.php?action=profile&uid=51">Forums Profile</a> //</font></strong>
    </div>
</div>
<br>
<br>
<br>
<!--StaffList Box-->
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
