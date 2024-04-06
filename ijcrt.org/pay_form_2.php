<?php include("headstyle.php"); ?>
<?php //include("header.php"); ?>

<script>
function sum() {
            var txtFirstNumberValue = document.getElementById('amount1').value;
           var result = parseInt(txtFirstNumberValue) + 17;
            if (!isNaN(result)) {
                document.getElementById('amount').value = result;
            }
        }
		</script>
		
<div class="row">
<div class="col-md-8 col-md-push-2">
<div class="panel panel-body">
<div class="col-md-12 col-lg-12">
<?php	$r_id=$_GET['r_id'];?>
	<div class="row">
		<div class="col-lg-12">
			<span style="float:left"><a href="http://www.ijcrt.org">Home</a></span>
			<h3 class="page-header"><a href="http://www.ijcrt.org"><img src="https://www.ijcrt.org/Content/Images/new_ijcrt/smalled-1.png" alt="IJCRT Research Journal" width="100" height="80"></a>
IJCRT - Pay All Types of Fees Online ₹INR (Indian Rupee) </h3>
	<h5><i class="fa fa-bullhorn"></i>	Pay Fees Online through UPI/ Debit Card/ Credit Card/ NetBanking with Secure and Fast payment processing. For Indian Author Only </h5>
	
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
	<div class="col-lg-8">		
		<a href="http://ijcrt.org/paymentInfo.php" target="_blank">
			<i class="fa fa-money" aria-hidden="true"></i> If you Facing any difficulty than use this others option for payment
		</a><br>
		<a href="https://www.ijcrt.org/Authorhome/1a_selectpubcharges.php" target="_blank">
			<i class="fa fa-money" aria-hidden="true"></i> Fixed Amount Payment Link
		</a>
	</div>
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Indian Author - Online &#8377; INR Payment for Pay Publiction fees
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<form role="form" action="payment_option.php" method="POST" data-parsley-validate id="form">
					<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<label>Paper ID:  </br>Enter Six Digit Paper ID and Confirm Your Details for Payment  </label>
							 <div class="input-group mb-4 mr-sm-4 mb-sm-0">
							 <div class="input-group">
							<span class="input-group-addon" id="basic-addon1">IJCRT_</span>
							<input class="form-control" name="id"  data-parsley-required placeholder="Six Digit Paperid." id="id" maxlength="6" value="<?php echo $r_id; ?>"
							data-parsley-type='number'>
							<div class="input-group-addon btn btn-primary" id="fetch">Click Here to Confirm</div>
							  </div></div>
						</div>
						
						<div id="fetchedData">
						</div>
						
						<div class="form-group">
							<label>Enter Payment Amount in &#8377;INR (indian rupee): </br>
Pay as per acceptacne email or As per Charges of IJCRT							</label>
							<input class="form-control" name="amount1" onkeyup="sum();"  data-parsley-required 
							placeholder="Enter Amount" id="amount1"
							data-parsley-type='number' disabled maxlength="4"> 
						</div>
						
						<div class="form-group">
							<label>Final Amount with tax and processing charge (addition of &#8377; 17 INR): </label>
							<input class="form-control" name="amount"  data-parsley-required 
							placeholder="Enter Amount" id="amount"
							data-parsley-type='number' readonly="readonly">
						</div>
						
						<div class="form-group">
							<input type="hidden" value="payment_form_2" name="type">
							<input type="submit" class="btn btn-primary" value="Start Payment" name="payment_form">
						</div>
					
					</form>
					</div>
					
					</div>
					</div>
				</div>
				<!-- /.panel-body -->
				</div>
			<!-- /.panel -->
				<script>
				$(document).ready(function () {
					$('#fetch').click(function(){
						var id= $('#id').val();
						if(id){
							$.ajax({
								type:'POST',
								url:'getIdAjax.php',
								data:'id='+id,
								dataType:"json",
								success:function(data){
									if(data.flag==1){
										$('#amount').prop("disabled",false);
										$('#amount1').prop("disabled",false);
									}
									else
										$('#amount').prop("disabled",true);
									$('#fetchedData').html(data.html);                    
								}
							}); 
						}
						else{
							$('#fetchedData').html('');   
						}
					});
				});
				</script>
		
				</div>
                <!-- /.col-lg-12 -->
           
        <!-- /#page-wrapper -->

    
    <!-- /#wrapper -->
</div>
</div>
</div>
<!--<div class="col-md-2 col-xs-12 col-md-pull-8">
<?php //include("left.php"); ?>
</div>
<div class="col-xs-12 col-md-2">
<?php //include("right.php"); ?>
</div>-->
</div>
<div class="row">
<div class="col-md-12 col-lg-12">
<?php include("footer.php"); ?>
</div>
</div>