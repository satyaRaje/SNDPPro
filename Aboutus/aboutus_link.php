<html>
<head>
    <style>
    .floattu{
    position:fixed;
    z-index:100;
    }

        .floattu :hover{
            background-color: transparent;
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

    .dropdown:hover .dropbtna {background-color: transparent;}


    </style>
</head>
<body>
<div class="dropdown">

        <button class="dropbtna"><img src="../img/svg/menu.svg" class="floattu" height="50px" style="float: left; "> </button>
        <div class="dropdown-content">
            <!--    <a href="../Aboutus/aboutus.php">About Us</a>-->
            <a href="#"></a>
            <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
            <a href="overview.php" class="w3-bar-item w3-button">Overview</a>
            <a href="history.php" class="w3-bar-item w3-button">History</a>
            <a href="ourapproach.php" class="w3-bar-item w3-button">Our Approach</a>
            <a href="ourteam.php" class="w3-bar-item w3-button">Our Team</a>
            <a href="companyethics.php" class="w3-bar-item w3-button">Company Ethics</a>
            <a href="authentic.php" class="w3-bar-item w3-button">Authentic</a>
            <a href="accuracy.php" class="w3-bar-item w3-button">Accuracy</a>
            <a href="careers.php" class="w3-bar-item w3-button">Careers</a>
        </div>

    </a>
</div>




</body>


</html>