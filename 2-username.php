<?php

function is_password_valid($password__)
{
if(preg_match("/^(?=.*[A-Z])(?=.*\W)(?=.*\d)(?=.*[a-z])[A-Z0-9a-z\S]{8,}$/", $password__)) {
  return true;
} else {
  return false;
}
}

function is_username_valid($username__)
{
if(preg_match("/^[a-z]{8}$/", $username__)) {
  return true;
} else {
  return false;
}
}

echo is_username_valid("DwiRizan"); //Data Valid | return true
echo is_username_valid("Rizan@2019"); //Data Tidak Valid | return false

echo is_password_valid("Rizan@2019"); //Data Valid | return true
echo is_password_valid("DwiRizan"); //Data Tidak Valid | return false


?>
