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

  ?>
  <body>
     <h1 align="center">Student Result</h1>
     <form class="" action="insertresult.php" method="POST">
       <table align="center">
         <tr>
           <td>Roll_no</td>
           <td>: <input type="text" name="roll_no" required></td>
         </tr>
         <tr>
           <td>course id</td>
           <td>: <input type="text" name="course_id" required></td>
         </tr>
         <tr>
           <td>course grade</td>
           <td>: <input type="text" name="course_grade" required></td>
         </tr>
         <tr>
           <td>status</td>
           <td>: <input type="text" name="status" required></td>
         </tr>
         <tr>
            <td>test type</td>
            <td>: <input type="text" name="test_type" required></td>
          </tr>

       </table>
       <input class="bt" type="submit" name="submit"  value="INSERT RESULT" style="margin-left: 655px" >

     </form>

  </body>
</html>

<?php


if(isset($_POST['submit']))
{
  include('../dbcon.php');
  $roll_no=$_POST['roll_no'];

  $course=$_POST['course_id'];
  $grade=$_POST['course_grade'];
  $status=$_POST['status'];
  $test=$_POST['test_type'];
  $qury="INSERT INTO `result`(`rollno`, `course_id`, `course_grade`, `status`, `test_type`) VALUES ('$roll_no','$course','$grade','$status','$test')";
  $run=mysqli_query($con,$qury);

  if($run==true)
  {
  ?>
  <script>
    alert('data successfully added');
  </script>

  <?php
  }
  else {
    echo"not submited";
  }



}



 ?>
