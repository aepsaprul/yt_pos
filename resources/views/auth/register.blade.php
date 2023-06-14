<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <div class="flex justify-center items-center h-screen">
    <div class="w-full md:w-1/2 lg:w-1/3">
      <div class="px-8 flex justify-between items-center h-10">
        <div class="w-8">
          <a href="/">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
            </svg>            
          </a>
        </div>
        <div class="text-center text-slate-500 py-3 text-2xl font-bold">
          Register
        </div>        
      </div>
      <div class="p-3">
        <form action="{{ route('register.store') }}" method="POST">
          @csrf
          <div class="rounded-lg p-5">
            <div class="mb-3">
              <label for="name">Nama</label>
              <input type="text" name="name" id="name" required autofocus class="w-full rounded border border-slate-300">
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" required class="w-full rounded border border-slate-300">
            </div>
            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" name="password" id="password" required class="w-full rounded border border-slate-300">
            </div>
            <div class="mb-3">
              <label for="password_confirmation">Konfirmasi Password</label>
              <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full rounded border border-slate-300">
            </div>
            <div class="mb-3 flex justify-between">
              <div>
                <div class="flex items-center py-2">
                  <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-cyan-900 bg-gray-100 border-gray-300 rounded focus:ring-sky-700">
                  <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingat Saya</label>
                </div>
              </div>
              <div>
                <button class="bg-cyan-900 w-full rounded text-white font-bold py-2 px-8">Daftar</button>
              </div>
            </div>
          </div>
        </form>
        <div class="mt-3 p-5 text-center">
          Sudah punya akun? <a href="{{ route('login') }}" class="text-cyan-900 font-bold">Login</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>