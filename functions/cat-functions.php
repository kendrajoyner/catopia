<?php

function db_escape($connection, $string){

return mysqli_real_escape_string($connection, $string);
}