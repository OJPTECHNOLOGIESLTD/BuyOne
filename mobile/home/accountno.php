<?php

namespace Core\Models;

class Account
{
    private $accessToken;
    private $responseBody;
    private $requestSuccessful;
    private $accountNumber;

    public function __construct($response)
    {
        // Validate the response is an object
        if (is_object($response)) {
            $this->responseBody = isset($response->responseBody) ? $response->responseBody : null;
            $this->accessToken = isset($response->accessToken) ? $response->accessToken : null;
            $this->accountNumber = isset($response->accountNumber) ? $response->accountNumber : null;
        } else {
            $this->responseBody = null;
            $this->accessToken = null;
            $this->accountNumber = null;
        }

        // Ensure requestSuccessful is set as an array key
        $this->requestSuccessful = isset($response->requestSuccessful) ? $response->requestSuccessful : false;
    }

    public function getAccessToken()
    {
        if ($this->accessToken === null) {
            error_log('Access token is null');
            return null;
        }
        return $this->accessToken;
    }

    public function getResponseBody()
    {
        if ($this->responseBody === null) {
            error_log('Response body is null');
            return null;
        }
        return $this->responseBody;
    }

    public function isRequestSuccessful()
    {
        if (!isset($this->requestSuccessful)) {
            error_log('Request successful key is not set');
            return false;
        }
        return $this->requestSuccessful;
    }

    public function createSession($accountNumber)
    {
        // Check if the account number matches the expected one
        if ($accountNumber !== '5080159986') {
            error_log('Invalid account number');
            return false;
        }

        // Example session creation logic
        session_start();
        $_SESSION['accountNumber'] = $accountNumber;

        return true;
    }

    public function checkTransactions($transactions)
    {
        // Assuming $transactions is an array of transaction data
        $fundsDeposited = 0;

        foreach ($transactions as $transaction) {
            if ($transaction['type'] === 'deposit') {
                $fundsDeposited += $transaction['amount'];
            }
        }

        return $fundsDeposited;
    }

    public function fundWallet($amount)
    {
        // Example wallet funding logic
        // Assuming you have a Wallet class that manages user's wallet
        $wallet = new Wallet();
        $wallet->addFunds($amount);

        return true;
    }

    public function processResponse()
    {
        $accessToken = $this->getAccessToken();
        $responseBody = $this->getResponseBody();

        if ($accessToken === null) {
            // Handle the error when accessToken is null
            error_log('Cannot process response, access token is missing');
            return;
        }

        if ($responseBody === null) {
            // Handle the error when responseBody is null
            error_log('Cannot process response, response body is missing');
            return;
        }

        if (!$this->isRequestSuccessful()) {
            // Handle the case when request was not successful
            error_log('Request was not successful');
            return;
        }

        // Process the response further...
        // Example: Save the response to the database, etc.

        // Check transactions and fund wallet
        $transactions = $this->getTransactionsFromResponse($responseBody);
        $fundsDeposited = $this->checkTransactions($transactions);

        if ($fundsDeposited > 0) {
            $this->fundWallet($fundsDeposited);
        }
    }

    private function getTransactionsFromResponse($responseBody)
    {
        // Assuming response body contains transactions data in a certain format
        // Example: Decoding JSON response body to get transactions
        $responseArray = json_decode($responseBody, true);

        return isset($responseArray['transactions']) ? $responseArray['transactions'] : [];
    }
}

// Example Wallet class for managing user funds
class Wallet
{
    private $balance = 0;

    public function addFunds($amount)
    {
        $this->balance += $amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

// Example usage:
$response = json_decode('{
    "responseBody": "{\"transactions\": [{\"type\": \"deposit\", \"amount\": 100}, {\"type\": \"deposit\", \"amount\": 50}]}",
    "accessToken": "someAccessToken",
    "requestSuccessful": true,
    "accountNumber": "5080159986"
}');

$account = new Account($response);
$account->createSession("5080159986");
$account->processResponse();

// Check wallet balance
$wallet = new Wallet();
echo "Wallet balance: " . $wallet->getBalance();
