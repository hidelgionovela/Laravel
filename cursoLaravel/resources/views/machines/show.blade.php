{{-- <x-layout></x-layout> Essa tag serve para mostrar que todo conteudo que esta no componente layout deve caregar esta pagina. --}}

<x-layout title="Visualizar Maquinas">

    <a href="{{ route('machines.index') }}">Listar</a>
    <h1>Visualizar Nova Maquina</h1>

    ID:{{ $machine->id }} <br>
    Nome:{{ $machine->nome }} <br>

</x-layout>
