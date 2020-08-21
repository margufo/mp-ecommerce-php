<html>
<body>

<?php

$payment_id = $_GET['collection_id'];
$external_reference = $_GET['external_reference'];
$payment_type = $_GET['payment_type'];

//collection_status=approved
//preference_id=[PREFERENCE_ID]
//site_id =[SITE_ID]
//processing_mode=aggregator
//merchant_account_id=null

?>
<div style="align:center;">
<h1>Muchas gracias por su compra</h1>
<p>
Su pago fué registrado con el ID: <?php echo $payment_id; ?><br>
Medio de pago utilizado: <?php echo $payment_type; ?><br>
Referencia: <?php echo $external_reference; ?><br>

<a href="/">Seguir comprando</a>
</div>

</body>
</html>