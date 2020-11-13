<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,500;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>HOME</title>
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
    <div id="page-wrap">


        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalCorrect = 0;

        if ($answer1 == "A") {
            $totalCorrect++;
        }
        if ($answer2 == "B") {
            $totalCorrect++;
        }
        if ($answer3 == "A") {
            $totalCorrect++;
        }
        if ($answer4 == "B") {
            $totalCorrect++;
        }
        if ($answer5 == "C") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>

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