<?
    class Student{
        public $name;
        public $surname;
        public $group;
        public function GetInfo(){
            echo "Інформація про студента:<br> Ім'я: <b>".$this->name."</b>;<br>";
            echo "Фамілі: <b>".$this->surname."</b>;<br>";
            echo "Група в якій навчається: <b>".$this->group."</b>;<hr>";
        }
    }
    class Student2{
        public $name;
        public $surname;
        public $group;
        public function __construct($name,$surname,$group){
            $this->name = $name;
            $this->surname = $surname;
            $this->group = $group;
        }
        public function __clone(){
            echo "Об'єкт успішно скопійований<br>";
        }
        public function GetInfo(){
            echo "Інформація про студента:<br> Ім'я: <b>".$this->name."</b>;<br>";
            echo "Фамілі: <b>".$this->surname."</b>;<br>";
            echo "Група в якій навчається: <b>".$this->group."</b>;<hr>";
        }
    }
    class MultiplicationTable{
        private $number;
        public function __construct($number){
            $this->number = $number;
        }
        private function Calculation($i){
            return $this->number*$i;
        }
        public function TableCraetor(){
            echo "<table border=1 cellpadding=4 cellspacing=4>
                <tr>
                    <th>Таблиця множення на ".$this->number."</th>
                </tr>
                ";
                for($i = 0; $i < 11; $i++){
                   echo "<tr><th>".$this->number." x ".$i."= ".$this->Calculation($i).";</th><tr>";
                }
            echo "</table>";
        }
    }
    class Country {
        public $name;
        public $capital;
        public $population;
        public function __construct($name,$capital,$population){
            $this->name = $name;
            $this->capital = $capital;
            $this->population = $population;
        }
        public function TableCraetor(){
            echo "<tr><td>Назва країни</td><td>$this->name</td></tr>
            <tr><td>Населення в млн.</td><td>$this->population</td></tr>
            <tr><td>Назва столиці</td><td>$this->capital</td></tr>";
        }
    }
    class User{
        private $name;
        private $surname;
        private $age;
        private $email;
        public function __construct( $name,$surname,$age,$email){
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->email = $email;
        }
        public function GetInfo(){
            echo "Інформація про студента:<br> Ім'я: <b>".$this->name."</b>;<br>";
            echo "Фамілі: <b>".$this->surname."</b>;<br>";
            echo "Вік: <b>".$this->age."</b>;<br>";
            echo "Пошта: <b>".$this->email."</b>;<hr>";
        }
        public function __destruct(){}
    }
    
?>