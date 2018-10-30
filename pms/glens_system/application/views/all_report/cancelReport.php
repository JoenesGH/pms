<?php
defined('BASEPATH') OR exit('');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Canceled Order Report</title>
		
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>public/images/logoup.png">
        <!-- favicon ends --->
        
        <!--- LOAD FILES -->
        <?php if((stristr($_SERVER['HTTP_HOST'], "localhost") !== FALSE) || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE)|| (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)): ?>
        <link rel="stylesheet" href="<?=base_url()?>public/bootstrap/css/bootstrap.min.css">

        <?php else: ?>
        
        <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">

        <?php endif; ?>
        
        <!-- custom CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>public/css/main.css">
        <link rel="stylesheet" href="<?=base_url()?>public/Ionicons/css/ionicons.css">
        <link rel="stylesheet" href="<?=base_url()?>public/Ionicons/css/ionicons.min.css">
    </head>

    <body>
        <div class="container margin-top-5">
            <div class="row">
                <div class="col-xs-12 text-right hidden-print">
                    <button class="btn btn-primary btn-sm" onclick="window.print()"><i class="ion-ios-printer-outline"></i> Print Report</button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4><b>GLEN'S PHARMACY</b></h4>
                    <h5>Canceled Order Report</h5>
                </div>
            </div>
            
            <div class="row margin-top-5">
                <div class="col-xs-12 table-responsive">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading text-center">
                            Stock list
                        </div>
                        <?php if($allitems): ?>
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>TRANSACTION NO</th>
                                        <th>TOTAL ITEMS</th>
                                        <th>TOTAL AMOUNT</th>
                                        <th>CUSTOMER</th>
                                        <th>ADDRESS</th>
                                        <th>MOBILE</th>
                                        <th>PICKUP DATE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn = 1;?>
                                    <?php foreach($allitems as $get): ?>
                                    <tr>
                                        <th><?= $sn ?>.</th>
                                        <td><?= $get->ref ?></td>
                                        <th><?= $get->quantity ?></th>
                                        <th>Php <?= number_format($get->totalMoneySpent, 2) ?></th>
                                        <th><?= $get->cust_name ?></th>
                                        <th><?= $get->cust_address?></th>
                                        <th><?= $get->cust_phone ?></th>
                                        <td><?= $get->pick_date ?></td>
                                                                               
                                    <?php $sn++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- table div end--->
                        <?php else: ?>
                            <ul><li>No Transaction Found Within Specified Dates</li></ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-bottom: 10px">
                <div class="col-xs-6">
                    <button class="btn btn-primary btn-sm hidden-print" onclick="window.print()"><i class="ion-ios-printer-outline"></i> Print Report</button>
                </div>
                
                <div class="col-xs-6 text-right">
                    <h4>SAMPLE 1</h4>
                </div>
            </div>
        </div>
        <!--- panel end-->
    </body>
</html>