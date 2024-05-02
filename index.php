<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Generator by IHSAN</title>
</head>
<body>

<h1>Welcome to Key Generator by IHSAN</h1>

<?php
// Generate a secure code with length 144
function generate_secure_code() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $secure_code = '';
    for ($i = 0; $i < 144; $i++) {
        $secure_code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $secure_code;
}

// Option menu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["option"] == "generate_key") {
        $secure_code = generate_secure_code();
        echo "<p>Secure Code: $secure_code</p>";
    }
} else {
    echo '
    <form method="post">
        <input type="hidden" name="option" value="generate_key">
        <button type="submit">Generate Key</button>
    </form>
    ';
}
?>

</body>
</html>
