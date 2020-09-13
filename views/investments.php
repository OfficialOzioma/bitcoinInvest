<?php use app\models\User; ?>
<?php use app\models\Packages; ?>

<h3> All Your Investments</h3>

<div class="table-responsive-md">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">Package</th>
      <th scope="col">Amount invested</th>
      <th scope="col">Amount to Earn</th>
      <th scope="col">Status</th>
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
      <td><?php echo $packageName->packageName ?? 'Package was Deleted';?></td>
      <td><?php echo $investment['amount_invested'];?></td>
      <td><?php echo $investment['amount_to_earn'];?></td>
      <td><span class="<?php echo $colorClass; ?> p-2"><?php echo $investment['status']?></span></td>
    </tr>
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
</div>
