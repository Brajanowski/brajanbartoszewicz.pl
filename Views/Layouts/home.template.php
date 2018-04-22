<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <title>@dynamic(title)</title>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

        <link rel="shortcut icon" type="image/x-icon" href="ico/favicon.ico">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/home.css">
    </head>

    <body>
        <div class="center">
            <div id="header">
                <img id="avatar" src="img/avatar.jpg" style="width: 96px; height: 96px; border-radius: 48px;"></img><br>
                <span id="name">Brajan Bartoszewicz</span>
                <div id="quote">"We live in a kingdom of bullshit" ~ Mr Robot</div>
            </div>

            <div id="urls">
                <a href="@url/Portfolio">Portfolio</a>
                <a href="@url/Skills">Skills</a>
                <a href="@url/Contact">Contact</a>
                <a class="bold" href="https://github.com/Brajanowski">Github</a>
                <a class="bold" href="https://brajanowski.itch.io/">itch.io</a>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                let quotes = [
                    '"Unfortunately, we’re all human. Except me, of course." <br>- <b>Tyrell Wellick</b>',
                    '"A bug is never just a mistake. It represents something bigger. An error of thinking. That makes you who you are." <br>- <b>Elliot Alderson</b>',
                    '"Im gonna fix the world I broke, and put it back together better than it was before." <br>- <b>Sam Esmail</b>',
                    '"When you delete something, you’re making a choice to destroy it. To never see it again." <br>- <b>Elliot Alderson</b>',
                    '"True courage is about being honest with yourself. Especially when it’s difficult." <br>- <b>Mr. Robot</b>'
                ];

                $("#quote").html(quotes[Math.floor(Math.random() * quotes.length)]);


                // Animations can be done here via jquery :)
                /*let $avatar = $("#avatar");

                avatar.css("position", "absolute");
                avatar.css("top", "-1000px");
                avatar.animate({
                    top: "-64px"
                }, 1000, function () {});*/
            });
        </script>
    </body>
</html>
