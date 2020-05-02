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
<body >


<div class="" style="text-align:center; margin-bottom: 15px;">
    <h3>Lista de Docentes | Escuela de Altos Estudios Nacionales</h3>
</div>
<div class="table table-striped" align="center">
    <table border=1 cellspacing=0 align="center" style="font-size: 15px">

        <tr>
            <th class="success" width="10px">CI</th>
            <th class="success" width="20%">Grado / Profesión</th>
            <th class="success" width="20%">Nombre</th>
            <th class="success" width="20%">Apellido Paterno</th>
            <th class="success" width="20%">Apellido Materno</th>
            <th class="success" width="20%">Grupo</th>
        </tr>
        <?php foreach($grupos as $grupo): ?>
            <tr align="center">
                <td class=" text-center"> <?php echo e($grupo->user); ?></td>
                <?php if ($grupo->grado == 'Civil'): ?>
                    <td class="text-center"> <?php echo e($grupo->profesion); ?></td>
                <?php else : ?>
                    <td class="text-center"> <?php echo e($grupo->grado); ?></td>
                <?php endif; ?>
                <td class=" text-center"> <?php echo e($grupo->nombres); ?></td>
                <td class=" text-center"> <?php echo e($grupo->paterno); ?></td>
                <td class=" text-center"> <?php echo e($grupo->materno); ?></td>
                <td class=" text-center"> <?php echo e($grupo->grupo); ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>
</body>
</html>