<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'/>
    <link href="../../css/hover.css" rel="stylesheet"/>
    <link href="../../css/bootstrap.min.css" rel="stylesheet"/>
    <title></title>
</head>
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
                        <strong data-hover="Click On This Message To Copy IP">wolfprison.myserver.gs</strong>
                    </div>
                </a>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="http://www.wolfprison-wolf.enjin.com"><p>Home</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/shop"><p>Donate</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/forum"><p>Forum</p></a></li>
                <li><a href="http://www.wolfprison-wolf.enjin.com/staff"><p>Staff</p></a></li>
                <li><a href="news.php"><p>News</p></a></li>
                <li><a href="vote.php"><p>Vote</p></a></li>
                <li><a href="gallery.php#gallery"><p>Gallery</p></a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="btn" data-clipboard-text="wolfprison.myserver.gs" data-toggle="tooltip" data-placement="top" trigger="hover focus" title="Click to Copy IP">
    <a data-hover="click to copy ip">wolfprison.myserver.gs</a>
</div>
<script>window.jQuery || document.write('<script src="../../js/jquery-1.12.3.min.js"><\/script>')</script>
<script src="../../js/clipboard.min.js"></script>
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
</body>
</html>