<?php
session_start();

if(isset($_SESSION['uid']))
{

}
else {
  header('location:../adminlogin.php');
}
?>

<?php
include('header.php');
include('headtitle.php');
include('../dbcon.php');
$sid=$_GET['sid'];
$qury="SELECT * FROM `student` WHERE id='$sid'";
$run=mysqli_query($con,$qury);
$data=mysqli_fetch_assoc($run);


 ?>
 <form  method="post" action="updatedata.php" enctype="multipart/form-data">
   <table align="center">
         <tr>
           <td>NAME</td>
           <td>: <input type="text" name="name" value="<?php echo $data['name']  ?>" required></td>
         </tr>
         <tr>
           <td>ROLL NO</td>
           <td>: <input type="text" name="roll_no" value="<?php echo $data['id']  ?>"required></td>
         </tr>
         <tr>
           <td>EMAIL</td>
           <td>: <input type="email" name="e_mail" value="<?php echo $data['e-mail']  ?>"required></td>
         </tr>
         <tr>
           <td>ADDRESS</td>
           <td>: <input type="text" name="addr" value="<?php echo $data['address']  ?>"required></td>
         </tr>
         <tr>
            <td>DOB</td>
            <td>: <input type="text" name="dob"value="<?php echo $data['dob']  ?>" required></td>
          </tr>
         <tr>
           <td>MOBILE NO</td>
           <td>: <input type="text" name="ph_no" value="<?php echo $data['mobile_no']  ?>"required></td>
         </tr>
         <tr>
           <td>BATCH</td>
           <td>: <input type="text" name="batch"value="<?php echo $data['batch']  ?>" required></td>
         </tr>
         <tr>
           <td>DEPARTMENT</td>
           <td>: <input type="text" name="department"value="<?php echo $data['dept']  ?>" required></td>
         </tr>
         <tr>


         </tr>

       </table>
       <input type="hidden" name="sid" value="<?php echo $data['id'] ?>"/>
       <input class="bt"type="submit" name="submit" value="update" style="margin-left: 680px">


 </form>





</body>
</html>
