<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <title>Player Counter</title>
</head>
<body>
<script data-rocketsrc="js/PlayerCount.js" type="text/rocketscript"></script>
<div class="server-status">
    My awesome server is currently <span class="server-online"></span>!
</div>
<script>
    MinecraftAPI.getServerStatus('149.202.70.147', {
        port: 41801 // optional, only if you need a custom port
    }, function (err, status) {
        if (err) {
            return document.querySelector('.server-status').innerHTML = 'Error loading status';
        }

        // you can change these to your own message!
        document.querySelector('.server-online').innerHTML = status.online ? 'up' : 'down';
    });
</script>



<script>
    $(document).ready(function () {
        var interval = 15000;   //number of mili seconds between each call
        var refresh = function() {
            $.getJSON("http://mcapi.ca/query/149.202.70.147:41801/players",function(json){
                if (json.status !== true) {
                    // error
                    $("#players .p1").text('The server is Offline').addClass('server-error');
                } else {
                    // success
                    $("#players .p1").text('There are');
                    $("#players .p2").text('players online');
                    $(".player-count").html(json.players.online);
                    setTimeout(function(){ $('.player-count').removeClass('zoomIn').addClass('zoomOut') }, 14350);
                    setTimeout(function(){ $('.player-count').removeClass('zoomOut').addClass('zoomIn') }, 0);
                }
            });
            setTimeout(function() {
                    refresh();
                },
                interval);
        }
        refresh();
    });
</script>
<span class="player-count"></span>
</body>
</html>