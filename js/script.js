$(function () {
    const myAjax = new MyAjax;
    const dolgozoTomb = [];
    let apivegpont="http://localhost:3000/dolgozok";
    const szuloElem = $(".dolgozok");
    
    myAjax.adatBetolt(apivegpont, dolgozoTomb, dolgozoKiir);

    function dolgozoKiir(dolgozok){
        const sablonElem = $('tbody .termek');
        szuloElem.empty();
        sablonElem.show();
        

        dolgozok.forEach(function(elem) {
            let node = sablonElem.clone().appendTo(szuloElem);
            const obj = new Dolgozo(node, elem);

        });
        //sablonElem.hide();
    }

});