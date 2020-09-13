<?php use thecodeholic\phpmvc\Application; ?>
<h2>Enter your Bitcoin address below</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Enter Bitcoin Address here
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="/admin/settings" method="post">
                <div class="modal-header">
                <h5 class="modal-title">Bitcoin Address</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="admin_id" value="<?php echo Application::$app->admin; ?>">
                    <div class="form-group">
                        <label for="">Give your Bitcoin address a name</label>
                        <input type="text" class="form-control form-control-lg" name="address_name" placeholder="Enter the Name" required >
                    </div>
                    <div class="form-group">
                        <label for="">Your Bitcoin address</label>
                        <input type="text" class="form-control form-control-lg" name="bitcoin_address" placeholder="Enter your bitcoin address" required >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            
        </div>
    </div>
</div> 
<br /><br />
<div class="table-responsive-md M-3">
   <font size="3" face="Courier New" >
    <table class="table" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">S/N</th>
          <th scope="col">Address name</th>
          <th scope="col">Bitcoin address</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
        if (count($addresses) > 0) {
          $number = 1;
          foreach ($addresses as $address)
          {
            // $user = User::findOne(['id'=>$withdraw['user_id']]);
            //$colorClass = $colorArr[$withdraw['status']];
      ?>
        <tr> 
            <th scope="row"><?php echo $number; ?></th>
            <td><?php echo $address['address_name']?></td>
            <td><?php echo $address['bitcoin_address']?></td>
            <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#model_<?php echo $address['id']?>">
                  View
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="model_<?php echo $address['id']?>" tabindex="-1" role="dialog" aria-labelledby="modelTitle_<?php echo $address['id']?>" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="/admin/settings/delete" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title"><?php echo $address['address_name']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> <span class="bg-primary text-white p-1"> Address name:</span><strong> <?php echo $address['address_name']?> </strong></p>
                                    <p> <span class="bg-primary text-white p-1"> Bitcoin Address :  </span> <?php echo $address['bitcoin_address']?></p>
                                    <input type="hidden" name="id" value="<?php echo $address['id']?>">
                                    <br />
                                    <div class="m-1">
                                        <img src="https://www.bitcoinqrcodemaker.com/api/?style=bitcoin&amp;address=<?php echo $address['bitcoin_address']?>" height="300" width="300" border="0" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            
            </td>
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