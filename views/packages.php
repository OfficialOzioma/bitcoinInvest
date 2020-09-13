<?php use thecodeholic\phpmvc\Application; ?>
<h3> All Available Investment Packages</h3>

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
                            <button type="button" class="btn btn-success stretched-link btn-lg" data-toggle="modal" data-target="#model_<?php echo $package['id']; ?>">
                                Invest on this Package
                            </button>
                                
                                <!-- Modal -->
                            <div class="modal fade" id="model_<?php echo $package['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitle_<?php echo $package['id']; ?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="post" action="/packages/invest">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo $package['packageName'];?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                                You are to make a payment of 
                                                <span class="badge badge-pill badge-warning p-1" style="font-size: 10pt;">
                                                    <i class="mdi mdi-currency-btc"></i>
                                                    <?php echo $package['investmentAmout'];?>
                                                </span> btc into this bitcoin address below or scan the barcode below <br />
                                                then the admin will approve your Investment
                                                <div class="m-3">
                                                    <span class="badge badge-pill badge-warning p-2 mb-1" style="font-size: 10pt;"><?php echo $package['bitcoin_address']; ?></span>
                                                    <img src="https://www.bitcoinqrcodemaker.com/api/?style=bitcoin&amp;address=<?php echo $package['bitcoin_address']; ?>" height="300" width="300" border="0" />
                                                </div>
                                                <input type="hidden" name="package_id" value="<?php echo $package['id']; ?>">
                                                <input type="hidden" name="user_id" value="<?php echo Application::$app->userId; ?>">
                                                <input type="hidden" name="amount_invested" value="<?php echo $package['investmentAmout']; ?>">
                                                <input type="hidden" name="amount_to_earn" value="<?php echo $package['earningAmount']; ?>">
                                                <input type="hidden" name="status" value="Pending">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">I have made the payment</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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


