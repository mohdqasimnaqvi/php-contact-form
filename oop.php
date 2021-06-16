<link rel="stylesheet" href="./style.css">
<style>

*{
    font-family: 'Fira code', sans-serif;
    font-variant-ligatures: additional-ligatures;
    word-break: break-all;
    width: 100vw;
    margin: 0;
}
body{
    padding: 10px;
    overflow-x: hidden;
}
</style>
<?php
    session_start();
    $users = array();
    $currId = 1;

    class User {
        private $name;
        private $email;
        private $id;
        public static $age = 40;
        private static $maxAge = 120;
        protected $key = 'fh4945h9jf2894h39439h894h5t98t8ht85ht854ht8945t94h89th4398ht984f3h489fh8943fh8934hf984hf389hf8934hf9834hf8934hf9843h98fh4389fh3849hf9834hf8934hf8934hf9834hf8934hf8934h89f3h948fh8934hf9834hf34hf8934h89fh4398fh8934fh9834hf8943hf893hf8934h8f943hf8934hf9834hf9834hf9834fh943fh893f4h9f4h39fh49hf49fh4394fh89';

        public function __construct($_name, $_email){
            global $currId;
            $this->name = $_name;
            $this->email = $_email;
            $this->id = $currId;
            $currId++;
        }
        
        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getId() {
            return $this->id;
        }
        public static function getMaxAge(){
            return self::$maxAge;
        }
    }

    class Customer extends User {
        private $balance;
        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new ' . __CLASS__ . '  has been created <br/>';
        }
        public function getBalance(){
            return  $this->balance;
        }
        public function getKey(){
            return $this->key;
        }
    }
    echo User::$age . '<br/>' . User::getMaxAge() . '<br/>';
    
    $person = new User('John', 'test@test.com');
    $customer = new Customer('Jack', 'test@test.com', 100);
    echo $customer->getBalance() . '<br/>' . $customer->getkey();
    ?>