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

<div class="" style="margin-bottom: 15px; margin-right: 20px; font-size: 12px"">
        <pre>UNIVERSIDAD MILITAR "Mcal. BERNARDINO BILBAO RIOJA"
              E.A.E.N. "CNL. EDUARDO AVAROA"
                      BOLIVIA
        </pre>
    <h3 style="text-align: center">Reporte individual | Escuela de Altos Estudios Nacionales</h3>
</div>

<div class="table table-striped" align="center">
    <table class="tab" cellpadding="6%" border="1" align="center" style="font-size: 11px">

        <tr>
            <td>Nombres y apellidos:</td>
            <td><?php echo e($cursante[0]->nombres)." ". e($cursante[0]->paterno)." ". e($cursante[0]->materno); ?></td>
        </tr>
        <tr>
            <td>CAMPOS DE SABERES Y CONOCIMIENTOS</td>
            <td>DISCIPLINAS CURRICULARES</td>
            <td>CALIFICACION</td>
            <td>ATRIBUTO</td>
        </tr>
        <tr>
            <td rowspan="2">Ciencia, Tecnologia y Producción</td>
            <td>DIMENSIÓN CIENCIA Y TECNOLOGÍA</td>
            <?php if($cursante[0]->materia_id == 1): ?>
            <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>INVESTIGACIÓN CIENTÍFICA</td>
            <?php if($cursante[0]->materia_id == 2): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td rowspan="10">Comunidad y sociedad</td>
            <td>CONSTRUCCIÓN Y CONSOLIDACIÓN DEL ESTADO PLURINACIONAL DE BOLIVIA</td>
            <?php if($cursante[0]->materia_id == 3): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DEFENSA DEL ESTADO</td>
            <?php if($cursante[0]->materia_id == 4): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DIMENSION MILITAR</td>
            <?php if($cursante[0]->materia_id == 5): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DIMENSION POLÍTICA</td>
            <?php if($cursante[0]->materia_id == 6): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>GESTIÓN CONSTRUCTIVA DE CONFLICTOS Y ACCIÓN SIN DAÑO</td>
            <?php if($cursante[0]->materia_id == 7): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>HISTORIA CRÍTICA DE BOLIVIA</td>
            <?php if($cursante[0]->materia_id == 8): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>INTELIGENCIA ESTRATÉGICA</td>
            <?php if($cursante[0]->materia_id == 9): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>PROSPECTIVA</td>
            <?php if($cursante[0]->materia_id == 10): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>RELACIONES INTERNACIONALES</td>
            <?php if($cursante[0]->materia_id == 11): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>TEORIA DEL ESTADO</td>
            <?php if($cursante[0]->materia_id == 12): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td rowspan="2">VIDA TIERRA Y TERRITORIO</td>
            <td>DIMENSIÓN ECONÓMICA</td>
            <?php if($cursante[0]->materia_id == 13): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>PLANIFICACIÓN ESTRATÉGICA</td>
            <?php if($cursante[0]->materia_id == 14): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>COSMOS Y PENSAMIENTO</td>
            <td>DIMENSIÓN CULTURAL</td>
            <?php if($cursante[0]->materia_id == 15): ?>
                <td> <?php echo e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td></td>
            <td><strong>NOTA FINAL</strong></td>
        </tr>
    </table>
</div>

<div class="" style="margin-bottom: 25px; font-size: 12px" >
    <p>&nbsp;</p>
    <pre>
           -------------------------------------               ----------------------------------------
          CN. DAEN. William Boris Galindo Ramirez            Cnl. DAEN. Nelson Gabriel Merca Murillo MSc.
        JEFE DPTO. EVAL. Y ACRED - E.A.E.N. LA PAZ                 JEFE DE ESTUDIOS - E.A.E.N. LA PAZ
    <p>&nbsp;</p>
    <p>&nbsp;</p>
           ----------------------------------                     -----------------------------------
        CN. DAEN. Rolando Hugo Ayllón Orozco MSc.             Gral. Div. Edwin Teddy Ayllón Montaño MSc.
              SUB DIRECTOR NACIONAL E.A.E.N                           DIRECTOR NACIONAL E.A.E.N.
    </pre>
</div>
</body>
</html>