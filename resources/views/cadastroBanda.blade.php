<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <h2> Cadastre uma nova banda </h2>
        <hr>
        <form action="{{ route('bandas-store') }}" method="POST">
            @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label"> Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o nome da banda">
                </div>
                <div class="mb-3">
                    <label for="estilo" class="form-label"> Estilo:</label>
                    <input type="text" class="form-control" name="estilo" placeholder="Digite o estilo musical">
                </div>
                <div class="mb-3">
                    <label for="ano_criacao" class="form-label"> Ano:</label>
                    <input type="number" class="form-control" name="ano_criacao" placeholder="Digite o ano de criação da banda">
                </div>
                <div class="mb-3">
                    <label for="total_de_discos" class="form-label"> Discos:</label>
                    <input type="number" class="form-control" name="total_de_discos" placeholder="Digite o total de discos da banda">
                </div>
                <div class="button">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

        </form>



    </div>

</body>
</html>
