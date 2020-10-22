<?php
    class Single {
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
            $this->account_type;
        }
        public function gatAccount_number():string {
            $this->account_number;
        }
        public function getLastname():string {
            $this->lastname;
        }
        public function getFirstname():string {
            $this->firstname;
        }

        public function __construct() {

        }
    }