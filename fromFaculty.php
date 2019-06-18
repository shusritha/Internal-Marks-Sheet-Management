
  <html>
            <head>
                <title>CIE a</title>
               
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
                <br/><br/>
                <div class="container" style="background-color:rgb(215, 242, 253);" >
                <br/>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "iwt");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $st_usn=$_GET['usn2'];
    $sub=$_GET['subject12'];
    $fnam=$_GET['fname2'];
    $sem=$_GET['sem2'];
    $ia1=$_GET['ia12'];
    $ia2=$_GET['ia22'];
    $ia3=$_GET['ia32'];
    $avg=$_GET['avg2'];
    $aat=$_GET['aat2'];
    $ass=$_GET['ass2'];
    $tot=$_GET['tot2'];


    $query4="INSERT INTO course VALUES('$sub','$st_usn','$fnam','$sem','$ia1','$ia2','$ia3','$avg','$aat','$ass','$tot')";
    if($conn->query($query4)===TRUE){
         echo"successfully inserted"; 
    }
    else{
        echo"error:".$query4."<br/>".$conn->error;
    }
?>
<br/><br/>
<button type="button" class="b" id="fillform5" style="float:right" onclick="window.location.href='5facultyLogin.html'">LOGOUT</button>

</div>
