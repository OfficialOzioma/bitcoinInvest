
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-package"></i></h1>
                <h6 class="text-white">Total Packages Invested</h6>
                <h6 class="text-white"> 
                    <?php
                        $numbers = 0;
                        if(count($findpackages) > 0){
                            foreach ($findpackages as $findpackage) {
                                $numbers++;
                            }
                            echo $numbers;
                        }else{
                            echo $numbers;
                        }
                    ?>
                </h6>
            </div>
        </div>
    </div>
                    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                <h6 class="text-white">Investments</h6>
                <h6 class="text-white"> <i class="mdi mdi-currency-btc"></i> <?php echo $findTotal->total_amount_invested; ?></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi  mdi-cash-multiple"></i></h1>
                <h6 class="text-white">Amount Earned</h6>
                <h6 class="text-white"> <i class="mdi mdi-currency-btc"></i> <?php echo $findTotal->Total_amount_earned; ?></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-cash-100"></i></h1>
                <h6 class="text-white">Total Withdraw</h6>
                <h6 class="text-white"> <i class="mdi mdi-currency-btc"></i> <?php echo $findTotal->total_amount_withdrawn; ?></h6>
            </div>
        </div>
    </div>
</div>
<span><h1>INVESTMENTS PACKAGES</h1></span>
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
                       <a href="/packages" class="text-white">Invest on this Package</a> 
                    </button>
                       <!-- Modal -->
                    
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
       
        }
    ?>      
        

</div>

<!-- <img src="https://www.bitcoinqrcodemaker.com/api/?style=bitcoin&amp;address=1FfmbHfnpaZjKFvyi1okTjJJusN455paPH" height="300" width="300" border="0" /> -->