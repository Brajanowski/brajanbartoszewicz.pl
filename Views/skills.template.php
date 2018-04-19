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
        <link rel="stylesheet" href="./css/skills.css">
        <link rel="stylesheet" href="./css/menu.css">
    </head>

    <body>
        <div id="menu">
            <a href="@url/">Home</a>
            <a href="@url/Portfolio">Portfolio</a>
            <a class="bold" href="@url/Skills">Skills</a>
        </div>
    
        <div id="skills-content">
            <h2>Tools</h2>

            <div class="graph">
                <div class="graph-entry">
                    <div class="element-name">
                        Visual Studio
                    </div>

                    <div class="bar">
                        60%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        vim
                    </div>

                    <div class="bar">
                        55%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        git
                    </div>

                    <div class="bar">
                        45%
                    </div>
                </div>
            </div>

            <h2>Programming/Coding languages</h2>
            <div class="graph">
                <div class="graph-entry">
                    <div class="element-name">
                        C#
                    </div>

                    <div class="bar">
                        75%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        C
                    </div>

                    <div class="bar">
                        80%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        C++
                    </div>

                    <div class="bar">
                        70%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        php
                    </div>

                    <div class="bar">
                        50%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        javascript
                    </div>

                    <div class="bar">
                        30%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        glsl
                    </div>

                    <div class="bar">
                        45%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        sql
                    </div>

                    <div class="bar">
                        50%
                    </div>
                </div>
            </div>

            <h2>Technology</h2>
            <div class="graph">
                <div class="graph-entry">
                    <div class="element-name">
                        SFML
                    </div>

                    <div class="bar">
                        65%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        OpenGL
                    </div>

                    <div class="bar">
                        40%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        Unity
                    </div>

                    <div class="bar">
                        80%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        Unity/Photon
                    </div>

                    <div class="bar">
                        50%
                    </div>
                </div>

                <div class="graph-entry">
                    <div class="element-name">
                        Unity/UNET
                    </div>

                    <div class="bar">
                        20%
                    </div>
                </div>

            </div>

        </div>

        <script type="text/javascript">
            function RefreshBars()
            {
                $(".bar").each(function()
                {
                    let percentage = $(this).text().trim();
                    $(this).css("width", "0%");

                    $(this).animate({
                        width: percentage
                    }, 1000, function () {});
                });
            }

            $(document).ready(function()
            {
                RefreshBars();
            });
        </script>
    </body>
</html>
