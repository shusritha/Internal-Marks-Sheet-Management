
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
        
        .table{
             border-collapse: collapse;  
            /* border: 1px solid black; */
             padding: 5px; 
             float: center;
             margin: auto;
             width: 80%;
             text-align: center;
            
        }   
        
        tr:nth-child(even){
            background-color: #f2f2f2;

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

                            session_start();
                            $_SESSION["flogin"]=$_POST['uname'];
        
                            $username1=$_POST['uname'];
                            $password1=$_POST['pword'];
                            $sql = "SELECT * FROM faculty where fusername='$username1' and fpassword='$password1'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                               

                        ?>
                        <br/>
                        <h2><strong>Welcome Staff!</strong></h2><br/><br/>
                        <?php }
                            else
                                echo"Something Went Wrong";
                        ?>
                        <?php
                        $sql1 = "SELECT subject1 FROM faculty where fusername='$username1'";
                        while($row = $result->fetch_assoc()) {
                            $subject1=$row['subject1'];
                        $sql2 = "SELECT * FROM store s,faculty f where s.subject1=f.subject1 AND f.subject1='$subject1'";
                        $result = mysqli_query($conn,$sql2);
                        if (mysqli_num_rows($result) > 0) { 
                        ?>
                        <div>
                            
                            
                            <table class="table" border="2">
                                <tr>
                                    <th>USN</th>
                                    <th>Subject</th>
                                    <th>Field</th>
                                    <th>Expected Marks</th>
                                    <th></th>
                                    
                                    
                                </tr>
                                <?php
                                    $t=0;
                                    $result = mysqli_query($conn,$sql2);
                                    while($row = $result->fetch_assoc()){
                                    $t=$t+1;
                                ?>
                                <tr>
                                    
                                    <td name="user"><?php $id=$row['username'];
                                    echo $row['username']; ?></td>
                                    <td name="sub"><?php $sub=$row['subject1'];echo $row['subject1']; ?></td>
                                    <td name="fie"><?php $field=$row['field'];echo $row['field']; ?></td>
                                    <td style="color:red" name="exp"><?php echo $row['expected']; ?></td>
                                    <td><a href="update.php?id=<?php echo $id; ?>&field=<?php echo $field; ?>&subject1=<?php echo $sub; ?>">Update</a></td>
                                    
                                    
                                <tr>
                                


                            <?php
                                    }
                                }
                                else{
                                        echo "No Issues<br/>";
                                        
                                    }
                                }
                            ?>
                            
                            </table> 
                            <br/><br/>
                            <input type="button" value="Add New Marks" id="b1" class="b" style="float:bottom;" onclick="window.location.href='7facultyPage2.html'">   
                        </div>                       

                    </div>
                    
        </body>
   
</html>


                        