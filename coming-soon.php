
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Coming soon | Travelzillas – Creating Memories</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/coming-soon.css">
    
</head>

<body>
    <div class="container">
        <div class="coming-soon" style="background-image: url(img/coming-soon.jpg)">
            <a href="/" class="logo"><img src="img/logo_w.png" height="40px" width="200px"></a>
            <div class="center-text">
                WE ARE
                <br><span>Coming soon</span>
            </div>
            <div class="timer-block" id="countdown_dashboard">
                <div class="time-item dash days_dash">
                    <div class="val">
                        <span class="digit">7</span>
                        <span class="digit">7</span>
                        <span class="digit">7</span>
                    </div>
                    <div class="word">DAYS</div>
                </div>
                <div class="time-item dash hours_dash">
                    <div class="val">
                        <span class="digit">1</span>
                        <span class="digit">0</span>
                    </div>
                    <div class="word">HOURS</div>
                </div>
                <div class="time-item dash minutes_dash">
                    <div class="val">
                        <span class="digit">2</span>
                        <span class="digit">5</span>
                    </div>
                    <div class="word">MIN</div>
                </div>
                <div class="time-item dash seconds_dash">
                    <div class="val">
                        <span class="digit">1</span>
                        <span class="digit">0</span>
                    </div>
                    <div class="word">SEC</div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/lightgallery.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js"></script>
    <script src="js/scripts.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            $('#countdown_dashboard').countDown({
                targetDate: {
                    'day': 1,
                    'month': 6,
                    'year': 2022,
                    'hour': 22,
                    'min': 0,
                    'sec': 0
                },
                omitWeeks: true
            });
        });
    </script>
</body>

</html>