<?php
include('partials/menu.php')

?>

<div class="main-content">
    <div class="wrapper">
    <h1>Add Admin</h1>
    <br><br>

    <form action="" method="POST">
    <table class="tbl-30">
        <tr>
            <td>Full Name: </td>
              <td><input type="text" name="full_name" placeholder="Enter your name"></td>
        </tr>

        <tr>
        <td>Username: </td>
        <td><input type="text" name="username" placeholder="Your username"></td>

        </tr>
        <tr>
        <td>Password: </td>
        <td><input type="password" name="password" placeholder="Your password"></td>

        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
            </td>
        </tr>

    </table>


    </form>

    </div>

</div>









<?php 
include('partials/footer.php')

?>

<?php
// process a value from Form and Save it in database
// Check whether the button is clicked or not?

if(isset($_POST['submit'])){
    // button clicked
    // echo"Button Clicked" ;
    // get data from form
     $full_name=$_POST['full_name'];
     $username=$_POST['username'];
     $password=md5($_POST['password']);//pass encrypted with md5

    //  Sql query to save the data into database
    $sql="INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'
     ";
    //  Execute query and save data in database

   $conn =mysqli_connect('localhost','root','') ; //database connectivity
   $conn = mysqli_connect('localhost', 'root', '', 'food-order');


    // $res = mysqli_query($conn,$sql) ;

}


?>