@extends('layouts.app')

@section('content')
 <div class="flex justify-center">
   <div class="w-4/12 bg-white p-6 rounded-lg">
     <form class="" action={{ route('register') }} method="post">
       @csrf
       <div class="mb-4">
         <label for="name" class="sr-only">Nome</label>
         <input type="text" name="name" id="name" placeholder="Teu nome." class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="{{ old('name') }}">

         @error('name')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
       </div>

       <div class="mb-4">
         <label for="username" class="sr-only">Usuário</label>
         <input type="text" name="username" id="username" placeholder="Teu usuário." class="bg-gray-100 border-2 w-full p-4 rounded-lg"  value="{{ old('username') }}">

         @error('username')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
       </div>

       <div class="mb-4">
         <label for="email" class="sr-only">Email</label>
         <input type="email" name="email" id="email" placeholder="Teu email." class="bg-gray-100 border-2 w-full p-4 rounded-lg"  value="{{ old('email') }}">

         @error('email')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
       </div>

       <div class="mb-4">
         <label for="password" class="sr-only" >Senha</label>
         <input type="password" name="password" id="password" placeholder="Tua senha." class="bg-gray-100 border-2 w-full p-4 rounded-lg" >

         @error('password')
           <div class="text-red-500 mt-2 text-sm">
             {{ $message }}
           </div>
         @enderror
       </div>

       <div class="mb-4">
         <label for="password_confirmation" class="sr-only">Senha novamente</label>
         <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Tua senha novamente." class="bg-gray-100 border-2 w-full p-4 rounded-lg">
       </div>

       <div class="">
         <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registrar</button>
       </div>
     </form>
   </div>
 </div>
@endsection
