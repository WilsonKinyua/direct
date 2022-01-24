<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Activation</title>
</head>

<body>
    <h6><strong>Hello,</strong></h6>
    <p>
        Welcome to Direct. Your account has been created successfully. Please click on the link below to activate
        and set your password for your account.<br>
        <a href="{{ url('/showroom/activate/' . $showroom->token) }}">Activate Account</a>
    </p>
    <p>
        Thank you,<br>
        Regards <br>
        Direct
    </p>
</body>

</html>
