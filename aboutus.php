<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }

        .container {
            padding: 0 10px;
            margin: 0px 0px 0px 0px;
        }

        .container::after,
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  sticky-top m-3">
        <a class="navbar-brand " href="#">
            <img src="./img/logo2.jpg" width="50" height="50" alt="">
        </a>
        <a class="navbar-brand name " href="#">
            <h3>MY TRAFFIC</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mid" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rule.php">Basic Traffic Rule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quiz.php">Quiz</a>
                </li>
                <li class=" nav-item  dropdown">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Apply for License
                        </a>
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="https://sarathi.parivahan.gov.in/sarathiservicecov16/newLLDet.do">Renew License</a>
                            <a class="dropdown-item" href="https://parivahan.gov.in/parivahan/en/content/driving-licence-0#"> Permanent License</a>
                            <a class="dropdown-item" href="https://parivahan.gov.in/parivahan/en/content/driving-licence-0#">Learning License</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="rtocenter.php" tabindex="-1" aria-disabled="true">RTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="aboutus.php" tabindex="-1" aria-disabled="true">About</a>
                </li>

            </ul>

        </div>
    </nav>
    <div class="about-section">
        <h1>About Us </h1>
        <p>these are the our group members.</p>

    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="./img/mrunali.jpeg" alt="Mrunali" style="width:100%;height:400px;">
                <div class="container">
                    <h2>Mrunali Ambhore</h2>
                    <p class="title">Front End Developer</p>
                    <p>busy wokaholic</p>
                    <p>mrambhore@mitaoe.ac.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./img/prabs.jpeg" alt="Mike" style="width:100%; height:400px;">
                <div class="container">
                    <h2>Prabhat Mahavadi</h2>
                    <p class="title">Designing and prototype</p>
                    <p>safe investor</p>
                    <p>psmahavadi@mitaoe.ac.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="./img/saurya.jpeg" alt="saurabh" style="width:100% ;height:400px;">
                <div class="container">
                    <h2>Saurabh Bankar</h2>
                    <p class="title">Back End Developer</p>
                    <p>Service Driven</p>
                    <p>ssbankar@mitaoe.ac.in</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer ">

        <div class="row ">
            <div class="col-sm-12 col-md-6 ">
                <h6>About</h6>
                <p class="text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, nulla recusandae, facilis tenetur nobis illo unde magnam dolorem harum cum eius? Eum id, quidem beatae molestias velit unde dolores dolor.</p>
            </div>



            <div class="col-xs-6 col-md-3 ">
                <h6>Quick Links</h6>
                <ul class="footer-links ">
                    <li><a href="# ">About Us</a></li>
                    <li><a href="# ">Contact Us</a></li>

                </ul>
            </div>
        </div>
        <hr>
        <div class="col-md-8 col-sm-6 col-xs-12 ">
            <p class="copyright-text ">Copyright &copy; 2020-21 All Rights Reserved by
                <a href="# ">MY TRAFFIC</a>.
            </p>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 ">
            <div class="row ">
                <ul class="social-icons ">
                    <li>
                        <a class="youtube " href="www.youtube.com "><img src="./img/utube.png " alt=" " width="30 " height="30 "></a>
                    </li>
                    <li>
                        <a class="twitter " href="www.twitter.com "><img src="./img/skype.png " alt=" " width="30 " height="30 "></a>
                    </li>
                    <li>
                        <a class="whatsup " href="www.whatup.com "><img src="./img/wtsp.png " alt=" " width="40 " height="30 "></a>
                    </li>
                    <li>
                        <a class="linkedin " href="www.linkdin.com "><img src="./img/indin.png " alt=" " width="40 " height="30 "></a>
                    </li>
                    <li>
                        <a class="instagram " href="www.instagram.com "><img src="./img/ins.jpg " alt=" " width="35 " height="30 "></a>
                    </li>
                </ul>
            </div>

        </div>

        </div>




    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>