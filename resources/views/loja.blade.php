<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 d-flex justify-content-between align-items-center">

                <h2>Produtos</h2>


            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" width="40">#</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Preço</th>
                      </tr>
                    </thead>
                    <tbody>


                        @foreach($produtos as $produto)

                        @if ($produto['promocao']== true)

                        <tr class="table-success">
                            <th scope="row">
                              {{$loop->iteration}}
                            </th>

                            <td>{{$produto['nome']}}</td>
                            <td>{{$produto['categoria']}}</td>
                            <td> R$ {{number_format($produto['preco'], 2)}}</td>
                        </tr>
                        @else

                      <tr>
                        <th scope="row">
                            {{$loop->iteration}}
                        </th>


                        <td>{{$produto['nome']}}</td>
                        <td>{{$produto['categoria']}}</td>
                        <td>R$ {{number_format($produto['preco'], 2)}}</td>
                      </tr>
                      @endif

                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>




</body>
</html>
