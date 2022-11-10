{{-- <x-layout></x-layout> Essa tag serve para mostrar que todo conteudo que esta no componente layout deve caregar esta pagina. --}}

<x-layout title="listarMaquinas">

        <h1>Listar as Maquinas</h1>

        <table style="border: 1px solid black;">
                <thead>
                        <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                
                              </tr>
                </thead>
                <tbody>
                        @foreach ($machines as $machine)
                        <tr>
                        <td>{{$machine->id}}</td>
                        <td>{{$machine->nome}}</td>
                        </tr>
                        
                    @endforeach
                </tbody>
                
              </table>
</x-layout>

