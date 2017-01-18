<?php include'inc/header.php'?>

             <div class="panel-heading">
                 <h2>update student<a  class="btn btn-success pull-right" href="index.php">back</a></h2>
                </div>
                 <div class="panel-body">
                     <form action="lib/process_student.php" method="post">
                         <div class="form-group">
                             <label for="name">student name</label>
                             <input class="form-control" type="text" name="name" id="name" required="1" value="asif rahman"/>
                         </div>
                           <div class="form-group">
                             <label for="email">student email</label>
                             <input class="form-control" type="text" name="email" id="email" required="1" value=ass@gmail.com/>
                         </div>
                           <div class="form-group">
                             <label for="phone">student phone</label>
                             <input class="form-control" type="text" name="phone" id="phone" required="1" value="87346378"/>
                         </div>
                           <div class="form-group">
                              
                             <input  type="hidden" name="id" value="1" />
                             <input  type="hidden" name="action" value="edit" />
                             <input class="btn btn-primary" type="submit" name="submit" value="update student"/>
                         </div>
                     </form>
                 
             </div>

<?php include'inc/footer.php'?>