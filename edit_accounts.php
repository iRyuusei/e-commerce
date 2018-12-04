<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile River</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png" />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include "include/head.php";
?><br><br><br><br><br>

             <div id="container">
                        
                            <div class="container">

                                <form method="post" action="<?php echo base_url() . "index.php/Edit_accounts/updtitle"?>">
                                    <div class="row">
                                            <h2>Update Your Information</h2><br>
                                    </div>
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="name">ID</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="" id="u_id" name="u_id" value="<?php echo $_SESSION['u_id']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="dis_name" name="dis_name" value="<?php echo $_SESSION['dis_name']; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="username" name="username"value="<?php echo $_SESSION['username']; ?>">
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-25">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="col-75">
                                            <input type="text" id="password" name="password" value="<?php echo $_SESSION['password']; ?>">
                                        </div>
                                    </div>
                                        
                                        <br>
                                    <div class="row">
                                        <input type="submit" name="update" value="Update">
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                              
<br><br><br><br><br><br>
<?php
include "include/footer.php";
?>

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>

<!-- Bootstrap JS form CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- jQuery sticky menu -->
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</body>
</html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
   
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>