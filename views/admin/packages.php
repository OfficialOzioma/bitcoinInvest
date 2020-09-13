<h2>
    <div class="container">
        <span>
            <button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#modelId">
                Create New Package
            </button>
        </span>
    </div>
</h2>
<?php use thecodeholic\phpmvc\Application; ?>
<?php if (Application::$app->session->getFlash('success')): ?>
    <div class="alert alert-success">
        <p><h3><?php echo Application::$app->session->getFlash('success') ?></h3></p>
    </div>
<?php endif; ?>
<br />

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Create New Package</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
               
                    <div class="form-group">
                        <label for="">Name of the Package </label>
                        <input type="text" class="form-control form-control-lg" name="packageName" placeholder="Name Of the Package" required>
                    </div>
                    <div class="form-group">
                        <label for="">Amount to Invest <i class="mdi mdi-currency-btc"></i></label>
                        <input type="number" class="form-control form-control-lg" name="investmentAmout" placeholder="Amount to Invest btc" pattern="[0-9]+([\.][0-9]+)?" step="0.0000000001" title="The number input must start with a number and use either comma or a dot as a decimal character." required>
                    </div>
                     <div class="form-group">
                        <label for="">Amount to Earn  <i class="mdi mdi-currency-btc"></i></label>
                        <input type="number" class="form-control form-control-lg" name="earningAmount" placeholder="Amount to Earn btc" pattern="[0-9]+([\.][0-9]+)?" step="0.0000000001" title="The number input must start with a number and use either comma or a dot as a decimal character." required >
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
                    <div class="form-group">
                        <label for="">Details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details" required></textarea>
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<br/>
<h3> All Investment Packages</h3>

<div class="row">
    <?php

        if (count($packages) > 0) {
            foreach ($packages as $package) 
            {
      
    ?>
            <div class="card mr-2 " style="max-width: 500px; border: 1px solid #333">
                <div class="row no-gutters">
                    <div class="col-sm-5" style="background: #868e96;">
                        <img src="../images/ndnd.png" class="card-img-top h-100" alt="bitcoin">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title bg-success text-white p-3 text-center text-capitalize" style="border: 1px solid green">
                                <?php echo $package['packageName'];?>
                            </h5>
                            <p class="card-text">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item" ><strong>Amount to Invest: <span class="badge badge-pill badge-warning p-2" style="font-size: 12pt;"> <i class="mdi mdi-currency-btc"></i> <?php echo $package['investmentAmout'];?></span></strong></li>
                                    <li class="list-group-item"><strong>Amount to earn: <span class="badge badge-pill badge-warning p-2" style="font-size: 12pt;"> <i class="mdi mdi-currency-btc"></i> <?php echo $package['earningAmount'];?></span></strong></li>
                                </ul>
                                <?php echo $package['details'];?>
                            </p>
                            <form method="post" action="/delete">
                                <input type="hidden" name="id" value="<?php echo $package['id']; ?>">
                                <button class="btn btn-danger stretched-link" type="submit">Delete Package</button>
                            </form>
                           
                        </div>
                        
                    </div>
                    
                </div>
                <div class="card-footer bg-success text-white p-3 text-center" style="border: 1px solid green">
                    <small class="text-white">&copy; Bitcoin Investments</small>
                </div>
            </div>
    <?php  
           
            }
        } else {
        // records not found
            echo 'Records not found!';
        }
    ?>                   
</div>


