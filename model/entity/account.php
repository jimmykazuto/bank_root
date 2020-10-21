<?php 
    class Account {
        private string $account_type;
        private string $account_number;
        private int $amount;
        private string $opening_date;

        public function setAccount_type(string $account_type) {
            $this->account_type = $account_type;
        }
        public function setAccount_number(string $account_number) {
            $this->account_number = $account_number;
        }
        public function setAmount(int $amount) {
            $this->amount = $amount;
        }
        public function setOpening_date(string $opening_date) {
            $this->opening_date = $opening_date;
        }

        // public function getAccount_type():string {
        //     return $this->account_type;
        // }
        // public function getAccount_number():string {
        //     return $this->account_number;
        // }
        // public function getAmount():int {
        //     return $this->amount;
        // }
        // public function getOpening_date():string {
        //     return $this->opening_date;
        // }

        // public function __construct(array $data) {
        //     $this->getAccount_type($data["account_type"]);
        //     $this->getAccount_number($data["account_number"]);
        //     $this->getAmount($data["amount"]);
        //     $this->getOpening_date($data["opening_date"]);
        // }
    }
?>