@extends('layouts.app')

@section('title','Home')

@section('content')

<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-indigo-500 text-white">
          <th class="w-20 py-4 ...">Id</th>
          <th class="w-1/8 py-4 ...">Nombres</th>
          <th class="w-1/16 py-4 ...">Apellidos</th>
          <th class="w-1/16 py-4 ...">Correo</th>
          <th class="w-1/16 py-4 ...">Creado</th>
          <th class="w-1/16 py-4 ...">Actualizado</th>
          <th class="w-28 py-4 ...">Acciones</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($customers as $row)
        <tr>
          <td class="py-3 px-6">{{ $row->id }}</td>
          <td class="p-3">{{ $row->Nombres }}</td>
          <td class="p-3">{{ $row->Apellidos }}</td>
          <td class="p-3">{{ $row->Correo }}</td>
          <td class="p-3 text-center">{{ $row->created_at }}</td>
          <td class="p-3 text-center">{{ $row->updated_at }}</td>

          <td class="p-3 flex justify-center">
            <form action="{{ route('customers.destroy', $row->id) }}" method="POST">
                @csrf
                @method('delete')
            <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-trash"></i></button>
            </form>
            <a href="{{ route('customers.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
            <i class="fas fa-pen"></i></a>
          </td>
        </tr>
        
        @endforeach



      </tbody>
    </table>
</div>

@endsection