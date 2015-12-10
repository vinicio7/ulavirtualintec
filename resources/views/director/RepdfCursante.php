<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAEN | Calificaciones</title>
    <link href="css/toastr.min.css" rel="stylesheet">
    <link href="css/jquery.gritter.css" rel="stylesheet">
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
            <?php if($cursante[0]->materia_id == 1):
            echo '<td style="text-align: center">';
                 $n1= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n1; echo'</td>';
                if($n1 <= 100 and $n1 >=96):
                    echo'<td style="text-align: center">E</td>';
                elseif($n1 <= 95 and $n1 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n1 <= 84 and $n1 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n1 <= 74 and $n1 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n1 <= 70 and $n1 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;

        echo '</tr>';
        echo'<tr>';
            echo '<td>INVESTIGACIÓN CIENTÍFICA</td>';
            if($cursante[0]->materia_id == 2):
                echo '<td style="text-align: center">';
                    $n2= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n2; echo '</td>';
                if($n2 <= 100 and $n2 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n2 <= 95 and $n2 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n2 <= 84 and $n2 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n2 <= 74 and $n2 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n2 <= 70 and $n2 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td rowspan="10">Comunidad y sociedad</td>';
            echo '<td>CONSTRUCCIÓN Y CONSOLIDACIÓN DEL ESTADO PLURINACIONAL DE BOLIVIA</td>';
            if($cursante[0]->materia_id == 3):
                echo '<td style="text-align: center">';
                    $n3= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n3; echo '</td>';
                if($n3 <= 100 and $n3 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n3 <= 95 and $n3 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n3 <= 84 and $n3 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n3 <= 74 and $n3 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n3 <= 70 and $n3 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>DEFENSA DEL ESTADO</td>';
            if($cursante[0]->materia_id == 4):
                echo '<td style="text-align: center">';
                    $n4= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n4; echo '</td>';
                if($n4 <= 100 and $n4 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n4 <= 95 and $n4 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n4 <= 84 and $n4 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n4 <= 74 and $n4 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n4 <= 70 and $n4 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>DIMENSION MILITAR</td>';
            if($cursante[0]->materia_id == 5):
                echo '<td style="text-align: center">';
                    $n5= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n5; echo '</td>';
                if($n5 <= 100 and $n5 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n5 <= 95 and $n5 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n5 <= 84 and $n5 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n5 <= 74 and $n5 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n5 <= 70 and $n5 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>DIMENSION POLÍTICA</td>';
            if($cursante[0]->materia_id == 6):
                echo '<td style="text-align: center">';
                    $n6= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n6; echo '</td>';
                if($n6 <= 100 and $n6 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n6 <= 95 and $n6 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n6 <= 84 and $n6 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n6 <= 74 and $n6 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n6 <= 70 and $n6 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>GESTIÓN CONSTRUCTIVA DE CONFLICTOS Y ACCIÓN SIN DAÑO</td>';
            if($cursante[0]->materia_id == 7):
                echo '<td style="text-align: center">';
                    $n7= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n7; echo '</td>';
                if($n7 <= 100 and $n7 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n7 <= 95 and $n7 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n7 <= 84 and $n7 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n7 <= 74 and $n7 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n7 <= 70 and $n7 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>HISTORIA CRÍTICA DE BOLIVIA</td>';
            if($cursante[0]->materia_id == 8):
                echo '<td style="text-align: center">';
                    $n8= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n8; echo '</td>';
                if($n8 <= 100 and $n8 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n8 <= 95 and $n8 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n8 <= 84 and $n8 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n8 <= 74 and $n8 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n8 <= 70 and $n8 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>INTELIGENCIA ESTRATÉGICA</td>';
            if($cursante[0]->materia_id == 9):
                echo '<td style="text-align: center">';
                    $n9= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1))/3, 2, '.', ',')); echo $n9; echo '</td>';
                if($n9 <= 100 and $n9 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n9 <= 95 and $n9 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n9 <= 84 and $n9 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n9 <= 74 and $n9 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n9 <= 70 and $n9 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>PROSPECTIVA</td>';
            if($cursante[0]->materia_id == 10):
                echo '<td style="text-align: center">';
                    $n10= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n10; echo '</td>';
                if($n10 <= 100 and $n10 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n10 <= 95 and $n10 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n10 <= 84 and $n10 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n10 <= 74 and $n10 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n10 <= 70 and $n10 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>RELACIONES INTERNACIONALES</td>';
            if($cursante[0]->materia_id == 11):
                echo '<td style="text-align: center">';
                    $n11= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n11; echo '</td>';
                if($n11 <= 100 and $n11 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n11 <= 95 and $n11 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n11 <= 84 and $n11 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n11 <= 74 and $n11 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n11 <= 70 and $n11 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>TEORIA DEL ESTADO</td>';
            if($cursante[0]->materia_id == 12):
                echo '<td style="text-align: center">';
                    $n12= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n12; echo '</td>';
                if($n12 <= 100 and $n12 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n12 <= 95 and $n12 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n12 <= 84 and $n12 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n12 <= 74 and $n12 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n12 <= 70 and $n12 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td rowspan="2">VIDA TIERRA Y TERRITORIO</td>';
            echo '<td>DIMENSIÓN ECONÓMICA</td>';
            if($cursante[0]->materia_id == 13):
                echo '<td style="text-align: center">';
                    $n13= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n13; echo '</td>';
                if($n13 <= 100 and $n13 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n13 <= 95 and $n13 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n13 <= 84 and $n13 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n13 <= 74 and $n13 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n13 <= 70 and $n13 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>PLANIFICACIÓN ESTRATÉGICA</td>';
            if($cursante[0]->materia_id == 14):
                echo '<td style="text-align: center">';
                    $n14= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1))/3, 2, '.', ',')); echo $n14; echo '</td>';
                if($n14 <= 100 and $n14 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n14 <= 95 and $n14 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n14 <= 84 and $n14 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n14 <= 74 and $n14 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n14 <= 70 and $n14 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td>COSMOS Y PENSAMIENTO</td>';
            echo '<td>DIMENSIÓN CULTURAL</td>';
            if($cursante[0]->materia_id == 15):
                echo '<td style="text-align: center">';
                    $n15= e(number_format((($cursante[0]->prom1*0.2)+($cursante[0]->prom2*0.3)+($cursante[0]->prom3*0.4)+($cursante[0]->prom4*0.1)), 2, '.', ',')); echo $n15; echo '</td>';
                if($n15 <= 100 and $n15 >=96):
                    echo '<td style="text-align: center">E</td>';
                elseif($n15 <= 95 and $n15 >=85)  :
                    echo '<td style="text-align: center">MB</td>';
                elseif($n15 <= 84 and $n15 >=75)  :
                    echo '<td style="text-align: center">B</td>';
                elseif($n15 <= 74 and $n15 >=71)  :
                    echo '<td style="text-align: center">C</td>';
                elseif($n15 <= 70 and $n15 >=1)  :
                    echo '<td style="text-align: center">I</td>';
                endif;
            endif;
        echo '</tr>';
        echo '<tr>';
            echo '<td></td>';
            echo '<td><strong>NOTA FINAL</strong></td>';
            $final = ($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11+$n12+$n13+$n14+$n15)/15;
            echo '<td>'.$final .'</td>';

            if($final <= 100 and $final >=96):
                echo '<td style="text-align: center">E</td>';
            elseif($final <= 95 and $final >=85)  :
                echo '<td style="text-align: center">MB</td>';
            elseif($final <= 84 and $final5 >=75)  :
                echo '<td style="text-align: center">B</td>';
            elseif($final <= 74 and $final >=71)  :
                echo '<td style="text-align: center">C</td>';
            elseif($final <= 70 and $final >=1)  :
                echo '<td style="text-align: center">I</td>';
            endif;
            ?>
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