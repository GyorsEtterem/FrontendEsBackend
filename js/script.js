$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    let apivegpont="http://localhost:3000/dolgozok";
    const szuloElem = $(".dolgozok_tabla");
    
    myAjax.adatBetolt(apivegpont, dolgozoTomb, dolgozoKiir);

    function dolgozoKiir(dolgozok){
        console.log(dolgozok)
        const sablonElem = $('.dolgozo');
        szuloElem.empty();
        sablonElem.show();
        

        dolgozok.forEach(function(elem) {
            console.log(dolgozok)
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);
            

        });
        sablonElem.hide();
    }

});