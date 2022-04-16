$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    const reklamTomb = [];
    const termekTomb = [];
    const szazTomb = [];
    const rendelesek10percbenTomb = [];
    const kedvezmenyTomb = [];
    let apivegpont="/api/";
    let tTipus = "";
    let termekModositGomb = true;
    
    let apiVege = "";
    let apiTomb = "";
    let apiFunc = "";
    let volt = true;
    if (window.location.href.includes("dolgozo")) {
        apiVege = "dolgozoMunka";
        apiTomb = dolgozoTomb;
        apiFunc = dolgozoKiir;
        // apivegpont="/api/dolgozoMunka"; //dolgozoKerese
        // apivegpont += "?q=" ;// + keresomezo.val()
        myAjax.adatBetolt(apivegpont + "dolgozoMunka", dolgozoTomb, dolgozoKiir);
    }else if(window.location.href.includes("reklamacio")){
        apiVege = "reklamacio";
        apiTomb = reklamTomb;
        apiFunc = reklamKiir;
        myAjax.adatBetolt(apivegpont+"elmult10perc", rendelesek10percbenTomb, rend10percKiir);
    }else if(window.location.href.includes("termek")){
        const kosar = new Kosar();
        apiVege = "termek";
        apiTomb = termekTomb;
        apiFunc = termekKiir;
        myAjax.adatBetolt("/api/kedvezmeny", szazTomb, szazalekKiir);
        kosar.megjelenit();
    }else if(window.location.href.includes("kedvezmeny")){
        console.log("kedvezmenyek");
        apiVege = "kedvezmeny";
        apiTomb = kedvezmenyTomb;
        apiFunc = kedvezmenyKiir;
        console.log(apivegpont+apiVege);
    }else if(window.location.href.includes("index")){
        const kosar = new Kosar();
        volt = false;
        kosar.megjelenit();
    }

    if (volt) {
        myAjax.adatBetolt(apivegpont+apiVege, apiTomb, apiFunc);
    }else{
        volt = true;
    }
    console.log(window.location.href);

    function megjelenit(id){
        if (termekModositGomb) {
            if (document.getElementById(id).style.display == "block") {
                document.getElementById(id).style.display = "none";
            }else{
                document.getElementById(id).style.display = "block";
            }
        }
        
        console.log(id);
    }

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
        console.log(dolgozok)
        const szuloElem = $(".dolgozok_tabla");
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
        const myAjax = new MyAjax;
        const termekSzazTomb = [];
        const szuloElem = $(".nagydiv");
        console.log(termekek);
        const sablonElem = $("#termekSablon .termek");
        let obj;

        szuloElem.empty();
        sablonElem.show();

        for (let szam = 0; szam < termekek.length; szam++) {
            termekek[szam].kedvezmenyes_ar = termekek[szam].ar;
            console.log(termekek[szam]);
        }

        termekek.forEach(function(elem) {
            if (elem.fajta == tTipus) {
                let node = sablonElem.clone().appendTo(szuloElem);
                const obj = new Termek(node, elem);
            }
        });
        sablonElem.hide();


        myAjax.adatBetolt("/api/kedvezmeny", termekSzazTomb, kedvezmenyAtad);
    }

    function kedvezmenyAtad(adat){
        let pKedvAr = $('.kedvAr');
        let pSzazId = $('.szazalekId');
        let pSzaz = $('.szazalek');
        let pKedvAr2 = $('.titkosKedvAr');
        let kieg = 0;

        for (let rSzam = 0; rSzam < pKedvAr.length; rSzam++) {
                adat.forEach((elem, index) => {
                    if (elem.kedvezmeny_id == pSzazId[rSzam].textContent) {
                        pSzaz[rSzam].textContent = "Kedvezmény: " + elem.kedvezmeny + "%";
                        kieg = pKedvAr[rSzam].textContent;
                        pKedvAr2[rSzam].textContent = kieg;
                        pKedvAr[rSzam].textContent = "Kedvezményes ár: " + Math.round(kieg*(1-(elem.kedvezmeny/100))) + " Ft";
                    }
                });
        }
    }

    function szazalekKiir(adat){
        this.mother = $('#termekSzaz');
        let txt = "";
        adat.forEach((elem, index) => {
            console.log(index);
            txt += 
                '<option value="' + elem.kedvezmeny_id + '">' +
                elem.kedvezmeny +
                '%</option>'
        });
    
        this.mother.html(txt);
    }

    $(window).on("tTorles", (event) => {
        console.log(event.detail.termek_id);
        myAjax.adatTorles(apivegpont+"termek", event.detail.termek_id);
        window.location.reload();
    });

    $(window).on("tModositas", (event) => {
        this.mother = $('#termekSzaz');
        let modositGomb = "tAjaxModosit";
        console.log(event.detail);
        console.log(event.detail.termek_id);
        $("#termek_id").val(event.detail.termek_id);
        $("#termekFaj").val(event.detail.fajta);
        console.log($("#termek_id").val());
        $("#termeknev").val(event.detail.termeknev);
        $("#termekEladhat").val(event.detail.eladhato);
        $("#termekRaktar").val(event.detail.raktaron);
        $("#termekMeret").val(event.detail.meret);
        this.mother.val(event.detail.kedvezmeny_id);
        $("#termekAr").val(event.detail.ar);
        $("#termekKep").val(event.detail.kep);
        megjelenit(modositGomb);
        termekModositGomb = false;;
    });

    $("#tAjaxModosit").on("click", () =>{
        let modositGomb = "tAjaxModosit";
        let adat = {}
        adat.termek_id = $("#termek_id").val();
        adat.fajta = $("#termekFaj").val();
        adat.termeknev = $("#termeknev").val();
        adat.eladhato = $("#termekEladhat").val();
        adat.raktaron = $("#termekRaktar").val();
        adat.meret = $("#termekMeret").val();
        adat.kedvezmeny_id = $("#termekSzaz").val();
        adat.ar = $("#termekAr").val();
        adat.kep = $("#termekKep").val();
        
        console.log(adat);
        myAjax.adatPut(apivegpont+"termek", adat, adat.termek_id);
        
        myAjax.adatBetolt(apivegpont+"termek", termekTomb, termekKiir);
        
        $("#termek_id").val('');
        $("#termekFaj").val('');
        $("#termeknev").val('');
        $("#termekEladhat").val('');
        $("#termekRaktar").val('');
        $("#termekMeret").val('');
        $("#termekSzaz").val(0);
        $("#termekAr").val('');
        $("#termekKep").val('');
        termekModositGomb = true;
        megjelenit(modositGomb);
    });

    $("#ajaxUjTermek").on("click", () =>{
        let adat = {}
        adat.fajta = $("#termekFaj").val();
        adat.termeknev = $("#termeknev").val();
        adat.eladhato = $("#termekEladhat").val();
        adat.raktaron = $("#termekRaktar").val();
        adat.meret = $("#termekMeret").val();
        adat.kedvezmeny_id = $("#termekSzaz").val();
        adat.ar = $("#termekAr").val();
        adat.kep = $("#termekKep").val();
        
        console.log(adat);
        myAjax.adatPost(apivegpont+"termek", adat);
        
        myAjax.adatBetolt(apivegpont+"termek", termekTomb, termekKiir);
        
        $("#termek_id").val('');
        $("#termekFaj").val('');
        $("#termeknev").val('');
        $("#termekEladhat").val('');
        $("#termekRaktar").val('');
        $("#termekMeret").val('');
        $("#termekSzaz").val(0);
        $("#termekAr").val('');
        $("#termekKep").val('');
        termekModositGomb = false;
    });

    $(window).on("kosarbarak", (event) => {
        const kosar = new Kosar();
        console.log(event.detail);
        kosar.setKosar(event.detail);
    });

    // index oldal -----------------------------------------------
    
    $(window).on("rendelesFel", (event) =>{
        let kosarTomb = [];
        let adatok = {};
        kosarTomb = JSON.parse(localStorage.getItem('kosaram'));
        console.log(event.detail);
        console.log(kosarTomb);
        if (kosarTomb != null) {
            kosarTomb.forEach((elem, index) => {
                adatok.termek_id = elem.termek_id;
                adatok.nyugta = event.detail;
                adatok.etelAllapot = 0;

                myAjax.adatPost(apivegpont+"nyugtatetel", adatok);
            });
        }
        localStorage.clear();
        window.location.reload();
    });
    
    function tipusValaszt(){
        switch (tTipus) {
            case 0:
              console.log("BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB");
              break;
            case 1:
                console.log("KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK");
              break;
            case 2:
                console.log("IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII");
              break;
            case 3:
                console.log("DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD");
              break;
            case 4:
                console.log("SZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZSZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZZ");
              break;
            case 5:
                console.log("MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM");
          }
    }


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

    $(window).on("kTorles", (event) => {
        console.log(event.detail.kedvezmeny_id);
        myAjax.adatTorles(apivegpont+"kedvezmeny", event.detail.kedvezmeny_id);
        window.location.reload();
    });

    $("#ajaxUjKedvezmeny").on("click", () =>{
        let adat = {}
        adat.kedvezmeny = $("#uKedvSzaz").val();
        adat.mettol = $("#uKedvKez").val();
        adat.meddig = $("#uKedvVeg").val();
        
        console.log(adat);
        myAjax.adatPost(apivegpont+"kedvezmeny", adat);
        
        myAjax.adatBetolt(apivegpont+"kedvezmeny", kedvezmenyTomb, kedvezmenyKiir);
        
        $("#uKedvSzaz").val('');
        $("#uKedvKez").val('');
        $("#uKedvVeg").val('');
    });
});