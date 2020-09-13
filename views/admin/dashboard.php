<div class="row">
     <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-account-multiple"></i></h1>
                <h6 class="text-white">Al Users</h6>
                <h6 class="text-white"><?php echo $userList ?? 0; ?></h6>
            </div>
        </div>
    </div>
                    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                <h6 class="text-white">Total Investments</h6>
                <h6 class="text-white"> <i class="mdi mdi-currency-btc"></i> <?php echo $total->total_investments ?? 0; ?></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-package"></i></h1>
                <h6 class="text-white">All Packages</h6>
                <h6 class="text-white"> <?php echo $packageList ?? 0; ?></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-cash-100"></i></h1>
                <h6 class="text-white">Total Withdraws</h6>
                <h6 class="text-white"> <i class="mdi mdi-currency-btc"></i> <?php echo $total->total_withdrawal ?? 0; ?></h6>
            </div>
        </div>
    </div>

</div>