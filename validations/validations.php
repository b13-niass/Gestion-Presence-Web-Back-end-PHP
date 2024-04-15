<?php 
    function emailValidator($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function passwordValidator($password) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $password);
    }

    function dayValidator($day){
        return preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $day);
    }
    function monthValidator($month){
        return preg_match('/^[0-9]{1,2}\/[0-9]{1,2}$/', $month);
    }
    function yearValidator($year){
        return preg_match('/^[0-9]{1,4}$/', $year);
    }

    function dateValidator($date){
        return preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $date);
    }
    function hourValidator($hour){
        return preg_match('/^[0-9]{1,2}:[0-9]{2}$/', $hour);
    }
    function minuteValidator($minute){
        return preg_match('/^[0-9]{1,2}:[0-9]{2}$/', $minute);
    }
    function secondValidator($second){
        return preg_match('/^[0-9]{1,2}:[0-9]{2}$/', $second);
    }
    function timeValidator($time){
        return preg_match('/^[0-9]{1,2}:[0-9]{2}:[0-9]{2}$/', $time);
    }

    function phoneValidator($phone){
        return preg_match('/^[0-9]{10}$/', $phone);
    }

    function matriculeValidator(){
    }

    
?>