<?php include'inc/header.php'?>

             <div class="panel-heading">
                 <h2>add student<a  class="btn btn-danger pull-right" href="index.php">back</a></h2>
                </div>
                 <div class="panel-body">
                     <form action="lib/process_student.php" method="post">
                         <div class="form-group">
                             <label for="name">student name</label>
                             <input class="form-control" type="text" name="name" id="name" required="1"/>
                         </div>
                           <div class="form-group">
                             <label for="email">student email</label>
                             <input class="form-control" type="text" name="email" id="email" required="1"/>
                         </div>
                           <div class="form-group">
                             <label for="phone">student phone</label>
                             <input class="form-control" type="text" name="phone" id="phone" required="1"/>
                         </div>
                           <div class="form-group">
                              
                             <input  type="hidden" name="action" value="add" />
                             <input class="btn btn-primary" type="submit" name="submit" value="add student"/>
                         </div>
                     </form>
                 
             </div>

<?php include'inc/footer.php'?>