<?php ini_set('display_errors', 'on');?>
<?php  require '../App/check_alert.php' ?>
<?php require '../App/init.php'; ?>
<?php 

if(!isset($_SESSION["db_user"])){
  echo "<script> location.href='index.php'; </script>";
  $_SESSION['red_alert'] = create_alert_red("Need to be log in");
  exit;
}
else if($_SESSION["db_user"]->getIdBillInfo() !== null ){
  if(isset($_SESSION["item_to_buy"])){
    
  $item = $_SESSION["item_to_buy"];
  $itemManage = new db_item_manage($db);
  $item->setCustomerId($_SESSION["db_user"]->getEmail());
  $itemManage->db_updateItem($item);

  unset($_SESSION['item_to_buy']);
  echo "<script> location.href='index.php'; </script>";
  $_SESSION['green_alert'] = create_alert_green("Succeffully purchased");
  }

  // Place a bid order (price)
  if(isset($_SESSION["item_to_bid"])){
    $item = $_SESSION["item_to_bid"];
    $item_min_price = floatval($item->getPrice()); // min price set here
    $user_ask_order = 
    $itemManage = new db_item_manage($db);

    require '../App/bid_script.php';

    unset($_SESSION['item_to_bid']);
    echo "<script> location.href='index.php'; </script>";
    $_SESSION['green_alert'] = create_alert_green("Order placed !");
  }

  // Place a max bid order
  if(isset($_SESSION["item_to_bid_for_maxPrice"])){
    $item = $_SESSION["item_to_bid_for_maxPrice"];
    $item_min_price = floatval($item->getPrice()); // min price set here
    $user_max_order = 
    $itemManage = new db_item_manage($db);

    require '../App/max_bid_script.php';

    unset($_SESSION['item_to_bid_for_maxPrice']);
    echo "<script> location.href='index.php'; </script>";
    $_SESSION['green_alert'] = create_alert_green("Order placed !");
  }

  exit;
}else{
   

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

<form id=paiement action="myAccount.php" method="post">
 
  <fieldset>
  	
    <legend>Banking Information </legend>
    <p>No payment method found, you have to register one</p>
   <div class="box">
        <fieldset>
        	
          <legend>Your bank account details</legend>
          
              <input id="visa" name="type_of_payment" type="radio" value="visa">
              <label for="visa">VISA</label>
               <img src="Visa1.png" width="85" height="50"> 
            <p></p>
              <input id="americanexpress" name="type_of_payment" type="radio" value="americanexpress">
              <label for="americanexpres">American Express</label>
              <img src="americanexpress.png" width="85" height="50"> 
           <p></p>
              <input id="mastercard" name="type_of_payment" type="radio" value="mastercard">
              <label for="mastercard">Mastercard</label>
              <img src="Mastercard.png" width="85" height="50"> 
           <p></p>
        </fieldset>
    
     
        <label for="numero_de_carte">number of card</label>
        <input id="numero_de_carte" name="card_number" type="text" required>
    
      <p></p>

        <input type="text" name="expiration_date">

    <p></p>
        <label for="securite">CVC</label>
        <input id="securite" name="cvc" type="text" required >
      <p></p>
      
        <label for="nom_porteur">Your Firstname</label>
        <input id="nom_porteur" name="name_on_card" type="text" placeholder="Your firstname" required>
      <p></p>
      <input type="hidden" name="email" value="<?php echo $_SESSION["db_user"]->getEmail(); ?>">
      <input type="submit" name="subBillInfo" value="Save">

  </fieldset>


 

</form>
</body>
</html>

<?php
    }

?>