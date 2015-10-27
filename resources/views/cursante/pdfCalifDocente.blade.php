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

</div>
<div class="table table-striped" align="center">
    <p>Cursante Calificador: <?php echo ($cursanteCalificador[0]->nombres . ' ' .$cursanteCalificador[0]->paterno  . ' ' .$cursanteCalificador[0]-> materno);?></p>
    <p>Docentente Calificado: <?php echo ($docenteCalificado[0]->nombres . ' ' .$docenteCalificado[0]->paterno  . ' ' .$docenteCalificado[0]-> materno);?></p>
    <p>Materia: <?php echo ($nombreMateria);?></p>
    <table cellpadding="10%" border="3" align="center" width="400">
        <tr>
            <th class="success" width="10">Número</th>
            <th class="success" width="300">Indicador</th>
            <th class="success" width="15">Valoración</th>
            <th class="success" width="15">Valoración Numérica</th>
        </tr>

        <tr align="center">
            <td class="table text-center">1</td>
            <td class="table text-center" >El docente elabora y presenta a los cursantes el programa de asignatura a inicio de módulo y usa el mismo para orientar el desarrollo de la asignatura.</td>
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
            <td class="table text-center">2</td>
            <td class="active" >El programa de asignatura socializado a los cursantes contempla mínimamente: objetivos, contenidos mínimos, tiempo, metodología, evaluación, bibliografía.</td>
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
            <td class="table text-center">3</td>
            <td class="active" >Cumple con el programa de asignatura de acuerdo a lo planificado.</td>
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
            <td class="table text-center">4</td>
            <td class="active" >Desarrolla con claridad los temas de la asignatura y relaciona o ejemplifica la teoría con la práctica.</td>
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

        <tr align="center">
            <td class="table text-center">5</td>
            <td class="active" >Promueve la participación activa del cursante en el desarrollo de la clase, fomentando actividades de investigación e interacción.</td>
            <td class="active">
                <?php
                if($cinco == 100) echo('AA');
                if($cinco == 90) echo('A');
                if($cinco == 80)  echo('B');
                if($cinco == 71)  echo('C');
                if($cinco == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($cinco);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">6</td>
            <td class="active" >Utiliza variedad de métodos y medios didácticos que facilitan el aprendizaje y
                estimula la motivación de los cursantes (Ej.: Expositivo, participativo, ilustrativo).</td>
            <td class="active">
                <?php
                if($seis == 100) echo('AA');
                if($seis == 90) echo('A');
                if($seis == 80)  echo('B');
                if($seis == 71)  echo('C');
                if($seis == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($seis);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">7</td>
            <td class="active" >Utiliza un tono adecuado de voz, lenguaje claro, comprensible y técnico en el desarrollo de la clase.</td>
            <td class="active">
                <?php
                if($siete == 100) echo('AA');
                if($siete == 90) echo('A');
                if($siete == 80)  echo('B');
                if($siete == 71)  echo('C');
                if($siete == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($siete);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">8</td>
            <td class="active" >El trato al cursante es respetuoso dentro y fuera del aula.</td>
            <td class="active">
                <?php
                if($ocho == 100) echo('AA');
                if($ocho == 90) echo('A');
                if($ocho == 80)  echo('B');
                if($ocho == 71)  echo('C');
                if($ocho == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($ocho);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">9</td>
            <td class="active" >El docente genera un ambiente de respeto en el aula (entre docente – cursante y entre cursantes).</td>
            <td class="active">
                <?php
                if($nueve == 100) echo('AA');
                if($nueve == 90) echo('A');
                if($nueve == 80)  echo('B');
                if($nueve == 71)  echo('C');
                if($nueve == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($nueve);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">10</td>
            <td class="active" >Las oportunidades de participación, exposición de criterios y otras, son equitativas.</td>
            <td class="active">
                <?php
                if($diez == 100) echo('AA');
                if($diez == 90) echo('A');
                if($diez == 80)  echo('B');
                if($diez == 71)  echo('C');
                if($diez == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($diez);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">11</td>
            <td class="active" >Absuelve las dudas de los cursantes en aula de manera oportuna y clara.</td>
            <td class="active">
                <?php
                if($once == 100) echo('AA');
                if($once == 90) echo('A');
                if($once == 80)  echo('B');
                if($once == 71)  echo('C');
                if($once == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($once);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">12</td>
            <td class="active" >Realiza una presentación interesante (atractiva y dinámica) de los objetivos y contenido de la asignatura.</td>
            <td class="active">
                <?php
                if($doce == 100) echo('AA');
                if($doce == 90) echo('A');
                if($doce == 80)  echo('B');
                if($doce == 71)  echo('C');
                if($doce == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($doce);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">13</td>
            <td class="active" >Desarrolla sus clases de manera amena y estimulante.</td>
            <td class="active">
                <?php
                if($trece == 100) echo('AA');
                if($trece == 90) echo('A');
                if($trece == 80)  echo('B');
                if($trece == 71)  echo('C');
                if($trece == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($trece);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">14</td>
            <td class="active" >Promueve el aprendizaje significativo, ejemplificando el contenido y relacionándolo con situaciones reales.</td>
            <td class="active">
                <?php
                if($catorce == 100) echo('AA');
                if($catorce == 90) echo('A');
                if($catorce == 80)  echo('B');
                if($catorce == 71)  echo('C');
                if($catorce == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($catorce);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">15</td>
            <td class="active" >Transmite confianza al cursante para que participe, realice preguntas y se sienta cómodo en clases.</td>
            <td class="active">
                <?php
                if($quince == 100) echo('AA');
                if($quince == 90) echo('A');
                if($quince == 80)  echo('B');
                if($quince == 71)  echo('C');
                if($quince == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($quince);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">16</td>
            <td class="active" >Evalúa las prácticas, trabajos y tareas asignadas de manera oportuna, dentro del
                plazo establecido y con claridad las preguntas de los exámenes.</td>
            <td class="active">
                <?php
                if($dieciseis == 100) echo('AA');
                if($dieciseis == 90) echo('A');
                if($dieciseis == 80)  echo('B');
                if($dieciseis == 71)  echo('C');
                if($dieciseis == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($dieciseis);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">17</td>
            <td class="active" >Da a conocer las observaciones y sugerencias para mejorar las prácticas, trabajos y tareas asignadas.</td>
            <td class="active">
                <?php
                if($diecisiete == 100) echo('AA');
                if($diecisiete == 90) echo('A');
                if($diecisiete == 80)  echo('B');
                if($diecisiete == 71)  echo('C');
                if($diecisiete == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($diecisiete);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">18</td>
            <td class="active" >Existe relación entre las preguntas de los exámenes y los temas avanzados en clases.</td>
            <td class="active">
                <?php
                if($dieciocho == 100) echo('AA');
                if($dieciocho == 90) echo('A');
                if($dieciocho == 80)  echo('B');
                if($dieciocho == 71)  echo('C');
                if($dieciocho == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($dieciocho);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">19</td>
            <td class="active" >Cumple con los horarios establecidos con puntualidad.</td>
            <td class="active">
                <?php
                if($diecinueve == 100) echo('AA');
                if($diecinueve == 90) echo('A');
                if($diecinueve == 80)  echo('B');
                if($diecinueve == 71)  echo('C');
                if($diecinueve == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($diecinueve);?></td>
        </tr>

        <tr align="center">
            <td class="table text-center">20</td>
            <td class="active" >Demuestra compromiso con su labor y la formación del cursante.</td>
            <td class="active">
                <?php
                if($veinte == 100) echo('AA');
                if($veinte == 90) echo('A');
                if($veinte == 80)  echo('B');
                if($veinte == 71)  echo('C');
                if($veinte == 50)  echo('D');
                ?>
            </td>
            <td class="active"><?php echo ($veinte);?></td>
        </tr>
    </table>
</div>
</body>
</html>