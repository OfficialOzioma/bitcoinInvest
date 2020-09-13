<?php use thecodeholic\phpmvc\Application; ?>
<?php if (Application::$app->session->getFlash('success')): ?>
    <div class="alert alert-success">
        <p><?php echo Application::$app->session->getFlash('success') ?></p>
    </div>
<?php endif; ?>

<h3 class="text-center"> All User</h3>

<div class="table-responsive-md">
  <font size="2" face="Courier New" >
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Fullname</th>
          <th scope="col">Email</th>
          <th scope="col">Username</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
    <tbody>
    <?php
        if (count($getUsers) > 0) {
          $number = 1;
          foreach ($getUsers as $getUser)
          {
            // $username = User::findOne(['username'=>$investment['username']]);
            // $packageName = Packages::findOne(['id'=>$investment['package_id']]);  
            $colorClass = $colorArr[$getUser['status']];
      ?>
      <tr>
        <th scope="row"><?php echo $number; ?></th>
        <td><?php echo $getUser['fullname'];?></td>
        <td><?php echo $getUser['email'] ?></td>
        <td><?php echo $getUser['username'];?></td>
        <td><span class="<?php echo $colorClass; ?> p-2"><?php echo $getUser['status'] ?? 'inactive'?></span></td>
        <td> 
            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#id_<?php echo $getUser['id']?>">
                See details <i class="mdi mdi-eye-outline"></i>
            </button>
        </td>
        <td> 
            <form action="/admin/users/delete" method="post">
                <input type="hidden" name="id" value="<?php echo $getUser['id']?>">
                <button type="submit" class="btn btn-outline-danger">
                    Delete  <i class="mdi mdi-delete-forever"></i>
                </button>
            </form>
        </td>
      </tr>
      <!-- Modal -->
        <div class="modal fade" id="id_<?php echo $getUser['id']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <form method="post">
                <div class="modal-header">
                  <h5 class="modal-title">View Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body ">
                    <h2 style="text-decoration:underline;" class="text-capitalize"> <?php echo $getUser['fullname'];?> </h2>
                    <p><strong>All packages Package: </strong><?php //echo $packageName->packageName ?? 'Package was Deleted'; ?> </p>
                    <p><strong>Total Amount invested: </strong><?php echo $getUser['amount_invested'] ?? '1000' ?> </p>
                    <p><strong>Total Amount to earn: </strong><?php echo $getUser['amount_to_earn'] ?? '1000'?> </p>
                    <p><strong>Status: </strong><?php echo $getUser['status'];?></p>
                    <hr />
                    <p><strong>Status: <select name="status" class="form-control form-control-lg">
                      <option value="inactive" >inactive</option>
                      <option value="Cancelled" >Cancelled</option>
                      <option value="Activated" >Activated</option>
                    </select></p>
                    <input type="hidden" name="id" value="<?php echo $getUser['id']?>">
                </div>      
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Update</button>
                </div> 
              </form>
          </div>
        </div>
      <?php  
            $number++;
            }
          } else {
          // records not found
            echo" <tr>
                    <th scope='row'></th>
                    <td></td>
                    <td></td>
                    <td>Records not found!</td>
                  </tr>";
          }
      ?>    
    </tbody>
  </table>
  </font>
</div>
