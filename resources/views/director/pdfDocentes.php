<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EAEN | Calificaciones</title>

    <!--link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"-->

    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

    <!--link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"-->
</head>
<body style="font-size: 8pt">


<div class="" style="text-align:center; margin-bottom: 15px;">
    <h3>Lista de Docentes | Escuela de Altos Estudios Nacionales</h3>
</div>
<div class="table table-striped" align="center">
    <table cellpadding="10%" border="3" align="center">

        <tr>
            <th class="success" width="10px">CI</th>
            <th class="success" width="20%">Grado / Profesión</th>
            <th class="success" width="20%">Nombre</th>
            <th class="success" width="20%">Apellido Paterno</th>
            <th class="success" width="20%">Apellido Materno</th>
            <th class="success" width="20%">Email</th>
            <th class="success" width="20%">Telefono</th>

            <th class="success" width="20%">Fecha de Nacimiento</th>
            <th class="success" width="20%">Dirección</th>
        </tr>
        <?php foreach($docentes as $docente): ?>
            <tr align="center">
                <td class=" text-center"> <?php echo e($docente->id); ?></td>
                <?php if ($docente->grado == 'Civil'): ?>
                    <td class="text-center"> <?php echo e($docente->profesion); ?></td>
                <?php else : ?>
                    <td class="text-center"> <?php echo e($docente->grado); ?></td>
                <?php endif; ?>
                <td class=" text-center"> <?php echo e($docente->nombres); ?></td>
                <td class=" text-center"> <?php echo e($docente->paterno); ?></td>
                <td class=" text-center"> <?php echo e($docente->materno); ?></td>
                <td class=" text-center"> <?php echo e($docente->email); ?></td>
                <td class=" text-center"> <?php echo e($docente->telefono); ?></td>

                <td class=" text-center"> <?php echo e($docente->fnac); ?></td>
                <td class=" text-center"> <?php echo e($docente->direccion); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>
</body>
</html>