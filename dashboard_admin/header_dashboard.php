<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
    <meta charset="utf-8">
    <style>

        .logo-small {
            color: #f4511e;
        }
        .logo {
            color: #f4511e;
        }
  a{
      color: white;
  }
		.navbar {
            margin-bottom: 0;
            background-color: #bbbbbb;
            z-index: 9999;
            border: 0;
			height:40px;
            font-size: 15px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 2px;
            border-radius: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .navbar li a, .navbar .navbar-brand {
        }
        .navbar-nav li a:hover, .navbar-nav li.active a {
            background-color: #fff !important;
        }
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }
        .slideanim {visibility:hidden;}
        .slide {
            animation-name: slide;
            -webkit-animation-name: slide;
            animation-duration: 1s;
            -webkit-animation-duration: 1s;
            visibility: visible;
        }
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            }
            100% {
                opacity: 1;
                transform: translateY(0%);
            }
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
        }
        @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
        }

        .dropbtn {
            color: black;
            background-color: transparent;
            padding: 16px;
            font-size: 15px;
            border: none;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #999999;}




        #idea_panel, #idea_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #idea_panel {
            display: none;
        }
        #cad_panel, #cad_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #cad_panel {
            display: none;
        }

        #stl_panel, #stl_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #stl_panel {
            display: none;
        }

        #getQ_panel, #getQ_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #getQ_panel {
            display: none;
        }

        #threed_panel, #threed_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #threed_panel {
            display: none;
        }

        #delivery_panel, #delivery_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #delivery_panel {
            display: none;
        }

        #material_panel, #material_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #material_panel {
            display: none;
        }

        #qua_panel, #qua_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #qua_panel {
            display: none;
        }

        #price_panel, #price_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #price_panel {
            display: none;
        }

        #profuction_panel, #profuction_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #profuction_panel {
            display: none;
        }
        #del_panel, #del_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #del_panel {
            display: none;
        }

        #world_panel, #world_flip {
            text-align: center;
            /*background-color: #e5eecc;
            border: solid 1px #c3c3c3;*//
        }

        #world_panel {
            display: none;
        }



    </style>


    <script>
        $(document).ready(function(){

            $("#idea_flip").click(function(){
                $("#idea_panel").slideToggle("slow");
            });
            $("#cad_flip").click(function(){
                $("#cad_panel").slideToggle("slow");
            });
            $("#stl_flip").click(function(){
                $("#stl_panel").slideToggle("slow");
            });
            $("#getQ_flip").click(function(){
                $("#getQ_panel").slideToggle("slow");
            });
            $("#threed_flip").click(function(){
                $("#threed_panel").slideToggle("slow");
            });
            $("#delivery_flip").click(function(){
                $("#delivery_panel").slideToggle("slow");
            });
            $("#material_flip").click(function(){
                $("#material_panel").slideToggle("slow");
            });
            $("#qua_flip").click(function(){
                $("#qua_panel").slideToggle("slow");
            });
            $("#price_flip").click(function(){
                $("#price_panel").slideToggle("slow");
            });
            $("#profuction_flip").click(function(){
                $("#profuction_panel").slideToggle("slow");
            });
            $("#del_flip").click(function(){
                $("#del_panel").slideToggle("slow");
            });
            $("#world_flip").click(function(){
                $("#world_panel").slideToggle("slow");
            });




        });
    </script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" style="height:50px;">

<nav class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size:40px;letter-spacing: 0px;" href="#myPage"><b style="font-weight: bolder; "><img src="../temp-img/logoUp.png"  height="30">iPRO3D</b></a>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>
