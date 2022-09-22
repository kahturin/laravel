<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Editar um produto</title>
</head>
<body class="container mt-5 bg-dark">
    <h1 style="color: white">Editar Produto</h1>
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        @method('PUT')
        @CSRF
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Nome</span>
            <input type="text" class=form-control" name="nome" value="{{ $product->nome }}">
        </div>
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Preço</span>
            <input type="number" class=form-control" name="preco" value="{{ $product->preco }}">
        </div>
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Desconto</span>
            <input type="number" class=form-control" name="produto_desconto" value="{{ $product->produto_desconto }}">
        </div>
        <div class="form-group col-md-2 mt-4">
            <span style="color: white" class="form-label">Descrição</span>
            <textarea class="form-control" name="descricao">{{ $product->descricao }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success col-md-2 mt-4">Salvar</button>
        </div>
    </form>
</body>
</html>