<!DOCTYPE html>
<html>
<body>

<article class="container">
        
        <h2> Pharmkart (<?php echo $invice_no; ?>): <?php echo $consignment; ?> / <?php echo $status; ?> </h2>
            
            
        <section class="col-md-12">
            <h3>Consignee Details</h3>
            <span class="large"><?php echo $ship_name; ?></span>
            <address>
                <?php echo $shiper_add; ?> </br>
                 <?php echo $phone; ?>
            </address>
            
        </section>
        <section class="col-md-12">
            <h3>Package Details</h3>
            <strong>
              <?php  if ($package_type == 'COD') { ?>
                    COD : Rs <?php echo $package_amount; ?>
             <?php } else {?> 

             PrePaid

             <?php } ?>
                
            </strong><br>
            
            <?php echo $package_description; ?> <br>  
            Amount: Rs <?php echo $package_amount; ?> <br>
            Weight: 0.00 gms <br>

            Category: Surface
                  
            <br>
            

            <p class="small">
            Order Date: <?php echo $book_date; ?><br>
            Pickup Date: <?php echo $pick_date; ?>, <?php echo $pick_time; ?><br>
            
            
            
            
            </p>
            <p></p>
        </section>
        <hr class="space">
    
   <section>
        <h3>Status / Scan Details</h3>
        <table class="table">
            <thead>
                <tr>
                <th>Photo</th>
                <th>Status</th>
                <th>Status Date</th>
                <th>Remarks</th>
                <th>Location</th>
                <th>Updated by</th>
                <!---->
            </tr></thead>
            <tfoot>
                <tr><td colspan="5">
                    <p>For further Detials mail us on support@pharmkart.com .if you want to join our delivery team <a href=""> click here </a> </p></td></tr>
            </tfoot>
            <tbody>
                 
                
                <tr>
                    <td><img style="width:45px;height:45px;" src="http://www.medcol.mw/pharmacy/images/gallery/no_image.png"></td>
                    <td>Delivered</td>
                    <td>Oct. 29, 2014, 5:20 p.m.</td>
                    <td>Delivered at Mailroom</td>
                    <td>srinagar_north (Jammu &amp; Kashmir)</td>
                    <td>Delhivery</td>
                </tr>
            
              
            </tbody>
        </table>
    </section>


        
    </article>