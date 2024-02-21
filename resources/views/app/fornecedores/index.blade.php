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

    @php $i = 0; @endphp

    @while (isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] ?? 'Nome não definido.' }}
        <br>
        Status: {{ $fornecedores[$i]['status'] ?? 'Status não definido.' }}
        <br>
        CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Dado não informado' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr>

        @php $i++; @endphp
    @endwhile
@endisset
<br>
