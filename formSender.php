<?php

session_start();

if (!isset($_SESSION['crm_users_form1'])) {
    $_SESSION['crm_users_form1'] = [1240231, 1620274, 3001336];
}

if (!isset($_SESSION['crm_users_form2'])) {
    $_SESSION['crm_users_form2'] = [3516312, 6661201, 6676807];
}

$crm_users_form1 = $_SESSION['crm_users_form1'];
$crm_users_form2 = $_SESSION['crm_users_form2'];

$_POST['name'] = "Новая сделка";


function moveUser(&$arr)
{
    $firstUser = array_shift($arr);
    array_push($arr, $firstUser);
}

if (isset($_POST['form1'])) {
    $_POST['status'] = 57230590;
    $_POST['registration_url'] = $crm_users_form1[0];
    moveUser($crm_users_form1);
    $_SESSION['crm_users_form1'] = $crm_users_form1;
} else if (isset($_POST['form2'])) {
    $_POST['status'] = 57230594;
    $_POST['registration_url'] = $crm_users_form2[0];
    moveUser($crm_users_form2);
    $_SESSION['crm_users_form2'] = $crm_users_form2;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/introvert_save.php');

require('index.php');
?>