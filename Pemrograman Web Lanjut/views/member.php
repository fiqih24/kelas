<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading"> Data User </div>
    <div class="panel-body">

     <table id="fiq_dt" class="table table-bordered">
       <thead>
         <tr>
           <th>Username</th>
           <th >Nama</th>
           <th >Email</th>
           <th>Password</th>
           <th>STATUS</th>
           <th >Aksi</th>
         </tr>
       </thead>

       <tbody>
         <?php

             foreach ($list_member as $member) {
               echo '<tr>
                     <td class="ctr">'.$member->username.'</td>
                     <td>'.$member->nama.'</td>
                     <td>'.$member->password.'</td>
                     <td>'.$member->email.'</td>
                     <td>'.$member->status.'</td>
                     <td class="">
                       <div class="btn-group">
                         <a href="#" onclick="return user_edit('.$member->username.');" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i></a>
                         <a href="#" onclick="return user_del('.$member->username.');" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" style="margin-left: 0px; color: #fff"></i> </a>
                         <a href="#" onclick="return send_user('.$member->username.');" class="btn btn-success btn-xs"><i class="fa fa-envelope" style="margin-left: 0px; color: #fff"></i> </a>
                         ';



               echo '</div>
                     </td>
                     </tr>
                     ';

             }

         ?>
       </tbody>
     </table>
</div>

</div>
</div>
</div>
