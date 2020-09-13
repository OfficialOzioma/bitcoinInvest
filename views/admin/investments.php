<?php use app\models\User; ?>
<?php use app\models\Packages; ?>


<h3> All Investments</h3>

<div class="table-responsive-md">
  <font size="2" face="Courier New" >
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Fullname</th>
          <th scope="col">Package</th>
          <th scope="col">Amount invested</th>
          <th scope="col">Amount to earn</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
    <?php
        if (count($investments) > 0) {
          $number = 1;
          foreach ($investments as $investment)
          {
            $user = User::findOne(['id'=>$investment['user_id']]);
            $packageName = Packages::findOne(['id'=>$investment['package_id']]);  
            $colorClass = $colorArr[$investment['status']];
      ?>
      <tr> 
        <th scope="row"><?php echo $number; ?></th>
        <td><?php echo $user->fullname;?></td>
        <td><?php echo $packageName->packageName ?? 'Package was Deleted';?></td>
        <td><?php echo $investment['amount_invested'];?></td>
        <td><?php echo $investment['amount_to_earn'];?></td>
        <td><span class="<?php echo $colorClass; ?> p-2"><?php echo $investment['status']?></span></td>
        <td> 
          <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#id_<?php echo $investment['id']?>">
                View
            </button>
        </td>
      </tr>
      <!-- Modal -->
        <div class="modal fade" id="id_<?php echo $investment['id']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                    <h2 style="text-decoration:underline;" class="text-capitalize"> <?php echo $user->fullname;?> </h2>
                    <p><strong>Package: </strong><?php echo $packageName->packageName ?? 'Package was Deleted'; ?> </p>
                    <p><strong>Amount invested: </strong><?php echo $investment['amount_invested']?> </p>
                    <p><strong>Amount to earn: </strong><?php echo $investment['amount_to_earn']?> </p>
                    <p><strong>Status: </strong><?php echo $investment['status'];?></p>
                    <hr />
                    <p><strong>Status: <select name="status" class="form-control form-control-lg">
                      <option value="Pending" >Pending</option>
                      <option value="Cancelled" >Cancelled</option>
                      <option value="Approved" >Approved</option>
                    </select></p>
                    <input type="hidden" name="id" value="<?php echo $investment['id']?>">
                    <input type="hidden" name="user_id" value="<?php echo $investment['user_id']?>">
                    <input type="hidden" name="amountInvest" value="<?php echo $investment['amount_invested']?>">
                    <input type="hidden" name="earn" value="<?php echo $investment['amount_to_earn']?>">


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
