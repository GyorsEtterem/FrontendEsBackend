$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    const reklamTomb = [];
    const rendelesek10percbenTomb = [];
    let apivegpont="http://127.0.0.1:8000/api/";
    
    myAjax.adatBetolt(apivegpont+"dolgozo", dolgozoTomb, dolgozoKiir);
    myAjax.adatBetolt(apivegpont+"reklamacio", reklamTomb, reklamKiir);
    myAjax.adatBetolt(apivegpont+"rendelesek10percben", rendelesek10percbenTomb, rend10percKiir);

    function dolgozoKiir(dolgozok){
        const szuloElem = $(".dolgozok_tabla");
        console.log(dolgozok)
        const sablonElem = $('.dolgozo');
        szuloElem.empty();
        sablonElem.show();
        

        dolgozok.forEach(function(elem) {

            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);
            

        });
        sablonElem.hide();
     }

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
    
    $(".torles").on("click", () =>{
        myAjax.adatTorles(apivegpont+"dolgozok",1)
    }); 
    
    
    $(window).on("torles", (event) => {
        console.log("halo: " + event.detail.dolg_id);
        myAjax.adatTorles(apivegpont+"dolgozok", event.detail.dolg_id);
    });

});