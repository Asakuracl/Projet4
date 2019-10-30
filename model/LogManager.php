<?php

require_once('Manager.php');

class LogManager extends Manager{

    // addmenber
    public function createMember($nickname, $pass){
        $db =  $this->dbConnect();

        $newMember = $db->prepare('INSERT INTO admins (nickname, pass, registration_date) VALUES(?, ?, CURDATE())');
        $addMember = $newMember->execute(array($nickname, $pass));

        return $addMember;
    }

    // login
    public function logIn($nickname){
        $db =  $this->dbConnect();
        
        $login = $db->prepare('SELECT id, nickname, pass, DATE_FORMAT( registration_date, \'%d/%m/%Y à %Hh%imin\') AS registration_date_fr FROM admins WHERE nickname= :nickname');
        $checkLog = $login->execute(array(
            'nickname' => $nickname));
        return $checkLog;
    }

}