<?
    function CheckEmptyValues($value){
        if ($value == '') {
            return True;
        }
    }
    function NameCheck($names){
        if (CheckEmptyValues($names)){
            return False;
        }
        $pattern = "/[A-Z,А-Я]+\w+/u";
        if (preg_match($pattern,$names)) {
            return true;
        }else{
            return False;
        }
    }
    function AgeCheck($age){
        if (CheckEmptyValues($age)){
            return False;
        }
        $age = intval($age, 10);
        if (is_int($age)) {
            echo true;
            return true;
        }else{
            echo False;
            return False;
        }
    }
    function EmailCheck($emails){
        if (CheckEmptyValues($emails)){
            return False;
        }
        $pattern ="/(\w+|\d+)*@(pnu\.edu|gmail)(\.(ua|com))/";
        if (preg_match($pattern,$emails)) {
            return true;
        }else{
            return False;
        }
    }
    function FormChecker($firstName,$surname,$age,$emails){
        $arrayCheck = array();
        $arrayError = array("Імені","Фамілії","Віку","Електроної адресе");
        array_push($arrayCheck,NameCheck($firstName));
        array_push($arrayCheck,NameCheck($surname));
        array_push($arrayCheck,AgeCheck($age));
        array_push($arrayCheck,EmailCheck($emails));
        for ($i = 0;$i < count($arrayCheck);$i++) {    
            if ($value != True) {
                echo "Помилка заповнення рядка $arrayError[$i]";
                return;
            }
        }
        $user1 = new User($firstName,$surname,$age,$emails);
        $user1->GetInfo();
    }
?>