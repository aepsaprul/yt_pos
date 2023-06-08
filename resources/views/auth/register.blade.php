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
    <form action="{{ route('register.store') }}" method="POST" class="w-full flex justify-center">
      @csrf
      <div class="w-full m-3 shadow-lg bg-slate-300 rounded">
        <div class="m-3">
          <input type="text" name="name" id="name" required class="w-full rounded border border-slate-300">
        </div>
        <div class="m-3">
          <input type="email" name="email" id="email" required class="w-full rounded border border-slate-300">
        </div>
        <div class="m-3">
          <input type="password" name="password" id="password" required class="w-full rounded border border-slate-300">
        </div>
        <div class="m-3">
          <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full rounded border border-slate-300">
        </div>
        <div class="m-3 flex justify-between mt-6">
          <div>
            <div class="flex items-center py-2">
              <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
              <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default checkbox</label>
            </div>
          </div>
          <div>
            <button class="bg-sky-500 w-full rounded text-white font-bold py-2 px-8">Daftar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</body>
</html>