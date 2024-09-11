<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestañas Fijas en Header</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fijar las pestañas en el header */
        .fixed-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #f8f9fa;
            z-index: 1030; /* Para que quede por encima del contenido */
            border-bottom: 1px solid #dee2e6;
        }
        /* Para el contenido del tabpanel */
        .content-body {
            padding-top: 70px; /* Asegurar que el contenido no quede debajo del header */
            margin-top: 100px; /* Espacio entre el contenido y las pestañas */
            text-align: center; /* Centrar el contenido horizontalmente */
        }
    </style>
</head>
<body>

<!-- Header con pestañas fijas -->
<div class="fixed-header">
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Pestaña 1</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Pestaña 2</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Pestaña 3</button>
            </li>
        </ul>
    </div>
</div>

<!-- Cuerpo del contenido -->
<div class="container content-body">
    <!-- Tab content -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
            <h3>Contenido de la Pestaña 1</h3>
            <p>Este es el contenido que se muestra cuando haces clic en la primera pestaña.</p>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
            <h3>Contenido de la Pestaña 2</h3>
            <p>Aquí aparece el contenido de la segunda pestaña.</p>
        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
            <h3>Contenido de la Pestaña 3</h3>
            <p>Este es el contenido mostrado al hacer clic en la tercera pestaña.</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>