<?php

$post = $_POST['senha'];
echo strlen($post);

if (strlen($post) > 8) {
    echo "OK";
} else {
    echo "Não ok"; 
}
?>