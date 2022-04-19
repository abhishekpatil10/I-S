<style>
  #amount_btn {
    display: grid;
    grid-template-columns: auto auto;
    justify-content: center;
    align-items: center;
    grid-gap: 30px;
  }

  #amount_btn button {
    padding: 10px;
    border: none;
    width: 100px;
    background: darkblue;
    color: white;
    border-radius: 15px;
    font-weight: bold;
  }
</style>

<?php session_start(); 
include "functions.php";
require "tbcf_admin/connect.php";

error_reporting(E_ALL);

//----------------payu-----------------
$MERCHANT_KEY = "zb2Sch31";
$SALT = "AYmcPqBFHq";
// Merchant Key and Salt as provided by Payu.

//$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
//---------------payu------------------
?>
<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>The Baby Care Foundation</title>

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href='https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
</script>
</head>
<body onload="submitPayuForm()">

<?php 
	include "headerTop.php";
	include "headerMenu.php";
?>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>DONATE ONLINE</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / <a href="donate.php">Donate</a> / Donate Online</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row">
	
	<div class="col-sm-7">
		<h1 style="font-size: 26px; text-align: center;">Online Donation to The Baby Care Foundation</h1>
		<hr>
		<!---------------------------------->
		<div class="con-form clearfix">
		<form action="<?php echo $action; ?>" method="post" name="payuForm">
			<table class="tbl" width="80%">
			<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
			<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
			<input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
			<!-- extra donation amount buttons -->
			<div id="amount_btn">
                  <button id="10000" onclick="amount1()">
                    10000
                  </button>
                  <button id="7500" onclick="amount2()">
                    7500
                  </button>
                  <button id="5000" onclick="amount3()">
                    5000
                  </button>
                  <button id="2500" onclick="amount4()">
                    3750
                  </button>
                  <button id="1250" onclick="amount5()">
                    2500
                  </button>
                  <button id="1000" onclick="amount6()">
                    1250
                  </button>

                </div>
				<!-- done -->
			
			<tr>
		        <td><label>Donation Amount*</label></td>
		        <td><input type="text" name="amount" id="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" required="" pattern="[0-9]+" /></td>
		    </tr>
		    <tr>
		    	<td><label>PAN No*</label></td>
		        <td><input type="text" name="productinfo" id="productinfo" value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?>" required="" pattern="[A-Z0-9]{10}"  /></td>
		    </tr>
		    <tr>
		        <td><label>Your Name*</label></td>
		        <td><input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" required="" pattern="[A-Za-z ]+" /></td>
		    </tr>	
		    <tr>
		        <td><label>Email Id*</label></td>
		        <td><input type="email" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" required="" /></td>
		    </tr>
		    <tr>
		        <td><label>Mobile No*</label></td>
		        <td><input type="text" name="phone" id="phone" required="" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" pattern="[0-9]{10}" maxlength="10" /></td>
		    </tr>	
		    <input type="hidden" name="surl" value="https://thebabycarefoundation.in/sendReceipt.php" />
			<input type="hidden" name="furl" value="https://thebabycarefoundation.in/sendReceipt.php" />
			<input type="hidden" name="service_provider" value="payu_paisa" size="64" />
			<tr>
				<?php if(!$hash) { ?>
		    	<td colspan="2"><input type="submit" name="submit" value="Submit" style="padding: 0.5em 1em;
    margin: 2em auto;
    display: block;
    background-color: darkblue;
    border: none;
    outline: none;
    color: white;
    border-radius: 5px;
    padding-bottom: 0.7em;
"/></td>
		    	<?php } ?>
			</tr>
			</table>
		</form>	
		</div>
		
		<!---------------------------------->
		<div class="text-center"></div>
	</div>
	<div class="col-sm-5">
		<!-- <img src="images/education.jpg" class="img-responsive" /> -->
		<img src="tbcf_admin/images/DSC_0435(edited).jpg" class="img-responsive" />
          <img src="tbcf_admin/images/Gpay.jpeg" style="margin-top: 1em;height:400px;width:300px;display:block;margin-left:auto;margin-right:auto" />
        
	</div>
	
</div>
</div>
</section>

<?php include "callout2.php"; ?>

<?php include "footer.php"; ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/script.js"></script>
<script>
    function amount1() {
      document.getElementById("amount").value = "10000";
    }

    function amount2() {
      document.getElementById("amount").value = "7500";
    }

    function amount3() {
      document.getElementById("amount").value = "5000";
    }

    function amount4() {
      document.getElementById("amount").value = "3750";
    }

    function amount5() {
      document.getElementById("amount").value = "2500";
    }

    function amount6() {
      document.getElementById("amount").value = "1250";
    }
  </script>
</body>
</html>
