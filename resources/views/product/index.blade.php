<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lista de produtos</title>
    <script>
        function remove(route){
            if(confirm('Deseja remover o produto?'))
                window.location = route;
        }
    </script>
</head>
<body class="container mt-5 bg-dark">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <h1 style="color: white">Lista de Produtos</h1>
    <a href=" {{ Route('product.create') }}" class="btn btn-lg btn-light mt-2">Criar Produto</a>
    <div class="row">
        <table class="mt-5">
            <thead >
                <tr>
                    <th style="color: white"> ID </th>
                    <th style="color: white"> Nome </th>
                    <th style="color: white"> Descriçao </th>
                    <th style="color: white"> Preço </th>
                    <th style="color: white"> Desconto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $prod)
                <tr>
                    <th style="color: white"> {{ $prod->id }} </th>
                    <th style="color: white"> {{ $prod->nome }} </th>
                    <th style="color: white"> {{ $prod->descricao }} </th>
                    <th style="color: white"> {{ $prod->preco }} </th>
                    <th style="color: white"> {{ $prod->produto_desconto }} </th>
                    <td>
                        <a href="http://" class="btn btn-sm btn-success">Visualizar</a>
                        <a href="{{ route('product.edit', $prod->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <a href="#" onclick="remove('{{ route('product.destroy', $prod->id) }}');" class="btn btn-sm btn-danger">Apagar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>