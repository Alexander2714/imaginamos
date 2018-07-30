$(document).ready(function()
{
    // Se realiza llamado a la api signature-iofacturo por medio de ajax
    $.ajax({
        url: "https://signature-iofacturo-bac.azurewebsites.net/Emission/BarriosByDistrito?DistritoId=10203", 
        type: "POST",    
        dataType:"json",   
        success: function (response) 
        {
            // Se capturan los resultados y se muestran en la vista
          var trHTML = '';
          $.each(response, function (key,value) {
             trHTML += 
                '<tr><td>' + value.BarrioId + 
                '</td><td>' + value.Name
          });

            $('#records_table').append(trHTML);
        }   
    });
});