$(document).ready(function(){
   var tablaDatos = $('#datos');
    var route = "siseaen.com/sorteo";
    $.get(route, function(res){
        $(res).each(function(key,value){
            tablaDatos.append("<tr><td>"+alumnos.id+"/td></tr>")
        });
    });

});