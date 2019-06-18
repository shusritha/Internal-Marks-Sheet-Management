<?php
$id = $_GET['id'];
$field = $_GET['field'];
$sub = $_GET['subject1'];
session_start();
$_SESSION['id']=$id;
$_SESSION['field']=$field;
$_SESSION['subject1']=$sub;
if($_SERVER['REQUEST_METHOD']=='POST'){
//session_start();
$field=$_SESSION['field'];
$id=$_SESSION['id'];
$sub=$_SESSION['subject1'];
if(strtolower($field) == "assignment"){
$marks=$_POST['m_marks'];
$query6 = "UPDATE course SET assignment='$marks' WHERE susername='$id' AND subject1='$sub' ";

}
elseif(strtolower($field) == "ia1"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET ia1='$marks' WHERE susername='$id' AND subject1='$sub'";
        
}
elseif(strtolower($field) == "ia2"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET ia2='$marks' WHERE susername='$id' AND subject1='$sub'";
    
}
elseif(strtolower($field) == "ia3"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET ia3='$marks' WHERE susername='$id' AND subject1='$sub' ";
    
}

elseif(strtolower($field) == "aat"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET aat='$marks' WHERE susername='$id' AND subject1='$sub'";
    
}

elseif(strtolower($field) == "avg"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET avg='$marks' WHERE susername='$id' AND subject1='$sub'";
    
}
elseif(strtolower($field) == "total"){
    $marks=$_POST['m_marks'];
    $query6 = "UPDATE course SET total='$marks' WHERE susername='$id' AND subject1='$sub'";
    
}
$conn = mysqli_connect("localhost", "root", "", "iwt");
                            // Check connection
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                            $result = $conn->query($query6);


}

?>
<html>
            <head>
                <title>CIE a</title>
                <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">   -->
                <!-- <link rel = "stylesheet" type="text/css" href="web.css">  -->
                <style>
                .b {
          -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
          font-size: 15px;
          padding: 14px 40px;
          border-radius: 12px;
        }
        
                .b:hover {
          background-color: #4CAF50; /* Green */
          color: white;
        }
                
                </style>
                <script type="text/javascript" src="web.js">
                </script>
                
            </head>
            <body>
                <div class = "wrapper">
                <p class = "college-name"><pre><img src="logo.png" class="img1" style="width: 100px; height:100px;"><h1 style="text-align:center; font-style:initial;"> DAYANANDA SAGAR COLLEGE OF ENGINEEERING</h1></pre></p>
                <!-- <hr> -->
            </div>
            <div class = "second_div" style="text-align:center; background-color:rgb(223, 217, 217);">
                <br/>
                    <h2 id = "head">DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h2>
                    <blockquote>
                    <h3 id = "head1">STUDENT CONTINUOUS EVALUATION MARKSHEET</h3>
                    </blockquote>
                    <hr>
                </div>
    
<!-- <form action="" method="POST">    -->
<form action="" method="POST" style="text-align:center;">
<div class="container" style="text-align:center; background-color: rgb(215, 242, 253);">
<input type="text" placeholder="Marks" name="m_marks" class="new-marks" style="border-radius: 12px;font-size: 20px; ">
<input type="submit" id="b" class="b" value="Submit" >
</form>
<br/>
<br/>
    </div>
<button type="button" style="float:right;" class="b" id="fillform5"  onclick="window.location.href='1index.html'">LOGOUT</button>
</body>
</html>