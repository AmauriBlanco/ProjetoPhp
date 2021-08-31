<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Projeto php Fundamentos</title>
  </head>
  <body>
     <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">TreinaWeb</span>
        </div>
    </nav>  
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Carga Horária</th>
                <th scope="col">Versão da ferramenta</th>    
                </tr>
            </thead>
            <tbody>
                <?php foreach(cursos() as $curso) : ?>
                    <?php if(!$curso["status"]) {
                        continue;
                    } ?>
                    <tr>
                        <th scope="row"><?=$curso["nome_curso"] ?></th>
                            <td><?=carga_horaria($curso["carga_horaria"]) ?></td>
                            <td><?=$curso["versao_ferramenta"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>