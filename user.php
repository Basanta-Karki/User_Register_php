<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirm_password"];
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);

if (file_exists("users.json")) {
    $current_data = file_get_contents("users.json");
    $array_data = json_decode($current_data, true);

    // Check if password is at least 8 characters long
    if (strlen($password) >= 8) {
        if ($password === $confirmpassword) {
            $newData = array(
                "Name" => $_POST["name"],
                "Email" => $_POST["email"],
                "Password" => $hashedpassword,
            );

            $array_data[] = $newData;

            // Write updated data back to the JSON file
            if (file_put_contents("users.json", json_encode($array_data))) {
                echo "User registered successfully";
            }
        } else {
            echo "Passwords do not match";
        }
    } else {
        echo "Password must be at least 8 characters ";
    }
}
?>
