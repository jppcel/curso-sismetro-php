<?php
    function fibonacci($p){
        $sequencia = array();
        $sequencia[0] = 1;
        $sequencia[1] = 1;

        for($i = 2; $i < $p; $i++){
            $sequencia[$i] = 
                $sequencia[$i-1] + $sequencia[$i-2];
            // $sequencia[count($sequencia)] = $sequencia[count($sequencia) - 1] + $sequencia[count($sequencia) - 2];
        }

        return $sequencia[$p-1];
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            h1{
                text-align: center;
                font-weight: bold;
            }
            h2{
                text-align: center;
                font-weight: bold;
            }
            h3{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Calculadora de Fibonacci</h1>
                <hr/>
                <?php
                    if(isset($_POST["posicao"])){
                ?>  
                    <h2>Resultado:</h2>
                    <div class="row text-center">
                        <div class="col-3 offset-3">
                            <small>Posição:</small>
                            <h3><?php echo $_POST["posicao"]; ?></h3>
                        </div>
                        <div class="col-3">
                            <small>Valor:</small>
                            <h3><?php echo fibonacci($_POST["posicao"]); ?></h3>
                        </div>
                    </div>
                    <hr/>
                <?php
                    }
                ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="posicao" class="form-label">Posição</label>
                        <input type="text" name="posicao" class="form-control" 
                        id="posicao" placeholder="Posição da sequência de fibonacci" 
                        value="<?php if(isset($_POST["posicao"])) echo $_POST["posicao"]; ?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>