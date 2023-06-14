<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <div class="flex justify-center items-center h-screen">
    <div class="w-full md:w-1/2 lg:w-1/3">
      <div class="flex justify-center m-3">
        <img src="{{ asset('assets/logo.png') }}" alt="img_logo" class="w-2/4">
      </div>
      <div class="m-3">
        <p class="text-lg text-center">"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, illo!"</p>
      </div>
      <div class="flex justify-between m-3">
        <a href="{{ route('login') }}" class="text-white font-bold bg-cyan-500 w-1/2 text-center m-1 p-3 rounded-md">Login</a>
        <a href="{{ route('register') }}" class="text-white font-bold bg-cyan-900 w-1/2 text-center m-1 p-3 rounded-md">Register</a>
      </div>
    </div>
  </div>
</body>
</html>