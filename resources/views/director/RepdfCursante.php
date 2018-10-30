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
    use App\Entities\Horarios;
    $horario = Horarios::where('id',$id)->first();
?>

<div class="" style="text-align:center; margin-bottom: 4px;">
    <h1>Lista de Alumnos | INTEC</h1>
    <h2><?php echo e($horario->descripcion); ?></h2>
</div>
<center>
    <div class="table table-striped" align="center">
        <table cellpadding="4%" border=1 cellspacing=0  align="center" style="  border-collapse: separate;">

            <tr style="background-color: gray; font-size: 16px">
                <th class="success" width="10px">Identificacion</th>s
                <th class="success" width="10%">Nombre</th>
                <th class="success" width="10%">Primer Apellido</th>
                <th class="success" width="10%">Segundo Apellido</th>
                <th class="success" width="10%">Email</th>
                <th class="success" width="10%">Telefono</th>

                <th class="success" width="10%">Fecha de Nacimiento</th>
                <th class="success" width="12%">Dirección</th>
                <th class="success" width="1%">Parentesco</th>
                <th class="success" width="20%">Nombre</th>
                <th class="success" width="20%">Telefono</th>

            </tr>
            <?php 
            use App\Entities\User;
            use App\Entities\Kardex;
            $alumnos = User::where('role','cursante')->get();
            foreach($alumnos as $cursante):
                $validar = Kardex::where('user',$cursante->id)->where('gestion',$id)->first();
                if($validar){?>
                <tr align="center">
                    <td class=" text-center"> <?php echo e($cursante->id); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->nombres); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->paterno); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->materno); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->email); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->telefono); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->fnac); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->direccion); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->parentesco); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->nomYap); ?></td>
                    <td class=" text-center"> <?php echo e($cursante->tel); ?></td>
                </tr>
            <?php }endforeach; ?>

        </table>
    </div>
</center>
</body></html>