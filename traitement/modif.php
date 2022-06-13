<?php
include('../models/function.php');
$ID = $_GET['ID'];
modifydataclient($ID, $bdd);
header(('Location:../public/index.php'));
