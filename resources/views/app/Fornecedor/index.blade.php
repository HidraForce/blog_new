<h3>Fornecedores<h3>


@php


@endphp



@isset($fornecedores)
Fornecedor: {{$fornecedores[0]['nome']}}<br>

Status: {{$fornecedores[0]['status']}}<br>

CNPJ: {{$fornecedores[0]['cnpj']}}<br><br><br>



{{-- Segundo fornecedor --}}
Fornecedor: {{$fornecedores[1]['nome']}}<br>

Status: {{$fornecedores[1]['status']}}<br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{$fornecedores[1]['cnpj']}}
        @empty($fornecedores[1]['cnpj'])
            -Vazio
        @endempty
    @endisset
    
@endisset
 {{-- CNPJ: {{$fornecedores[1]['cnpj']}}
        @empty($fornecedores[1]['cnpj'])
            -Vazio
        @endempty
 --}}
 {{-- caso valor seja null não pode colocar no issset --}}

 


















{{-- @dd($fornecedores) --}}
{{-- 
Fornecedor: {{$fornecedores[0]['nome']}}<br>

Status: {{$fornecedores[0]['status']}}<br>

@if (!($fornecedores[0]['status']=='s'))

    fornecedor INATIVO
    
@endif
<br>

@unless($fornecedores[0]['status']=='s')
fornecedor INATIVO
@endunless --}}

{{-- @if (count($fornecedores)>0 && count($fornecedores)<10)

    <h1>
        Exite alguns forecedores cadastrados
    </h1>
@elseif(count($fornecedores)>10)
    <h1>Exste varios fornecedores cadastrados</h1>
@else
    <h1>Não existe fornecedores cadastrados</h1>
@endif --}}