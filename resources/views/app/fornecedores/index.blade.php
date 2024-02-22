<h3>Fornecedor</h3>

@php
    // if(){

    // }elseif (condition) {
    //     # code...
    // }else {
    //     # code...
    // }
@endphp

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados.</h3>
@elseif(count($fornecedores) >= 10)
    <h3>Existem vários fornecedores cadastrados.</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados.</h3>
@endif --}}

{{-- @unless ($fornecedores[0]['status'] == 'S') <!-- Executa se FALSO-->
    Fornecedor Inativo.
@endunless --}}

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] ?? 'Nome não definido.' }}
        <br>
        Status: {{ $fornecedor['status'] ?? 'Status não definido.' }}
        <br>
        CNPJ: {{ $fornecedor['CNPJ'] ?? 'Dado não informado' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>

        @if ($loop->first)
            Primeira iteração do loop
            <br>
        @endif

        @if ($loop->last)
            Última iteração do loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif

        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse

@endisset
<br>
