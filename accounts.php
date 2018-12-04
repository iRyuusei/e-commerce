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

                        <div class="row">
                            <div class="col-lg-3"></div>                            
                            <div class="col-lg-6">
                                    
                                    <div class ="name">
                                        <img src="<?php echo base_url() ?>assets/img/user.png" width="120" height="120">              
                                        &nbsp&nbsp<?php echo $_SESSION['dis_name'] ?><br><br>
                                    </div>
                                    <div class="panel-heading">
                                        <center><h3 class="panel-title"><br>Personal Information<br><br></h3></center>
                                    </div>
                                

                                    
                                    <table class="table" cellspacing="10">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Name:</th>
                                                <td scope="row"><?php echo $_SESSION['dis_name'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email Address:</th>
                                                <td scope="row"><?php echo $_SESSION['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Username:</th>
                                                <td scope="row"><?php echo $_SESSION['username'] ?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Password:</th>
                                                <td scope="row"><?php echo $_SESSION['password'] ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                   <a href="<?php echo base_url() ?>index.php/Login/edit_accounts"><button class="btn btn-custom"><i class="fa fa-edit"></i> Edit Information</button></a>
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

<style type="text/css">

.name{
    font-size: 35px;
    margin-left: 15px;
    font-family: "Times New Roman", Times, serif;
}
.panel-heading{
background-color: #000000;
color: white;
font-family: "Times New Roman", Times, serif;
}
tbody tr:nth-child(even) td, tbody tr:nth-child(even) th {
    background-color: #DCDCDC;
    font-family: "Times New Roman", Times, serif;
}
button{
    background-color: #003366;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    font-size: 20px;
    float: right;
}
.btn-custom:hover, .btn-custom:focus, .btn-custom:active, .btn-custom.active, .open>.dropdown-toggle.btn-custom {
    color: white;
    background-color: #003366;
}
</style>