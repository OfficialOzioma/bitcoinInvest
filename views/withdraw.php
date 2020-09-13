<?php use thecodeholic\phpmvc\Application; ?>
<?php use Carbon\Carbon; ?>
<h3> Request for Payments </h3>
<p>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
    Withdraw here
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="/withdraw" method="post">
          <div class="modal-header">
            <h5 class="modal-title">Bitcoin Withdrawal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="user_id" value="<?php echo Application::$app->userId; ?>">
            <div class="form-group">
              <label for="">How much do you want to withdraw </label>
              <input type="number" class="form-control form-control-lg" name="amount" placeholder="Enter the Amount" pattern="[0-9]+([\.][0-9]+)?" step="0.0000000001" title="The number input must start with a number and use either comma or a dot as a decimal character." required >
            </div>
            <div class="form-group">
              <label for="">Which bitcoin address <i class="mdi mdi-currency-btc"></i></label>
              <select name="bitcoin_address" class="form-control form-control-lg" required>
                <?php 
                  foreach ($addresses as $address) {       
                ?>
                <option value="<?php echo $address['bitcoin_address'];?>" ><?php echo $address['address_name'];?></option>
                <?php
                  }
                ?>
              </select>
            </div>
            
            <input type="hidden" name="status" value="Pending">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Withdraw</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</p>
<br /> 
<div class="table-responsive-md">
   <font size="3" face="Courier New" >
    <table class="table" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Amount to Withdraw</th>
          <th scope="col">Status</th>
          <th scope="col">Date</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
        if (count($withdraws) > 0) {
          $number = 1;
          foreach ($withdraws as $withdraw)
          {
            // $user = User::findOne(['id'=>$withdraw['user_id']]);
            $colorClass = $colorArr[$withdraw['status']];
      ?>
        <tr> 
          <th scope="row"><?php echo $number; ?></th>
          <td><?php echo $withdraw['amount']?></td>
          <td><span class="<?php echo $colorClass; ?> p-2"><?php echo $withdraw['status']?></span></td>
          <td><?php echo Carbon::parse($withdraw['date'])->diffForHumans()?></td>
        </tr>
      <?php  
            $number++;
            }
          } else {
            echo" <tr>
                    <th scope='row'></th>                   
                    <td></td>
                    <td>Records not found!</td>
                  </tr>";
          }
      ?>     
      </tbody>
    </table>
  </font>
</div>