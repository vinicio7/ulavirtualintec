@extends('layouts.main')

@section('content')

   <div class="row border-bottom white-bg dashboard-header">
       <form class="center">

           <!!--Seleccionar la materia del docente a calificar-->
           <select>
               <option value="mat1">mat1</option>
               <option value="mat2">mat2</option>
               <option value="mat3">mat3</option>
               <option value="mat4">mat4</option>
           </select>

           <div class="table table-striped">
               <table class="table text-center">
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
                           <input type="radio" name="1califDoc" value="AA" checked>AA
                           <input type="radio" name="1califDoc" value="A">A
                           <input type="radio" name="1califDoc" value="B" checked>B
                           <input type="radio" name="1califDoc" value="C">C
                           <input type="radio" name="1califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">2</td>
                       <td class="active">El programa de asignatura socializado a los cursantes contempla mínimamente: objetivos, contenidos mínimos, tiempo, metodología, evaluación, bibliografía.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="2califDoc" value="AA">AA
                               <input type="radio" name="2califDoc" value="A">A
                               <input type="radio" name="2califDoc" value="B" checked>B
                               <input type="radio" name="2califDoc" value="C">C
                               <input type="radio" name="2califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">3</td>
                       <td class="active">Cumple con el programa de asignatura de acuerdo a lo planificado.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="3califDoc" value="AA">AA
                               <input type="radio" name="3califDoc" value="A">A
                               <input type="radio" name="3califDoc" value="B" checked>B
                               <input type="radio" name="3califDoc" value="C">C
                               <input type="radio" name="3califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">4</td>
                       <td class="active">Desarrolla con claridad los temas de la asignatura y relaciona o ejemplifica la teoría con la práctica.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="4califDoc" value="AA">AA
                               <input type="radio" name="4califDoc" value="A">A
                               <input type="radio" name="4califDoc" value="B" checked>B
                               <input type="radio" name="4califDoc" value="C">C
                               <input type="radio" name="4califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">5</td>
                       <td class="active">Promueve la participación activa del cursante en el desarrollo de la clase, fomentando actividades de investigación e interacción.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="5califDoc" value="AA">AA
                               <input type="radio" name="5califDoc" value="A">A
                               <input type="radio" name="5califDoc" value="B" checked>B
                               <input type="radio" name="5califDoc" value="C">C
                               <input type="radio" name="5califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">6</td>
                       <td class="active">Utiliza variedad de métodos y medios didácticos que facilitan el aprendizaje y
                           estimula la motivación de los cursantes (Ej.: Expositivo, participativo, ilustrativo).</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="6califDoc" value="AA">AA
                               <input type="radio" name="6califDoc" value="A">A
                               <input type="radio" name="6califDoc" value="B" checked>B
                               <input type="radio" name="6califDoc" value="C">C
                               <input type="radio" name="6califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">7</td>
                       <td class="active">Utiliza un tono adecuado de voz, lenguaje claro, comprensible y técnico en el desarrollo de la clase.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="7califDoc" value="AA">AA
                               <input type="radio" name="7califDoc" value="A">A
                               <input type="radio" name="7califDoc" value="B" checked>B
                               <input type="radio" name="7califDoc" value="C">C
                               <input type="radio" name="7califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">8</td>
                       <td class="active">El trato al cursante es respetuoso dentro y fuera del aula.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="8califDoc" value="AA">AA
                               <input type="radio" name="8califDoc" value="A">A
                               <input type="radio" name="8califDoc" value="B" checked>B
                               <input type="radio" name="8califDoc" value="C">C
                               <input type="radio" name="8califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">9</td>
                       <td class="active">El docente genera un ambiente de respeto en el aula (entre docente – cursante y entre cursantes).</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="9califDoc" value="AA">AA
                               <input type="radio" name="9califDoc" value="A">A
                               <input type="radio" name="9califDoc" value="B" checked>B
                               <input type="radio" name="9califDoc" value="C">C
                               <input type="radio" name="9califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">10</td>
                       <td class="active">Las oportunidades de participación, exposición de criterios y otras, son equitativas.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="10califDoc" value="AA">AA
                               <input type="radio" name="10califDoc" value="A">A
                               <input type="radio" name="10califDoc" value="B" checked>B
                               <input type="radio" name="10califDoc" value="C">C
                               <input type="radio" name="10califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">11</td>
                       <td class="active">Absuelve las dudas de los cursantes en aula de manera oportuna y clara.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="11califDoc" value="AA">AA
                               <input type="radio" name="11califDoc" value="A">A
                               <input type="radio" name="11califDoc" value="B" checked>B
                               <input type="radio" name="11califDoc" value="C">C
                               <input type="radio" name="11califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">12</td>
                       <td class="active">Realiza una presentación interesante (atractiva y dinámica) de los objetivos y contenido de la asignatura.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="12califDoc" value="AA">AA
                               <input type="radio" name="12califDoc" value="A">A
                               <input type="radio" name="12califDoc" value="B" checked>B
                               <input type="radio" name="12califDoc" value="C">C
                               <input type="radio" name="12califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">13</td>
                       <td class="active">Desarrolla sus clases de manera amena y estimulante.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="13califDoc" value="AA">AA
                               <input type="radio" name="13califDoc" value="A">A
                               <input type="radio" name="13califDoc" value="B" checked>B
                               <input type="radio" name="13califDoc" value="C">C
                               <input type="radio" name="13califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">14</td>
                       <td class="active">Promueve el aprendizaje significativo, ejemplificando el contenido y relacionándolo con situaciones reales.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="14califDoc" value="AA">AA
                               <input type="radio" name="14califDoc" value="A">A
                               <input type="radio" name="14califDoc" value="B" checked>B
                               <input type="radio" name="14califDoc" value="C">C
                               <input type="radio" name="14califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">15</td>
                       <td class="active">Transmite confianza al cursante para que participe, realice preguntas y se sienta cómodo en clases.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="15califDoc" value="AA">AA
                               <input type="radio" name="15califDoc" value="A">A
                               <input type="radio" name="15califDoc" value="B" checked>B
                               <input type="radio" name="15califDoc" value="C">C
                               <input type="radio" name="15califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">16</td>
                       <td class="active">Evalúa las prácticas, trabajos y tareas asignadas de manera oportuna, dentro del
                           plazo establecido y con claridad las preguntas de los exámenes.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="16califDoc" value="AA">AA
                               <input type="radio" name="16califDoc" value="A">A
                               <input type="radio" name="16califDoc" value="B" checked>B
                               <input type="radio" name="16califDoc" value="C">C
                               <input type="radio" name="16califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">17</td>
                       <td class="active">Da a conocer las observaciones y sugerencias para mejorar las prácticas, trabajos y tareas asignadas.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="17califDoc" value="AA">AA
                               <input type="radio" name="17califDoc" value="A">A
                               <input type="radio" name="17califDoc" value="B" checked>B
                               <input type="radio" name="17califDoc" value="C">C
                               <input type="radio" name="17califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">18</td>
                       <td class="active">Existe relación entre las preguntas de los exámenes y los temas avanzados en clases.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="18califDoc" value="AA">AA
                               <input type="radio" name="18califDoc" value="A">A
                               <input type="radio" name="18califDoc" value="B" checked>B
                               <input type="radio" name="18califDoc" value="C">C
                               <input type="radio" name="18califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">19</td>
                       <td class="active">Cumple con los horarios establecidos con puntualidad.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="19califDoc" value="AA">AA
                               <input type="radio" name="19califDoc" value="A">A
                               <input type="radio" name="19califDoc" value="B" checked>B
                               <input type="radio" name="19califDoc" value="C">C
                               <input type="radio" name="19califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

                   <tr>
                       <td class="active">20</td>
                       <td class="active">Demuestra compromiso con su labor y la formación del cursante.</td>
                       <td class="active">
                           <fieldset>
                               <input type="radio" name="20califDoc" value="AA">AA
                               <input type="radio" name="20califDoc" value="A">A
                               <input type="radio" name="20califDoc" value="B" checked>B
                               <input type="radio" name="20califDoc" value="C">C
                               <input type="radio" name="20califDoc" value="D">D
                           </fieldset>
                       </td>
                   </tr>

               </table>
           </div>
           <button type="submit" class="btn btn-default col-md-3">ENVIAR CALIFICACIÓN</button>
       </form>
   </div>


@endsection

