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
 $sid=$_GET['sid'];
 echo $sid;


 $qury="SELECT * FROM `lib` WHERE rollno='$sid' ";
 $run=mysqli_query($con,$qury);
 $data=mysqli_fetch_assoc($run);


  ?>
  <h1 align="center">UpdateLibrary Detail</h1>
  <form class="" action="update2form.php" method="POST" enctype="multipart/form-data">
    <table align="center">
      <tr>
        <td>BOOK ID</td>
        <td>: <input type="text" name="book_id" value="<?php echo $data['book_id'] ?>" ></td>
      </tr>
      <tr>
        <td>ROLLNO</td>
        <td>: <input type="text" name="rollno" value="<?php echo $data['rollno'] ?>"></td>
      </tr>
      <tr>
        <td>BOOK NAME</td>
        <td>: <input type="text" name="bname"value="<?php echo $data['book_name'] ?>" ></td>
      </tr>

      <tr>
         <td>ISSUED DATE</td>
         <td>: <input type="text" name="i_date" value="<?php echo $data['issued_date'] ?>" ></td>
       </tr>
       <tr>
         <td>RETURN DATE</td>
         <td>: <input type="text" name="r_date" value="<?php echo $data['return_date'] ?>"></td>
       </tr>

    </table>
     <input type="hidden" name="sid" value="<?php echo $data['rollno'] ?>"/>
      
    <input type="submit" name="submit" value="update" style="border-radius: 25px;
  border: 1px solid #609;
  width: 150px;
  font-size:20px ;
   background-color: aquamarine;padding: 5px 10px;
   margin-left: 600px;
     ">

  </form>

</body>
</html>
