<?php

require_once('Manager.php');

class LogManager extends Manager{

    // login
    public function logIn($nickname){
        $db =  $this->dbConnect();

        $login = $db->prepare('SELECT id, nickname, pass, DATE_FORMAT( registration_date, \'%d/%m/%Y à %Hh%imin\') AS registration_date_fr FROM admins WHERE nickname= :nickname');
        $checkLog = $login->execute(array(
            'nickname' => $nickname));

        return $checkLog;
    }

    // addmenber
    public function addMenber($nickname, $pass){
        $db =  $this->dbConnect();

        $member = $db->prepare('INSERT INTO admins (nickname, pass, registration_date) VALUES(:nickname, :pass, CURDATE())');
        $addMembers = $member->execute(array($nickname, $pass));

        return $addMembers;
    }
}