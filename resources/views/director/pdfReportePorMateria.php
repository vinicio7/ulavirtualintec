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
<body>

<div class="" style="margin-bottom: 15px; margin-right: 20px">
        <pre>UNIVERSIDAD MILITAR "Mcal. BERNARDINO BILBAO RIOJA"
              E.A.E.N. "CNL. EDUARDO AVAROA"
                      BOLIVIA
        </pre>
    <pre>RESULTADO FINAL DEL CONCEPTO AL CURSANTE

DISCIPLINA: <?php echo($nombreMateria)?>
    </pre>

</div>

<div class="table table-striped" align="center">
    <table border=1 cellspacing=0 align="center">

        <tr>
            <th class="success" width="20%">C.I.</th>
            <th class="success" width="20%">Apellido Paterno</th>
            <th class="success" width="20%">Apellido Materno</th>
            <th class="success" width="20%">Nombre</th>
            <th class="success" width="20%">Hetero-Evaluación</th>
            <th class="success" width="20%">Facilitador</th>
            <th class="success" width="20%">Jefe Depto. Evaluación</th>
            <th class="success" width="20%">Promedio</th>
        </tr>
        <?php foreach($cursantes as $c): ?>
            <tr align="center">
                <td class=" text-center"> <?php echo ($c->user); ?></td>
                <td class=" text-center"> <?php echo ($c->paterno); ?></td>
                <td class=" text-center"> <?php echo ($c->materno); ?></td>
                <td class=" text-center"> <?php echo ($c->nombres); ?></td>
                <td class=" text-center"> <?php echo ($c->prom4Cursante); ?></td>
                <td class=" text-center"> <?php echo ($c->prom4Facil); ?></td>
                <td class=" text-center"> <?php echo ($c->prom4JE); ?></td>
                <td class=" text-center"> <?php echo (number_format(($c->prom4Cursante+$c->prom4Facil+$c->prom4JE)/3, 2, '.', ',')); ?></td>
                </tr>
        <?php endforeach; ?>

    </table>
</div>

<div style="margin-bottom: 50px">
    <p>&nbsp;</p>
    <pre>
           -------------------------------------               ----------------------------------------
          <?php echo $directores[2]->nombreCompleto; ?>            <?php echo $jefes[0]->jefe_est; ?>
        <br>
        <?php echo $directores[2]->cargo; ?>                 <?php echo $jefes[0]->localidad; ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
           ----------------------------------                     -----------------------------------
        <?php echo $directores[1]->nombreCompleto;?>              <?php echo $directores[0]->nombreCompleto;?>
        <br>
            <?php echo $directores[1]->cargo;?>                           <?php echo $directores[0]->cargo;?>

    </pre>
</div>
</body>
</html>