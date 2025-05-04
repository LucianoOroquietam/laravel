<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Prueba Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="text-center">Vista de Prueba</h2>
                    </div>
                    <div class="card-body">
                        <h4>¡Bienvenido a la vista de prueba!</h4>
                        <p>Esta es una vista básica de Laravel utilizando Bootstrap para el diseño.</p>
                        
                        <!-- Ejemplo de una lista -->
                        <h5 class="mt-4">Lista de ejemplo:</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Elemento 1</li>
                            <li class="list-group-item">Elemento 2</li>
                            <li class="list-group-item">Elemento 3</li>
                        </ul>

                        <!-- Ejemplo de un formulario -->
                        <h5 class="mt-4">Formulario de ejemplo:</h5>
                        <form>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su email">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>