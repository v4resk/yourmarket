<?php ini_set('display_errors', 'on');?>
<?php require '../App/init.php'; ?>
<?php 

  
if(isset($_SESSION["db_user"])){
  if($_SESSION["db_user"]->getIdBillInfo() == null ){


?>


<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="Paymentcss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>

<form id=paiement>
 
  <fieldset>
  	
    <legend>Banking Information </legend>
    <p>No payment methode found, you have to register one</p>
   <div class="box">
        <fieldset>
        	
          <legend>Your bank account details</legend>
          
              <input id=visa name=type_de_carte type=radio>
              <label for=visa>VISA</label>
               <img src="Visa1.png" width="85" height="50"> 
            <p></p>
              <input id=americanexpress name=type_de_carte type=radio>
              <label for=americanexpres>American Express</label>
              <img src="americanexpress.png" width="85" height="50"> 
           <p></p>
              <input id=mastercard name=type_de_carte type=radio>
              <label for=mastercard>Mastercard</label>
              <img src="Mastercard.png" width="85" height="50"> 
           <p></p>
        </fieldset>
    
     
        <label for=numero_de_carte>number of card</label>
        <input id=numero_de_carte name=numero_de_carte type=text required>
    
      <p></p>
        <div>
      <span>
         <label for=expiration date>Expiration date</label>
        <select id="month"name="month">
         <option selected="January">January</option>
         <option >February</option>
         <option>March</option>
         <option>April</option>
         <option>May</option>
         <option>June</option>
         <option>July</option>
         <option>August</option>
         <option>September</option>
         <option>October</option>
         <option>November</option>
         <option>December</option>
        </select>
      </span>
      <span>
        <label for="year">Year:</label>
        <select id="year" name="year" value="2021">
        	<option>2021</option>
        	<option>2022</option>
        	<option>2023</option>
        	<option>2024</option>
        	<option>2025</option>
        	<option>2026</option>
        	<option>2027</option>
        	<option>2028</option>

        </select>
      </span>
    </div>
    <p></p>
        <label for=securite>CVC</label>
        <input id=securite name=securite type=text required >
      <p></p>
      
        <label for=nom_porteur>Your firstname</label>
        <input id=nom_porteur name=nom_porteur type=text placeholder="Your firstname" required>
      <p></p>

  </fieldset>


 

</form>
</body>
</html>

<?php
    }
}else{

  echo "<script> location.href='confirmBy.php'; </script>";
  $_SESSION['green_alert'] = create_alert_green("Payment methodes found");

}

?>