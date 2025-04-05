<?php 
include('partials/menu.php');
?>

         <!-- Menu content Section Starts  -->
         <div class="main-content">
         <div class="wrapper">
            <h1>Manage Admin</h1>
            <br><br><br>

            <!-- Button to add admin -->
             <a href="add-admin.php" class="btn-primary">Add Admin</a>
               <br><br> <br>


     <table class="tbl-full">
      <tr>
         <th>S.no.</th>
        <th>Full Name</th>
        <th>Username</th>
        <th>Actions</th>
      </tr>
      <tr>
         <td>1.</td>
         <td>Naman Fuloria</td>
         <td>namanfuloria</td>
         <td>
<a href="#" class="btn-secondary">Update Admin</a>            
<a href="#" class="btn-danger">Delete Admin</a>            
         </td>
      </tr>


      <tr>
         <td>2.</td>
         <td>Naman Fuloria</td>
         <td>namanfuloria</td>
         <td>
         <a href="#" class="btn-secondary">Update Admin</a>            
         <a href="#" class="btn-danger">Delete Admin</a>     
         </td>
      </tr>

      
      <tr>
         <td>3.</td>
         <td>Naman Fuloria</td>
         <td>namanfuloria</td>
         <td>
         <a href="#" class="btn-secondary">Update Admin</a>            
         <a href="#" class="btn-danger">Delete Admin</a>     
         </td>
      </tr>
</table>
            </div>
         </div>
          <!-- Menu content Section Ends -->

    <?php
    include('partials/footer.php');
    ?>