<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Hospital || MediCare</title>

    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/signup.css">


    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <header class="header-area">

    </header>

    <section class="form">
        <div class="form-body">
<!-- onsubmit="return docRegValidation();" -->
                    <form action="includes/addHospital.inc.php" method="POST"  class="form-area">
                            <div class="form-header">
                                    <h3 class="mb-5">Add Hospital</h3>
                                </div>

                                <?php
                                 if(isset($_GET['error'])){
                                    if($_GET['error']=='sqlerror'){
                                        echo'<div class="loginErrorMsg">
                                        <p id="errorMsg">There is problem with the DB.</p>
                                        </div>';
                                    }
                                }
                                else if(isset($_GET['doctor'])){
                                    // if($_GET['doctor']=='addedsuccessfully'){
                                        echo'<div class="loginErrorMsg">
                                        <p id="errorMsg">Hospital added successfully.</p>
                                        </div>';
                                    
                                }


                                ?>
                        <input
                        type="text"
                        id="hospitalName"
                        name="hospitalName"
                        placeholder="Enter Hospital Name">
                        <label id="fullName__label1"></label>

                        <input type="text" id="city" name="hospitalCity" placeholder="Enter Hospital City">
                        <label id="userName__label1"></label>
                        <input type="text" id="address" name="hospitalAddress" placeholder="Enter Address">
                        <label id=""></label>
                        <input type="text" id="hospitalEmail" name="hospitalEmail" placeholder="Enter Hospital E-mail">
                        <label id="docDegree_label1"></label>
                        <input type="text" id="phone" name="hospitalPhone" placeholder="Enter Hospital Phone Number">
                        <label id="docTime1_label1"></label>






                        <input
                        class="btn btn-danger "
                        type="submit"
                        name="submit"
                        value="Submit"
        />
                    </form>
                    <!-- <div class="form-footer">
                            <a href="login.php">Login With An Existing Account.</a>
                          </div> -->
        </div>
    </section>


    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validation.js"></script>
</body>
</html>
