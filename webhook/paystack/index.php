<?php
    function dd(...$args) {
      echo '<pre>';
      foreach ($args as $arg) {
        var_dump($arg);
      }
      echo '</pre>';
      exit;
    }
    

    //Auto Load Classes
    require_once("../autoloader.php");
    require_once("../../core/helpers/vendor/autoload.php");
    // header('Content-Type: application/json');
    
    $headers = getallheaders();
    $response = array();
    $controller = new ApiAccess;
    
    $paymentSuccess = false;
    $message = "Invaid Payment Reference. Reach out to support";
    
    if(isset($_GET['reference'])){
        $email = $_GET['email']; $token = $_GET['trxref'];
        
        $paystack = $controller->verifyPaystackRef($email, $token); 
        if($paystack['status'] == 'success'){
            $paymentSuccess = true;
            $message = "Payment Successfull, Already Recorded";
            
            //check if payment has been made before
            $existing_tranx = $controller->checkIfTransactionExist($token);
            if($existing_tranx['status'] == "success"){ //no transaction found
                $user = $controller->getUserByEmail($email);
                if(!$user['status']){
                    $message = "User not Found";
                } else {
                    $servicename = "Paystack TopUp";
                    $servicedesc = "Paystack Topup of NGN " . $paystack['amount']/100 . " to " . $user['email'] . "'s account";
                    $status = 0;
                    
                    $transaction = $controller->recordPaystackTransaction(
                        $user['id'], 
                        $servicename, $servicedesc, 
                        $paystack['amount']/100, $user['balance'],
                        $token, $status
                    );
                    
                    if($transaction['status'] == "success"){
                        $message = "Payment Successfull, and Account Topped Up, Enjoy!!";
                    } else {
                        $message = "Payment Successfull, but Topup Failed. Contact Support!!";
                    }   
                }
            }
        } else {
            $message = "Payment no successfull on Gateway: Paystatck";
        }
    }
    
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Status | BPay</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #f9f9c4; /* Light yellow background */
    }
    .message {
      padding: 20px;
      border: 1px solid #ffc107; /* Yellow border */
      border-radius: 5px;
      margin: 20px auto;
      width: 50%;
      text-align: center;
    }
    .success {
      background-color: #d4ffb5; /* Light green for success */
      color: #006400; /* Dark green text */
    }
    .failure {
      background-color: #ffd7d7; /* Light red for failure */
      color: #c00000; /* Red text */
    }
    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    .button {
      background-color: #ffc107; /* Yellow button */
      color: #000; /* Black text */
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="message <?php echo ($paymentSuccess) ? 'success' : 'failure'; ?>">
    <?php if ($paymentSuccess): ?>
      <h1>Payment Successful!</h1>
      <p><?= $message ?></p>
    <?php else: ?>
      <h1>Payment Failed</h1>
      <p><?= $message ?></p>
      <p>There was an error processing your payment. Please try again.</p>
    <?php endif; ?>
  </div>
  <div class="button-container">
    <a href="https://www.bpay.company/mobile/home/" class="button">Login</a>
    <a href="https://www.bpay.company" class="button">Contact Us</a>
  </div>
</body>
<script>
  // Function to initiate countdown and redirection
  function countdownRedirect() {
    var timeLeft = 5; // Adjust the countdown time (in seconds)
    var countdownElement = document.createElement("p");
    countdownElement.textContent = "Redirecting in " + timeLeft + " seconds...";
    document.body.appendChild(countdownElement);

    var intervalId = setInterval(function() {
      timeLeft--;
      countdownElement.textContent = "Redirecting in " + timeLeft + " seconds...";
      if (timeLeft === 0) {
        clearInterval(intervalId);
        window.location.href = "https://www.bpay.company/mobile/home/"; // Replace with your target URL
      }
    }, 1000);
  }

  // Start the countdown
  countdownRedirect();
  </script>
</html>
