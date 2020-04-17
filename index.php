
<?php

$password = $_GET['password'];
if (strcmp($password, 'Boolean') == 0) {
    echo '<span style="background-color:green"> La password è corretta </span>';
}
else {
    echo '<span style="background-color:red"> La password non è corretta </span>';
};

 ?>
