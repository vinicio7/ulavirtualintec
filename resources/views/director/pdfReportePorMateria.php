<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INTEC | Alumnos</title>

    <!--link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"-->

    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

    <!--link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"-->
</head><body style="font-size: 9pt">

<?php
    use App\Entities\User;
    $usuario = User::where('id',$id)->first();
?>

<div class="" style="text-align:center; margin-bottom: 4px;">
    <h1>Reporte de alumno | INTEC</h1>
    <h3><?php echo e($usuario->nombres);echo e(" ".$usuario->paterno);echo e(" ".$usuario->materno); ?></h2>
</div>
<center>
    <div class="table table-striped" align="center">
        <table cellpadding="4%" border=1 cellspacing=0  align="center" style="  border-collapse: separate;">

            <tr style="background-color: gray; font-size: 16px">
                <th class="success" width="10px">Tarea</th>
                <th class="success" width="10%">Curso</th>
                <th class="success" width="40%">Docente</th>
                <th class="success" width="10%">Ponderacion</th>
                <th class="success" width="10%">Punteo</th>
            </tr>
            <?php 
            use App\Entities\Tarea;
            use App\Entities\Materia;
            use App\Entities\CalificarTareas;
            $tareas = CalificarTareas::where('alumno_id',$id)->get();
            foreach($tareas as $tarea):
                $tarea2 = Tarea::where('id',$tarea->tarea_id)->first();   
                $curso  = Materia::where('id',$tarea2->materia_id)->first(); 
                $user   = User::where('id',$tarea2->docente_id)->first();

                        ?>
                <tr align="center">
                    <td class=" text-center"> <?php echo e($tarea2->nombre); ?></td>
                    <td class=" text-center"> <?php echo e($curso->nombreMateria); ?></td>
                    <td class=" text-center"> <?php echo e($user->nombres);echo e(" ".$user->paterno);echo e(" ".$user->materno); ?></td>
                    <td class=" text-center"> <?php echo e($tarea2->ponderacion); ?></td>
                    <td class=" text-center"> <?php echo e($tarea->calificacion); ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</center>
</body></html>