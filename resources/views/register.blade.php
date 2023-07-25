<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ Route('penyimpan') }}" method="post">
        @csrf
        <input type="text" name="username" placeholder="username">
        <input type="email" name="email" placeholder="email">
        <input type="password" id="txt_password" name="password" required placeholder="password">
        <input type="password" id="txt_password2" name="password2" required placeholder="comfirm password">

        <select name="role" id="role">
            <option value="admin">admin</option>
            <option value="sales">sales</option>
        </select>

        <button type="submit" id="login_button">daftar</button>
    </form>

</body>

</html>
