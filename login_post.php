<?php
$id = $_POST["ID"];
$pw = $_POST["PW"];

if ($id === "tanaka" && $pw === "secret") {
    echo "OK";
} else {
    echo "NG";
}

?>