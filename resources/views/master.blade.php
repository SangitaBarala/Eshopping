<html lang="en">
<head>
    <title>signup Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script>
        function checkForBlank() {
            var x = document.forms["myForm"]["fname"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
    <style>
        .navbar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: chocolate;
            color: white;
        }
        .BrandName{
            font-size: 1.5rem;
            margin: .5rem;
            font-family: Bahnschrift;
        }
        .navbar-links ul{
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar-links li{
            list-style: none;
        }
        .navbar-links li a{
            text-decoration: none;
            color: white;
            display: block;
            padding: 8px;
            margin-right: 10px;
        }
        .navbar-links a:hover{
            background-color: white;
            color: chocolate;
            border-radius: 7px;
        }
        .toggle-button{
            position: absolute;
            top: .75rem;
            right: 1rem;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }
        /* .toggle-button .bar{
             height: 3px;
             width: 100%;
             border-radius: 10px;
             background-color: white;
         }*/
        @media(max-width: 400px){
            .toggle-button{
                display: flex;
            }
            .navbar-links{

                width: 100%;
            }
            .navbar{
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar-links ul{
                flex-direction: column;
                width: 100%;
            }
            .navbar-links li {
                text-align: center;
            }
            .navbar-links li a{
                padding: 8px;
                margin: 5px;
            }

        }
        .main{
            background-image: url("https://i.pinimg.com/originals/46/bf/a6/46bfa67b6767468cbd7534443ed73bec.jpg");
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            text-align: center;
        }
        .main h1{
            padding-top: 200px !important;
        }
        .main a{
            font-size: 18px;
            color: blue;
            border-bottom: 1px solid chocolate;
            padding: 4px 12px 4px 12px;
            border-radius: 10px;
            color: chocolate;
        }
        .main a:hover{
            color: blue;
            text-decoration: none;
        }
        .title{
            color: white;
            font-family: "Palatino Linotype";
        }
        li i{
            margin-right: 2px;
        }

    </style>
</head>
<body>
<div class="navbar">
    <div class="BrandName">Shopping Hues Clothing</div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="login.php"><i class="fa fa-user"></i>Login</a></li>
            <li><a href="register.php"><i class="fa fa-registered"></i>Register</a></li>
        </ul>
    </div>
</div>
<div class="main">
    <h1 style="font-family: 'Courier New'; color:chocolate;">Shopping Hues</h1>
    <h2 style="font-family: SimSun; color: black; padding: 20px;">"Fashion is an instant language that speaks for you..."</h2>
    <a href="">Shop Now</a>
</div>
</body>
</html>
