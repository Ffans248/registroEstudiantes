<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar alumnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <form action="nuevoalumno.php" method="POST">
    <div style="margin: 15px;">
    <div class="mb-3" >
        <label for="PNombre" class="form-label">Primer nombre:</label>
        <input type="text" class="form-control" name="Pnombre" placeholder="Primer nombre" required>
    </div>
    <div class="mb-3" >
        <label for="SNombre" class="form-label">Segundo Nombre</label>
        <input type="text" class="form-control" name="Snombre" placeholder="Segundo nombre" >
    </div>
    <div class="mb-3" >
        <label for="TNombre" class="form-label">Tercer nombre:</label>
        <input type="text" class="form-control" name="Tnombre" placeholder="Tercer nombre" >
    </div>
    
    <div class="mb-3" >
        <label for="PApellido" class="form-label">Primer Apellido:</label>
        <input type="text" class="form-control" name="Papellido" placeholder="Primer Apellido" required>
    </div>
    <div class="mb-3" >
        <label for="SApellido" class="form-label">Segundo Apellido:</label>
        <input type="text" class="form-control" name="Sapellido" placeholder="Primer Apellido" required>
    </div>
    <div class="mb-3" >
        <label for="Correo" class="form-label">Telefono:</label>
        <input type="number" class="form-control" name="tel" placeholder="Telefono" required>
    </div>
    <div class="mb-3" >
        <label for="carrera" class="form-label">Carrera:</label>
        <select class="form-select form-select-lg mb-3" name="carrera" id="carrera">
            <option value="P    rimaria">Primaria</option>
            <option value="Basico">Básico</option>
            <option value="Computacion">Computación</option>
            <option value="Dibujo">Dibujo</option>
            <option value="Mecanica">Mecanica</option>
            <option value="Electronica">Electrónica</option>
        </select>
    </div>
    <div class="mb-3" >
        <label for="carrera" class="form-label">Grado:</label>
        <select class="form-select form-select-lg mb-3" name="grado" id="carrera">
            <option value="1">Primer año</option>
            <option value="2">Segundo año</option>
            <option value="3">Tercer año</option>
            
        </select>
    </div>
    
    <div class="d-grid mb-3">
        <button class="btn btn-success" type="submit">Registrar</button>
    </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>