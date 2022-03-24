$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    const reklamTomb = [];
    const rendelesek10percbenTomb = [];
    let apivegpont="http://127.0.0.1:8000/api/";
    
    myAjax.adatBetolt(apivegpont+"dolgozo", dolgozoTomb, dolgozoKiir);
    //myAjax.adatBetolt(apivegpont+"reklamacio", reklamTomb, reklamKiir);
    //myAjax.adatBetolt(apivegpont+"rendelesek10percben", rendelesek10percbenTomb, rend10percKiir);

    // Dolgozók névsorának olala
    let keresomezo= $("#kereso");
    keresomezo.on("keyup", () =>{
        //function kereses(){
            const szuloElem = $(".dolgozok_tabla");
            const sablonElem = $('.dolgozo');
            apivegpont="http://127.0.0.1:8000/api/dolgozo"; //dolgozoKerese
            apivegpont += "?q=" + keresomezo.val();
            szuloElem.children().remove();
            dolgozoTomb.splice();
            console.log(apivegpont);
            myAjax.adatBetolt(apivegpont, dolgozoTomb, dolgozoKiir);
        //}
    
    })
//    $(document).ready(function(e) {
//     let timeout;
//     let delay = 1000;
//     $('#kereso').keyup(function(e) {
//         console.log("ír");
//         if(timeout) {
//             clearTimeout(timeout);
//             console.log(timeout);
//         }
//         timeout = setTimeout(function() {
//             kereses();
//         }, delay);
//     });
//});
    $("#rendezesiszempont").on("change", function() {
        
        const szuloElem = $(".dolgozok_tabla");
        const sablonElem = $('.dolgozo');
        //const rendezesElem = $("#rendezesiszempont");
        let ujvegpont="http://127.0.0.1:8000/api/dolgozo";
        szuloElem.children().remove();
        dolgozoTomb.splice();
        let szempont = $(this).val();
        console.log(szempont);
    
      switch(szempont) {
      case "nevRendezNo":
        ujvegpont += "?desc=nevRendezNo";
        //myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
        break;
        case "nevRendezCsokken":
          ujvegpont +="?desc=nevRendezCsokken";
          //myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
        break;
        // case "korRendezNo":
        //   ujvegpont = apivegpont+"dolgozo" + "?_sort=szuldatum&_order=asc";   
        //   myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
        //   break;
        // case "korRendezCsokken":
        //   ujvegpont = apivegpont+"dolgozo" + "?_sort=szuldatum&_order=desc";
        //   myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
        //   break;
      default:
        break;
      }
      
      myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
      })

    function dolgozoKiir(dolgozok1){
        
        console.log("asdf");
        const szuloElem = $(".dolgozok_tabla");
        console.log(dolgozok1)
        const sablonElem = $(' .dolgozo'); //$('.sablonhoz .dolgozo')
        sablonElem.show();
        szuloElem.empty();
        

        dolgozok1.forEach(function(elem) {

            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);
            

        });
        sablonElem.hide();
     }

     
    $(window).on("torles", (event) => {
        console.log("halo: " + event.detail.dolg_id);
        myAjax.adatTorles(apivegpont+"dolgozo", event.detail.dolg_id);
        window.location.reload();
    });

    $(window).on("modositas", (event) => {
        console.log(event.detail);
        $("#dolgId").val(event.detail.dolg_id);
        $("#dolgNev").val(event.detail.neve);
        $("#szulDatum").val(event.detail.szuldatum);
        $("#dolgCim").val(event.detail.cime);
        $("#dolgTel").val(event.detail.telszam);
        $("#dolgMunka").val(event.detail.munkakor);
        $("#dolgEmail").val(event.detail.email);
        $("#dolgJelszo").val(event.detail.jelszo);
    });
    
    $("#ajaxModosit").on("click", () =>{
        let adat= {}
        adat.dolg_id= $("#dolgId").val();
        adat.neve= $("#dolgNev").val();
        adat.szuldatum= $("#szulDatum").val();
        adat.cime= $("#dolgCim").val();
        adat.telszam= $("#dolgTel").val();
        adat.munkakor= $("#dolgMunka").val();
        adat.email= $("#dolgEmail").val();
        adat.jelszo= $("#dolgJelszo").val();
        
        myAjax.adatPut(apivegpont+"dolgozo",adat, adat.dolg_id)
    });


// Reklamációk oldala
    function reklamKiir(reklamaciok){
        const szuloElem = $("#reklamaicorespo");
        console.log(reklamaciok)
        const sablonElem = $('.reklamacio');
        szuloElem.empty();
        sablonElem.show();
        

        reklamaciok.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Reklamacio(node, elem);
            

        });
        sablonElem.hide();
    }
    function rend10percKiir(rendelesek10perc){
        const szuloElem = $("#percrespo");
        console.log(rendelesek10perc)
        const sablonElem = $('.rendeles');
        szuloElem.empty();
        sablonElem.show();
        

        rendelesek10perc.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Rendelesek10percben(node, elem);
            

        });
        sablonElem.hide();
    }

});