$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    const reklamTomb = [];
    const rendelesek10percbenTomb = [];
    let apivegpont="http://127.0.0.1:8000/api/";
    
    myAjax.adatBetolt(apivegpont+"dolgozo", dolgozoTomb, dolgozoKiir);
    myAjax.adatBetolt(apivegpont+"reklamacio", reklamTomb, reklamKiir);
    myAjax.adatBetolt(apivegpont+"rendelesek10percben", rendelesek10percbenTomb, rend10percKiir);

    // Dolgozók névsorának olala
    let keresomezo= $("#kereso");
    keresomezo.on("keyup", () =>{
    let apivegpont="http://127.0.0.1:8000/api/dolgozo";
       apivegpont += "?q=" + keresomezo.val();
       console.log(apivegpont);
       myAjax.adatBetolt(apivegpont, dolgozoTomb, dolgozoKiir);
    })

    $("#rendezesiszempont").on("change", function() {
        const rendezesElem = $("#rendezesiszempont");
        let ujvegpont="http://127.0.0.1:8000/api/dolgozo";
        let szempont = $(this).val();
        console.log(szempont);
    
      switch(szempont) {
      case "nevRendezNo":
        ujvegpont = apivegpont+"dolgozo" + "?_sort=dolgozonev&_order=asc";
        myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
        break;
        case "nevRendezCsokken":
          ujvegpont = apivegpont+"dolgozo" + "?_sort=dolgozonev&_order=desc";
          myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
          break;
        case "korRendezNo":
          ujvegpont = apivegpont+"dolgozo" + "?_sort=szuldatum&_order=asc";   
          myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
          break;
        case "korRendezCsokken":
          ujvegpont = apivegpont+"dolgozo" + "?_sort=szuldatum&_order=desc";
          myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
          break;
      default:
        ujvegpont= apivegpont;
        break;
      }
      })

    function dolgozoKiir(dolgozok){
        const szuloElem = $(".dolgozok_tabla");
        console.log(dolgozok)
        const sablonElem = $(' .dolgozo'); //$('.sablonhoz .dolgozo')
        szuloElem.empty();
        sablonElem.show();
        

        dolgozok.forEach(function(elem) {

            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);
            

        });
        sablonElem.hide();
     }

     
    $(window).on("torles", (event) => {
        console.log("halo: " + event.detail.dolg_id);
        myAjax.adatTorles(apivegpont+"dolgozo", event.detail.dolg_id);
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