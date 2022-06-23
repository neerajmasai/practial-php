<?php

class BankAccount {

    private $balance;
    use Savings_Account;
    use Current_Account;
    public function __construct(int $balance){
        $this->balance = $balance;
    }

    public function get_account_balance(){
        return $this->balance; 
    }

    public function deposit(int $savings_amount, int $current_amount = 0){

        $this->savings_account_deposit($savings_amount);

        $this->current_account_deposit($current_amount);

        $this->balance += $savings_amount + $current_amount;

    }
}

trait Savings_Account{
    private $savings_balance=0;

    public function savings_account_deposit(int $amount){
        $this->savings_balance += $amount;
    }
}

trait Current_Account{
    private $current_balance=0;

    public function current_account_deposit(int $amount){
        $this->current_balance += $amount;
    }
}

$account = new BankAccount(1000);
$account->deposit(2000, 2000);

var_dump($account->get_account_balance());

?>