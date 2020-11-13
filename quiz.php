
<?php
include 'conn.php';
if(isset($_POST['done']))
{  
    $fname=$_POST["fname"];
    $email=$_POST["email_id"];
    $sql= "INSERT INTO `registration` ( `fname`,  `email_id`) VALUES ('$fname','$lname', '$prn', '$email')";
    $myresult=$conn->query($sql);
    // header('location:insert.php');
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,500;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Quiz</title>
</head>

<body>
<div id="success" class="alert alert-success alert-dismissible fade " role="alert">
        <strong>success</strong>successfully submit form!!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div id="failure" class="alert alert-danger alert-dismissible fade " role="alert">
        <strong>failure</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
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
                    <a class="nav-link" href="insert.php">Quiz</a>
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

    <div class="container-fluid">
        <div id="page-wrap">

            <h1 class="headline display-4">Simple QuizOn traffic rule</h1>

            <form action="result.php" method="post" id="quiz">

                <ol>

                    <li>

                        <h3>What is the minimum age for driving a motorcycle without gear?</h3>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required />
                            <label for="question-1-answers-A">A)16 years</label>
                        </div>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required />
                            <label for="question-1-answers-B">18 years</label>
                        </div>

                        <div>
                            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                            <label for="question-1-answers-C">21 years</label>
                        </div>

                    </li>

                    <li>

                        <h3> What should you do when you see a traffic sign of a school nearby?</h3>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                            <label for="question-2-answers-A">A)Stop the vehicle</label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                            <label for="question-2-answers-B">B)Slow down and proceed carefully </label>
                        </div>

                        <div>
                            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required />
                            <label for="question-2-answers-C">C)Press horn and proceed in the same speed</label>
                        </div>

                    </li>

                    <li>

                        <h3>Before you overtake a vehicle what should you keep in mind?</h3>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                            <label for="question-3-answers-A">A)The road ahead should be clearly visible and overtaking should be safe</label>
                        </div>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                            <label for="question-3-answers-B">B)The road is not safe</label>
                        </div>

                        <div>
                            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" required />
                            <label for="question-3-answers-C">C)There are no vehicles ahead</label>
                        </div>

                    </li>

                    <li>

                        <h3>If a driver sees the sign for ‘slippery road ahead’, he/she must</h3>

                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                            <label for="question-4-answers-A">A)Change gear and reduce speed</label>
                        </div>
                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                            <label for="question-4-answers-B">B)Drive faster</label>
                        </div>

                        <div>
                            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                            <label for="question-4-answers-C">C)Apply brake but proceed in the same speed</label>
                        </div>

                    </li>

                    <li>

                        <h3>Overspeeding is</h3>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required />
                            <label for="question-5-answers-A">A)Not an offence and can be neglected

                            </label>
                        </div>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required />
                            <label for="question-5-answers-B">B)Is an offence but no charges are pressed against you</label>
                        </div>

                        <div>
                            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" required />
                            <label for="question-5-answers-C">C)an offence that could lead to your driving licence being cancelled or suspended</label>
                        </div>

                    </li>

                </ol>

                <input type="submit" value="Submit" class="btn btn-primary" />

            </form>

        </div>
    </div>
    <br>
    <hr>

    <?php
include 'conn.php';
if (isset($_POST['done'])) {
    $fname = $_POST["fname"];
    $email = $_POST["email_id"];
    $sql = "INSERT INTO `registration` ( `fname`, `email_id`) VALUES ('$fname', '$email')";
    $myresult = $conn->query($sql);
    // header('location:insert.php');
}
?>

<div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" name="fname" require>
</div>
<div class="form-group">
    <label for="lname">Last Name</label>
    <input type="text" class="form-control" id="lname" aria-describedby="emailHelp" name="lname" require>
</div>

<div class="form-group">
    <label for="desc">Email ID</label>
    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email_id" rows="3" require>
    </div>

</div>
<div class="form-group">
    <label for="Adress">Enter your phone number</label> input
    <input type="tel" id="phone" class="form-control is-invalid" name="phone" placeholder="1234567890">
    <small id="phonevalid" class="form-text text-muted invalid-feedback">
        your phone number must be 10 digit long . </small>
</div>
<div class="form-group">
    <label for="desc">Comment</label>
    <div class="form-group">
        <textarea name="" id="textarea" cols="30" rows="10"></textarea> </div>

</div>
<button type="submit" class="btn btn-success" id="submit" name="done">Submit</button>
<br>
<br>


</form>
<hr>


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
<script src="project copy.js"></script>

</body>

</html>