class MyAjax{
    constructor() {
        
    }
adatBetolt(apivegpont,  tomb, myCallback) {
    tomb.splice(0,tomb.length);
    $.ajax({
        url: apivegpont,
        type: "GET",
        success: function(result) {
            result.forEach((element) => {
                tomb.push(element);
            });

            myCallback(tomb);
        },
    });
}


adatTorles(apivegpont, id){
    $.ajax({ 
        url: apivegpont +"?dolg_id=" + id,
        type: "DELETE",
        success: function (result) {}
      });
}
adatPost(apivegpont, adat){
    $.ajax({ 
        url: apivegpont,
        type: "POST",
        data:adat,
        success: function (result) {}
      });
}
adatPut(apivegpont, adat, id){
    $.ajax({ 
        url: apivegpont+"/"+id,
        type: "PUT",
        data:adat,
        success: function (result) {        }
      });
}
}