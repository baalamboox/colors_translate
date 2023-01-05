<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traductor de colores</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <style>
        #circulo_color {
            width: 100px;
            height: 100px;
            /* background-color: black; */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <form class="shadow p-4">
                    <div class="text-center">
                        <h5>Traductor de colores</h5>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="color_es">Español:</label>
                        <input type="text" class="form-control form-control-sm" id="color_es" placeholder="Ingrese color">
                    </div>
                    <div class="text-center">
                        <h6>a</h6>
                    </div>
                    <div class="form-group">
                        <label for="color_en">Inglés:</label>
                        <input type="text" class="form-control form-control-sm" id="color_en" placeholder="Aquí aparecerá el color en inglés">
                    </div>
                    <div class="my-5" id="mostrar_circulo_color">
                        <div class="mx-auto rounded-circle" id="circulo_color"></div>
                    </div>
                    <div class="text-center">
                        <span class="btn btn-dark" id="boton_traducir">Traducir</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>