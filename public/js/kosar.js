class Kosar {
    constructor() {
      //mutatók a grafikus elemekhez
      this.kosarElem = $('#kosaram');
      this.osszarElem = $('#osszar');
      this.kosarTomb = [];
      //localstorage-ból beolvassuk az adatokat és betesszük a tömbbe
      // console.log(localStorage.getItem('kosaram'))
      if (localStorage.getItem('kosaram') !== null) {
        this.kosarTomb = JSON.parse(localStorage.getItem('kosaram'));
        this.megjelenit();
      }
    }
    setKosar(termek) {
      this.kosarTomb.push(termek);
      localStorage.setItem('kosaram', JSON.stringify(this.kosarTomb));
  
      this.megjelenit();
    }

    megjelenit(){
        let txt = '<table>';
        let aruk = 0;
        this.kosarTomb.forEach((elem, index) => {
            aruk += elem.ar;
            txt += 
                '<tr><td>' +
                elem.termeknev +
                '</td><td>' +
                elem.ar +
                '</td><td><button data-id="' +
                index +
                '" class="kosarTorol">X</button></td></tr>'
        });
        txt += '</table>';

        this.kosarElem.html(txt);
        this.osszarElem.html("Összesen: " + aruk + " Ft");
        this.kosarbaGombElem = $('.kosarTorol');
        this.kosarbaGombElem.on('click', (event) => {
            let id = $(event.target).attr('data-id');
            this.kosarTomb.splice(id, 1);
            localStorage.setItem('kosaram', JSON.stringify(this.kosarTomb))
            this.megjelenit();
        });
    }
}