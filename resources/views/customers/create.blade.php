@extends('layouts.app')

@section('title','Crear')

@section('content')

<form action=" {{ route('customers.store') }}" method="POST" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
@csrf

    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Crear Cliente</h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Nombres" name="nombres">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Apellidos" name="apellidos">
    
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Correo" name="correo">

    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold
    rounded text-white hover:bg-blue-600">Registrar</button>

@endsection