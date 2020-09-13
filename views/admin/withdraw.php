<?php use app\models\User; ?>
<?php use Carbon\Carbon; ?>

<div class="table-responsive-md">
  <font size="3" face="Courier New" >
    <table class="table" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Fullname</th>
          <th scope="col">Amount Requested</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
        if (count($withdraws) > 0) {
          $number = 1;
          foreach ($withdraws as $withdraw)
          {
            $user = User::findOne(['id'=>$withdraw['user_id']]);
            $colorClass = $colorArr[$withdraw['status']];
      ?>
        <tr> 
          <th scope="row"><?php echo $number; ?></th>
          <td><?php echo $user->fullname; ?></td>
          <td><?php echo $withdraw['amount']?></td>
          <td><span class="<?php echo $colorClass; ?> p-2"><?php echo $withdraw['status']?></span></td>
          <td><?php echo Carbon::parse($withdraw['date'])->diffForHumans()?></td>
          <td>
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#id_<?php echo $withdraw['id']?>">
                View
            </button>
          </td>
        </tr>

      <!-- Modal -->
        <div class="modal fade" id="id_<?php echo $withdraw['id']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                    <h2 style="text-decoration:underline;" class="text-capitalize"> <?php echo$user->fullname; ?> </h2>
                    <p><strong>Amount Requested: </strong><?php echo $withdraw['amount']?> </p>
                    <p><strong>Status: </strong><?php echo $withdraw['status']?> </p>
                    <p><strong>Date: </strong><?php echo Carbon::parse($withdraw['date'])->diffForHumans()?></p>
                    <hr />
                    <div class="m-3">
                      <span class="badge badge-pill badge-warning p-2 mb-1" style="font-size: 10pt;"><?php echo $withdraw['bitcoin_address']; ?></span>
                      <img src="https://www.bitcoinqrcodemaker.com/api/?style=bitcoin&amp;address=<?php echo $withdraw['bitcoin_address']; ?>" height="200" width="200" border="0" />
                    </div>
                    <hr />
                    <p><strong>Status: <select name="status" class="form-control form-control-lg">
                      <option value="Pending" >Pending</option>
                      <option value="Cancelled" >Cancelled</option>
                      <option value="Approved" >Approved</option>
                      <option value="Paid" >Paid</option>
                    </select></p> 
                    <input type="hidden" name="id" value="<?php echo $withdraw['id']?>">
                    <input type="hidden" name="user_id" value="<?php echo $withdraw['user_id']?>">
                    <input type="hidden" name="amount" value="<?php echo $withdraw['amount']?>">

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

