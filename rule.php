<?php
include 'con1.php';
//   $fname=$_POST["fname"];
//     $lname=$_POST["lname"];
//     $prn=$_POST["prn"];
//     $email=$_POST["email_id"];
$sql = "SELECT * FROM myrule";
$myresult = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

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

    <title>rule</title>
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
</body>
<div class="row">
    <div class="column">
        <img src="./img/my1.jpg" alt="stop" style="width:100% ; height:210px">
    </div>
    <div class="column">
        <img src="./img/stop.jpg" alt="Forest" style="width:100%; height:210px">
    </div>
    <div class="column">
        <img src="./img/look2.jpg" alt="Mountains" style="width:100%  ;height:210px">
    </div>
</div>

<br>
<h1 class="headline display-3">What is road safty</h1>
<div class="para ml-3">In today’s era, road accidents are rampant. However, mortality rates have come down significantly due to improvements in automobile technology. Nevertheless, there are many potential hazards on the road that can cause injuries or even death. Potential
    hazards can range from bad road behaviour to road dynamics or even bad infrastructure. Behaviour such as drunk-driving, exceeding speed limits and general rash driving contributes significantly to road accidents. Furthermore, ignoring road signs which
    provide important information – such as crossroads or intersection can also be the leading cause in vehicular vehicle plays an important role in road safety. For instance, many car accidents are the result of the tire blowouts – which occur when the
    tires are underinflated and driven beyond their operational life. In conclusion, following the road rules, avoiding excessive speeds and improved general awareness can significantly reduce the risk of a traffic accident. Regularly checking vehicle
    health and maintenance of parts also eliminates any potential risks. And most importantly, do not use mobile phones while driving.
    <h3 class="text-center display-3 font-italic  ">SLOGAN: “Alert today – Alive tomorrow.”</h3>
</div>
<br> <br>
<h1 class="headline display-3">Traffic rule</h1>
<div class="card-deck m-3">
    <div class="card  h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/stop.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">STOP</h5>
            <p class="card-text">The stop sign is a sign which is often met at crossroads, when a road does not have traffic lights. </p>
        </div>
    </div>
    <div class="card h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/uturn.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">U-TURN</h5>
            <p class="card-text">This is a warning sign not to do a u-turn (i.e. turning in the road to go in the opposite direction.)</p>
        </div>
    </div>
    <div class="card h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/parking.jpg" alt="Card image cap">
        <div class="card-body ">
            <h5 class="card-title">NO PARKING</h5>
            <p class="card-text">With No Parking Signs, drivers are informed that they can't park in specific locations in your parking lot. </p>
        </div>
    </div>
</div>
<div class="card-deck m-3">
    <div class="card h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/smoke'.png" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">NO SMOKING</h5>
            <p class="card-text">This sign informed that it is no smocking zone. that perticular area is prohibited for smocking.In case anyone cought then Panulty will be charged.</p>
        </div>
    </div>
    <div class="card h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/horn.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">NO HORN</h5>
            <p class="card-text">This sign directs driver to respect the silence zone and not to use horn. This sign is very significant in major cities. </p>
        </div>
    </div>
    <div class="card h-25">
        <img class="card-img-top w-50 p-4 mx-auto" src="./img/dont.png" alt="Card image cap">
        <div class="card-body ">
            <h5 class="card-title">NO RIGHT TURN</h5>
            <p class="card-text">The no right turn sign is a turn prohibition sign that is designed to prevent an accident from occurring by informing drivers that turning right is prohibited.</p>
        </div>
    </div>
</div>
<br>
<h1 class="headline display-3"> Road safty campagien</h1>

<div class="card-deck m-3">
    <div class="card  h-25">
        <img class="card-img-top w-50 p-4 mx-auto " src="./img/break.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Brake</h5>
            <p class="card-text">Brake is a road safety charity working with communities and organisations across the UK to stop the tragedy of road deaths and injuries, make streets and communities safer for everyone... </p>
            <a href="https://www.brake.org.uk/" class="btn btn-primary">Read more</a>

        </div>
    </div>
    <div class="card h-25">
        <img class="card-img-top mx-auto w-50 p-4  " src="./img/irsc_logo.png" style="height:50%; width: 75%;" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">IRSC</h5>
            <p class="card-text">Indian Road Safety Campaign is the road safety initiative of Solve. Started as a project at IIT Delhi due to death of ......

            </p>
            <a href="https://irsc.road-safety.co.in/home/" class="btn btn-primary">Read more</a>
        </div>
    </div>
    <div class="card  h-25">
        <img class="card-img-top w-50 p-4 mx-auto   m-2" src="./img/logoyour.png" style="height:50%; background-color: brown; " alt="Card image cap">
        <div class="card-body ">
            <h5 class="card-title">ROAD SAFETY</h5>
            <p class="card-text">YOURS is a direct follow-up of the United Nations World Youth Assembly for Road Safety in 2007.In 2020, YOURS was granted special consultative status at the UN Economic and Social Council, allowing it to actively engage..
            </p>
            <a href="http://morth-roadsafety.nic.in/" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<br><br>
<h1 class="headline display-3">Some new Rule and Panulty</h1>
<br>


<table class="table table-sm  table-hover table-bordered" id="myTable">
    <thead>
        <tr class="bg-dark text-white text-center">

            <th scope="col">Traffic Violations</th>
            <th scope="col">New Penalty (as applicable from 1st September 2019)</th>
            <th scope="col">Old Penalty</th>

        </tr>
    </thead>
    <tbody>
        <?php
        include 'con1.php';
        $sql = "SELECT * FROM `myrule`";
        $result = $conn->query($sql);
        // if($result->num_rows>0)
        // {
        //     $id=0;
        //    while($row=$result->fetch_assoc())
        //    { // $id=$id+1;

        //    }
        // }  
        if (!$result) {
            printf("Error: %s\n", mysqli_error($conn));
            exit();
        }
        while ($res = mysqli_fetch_array($result)) {



        ?>
            <tr class="text-center">
                <td><?php echo $res['Traffic Violations']; ?></td>
                <td><?php echo $res['New Penalty']; ?></td>
                <td><?php echo $res['Old Penalty']; ?></td>
            </tr>
        <?php
        }
        ?>

    </tbody>
</table>








<br><br>
<footer class="site-footer">

    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, nulla recusandae, facilis tenetur nobis illo unde magnam dolorem harum cum eius? Eum id, quidem beatae molestias velit unde dolores dolor.</p>
        </div>



        <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">MY TRAFFIC</a>.
        </p>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="row">
            <ul class="social-icons">
                <li>
                    <a class="youtube" href="www.youtube.com"><img src="./img/utube.png" alt="" width="30" height="30"></a>
                </li>
                <li>
                    <a class="twitter" href="www.twitter.com"><img src="./img/skype.png" alt="" width="30" height="30"></a>
                </li>
                <li>
                    <a class="whatsup" href="www.whatup.com"><img src="./img/wtsp.png" alt="" width="40" height="30"></a>
                </li>
                <li>
                    <a class="linkedin" href="www.linkdin.com"><img src="./img/indin.png" alt="" width="40" height="30"></a>
                </li>
                <li>
                    <a class="instagram" href="www.instagram.com"><img src="./img/ins.jpg" alt="" width="35" height="30"></a>
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
<script src="./scss/_dropdown.scss"></script>

</html>