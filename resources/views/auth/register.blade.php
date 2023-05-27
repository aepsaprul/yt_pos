<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>
<body>
  <form action="{{ route('register.store') }}" method="POST">
    @csrf
    <input type="text" name="name" id="name" required>
    <input type="email" name="email" id="email" required>
    <input type="password" name="password" id="password" required>
    <input type="password" name="password_confirmation" id="password_confirmation" required>
    <button>Daftar</button>
  </form>
</body>
</html>