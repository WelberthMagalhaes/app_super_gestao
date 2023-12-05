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
    Fornecedor: {{ $fornecedores[3]['nome'] ?? 'Nome não definido.' }}
    <br>
    Status: {{ $fornecedores[3]['status'] ?? 'Status não definido.' }}
    <br>
    CNPJ: {{ $fornecedores[3]['CNPJ'] ?? 'Dado não informado' }}
    <br>
    Telefone: {{ $fornecedores[3]['ddd'] ?? '' }} {{ $fornecedores[3]['telefone'] ?? '' }}
    @switch($fornecedores[3]['ddd'])
        @case('11')
            São Paulo - SP
        @break

        @case('32')
            Juiz de Fora - MG
        @break

        @case('85')
            Fortaleza - CE
        @break

        @default
            Cidade/Estado não identificado
    @endswitch
@endisset
