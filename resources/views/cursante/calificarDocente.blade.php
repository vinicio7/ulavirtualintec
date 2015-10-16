@extends('layouts.main')

@section('content')

   <div class="row border-bottom white-bg dashboard-header">

       {!! Form::open(['route' => 'cursante.formCalifDoc', 'method' => 'POST'])!!}
           <!!--Seleccionar la materia del docente a calificar-->

            <div class="" style="text-align:center; margin-bottom: 15px;">
                <label>Seleccione la Disciplina a Evaluar: </label>
                <div class="form-group">
                    <select class="selectpicker" name="materia" data-live-search="true">
                        @foreach($disciplinas as $d)
                        <option>{{ $d -> nombreMateria }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

           <div class="table table-striped">
               <table class="table table-hover">
                   <tr>
                       <td class="success" width="10%">Número</td>
                       <td class="success" width="70%">Indicador</td>
                       <td class="success" width="20%">Valoración</td>
                   </tr>

                   <tr>
                       <td class="active" >1</td>
                       <td class="active">El docente elabora y presenta a los cursantes el programa de asignatura a inicio de módulo y usa el mismo para orientar el desarrollo de la asignatura.</td>
                       <td class="active">
                           <fieldset>
                           <input type="radio" name="1califDoc" value="100">AA
                           <input type="radio" name="1califDoc" value="90">A
                           <input type="radio" name="1califDoc" value="80" checked>B
                           <input type="radio" name="1califDoc" value="71">C
                           <input type="radio" name="1califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">2</td>
                       <td class="active">El programa de asignatura socializado a los cursantes contempla mínimamente: objetivos, contenidos mínimos, tiempo, metodología, evaluación, bibliografía.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="2califDoc" value="100">AA
                               <input type="radio" name="2califDoc" value="90">A
                               <input type="radio" name="2califDoc" value="80" checked>B
                               <input type="radio" name="2califDoc" value="71">C
                               <input type="radio" name="2califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">3</td>
                       <td class="active">Cumple con el programa de asignatura de acuerdo a lo planificado.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="3califDoc" value="100">AA
                               <input type="radio" name="3califDoc" value="90">A
                               <input type="radio" name="3califDoc" value="80" checked>B
                               <input type="radio" name="3califDoc" value="71">C
                               <input type="radio" name="3califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">4</td>
                       <td class="active">Desarrolla con claridad los temas de la asignatura y relaciona o ejemplifica la teoría con la práctica.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="4califDoc" value="100">AA
                               <input type="radio" name="4califDoc" value="90">A
                               <input type="radio" name="4califDoc" value="80" checked>B
                               <input type="radio" name="4califDoc" value="71">C
                               <input type="radio" name="4califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">5</td>
                       <td class="active">Promueve la participación activa del cursante en el desarrollo de la clase, fomentando actividades de investigación e interacción.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="5califDoc" value="100">AA
                               <input type="radio" name="5califDoc" value="90">A
                               <input type="radio" name="5califDoc" value="80" checked>B
                               <input type="radio" name="5califDoc" value="71">C
                               <input type="radio" name="5califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">6</td>
                       <td class="active">Utiliza variedad de métodos y medios didácticos que facilitan el aprendizaje y
                           estimula la motivación de los cursantes (Ej.: Expositivo, participativo, ilustrativo).</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="6califDoc" value="100">AA
                               <input type="radio" name="6califDoc" value="90">A
                               <input type="radio" name="6califDoc" value="80" checked>B
                               <input type="radio" name="6califDoc" value="71">C
                               <input type="radio" name="6califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">7</td>
                       <td class="active">Utiliza un tono adecuado de voz, lenguaje claro, comprensible y técnico en el desarrollo de la clase.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="7califDoc" value="100">AA
                               <input type="radio" name="7califDoc" value="90">A
                               <input type="radio" name="7califDoc" value="80" checked>B
                               <input type="radio" name="7califDoc" value="71">C
                               <input type="radio" name="7califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">8</td>
                       <td class="active">El trato al cursante es respetuoso dentro y fuera del aula.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="8califDoc" value="100">AA
                               <input type="radio" name="8califDoc" value="90">A
                               <input type="radio" name="8califDoc" value="80" checked>B
                               <input type="radio" name="8califDoc" value="71">C
                               <input type="radio" name="8califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">9</td>
                       <td class="active">El docente genera un ambiente de respeto en el aula (entre docente – cursante y entre cursantes).</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="9califDoc" value="100">AA
                               <input type="radio" name="9califDoc" value="90">A
                               <input type="radio" name="9califDoc" value="80" checked>B
                               <input type="radio" name="9califDoc" value="71">C
                               <input type="radio" name="9califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">10</td>
                       <td class="active">Las oportunidades de participación, exposición de criterios y otras, son equitativas.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="10califDoc" value="100">AA
                               <input type="radio" name="10califDoc" value="90">A
                               <input type="radio" name="10califDoc" value="80" checked>B
                               <input type="radio" name="10califDoc" value="71">C
                               <input type="radio" name="10califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">11</td>
                       <td class="active">Absuelve las dudas de los cursantes en aula de manera oportuna y clara.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="11califDoc" value="100">AA
                               <input type="radio" name="11califDoc" value="90">A
                               <input type="radio" name="11califDoc" value="80" checked>B
                               <input type="radio" name="11califDoc" value="71">C
                               <input type="radio" name="11califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">12</td>
                       <td class="active">Realiza una presentación interesante (atractiva y dinámica) de los objetivos y contenido de la asignatura.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="12califDoc" value="100">AA
                               <input type="radio" name="12califDoc" value="90">A
                               <input type="radio" name="12califDoc" value="80" checked>B
                               <input type="radio" name="12califDoc" value="71">C
                               <input type="radio" name="12califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">13</td>
                       <td class="active">Desarrolla sus clases de manera amena y estimulante.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="13califDoc" value="100">AA
                               <input type="radio" name="13califDoc" value="90">A
                               <input type="radio" name="13califDoc" value="80" checked>B
                               <input type="radio" name="13califDoc" value="71">C
                               <input type="radio" name="13califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">14</td>
                       <td class="active">Promueve el aprendizaje significativo, ejemplificando el contenido y relacionándolo con situaciones reales.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="14califDoc" value="100">AA
                               <input type="radio" name="14califDoc" value="90">A
                               <input type="radio" name="14califDoc" value="80" checked>B
                               <input type="radio" name="14califDoc" value="71">C
                               <input type="radio" name="14califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">15</td>
                       <td class="active">Transmite confianza al cursante para que participe, realice preguntas y se sienta cómodo en clases.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="15califDoc" value="100">AA
                               <input type="radio" name="15califDoc" value="90">A
                               <input type="radio" name="15califDoc" value="80" checked>B
                               <input type="radio" name="15califDoc" value="71">C
                               <input type="radio" name="15califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">16</td>
                       <td class="active">Evalúa las prácticas, trabajos y tareas asignadas de manera oportuna, dentro del
                           plazo establecido y con claridad las preguntas de los exámenes.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="16califDoc" value="100">AA
                               <input type="radio" name="16califDoc" value="90">A
                               <input type="radio" name="16califDoc" value="80" checked>B
                               <input type="radio" name="16califDoc" value="71">C
                               <input type="radio" name="16califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">17</td>
                       <td class="active">Da a conocer las observaciones y sugerencias para mejorar las prácticas, trabajos y tareas asignadas.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="17califDoc" value="100">AA
                               <input type="radio" name="17califDoc" value="90">A
                               <input type="radio" name="17califDoc" value="80" checked>B
                               <input type="radio" name="17califDoc" value="71">C
                               <input type="radio" name="17califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">18</td>
                       <td class="active">Existe relación entre las preguntas de los exámenes y los temas avanzados en clases.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="18califDoc" value="100">AA
                               <input type="radio" name="18califDoc" value="90">A
                               <input type="radio" name="18califDoc" value="80" checked>B
                               <input type="radio" name="18califDoc" value="71">C
                               <input type="radio" name="18califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">19</td>
                       <td class="active">Cumple con los horarios establecidos con puntualidad.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="19califDoc" value="100">AA
                               <input type="radio" name="19califDoc" value="90">A
                               <input type="radio" name="19califDoc" value="80" checked>B
                               <input type="radio" name="19califDoc" value="71">C
                               <input type="radio" name="19califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">20</td>
                       <td class="active">Demuestra compromiso con su labor y la formación del cursante.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="20califDoc" value="100">AA
                               <input type="radio" name="20califDoc" value="90">A
                               <input type="radio" name="20califDoc" value="80" checked>B
                               <input type="radio" name="20califDoc" value="71">C
                               <input type="radio" name="20califDoc" value="50">D
                           </fieldset>
                       </td>
                   </tr>

               </table>
           </div>
       <p align="center">
           <button type="submit" class=" btn-primary btn-sm glyphicon glyphicon-check" style="text-align:center"> ENVIAR CALIFICACIÓN</button>
       </p>
       {!! Form::close() !!}
   </div>

@endsection

