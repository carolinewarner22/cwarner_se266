<?php

require_once "account.php";
require_once "checking.php";
require_once "savings.php";

session_start();

$accounts = ['checkingAccount' => ['type' => 'Checking', 'amount' => 1000, 'date' => '12-20-2019'],
             'savingsAccount' => ['type' => 'Savings', 'amount' => 5000, 'date' => '03-20-2020']];

foreach ($accounts as $key => $accountInfo) {
    if (!isset($_SESSION[$key])) {
        $_SESSION[$key] = new $accountInfo['type']($key, $accountInfo['amount'], $accountInfo['date']);
    }
    $$key = $_SESSION[$key];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($accounts as $key => $accountInfo) {
        if (isset($_POST['withdraw' . $accountInfo['type']])) {
            $amount = floatval($_POST[$key . 'WithdrawAmount']);
            if ($$key->withdrawal($amount)) {
                echo "Withdrawn $amount from $accountInfo[type].";
            } else {
                echo "Withdrawal failed due to insufficient funds or overdraft limit.";
            }
        } elseif (isset($_POST['deposit' . $accountInfo['type']])) {
            $amount = floatval($_POST[$key . 'DepositAmount']);
            $$key->deposit($amount);
            echo "Deposited $amount to $accountInfo[type].";
        }
    }
}

foreach ($accounts as $key => $accountInfo) {
    ${$key . 'Details'} = $$key->getAccountDetails();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3 ATM</title>
    <style type="text/css">
        .wrapper { display: grid; grid-template-columns: 300px 300px; }
        .account { border: 1px solid black; padding: 10px; }
        input[type=text] { width: 80px; }
        .accountInner { margin-left: 10px; margin-top: 10px; }
    </style>
</head>
<body>
    <form method="post">
        <h1>Week 3 ATM</h1>
        <div class="wrapper">
            <?php foreach ($accounts as $key => $accountInfo): ?>
            <div class="account">
                <?= ${$key . 'Details'} ?>
                <div class="accountInner">
                <input type="text" name="<?= $key ?>WithdrawAmount" value="" />
                <input type="submit" name="withdraw<?= $accountInfo['type'] ?>" value="Withdraw" />
            </div>
                <div class="accountInner">
                <input type="text" name="<?= $key ?>DepositAmount" value="" />
                <input type="submit" name="deposit<?= $accountInfo['type'] ?>" value="Deposit" /><br /></div>
            </div>
            <?php endforeach; ?>
        </div>
    </form>
</body>
</html>
