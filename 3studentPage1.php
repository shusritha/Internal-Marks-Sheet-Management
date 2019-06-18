
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
        .s{
            position:absolute;
            left:545px;
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
            <form action="4studentPage2.php" class="form3" method="POST"> 
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "iwt");
                      // Check connection
                      if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                      }

                      session_start();
                    $_SESSION["name"]=$_POST['username'];
                      $usn=$_POST['username'];
                      $psw=$_POST['password'];
                      $sql = "SELECT * FROM student where susername='$usn' and spassword='$psw'";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {

                    ?>
                    <br/>
                <div class="container" id="sem" style="font-size:20px; text-align:center;  ">
                    <label id="semester"><h3> Dear Student! Please Select Your Semester</h3></label> <br/> 
                    <input type="radio" name="semester" class="s" value="3">Third Semester<br/>
                    <input type="radio" name="semester" class="s" value="4">Fourth Semester<br/>
                    <input type="radio" name="semester" class="s" value="5">Fifth Semester<br/>
                    <input type="radio" name="semester" class="s" value="6" checked>Sixth Semester<br/>
                    <input type="radio" name="semester" class="s" value="7">Seven Semester<br/>
                    <input type="radio" name="semester" class="s" value="8">Eight Semester<br/><br/>
                    <h3>ENTER YOUR USN:</h3> <input type="text" name="username" max=15 id="usn" style="border-radius: 12px;font-size: 20px; " required><br/><br/>
                </div>
                 <?php } 
                 else { echo "0 rows present";
                        header("refresh:2; url=2student_login.html"); }

                        

                ?>
                <div>    
                    <label>
                        <input type="submit" class="b" id="b1" onclick="usnvalidate()" value="Submit"><br/>
                    </label>
                </div>
            </form>
        </div>
    </body>


            
