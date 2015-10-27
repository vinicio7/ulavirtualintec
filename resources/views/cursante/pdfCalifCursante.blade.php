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


    <div class="" style="text-align:center; margin-bottom: 15px;">
        <p>Cursante Calificado: <?php echo ($cursanteCalificado);?></p>
        <p>Cursante Calificador: <?php echo ($cursanteCalificador[0]->nombres . ' ' .$cursanteCalificador[0]->paterno  . ' ' .$cursanteCalificador[0]-> materno);?></p>
        <p>Materia: <?php echo ($materia);?></p>
    </div>
    <div class="table table-striped" align="center">
        <table cellpadding="10%" border="3" align="center">
            <tr>
                <th class="success" width="10px">Indicador</th>
                <th class="success" width="20%">Valoración</th>
                <th class="success" width="20%">Valoración Numérica</th>
            </tr>

            <tr align="center">
                <td class="table text-center" >Procede de acuerdo con las normas institucionales.</td>
                <td class="table text-center">
                <?php
                    if($uno == 100) echo('AA');
                    if($uno == 90)  echo('A');
                    if($uno == 80)  echo('B');
                    if($uno == 71)  echo('C');
                    if($uno == 50)  echo('D');
                ?>
                </td>
                <td class="active"><?php echo ($uno);?></td>
            </tr>

            <tr align="center">
                <td class="active" >Asume sus decisiones y/o responde por sus acciones.</td>
                <td class="active">
                    <?php
                    if($dos == 100) echo('AA');
                    if($dos == 90)  echo('A');
                    if($dos == 80)  echo('B');
                    if($dos == 71)  echo('C');
                    if($dos == 50)  echo('D');
                    ?>
                </td>
                <td class="active"><?php echo ($dos);?></td>
            </tr>

            <tr align="center">
                <td class="active" >Trata a las personas con respeto y dignidad.</td>
                <td class="active">
                    <?php
                    if($tres == 100) echo('AA');
                    if($tres == 90)  echo('A');
                    if($tres == 80)  echo('B');
                    if($tres == 71)  echo('C');
                    if($tres == 50)  echo('D');
                    ?>
                </td>
                <td class="active"><?php echo ($tres);?></td>
            </tr>

            <tr align="center">
                <td class="active" >Controla sus emociones con equilibrio y adecuación.</td>
                <td class="active">
                    <?php
                    if($cuatro == 100) echo('AA');
                    if($cuatro == 90) echo('A');
                    if($cuatro == 80)  echo('B');
                    if($cuatro == 71)  echo('C');
                    if($cuatro == 50)  echo('D');
                    ?>
                </td>
                <td class="active"><?php echo ($cuatro);?></td>
            </tr>
        </table>
    </div>
</body>
</html>