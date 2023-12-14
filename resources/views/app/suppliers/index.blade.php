<h1>Suppliers Page from View</h1>
@php $name = 'Nuno'; @endphp

{{-- @dd($suppliers) --}}
@isset($suppliers)
    @if (count($suppliers) > 0 && count($suppliers) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($suppliers) > 10)
        <h3>Existem varios fornecedores cadastrados</h3>
    @else
        <h3>Não existem fornecedores cadastrados</h3>
    @endif
    @for ($i = 0; $i < count($suppliers); $i++)
        <p>Supplier: {{ $suppliers[$i]['name'] }}</p>
        <p>Status: {{ $suppliers[$i]['status'] }}</p>
        <p> CNPJ:{{ $suppliers[$i]['cnpj'] ?? ' Não inserido' }}</p>
        <p>Postcode:
            @switch($suppliers[$i]['postcode'])
                @case('11')
                    Porto
                @break;
                @case('12')
                    Lisboa
                @break;
                @case('13')
                    Braga
                @break;

                @default
                    Não adicionado
            @endswitch
        </p>
        <hr>

        @unless ($suppliers[$i]['status'] == 'S')
            <p>Fornecedor inativo</p>
        @endunless
    @endfor

@endisset
