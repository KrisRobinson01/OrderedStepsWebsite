<?php
    // Retrieve form data
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = test_input($_POST["firstname"]);
        $lastname = test_input($_POST["lastname"]);

    }

    // Display the submitted data
    echo "First Name: " . $firstname ."";
    echo "Last Name: " . $lastname ."";

//function that strips unnecessary characters from user input and removes backslashes
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>