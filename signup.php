<?php
    require_once "dbConn.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $dd=$_POST["date"];
        $mn=$_POST["month"];
        $yr=$_POST["year"];
        $d=date("Y-m-d", strtotime($dd.$mn.$yr));

        $sql = "INSERT INTO userdetails (Username, Email, Password, Date_Of_Birth, Gender, Mobile_Number) VALUES ('".$_POST["Uname"]."', '".$_POST["email"]."', '".$_POST["pswd"]."', '".$d."', '".$_POST["gender"]."', '".$_POST["mobNo"]."')";

        if (mysqli_query($conn, $sql)) {
            session_start();
            $_SESSION["userEmail"] = $_POST["email"];
            $_SESSION["userName"] = $_POST["Uname"];
            
            header("Location: subs.php");
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>