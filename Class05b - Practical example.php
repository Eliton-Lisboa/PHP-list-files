<pre>
<?php
    require './Classes/Bank.php';

    $p1 = new BankAccount;

    $p1->openAccount('CC');
    $p1->setOwner('Jubileu');
    $p1->setnumberCount(1111);
    $p1->toDeposit(300);
    $p1->payMonthlyFee();
    $p1->toWithdraw(338);
    $p1->closeAccount();

    $p2 = new BankAccount;

    $p2->openAccount('CP');
    $p2->setOwner('Cleuza');
    $p2->setnumberCount(2222);
    $p2->toDeposit(500);
    $p2->toWithdraw(10000);
    $p2->payMonthlyFee();
    $p2->toWithdraw(630);
    $p2->closeAccount();

    print_r($p1);
    print_r($p2);
