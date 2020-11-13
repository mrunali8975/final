<?php
include 'conn.php';
if(isset($_POST['done']))
{  
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $prn=$_POST["prn"];
    $email=$_POST["email_id"];
    $sql= "INSERT INTO `registration` ( `fname`, `lname`, `prn`, `email_id`) VALUES ('$fname','$lname', '$prn', '$email')";
    $myresult=$conn->query($sql);
    // header('location:insert.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\xampp\htdocs\FINAL\css\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,500;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>insert</title>
</head>
<body >
<div class="container-fluid">
        <div id="page-wrap">

            <h1 class="headline display-4">Simple Quiz Built On PHP</h1>

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

    <div class="col-lg-6 m-auto ">
        <br>
        <h1 class="text-black text-center">Registration</h1>
<form method="post">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" aria-describedby="emailHelp" name="fname" require >
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
                        <label for="desc">Email ID</label>
                        <div class="form-group">
                          <textarea name="" id="textarea" cols="30" rows="10"></textarea>                        </div>

                    </div>
                              <button type="submit" class="btn btn-success" name="done">Submit</button>
                    <br>
                    <br>
        

</form>



    </div>
<hr>


 

    
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="project copy.js"></script>
</body>
</html>