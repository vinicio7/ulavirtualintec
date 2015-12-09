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
            <td style="text-align: center">
                <?php $n1= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n1; ?></td>
                <?php if($n1 <= 100 and $n1 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n1 <= 95 and $n1 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n1 <= 84 and $n1 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n1 <= 74 and $n1 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n1 <= 70 and $n1 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>

        </tr>
        <tr>
            <td>INVESTIGACIÓN CIENTÍFICA</td>
            <?php if($cursante[0]->materia_id == 2): ?>
                <td style="text-align: center">
                    <?php $n2= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n2; ?></td>
                <?php if($n2 <= 100 and $n2 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n2 <= 95 and $n2 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n2 <= 84 and $n2 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n2 <= 74 and $n2 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n2 <= 70 and $n2 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td rowspan="10">Comunidad y sociedad</td>
            <td>CONSTRUCCIÓN Y CONSOLIDACIÓN DEL ESTADO PLURINACIONAL DE BOLIVIA</td>
            <?php if($cursante[0]->materia_id == 3): ?>
                <td style="text-align: center">
                    <?php $n3= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n3; ?></td>
                <?php if($n3 <= 100 and $n3 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n3 <= 95 and $n3 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n3 <= 84 and $n3 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n3 <= 74 and $n3 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n3 <= 70 and $n3 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DEFENSA DEL ESTADO</td>
            <?php if($cursante[0]->materia_id == 4): ?>
                <td style="text-align: center"> <?php $n4= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n4; ?></td>
                <?php if($n4 <= 100 and $n4 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n4 <= 95 and $n4 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n4 <= 84 and $n4 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n4 <= 74 and $n4 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n4 <= 70 and $n4 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DIMENSION MILITAR</td>
            <?php if($cursante[0]->materia_id == 5): ?>
                <td style="text-align: center"> <?php $n5= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n5; ?></td>
                <?php if($n5 <= 100 and $n5 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n5 <= 95 and $n5 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n5 <= 84 and $n5 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n5 <= 74 and $n5 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n5 <= 70 and $n5 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>DIMENSION POLÍTICA</td>
            <?php if($cursante[0]->materia_id == 6): ?>
                <td style="text-align: center">
                    <?php $n6= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n6; ?></td>
                <?php if($n3 <= 100 and $n6 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n6 <= 95 and $n6 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n6 <= 84 and $n6 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n6 <= 74 and $n6 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n6 <= 70 and $n6 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>GESTIÓN CONSTRUCTIVA DE CONFLICTOS Y ACCIÓN SIN DAÑO</td>
            <?php if($cursante[0]->materia_id == 7): ?>
                <td style="text-align: center">
                    <?php $n7= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n7; ?></td>
                <?php if($n7 <= 100 and $n3 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n7 <= 95 and $n7 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n7 <= 84 and $n7 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n7 <= 74 and $n7 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n7 <= 70 and $n7 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>HISTORIA CRÍTICA DE BOLIVIA</td>
            <?php if($cursante[0]->materia_id == 8): ?>
                <td style="text-align: center">
                    <?php $n8= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n8; ?></td>
                <?php if($n8 <= 100 and $n8 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n8 <= 95 and $n8 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n8 <= 84 and $n8 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n8 <= 74 and $n8 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n8 <= 70 and $n8 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>INTELIGENCIA ESTRATÉGICA</td>
            <?php if($cursante[0]->materia_id == 9): ?>
                <td style="text-align: center">
                    <?php $n9= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n9; ?></td>
                <?php if($n9 <= 100 and $n9 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n9 <= 95 and $n9 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n9 <= 84 and $n9 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n9 <= 74 and $n9 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n9 <= 70 and $n9 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>PROSPECTIVA</td>
            <?php if($cursante[0]->materia_id == 10): ?>
                <td style="text-align: center">
                    <?php $n10= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n10; ?></td>
                <?php if($n10 <= 100 and $n10 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n10 <= 95 and $n10 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n10 <= 84 and $n10 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n10 <= 74 and $n10 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n10 <= 70 and $n10 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>RELACIONES INTERNACIONALES</td>
            <?php if($cursante[0]->materia_id == 11): ?>
                <td style="text-align: center">
                    <?php $n11= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n11; ?></td>
                <?php if($n11 <= 100 and $n11 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n11 <= 95 and $n11 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n11 <= 84 and $n11 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n11 <= 74 and $n11 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n11 <= 70 and $n11 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>TEORIA DEL ESTADO</td>
            <?php if($cursante[0]->materia_id == 12): ?>
                <td style="text-align: center">
                    <?php $n12= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n12; ?></td>
                <?php if($n12 <= 100 and $n12 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n12 <= 95 and $n12 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n12 <= 84 and $n12 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n12 <= 74 and $n12 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n12 <= 70 and $n12 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td rowspan="2">VIDA TIERRA Y TERRITORIO</td>
            <td>DIMENSIÓN ECONÓMICA</td>
            <?php if($cursante[0]->materia_id == 13): ?>
                <td style="text-align: center">
                    <?php $n13= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n13; ?></td>
                <?php if($n13 <= 100 and $n13 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n13 <= 95 and $n13 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n13 <= 84 and $n13 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n13 <= 74 and $n13 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n13 <= 70 and $n13 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>PLANIFICACIÓN ESTRATÉGICA</td>
            <?php if($cursante[0]->materia_id == 14): ?>
                <td style="text-align: center">
                    <?php $n14= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n14; ?></td>
                <?php if($n14 <= 100 and $n14 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n14 <= 95 and $n14 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n14 <= 84 and $n14 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n14 <= 74 and $n14 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n14 <= 70 and $n14 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td>COSMOS Y PENSAMIENTO</td>
            <td>DIMENSIÓN CULTURAL</td>
            <?php if($cursante[0]->materia_id == 15): ?>
                <td style="text-align: center">
                    <?php $n15= e(number_format(($cursante[0]->prom4Cursante+$cursante[0]->prom4Facil+$cursante[0]->prom4JE)/3, 2, '.', ',')); echo $n15; ?></td>
                <?php if($n15 <= 100 and $n15 >=96): ?>
                    <td style="text-align: center">E</td>
                <?php elseif($n15 <= 95 and $n15 >=85)  : ?>
                    <td style="text-align: center">MB</td>
                <?php elseif($n15 <= 84 and $n15 >=75)  : ?>
                    <td style="text-align: center">B</td>
                <?php elseif($n15 <= 74 and $n15 >=71)  : ?>
                    <td style="text-align: center">C</td>
                <?php elseif($n15 <= 70 and $n15 >=1)  : ?>
                    <td style="text-align: center">I</td>
                <?php endif; ?>
            <?php endif; ?>
        </tr>
        <tr>
            <td></td>
            <td><strong>NOTA FINAL</strong></td>
            <td><strong><?php $final = ($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13+$n14+$n15)/15; echo $final ?></strong></td>

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