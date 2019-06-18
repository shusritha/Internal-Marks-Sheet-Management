
  <html>
    <head>
        <title>CIE a</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  
        <link rel = "stylesheet" type="text/css" href="web.css"> 
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
        <div  style="background-color:rgb(215, 242, 253);">
        <h1>WELCOME STUDENT!</h1>
        <form class="form-inline" action="">
        <?php
            $conn = mysqli_connect("localhost", "root", "", "iwt");
              // Check connection
              if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
              }

              session_start();


              $usn1=$_SESSION['name'];
              //echo $usn1;
              //$sem=$_POST['semester'];
              $sql = "SELECT * FROM course c,student s where s.susername=c.susername and s.susername='$usn1' ";
              
              $result = mysqli_query($conn,$sql);
              
             if (mysqli_num_rows($result) > 0) { 
                    
            ?>
<?php 
                    while($row = $result->fetch_assoc()) {
                        $fname=$row["sfname"];
                    $lname =$row['slname'];
                    $usn=$row['susername'];
                    $sem=$row['semester'];
                }
                    
                ?>

        <div class="form-group">
          <label for="first name">First name:</label> 
          <input type="text" value="<?php echo $fname; ?> "class="form-control" id="fname" onfocus="this.blur();">
        </div>
        <div class="form-group">
          <label for="last name">Last name:</label>
          <input type="text"  value="<?php echo $lname ?>" class="form-control" id="lname"onfocus="this.blur();">
        </div>
        <div class="form-group">
          <label for="usn">USN:</label>
          <input type="text" class="form-control" value="<?php echo $usn; ?>" max=10 name="usn" onfocus="this.blur();">
              </div>
    
        <div class="form-group">
            <label for="semester">Semester:</label>
            <input type="number" value="<?php echo $sem;?>" class="form-control" id="semester" onfocus="this.blur();">
        </div>
        
        <?php }
             /*else { echo "0 rows present";
                 header("refresh:2; url= 2student_login.html"); }*/
        ?>
  </form>
  <br>
  <div class="container">
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Sl.no</th>
                    <th>Subject</th>
                    <th>IA1</th>
                    <th>IA2</th>
                    <th>IA3</th>
                    <th>Avg</th>
                    <th>Assignment</th>
                    <th>AAT</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $t=0;
                    $result = mysqli_query($conn,$sql);
                    while($row = $result->fetch_assoc()){
                        $t=$t+1;
                    ?>
                  <tr>
                    <td><?php echo$t; ?> </td>
                    <td><?php echo $row['subject1']; ?>  </td>
                    <td> <?php echo $row['ia1']; ?>  </td>
                    <td> <?php echo $row['ia2']; ?>   </td>
                    <td> <?php echo $row['ia3']; ?>   </td>
                    <td> <?php echo $row['avg']; ?>   </td>
                    <td><?php echo $row['assignment']; ?>    </td>
                    <td><?php echo $row['aat']; ?>    </td>
                    <td><?php echo $row['total']; ?>    </td>
                  </tr>
                  
                  <?php
                  }
                  ?>     
                </tbody>
              </table>
         <br/>   
  </div>
  <br/><br/>
  <br/>
    <form action="toFaculty.php">
    <div class="fillform">
      <div class="fillform01">
        
        <label for="subjects"> USN:</label>
        <input type="text" class="form-control" value="<?php echo $usn; ?>" max=10 name="usn" onfocus="this.blur();">
      </div>
        <div class="fillform1">
          <label for="subjects">Select subject1</label>
              <select class="form-control" id="subject" name="sub">
                <option>If any</option>
                <option>IWT</option>
                <option>CD</option>
                <option>CG</option>
                <option>CBD</option>
                <option>SA</option>
                <option>ST</option>
                <option>IWT LAB</option>
                <option>CG LAB</option>
              </select>
        </div>
        <div class="fillform2">
          <label for="subjects">Select Field</label>
              <select class="form-control" id="field" name="field">
                <option>If any</option>
                <option>IA1</option>
                <option>IA2</option>
                <option>IA3</option>
                <option>Average</option>
                <option>Assignment</option>
                <option>AAT</option>
                <option>Total</option>
              </select>
        </div>
        <div class="fillform3">
          <label for="students">Expected Marks</label>
            <input type="text" class="form-control" name="expected-marks">
        </div>
        <button type="submit" class="btn btn-default" id="fillform4">Submit</button>
  </div>
  <div style="background-color:rgb(215, 242, 253);">
  <button type="button" style="float:right;" class="btn btn-info" id="fillform5"  onclick="window.location.href='1index.html'">LOGOUT</button>
  <!-- <a href="session.php">click</a> -->
  </div>
  </form>
</div>
  
</body>
</html>
