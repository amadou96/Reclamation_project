<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
   @vite('resources/css/app.css')
   <link href="/dist/output.css" rel="stylesheet">
</head>
<body>
  <div class="bg-gray-100 flex h-screen justify-center items-center">
    <form method="POST"  action="{{route('submit_login')}}" class="bg-white shadow-md p-8 rounded" >
    @csrf
    @method('POST')
        <div>
            <label for="">Email</label>
            <input type="text" class="shadow-sm appearance-none border rounded w-full p-3" placeholder="Email" name="email">
        </div>
        <div>
            <label for="">Mot de passe</label>
            <input type="password" class="shadow-sm appearance-none border rounded w-full p-3" placeholder="*******"
            name="password">
        </div>
        <div class="mt-4 mb-2">
            @error('email')
            <div class="p-3 bg-red-500 text-white rounded-sm w-full shadow">{{ $message }}</div>   
           @enderror
           @error('password')
            <div class="p-3 bg-red-500 text-white rounded-sm w-full shadow">{{ $message }}</div>   
           @enderror
        </div>
        <div>
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Me connecter
            </button>
        </div>

    </form>
  </div>
</body>
</html>