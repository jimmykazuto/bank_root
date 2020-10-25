<?php 
    class Account {
        private string $account_type;
        private string $account_number;
        private int $amount;
        private string $opening_date;
        private int $user_id;

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
        // public function setUser_id(int $user_id) {
        //     $this->user_id = $user_id;
        // }

        public function getAccount_type():string {
            return $this->account_type;
        }
        public function getAccount_number():string {
            return $this->account_number;
        }
        public function getAmount():int {
            return $this->amount;
        }
        public function getOpening_date():string {
            return $this->opening_date;
        }
        // public function getUser_id(): int {
        //     return $this->user_id;
        // }

        public function __construct(array $data) {
            $this->setAccount_type($data["account_type"]);
            $this->setAccount_number($data["account_number"]);
            $this->setAmount($data["amount"]);
            $this->setOpening_date($data["opening_date"]);
            // $this->setUser_id($data["user_id"]);
        }
    }
?>