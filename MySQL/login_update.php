<?php include "db.php";?>
<?php include "functions_mysql.php";?>
<?php UpdateTable(); ?>
<?php include "Includes/header.php" ?>
  
   <div class="container">
       <div class="col-sm-6">
           <h1 class = "text-center">Update</h1>
            <form action="login_update.php" method ="post">
               <div class="form-group">
                  <label for="username">Username</label>
                   <input type="text" name="username" class="form-control">
               </div>
               <div class="form-group">
                  <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
               </div>
               
               <div class="form-group">
                <select name="Id" id="Id" class="name">
                
                    <?php
                    showAllData();
                    ?>
                
                </select>
                </div>
               
               <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
           </form>
       
       </div>
   </div>
    
<?php include "Includes/footer.php" ?>