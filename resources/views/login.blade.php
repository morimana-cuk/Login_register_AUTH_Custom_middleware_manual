<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>

<body>
    <form action="{{ Route('auth_login') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="email">
        <input type="password" id="txt_password" name="password" required placeholder="password">

        <button type="submit" id="login_button">login</button>


    </form>
    <p><a href="{{ Route('halaman_register') }}">tidak punya account ? pencet saya </a></p>
</body>

</html>
