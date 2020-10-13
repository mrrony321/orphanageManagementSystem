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
