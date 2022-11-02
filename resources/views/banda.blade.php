<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Bandas </title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

<div class="container">

    <div class="row">
        <div class="col-md-10 mt-5">
            <h2>Bandas</h2>
        </div>
        <div class="col-md-2 mt-5">
            <a href="{{ route('bandas-create') }}" class="btn btn-primary"> Cadastrar</a>
        </div>
        <div class="col-md-12">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Estilo</th>
            <th scope="col">Criada em</th>
            <th scope="col">Discos</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">


          @foreach ($bandas as $banda)

          <tr>
            <td> {{$banda->nome}}</td>
            <td> {{$banda->estilo}}</td>
            <td>{{$banda->ano_criacao}}</td>
            <td>{{$banda->total_de_discos}}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
        </div>
    </div>
</div>


</body>
</html>
