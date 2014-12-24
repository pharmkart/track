<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PharmKart Tracking Module</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/ripples.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>/assets/css/material-wfont.min.css" rel="stylesheet">
</head>

<body>

<div class="container">
  <header class="col-md-12" style="">      
      <h1>PharmKart.com Order Tracking</h1>   
  </header>
</div>

             

 <div class="container">
    <div class="col-md-5" id="tracking">   
            <input type="text" name="Consignment" placeholder="Enter the Consignment no..."  validate class="form-control empty" > 
            <div class="floating-label">Consignment NO</div>
            <span class="material-input"></span>
            <button class="btn btn-success chk">Track<div class="ripple-wrapper"></div></button>    
      </div>
  </div> <!-- /container -->



<div id="resultarea"></div>



        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/ripples.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script>

        

<script type="text/javascript"><!--


$('.chk').on('click', function() {
    $.ajax({
        url: '<?php echo base_url(); ?>/index.php/home/results',
        type: 'post',
        data: $('#tracking input[type=\'text\']'), //
        beforeSend: function() {
          $('#modal_box_l').modal({
          loading: true,
      
         });
    },      
        complete: function() {
     // $('#Shipment' ).addClass( "hidden" );
        },    
        success: function(data) {
            $("#resultarea").html(data);   
        }
    });
});
//--></script>

              
</body>
</html>