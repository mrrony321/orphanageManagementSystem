<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
</head>



<body>



<html lang="en" class="full-height">



<nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo">
    <a class="navbar-brand" href="#"><strong>Orphanage Society</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="memories.html">memories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about_us.html">About Us</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="BOT.html">Board of Trustees</a>
                    <a class="dropdown-item" href="orphan_information.html">Orphan's Information</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>

        <div class="topnav-right">
            <a class="b"  href="signin.html">Log In</a>
        </div>



</nav>



<table>
    <tr>
        <th>designation</th>
        <th>age</th>
        <th>gender</th>
        <th>address</th>
        <th>number</th>
        <th>name</th>
    </tr>
    
    <?php
    $connect = mysqli_connect("localhost","root","","orphanage management");
    if($connect-> connect_error){
        die("Connection_failed:". $connect-> connect_error);
    }
    
    $sql ="SELECT designation,age,gender,address,number,name from bot";
    $result = $connect-> query($sql);
    
    if($result-> num_rows >0)
    {
        while($row=$result-> fetch_assoc()){
            echo "<tr><td>".$row["designation"]."</td><td>".$row["age"]."</td><td>".$row["gender"] ."</td><td>".$row["address"]."</td><td>".$row["number"] ."</td><td>".$row["name"]."</td></tr>";
            
        }
        echo "</table>";
    }
    else{
        echo"no result";
    }
    $connect-> close();
    ?>
</table>








<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
