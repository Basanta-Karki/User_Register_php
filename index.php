<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST"  action="user.php">
        <div class="form_page">
            <div class="heading">
                <h1>Form</h1>

            </div>
            <div class="bodyform">

                <input type="text" name="name" placeholder="Name" require><br>
                <input type="text" name="email" placeholder="Email" require><br>
                <input type="password" name="password" placeholder="Password" require><br>
                <input type="password" name="confirm_password" placeholder="Confirm password" require><br>
            </div>
            <br>
            <div class="button">
                <input type="submit" value="submit" >
            </div>

        </div>
    </form>


    
</body>
</html>