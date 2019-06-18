
  <html>
    <head>
        <title>CIE a</title>
        
        <style>
        .b {
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  font-size: 20px;
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
        <div class = "container" style="text-align:center; background-color: rgb(215, 242, 253);">
<?php
    $conn = mysqli_connect("localhost", "root", "", "iwt");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $unum=$_GET['usn'];
    $sub=$_GET['sub'];
    $field=$_GET['field'];
    $exp=$_GET['expected-marks'];
    echo "<h3><center>Dear student, your marks will be updated soon</center></h3>";
    $query="INSERT INTO store values('$unum','$sub','$field','$exp')";
    if($conn->query($query)===TRUE){
        echo "<h4><center>The issued will be noticed by a respective faculty.</center></h4>";
    }
    else{
        echo"error:".$query."<br/>".$conn->error;
    }
    
?>
<br/>
<button type="button" class="b" id="fillform5" style="float:center;" onclick="window.location.href='1index.html'">LOGOUT</button>
</div>







