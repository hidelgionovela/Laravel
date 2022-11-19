{{-- <x-layout></x-layout> Essa tag serve para mostrar que todo conteudo que esta no componente layout deve caregar esta pagina. --}}

<x-layout title="listarMaquinas">

        <a href="{{route('machines.create')}}">Cadastrar</a>
        <h1>Listar as Maquinas</h1>
        @include('components.flash-msg')

        <table style="border: 1px solid black;">
                <thead>
                        <tr>
                                <th>ID_Maquina</th>
                                <th>Nome_Maquina</th>
                                <th>Acoes</th>

                                
                              </tr>
                </thead>
                <tbody>
                        @foreach ($machines as $machine)
                        <tr>
                        <td>{{$machine->id}}</td>
                        <td>{{$machine->nome}}</td>
                        <td><a href="{{route('machines.show', $machine->id)}}">Visualizar</a></td>
                        </tr>
                        
                    @endforeach
                </tbody>
                
              </table>
</x-layout>

