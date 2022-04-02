$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    const reklamTomb = [];
    const termekTomb = [];
    const rendelesek10percbenTomb = [];
    const kedvezmenyTomb = [];
    let apivegpont="/api/";
    
    let apiVege = "";
    let apiTomb = "";
    let apiFunc = "";
    if (window.location.href.includes("dolgozo")) {
        apiVege = "dolgozo";
        apiTomb = dolgozoTomb;
        apiFunc = dolgozoKiir;
    }else if(window.location.href.includes("reklamacio")){
        apiVege = "reklamacio";
        apiTomb = reklamTomb;
        apiFunc = reklamKiir;
        myAjax.adatBetolt(apivegpont+"elmult10perc", rendelesek10percbenTomb, rend10percKiir);
    }else if(window.location.href.includes("termek")){
        apiVege = "termek";
        apiTomb = termekTomb;
        apiFunc = termekKiir;
    }else if(window.location.href.includes("kedvezmeny")){
        console.log("kedvezmenyek");
        apiVege = "kedvezmeny";
        apiTomb = kedvezmenyTomb;
        apiFunc = kedvezmenyKiir;
        console.log(apivegpont+apiVege);
    }
    myAjax.adatBetolt(apivegpont+apiVege, apiTomb, apiFunc);
    console.log(window.location.href);

    /* myAjax.adatBetolt(apivegpont+"dolgozo", dolgozoTomb, dolgozoKiir);
    myAjax.adatBetolt(apivegpont+"reklamacio", reklamTomb, reklamKiir); */
    /* myAjax.adatBetolt(apivegpont+"elmult10perc", rendelesek10percbenTomb, rend10percKiir); */
    /* myAjax.adatBetolt(apivegpont+"termek", termekTomb, termekKiir); */

    // Dolgozók névsorának olala
    let keresomezo= $("#kereso");
    keresomezo.on("keyup", function(){

            const szuloElem = $(".dolgozok_tabla");
            const sablonElem = $('.dolgozo');
            apivegpont="/api/dolgozo"; //dolgozoKerese
            apivegpont += "?q=" + keresomezo.val();
            szuloElem.children().remove();
            dolgozoTomb.splice();
            console.log(apivegpont);
            myAjax.adatBetolt(apivegpont, dolgozoTomb, dolgozoKiir);

    
    })
    $("#rendezesiszempont").on("change", function() {
        
        const szuloElem = $(".dolgozok_tabla");
        const sablonElem = $('.dolgozo');
        let ujvegpont="/api/dolgozo";
        szuloElem.children().remove();
        dolgozoTomb.splice();
        let szempont = $(this).val();
        console.log(szempont);
    
      switch(szempont) {
      case "nevRendezNo":
        ujvegpont += "?desc=nevRendezNo";
        break;
        case "nevRendezCsokken":
          ujvegpont +="?desc=nevRendezCsokken";
        break;
      default:
        break;
      }
      
      myAjax.adatBetolt(ujvegpont, dolgozoTomb, dolgozoKiir);
    })

    function dolgozoKiir(dolgozok){
        
        const szuloElem = $(".dolgozok_tabla");
        console.log(dolgozok)
        const sablonElem = $('#sablonhoz .dolgozo');

        szuloElem.empty();
        

        dolgozok.forEach(function(elem) {

            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);
            

        });
     }

     
    $(window).on("torles", (event) => {
        console.log(event.detail.dolg_id);
        myAjax.adatTorles(apivegpont+"dolgozo", event.detail.dolg_id);
        window.location.reload();
    });

    $(window).on("modositas", (event) => {
        console.log(event.detail);
        console.log(event.detail.dolg_id);
        $("#dolgId").val(event.detail.dolg_id);
        console.log($("#dolgId").val());
        $("#dolgozonev").val(event.detail.neve);
        $("#szuldatum").val(event.detail.szuldatum);
        $("#cim").val(event.detail.cim);
        $("#telefonszam").val(event.detail.telefonszam);
        $("#munkakor").val(event.detail.munkakor_id);
        $("#email").val(event.detail.email);
        $("#jelszo").val(event.detail.jelszo);
    });
    
    $("#ajaxModosit").on("click", () =>{
        
        let adat= {}
        adat.dolg_id= $("#dolgId").val();
        adat.neve= $("#dolgozonev").val();
        adat.szuldatum=$("#szuldatum").val();
        adat.cim= $("#cim").val();
        adat.telefonszam= $("#telefonszam").val();
        adat.munkakor_id= $("#munkakor").val();
        adat.email= $("#email").val();
        adat.jelszo= $("#jelszo").val();
        console.log(adat);
        myAjax.adatPut(apivegpont+"dolgozo", adat, adat.dolg_id);
        
        myAjax.adatBetolt(apivegpont+"dolgozo",dolgozoTomb, dolgozoKiir);
        
        $("#dolgId").val('');
        $("#dolgozonev").val('');
        $("#szuldatum").val('');
        $("#cim").val('');
        $("#telefonszam").val('');
        $("#munkakor").val('');
        $("#email").val('');
        $("#jelszo").val('');
        console.log("asd");
        //window.location.reload();
    });


    // Reklamációk oldala ----------------------------------------
    function reklamKiir(reklamaciok){
        const szuloElem = $("#reklamaicorespo");
        console.log(reklamaciok)
        const sablonElem = $(' .reklamacio');
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
        // document.getElementById("rendIDele").prepend("Rendelés száma: ");
        //const alap = document.getElementById('rendIDele');
        //const ele = document.createElement()
        //alap.innerHTML += "Rendelés száma:";
        //alap.


        rendelesek10perc.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Rendelesek10percben(node, elem);
            

        });
        sablonElem.hide();
    }

    $(window).on("hozzaad", (event) => {
        console.log(event.detail);
        $("#termek_id").val(event.detail.termek_id);
        $("#termekAr").val(event.detail.termekar);
        $("#rendelesszam").val(event.detail.nyugta);
        $("#nyugta").val(event.detail.nyugta);
    });

    // termekek oldal ----------------------------------------
    function termekKiir(termekek){
        const szuloElem = $(".nagydiv");
        console.log(termekek);
        const sablonElem = $("#termekSablon .termek");

        szuloElem.empty();
        sablonElem.show();
        
        termekek.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Termek(node, elem);
        });
        sablonElem.hide();
    }

    $(window).on("tTorles", (event) => {
        console.log(event.detail.termek_id);
        myAjax.adatTorles(apivegpont+"termek", event.detail.termek_id);
        window.location.reload();
    });

    $(window).on("tModositas", (event) => {
        console.log(event.detail);
        console.log(event.detail.termek_id);
        $("#termek_id").val(event.detail.termek_id);
        console.log($("#termek_id").val());
        $("#termeknev").val(event.detail.termeknev);
        $("#termekAr").val(event.detail.ar);
        $("#szazalek").val(event.detail.kedvezmeny_id);
        $("#termekKep").val(event.detail.kep);
    });

    $("#tAjaxModosit").on("click", () =>{
        
        let adat= {}
        adat.termek_id= $("#termek_id").val();
        adat.termeknev= $("#termeknev").val();
        adat.ar=$("#termekAr").val();
        adat.kedvezmeny_id= $("#szazalek").val();
        adat.termekKep= $("#termekKep").val();
        
        console.log(adat);
        myAjax.adatPut(apivegpont+"termek", adat, adat.termek_id);
        
        myAjax.adatBetolt(apivegpont+"termek", termekTomb, termekKiir);
        
        $("#termek_id").val('');
        $("#termeknev").val('');
        $("#termekAr").val('');
        $("#szazalek").val('');
        $("#termekKep").val('');
        //window.location.reload();
    });

    // kedvezmenyek oldal ----------------------------------------
    function kedvezmenyKiir(kedvezmenyek){
        const szuloElem = $(".nagydiv");
        console.log(kedvezmenyek);
        const sablonElem = $("#kedvezmenySablon .kedvezmeny");

        szuloElem.empty();
        sablonElem.show();
        
        kedvezmenyek.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Kedvezmeny(node, elem);
        });
        sablonElem.hide();
    }
});