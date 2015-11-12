<?php
if (isset($_POST["name"])) { 
    echo "Your name: "  . $_POST["name"] . "<br/>"; 
    echo "Your phone: " . $_POST["phone"] . "<br/>";
    echo "Your email: " . $_POST["mail"] . "<br/>";
}