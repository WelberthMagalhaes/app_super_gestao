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
    Fornecedor: {{ $fornecedores[0]['nome'] ?? 'Nome não definido.'}}
    <br>
    Status: {{ $fornecedores[0]['status'] ?? 'Status não definido.'}}
    <br>
    CNPJ: {{ $fornecedores[0]['CNPJ'] ?? 'Dado não informado'}}
@endisset