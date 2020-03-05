<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../teacherlogin.php');
}


 ?>
 <?php

 include('header2.php');
 include('header1.php');
 include('../dbcon.php');

 $rid=$_GET['rid'];

 $qury="SELECT * FROM `result` WHERE rollno='$rid'";
 $run=mysqli_query($con,$qury);
 $data=mysqli_fetch_assoc($run);
 echo $rid;





  ?>
  <body>
     <h1 align="center">Student Result</h1>
     <form class="" action="updateresult3.php" method="POST"  >
       <table align="center">
         <tr>
           <td>Roll_no</td>
           <td>: <input type="text" name="roll_no" value="<?php echo $data['rollno']?>" required></td>
         </tr>
         <tr>
           <td>course id</td>
           <td>: <input type="text" name="course_id" value="<?php echo $data['course_id']?>"required></td>
         </tr>
         <tr>
           <td>course grade</td>
           <td>: <input type="text" name="course_grade"value="<?php echo $data['course_grade']?>" required></td>
         </tr>
         <tr>
           <td>status</td>
           <td>: <input type="text" name="status"value="<?php echo $data['status']?> "required></td>
         </tr>
         <tr>
            <td>test type</td>
            <td>: <input type="text" name="test_type" value="<?php echo $data['test_type']?>"required></td>
          </tr>


       </table>
       <input type="hidden" name="sid" value="<?php echo $data['rollno'] ?>"/>
       <input  class="bt"type="submit" name="submit"  value="update result" style="margin-left: 650px" >

     </form>

  </body>
</html>
