@component('mail::message')
<h1>Teste de Inscrição</h1>
<p>{{ $dados->nome_completo ?? $dados->razao_social ?? 'alguem'}} acaba de se inscrever como {{ $metodo }} com os dados pessoais abaixo além de fotos frente e verso do cartão</p>
@component('mail::table')
<table>
    @foreach ($dados as $key => $value)
        <tr>
            <td>{{ $key }}</td><td>{{ $value }}</td>
        </tr>
    @endforeach
</table>
@endcomponent

@endcomponent
