<?php
    class SingleAccount {
        private string $account_type;
        private string $account_number;
        private string $lastname;
        private string $firstname;

        public function setAccount_type(string $account_type) {
            $this->account_type = $account_type;
        }
        public function setAccount_number(string $account_number) {
            $this->account_number = $account_number;
        }
        public function setLastname(string $lastname) {
            $this->lastname = $lastname;
        }
        public function setFirstname(string $firstname) {
            $this->firstname = $firstname;
        }

        public function getAccount_type():string {
            return $this->account_type;
        }
        public function getAccount_number():string {
            return $this->account_number;
        }
        public function getLastname():string {
            return $this->lastname;
        }
        public function getFirstname():string {
            return $this->firstname;
        }

        // public function __construct(array $data) {
        //     $this->setAccount_type($data["account_type"]);
        //     $this->setAccount_number($data["account_number"]);
        //     $this->setLastname($data["lastname"]);
        //     $this->setFirstname($data["firstname"]);
        // }
    }