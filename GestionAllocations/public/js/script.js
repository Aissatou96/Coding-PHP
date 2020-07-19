$(document).ready(function(){
    const tbody = $("#listeEtud")
    const form = $("#form-inscrit")
    let offset=0

    $.ajax({
        type: "POST",
        url: BASE_URL+"security/listeEtudiant",
        data: {limit:5,offset:offset,date:date},
        dataType: "JSON",
            success: function (data) {
                printData(data,tbody);
                offset +=5
                }
            });

function printData(data,tbody){
   
}



})