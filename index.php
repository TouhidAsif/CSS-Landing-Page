<?php
include'inc/header.php';
include'lib/database.php';

?>
<div class="panel-body">
             <div class="panel-heading">
                 <h2>student data<a  class="btn btn-success pull-right" href="addstudent.php">add student</a></h2>
             </div>
             <table class="table table-striped">
                 <tr>
                     <th>serial</th>
                     <th>name</th>
                     <th>email</th>
                     <th>phone</th>
                     <th>action</th>
                 
                 </tr>
                 <?php
                 
                 $db = new Database();
                 $table="tbl_student";
                 $order_by= array('order_by'=>'id DESC');
                 /*
                $selectcond= array('select'=>'name');
                 $wherecond= array(
                   'where'=>array('id' => '2','email' => 'assi@.gmail.com'),
                     'return_type' => 'single');
                 
                     $limit= array('start'=>'2','limit'=>'4');
                     $limit= array('limit'=>'4');
                 
                 */
                 
                 $studentData=$db->select($table,  $order_by);
                 if(!empty($studentData)){
                     $i=0;
                     foreach($studentData as $data){ $i++;?>
          
                 <tr>
                     <td><?php echo $i;?></td>
                     <td><?php echo $data['name'];?></td>
                     <td><?php echo $data['email'];?></td>
                     <td><?php echo $data['phone'];?></td>
                 <td>
                         <a  class="btn btn-default" href="editstudent.php? id=<?php echo $data['id'];?>">edit</a> 
                         <a class="btn btn-danger" href="deletestudent.php? id=<?php echo $data['id'];?>" onclick="return confirm('are you sure?')">delete</a>
                     </td>
                 
                 </tr>
                 <?php } }else {?>
                 <tr><td colspan="5">No student data found</td></tr>
                 <?php }?>
             
             </table>
</div>
    <?php include'inc/footer.php';?>