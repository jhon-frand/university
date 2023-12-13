@extends('layouts.app')

@section('contenido')
<div class="flex h-full justify-center items-center">
    <div class="bg-gray-500 w-[300px] h-[300px] rounded-lg gap-10 flex justify-center items-center p-5 flex-col">
        <input class="rounded-xl font-bold p-3" type="text" name="email" placeholder="Ingrese su email">
        <input class="rounded-xl font-bold p-3" type="text" name="password" placeholder="Ingrese su contraseña">
        <input class="rounded-xl cursor-pointer hover:bg-sky-800 bg-gray-900 text-white font-bold p-3" type="submit" value="INICIAR SESIÓN">
    </div>
</div>
@endsection