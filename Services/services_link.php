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
        <a href="services.php" class="w3-bar-item w3-button">Services</a>
        <a href="3dprinting.php" class="w3-bar-item w3-button">3D Printing</a>
        <a href="3dscanning.php" class="w3-bar-item w3-button">3D Scanning</a>
        <a href="rapidprototyping.php" class="w3-bar-item w3-button" >Rapid Prototyping</a>
        <a href="cadmodeling.php" class="w3-bar-item w3-button" >3D & 2D CAD Modeling</a>
        <a href="design.php" class="w3-bar-item w3-button" >Design for 3D Printing</a>
        <a href="reverse.php" class="w3-bar-item w3-button" >Reverse Engineering</a>
        <a href="topology.php" class="w3-bar-item w3-button" >Design Topology Optimization</a>
        <a href="manufacturing.php" class="w3-bar-item w3-button" >Small Batch Production</a>
        <a href="vaccumecast.php" class="w3-bar-item w3-button" >Vaccum Casting</a>
        <a href="xraytopology.php" class="w3-bar-item w3-button" >X-Ray Topography</a>
        <a href="functional.php" class="w3-bar-item w3-button" >Functional part Manufacturing</a>
        <a href="toolmanufacture.php" class="w3-bar-item w3-button" >Tooling Manufacturing</a>
        <a href="injectionmedelling.php" class="w3-bar-item w3-button" >Injection Modelling</a>
        <a href="cncmachine.php" class="w3-bar-item w3-button" >CNC Machining</a>
        <a href="idea.php" class="w3-bar-item w3-button" >Idea & Solution</a>
        <a href="customization.php" class="w3-bar-item w3-button" >Customization</a>
    </div>

    </a>
</div>




</body>


</html>