<?php
include_once('../../config/init.php');

$name = $_POST['search'];

header('Location: ' .$BASE_URL.'pages/general/searchResults.php?search='.$name);

?>