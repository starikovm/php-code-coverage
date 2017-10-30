<?php
class BankAccount
{
    protected $balance = 0;

    public function getBalance()
    {
        return $this->balance;
    }

    protected function setBalance($balance)
    {
        if ($balance >= 0) {
            $this->balance = $balance;
        } else {
            throw new RuntimeException;
        }
    }

    public function depositMoney($balance)
    {
        require_once TEST_FILES_PATH . '/CalculatorSum.php';
        $calculator = new CalculatorSum($this->getBalance(), $balance);
        $this->setBalance($calculator->add());

        return $this->getBalance();
    }

    public function withdrawMoney($balance)
    {
        $this->setBalance($this->getBalance() - $balance);

        return $this->getBalance();
    }
}
