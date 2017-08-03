<?php
// Require Kunin Library
require_once("tool/kunin.php");
$url = False;
$show_result = False;
if(isset($_REQUEST['url'])){

    $url = $_REQUEST['url'];
    $site = new kunin($url);

    $show_result = True;

    $title = $site->getTitle();
    $themeColor = $site->value("theme-color");
    $openGraph = $site->openGraph();
    $twitter = $site->twitter();

}
?>
<!Doctype html>
<html lang="en">
    <head>
        <title>Mahalaga</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <meta property="og:image" content="http://andresitodeguzman.com/mahalaga">
        <meta property="og:description" content="See all meta information in a URL">
        <style>
        .btn-large {
            width: 100% !important;
        }
        .title {
            padding-left: 30px !important;
            font-size: 15pt;
        }
        </style>
    </head>
    <body class="grey lighten-4">
        <?php
            if(isset($themeColor)){
                echo "
                <style>
                .teal {
                    background-color: $themeColor !important;
                }
                </style>
                ";
            }
        ?>
        <nav class="teal">
            <a href="/mahalaga" class="title">Mahalaga</a>
        </nav>
        <div class="container">
            <br>            
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form method="post">
                        <div class="input-field col s9">
                            <input type="text" name="url" id="url" required>
                            <label for="url">Url</label> 
                        </div>
                        <div class="input-field col s3">
                            <button type="submit" class="btn btn-large teal waves-effect waves-light">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br>
            <?php
                if($show_result==True){
                    include("render.php");
                }
            ?><br><br>
            <p class="grey-text">
                Andresito de Guzman<br>
                <a href="http://github.com/andresitodeguzman/mahalaga">GitHub</a>
            </p>
            <br><br><br>
        </div>
    </body>
</html>