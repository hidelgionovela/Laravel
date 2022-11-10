{{-- <x-layout></x-layout> Essa tag serve para mostrar que todo conteudo que esta no componente layout deve caregar esta pagina. --}}

<x-layout title="CadastrarMaquinas">

        <h1>Cadastrar Nova Maquina</h1>

        <form action="/cadastrar" method="POST">
             {{-- @csrf Usado para questoes de seguranca para que o formulario nao seja enviado para fora do projecto     --}}
             @csrf

             <label for=""></label>
             <input type="text" id="nome" name="nome"><br><br>
             <button type="submit">submeter</button>
        </form> 

        
</x-layout>

