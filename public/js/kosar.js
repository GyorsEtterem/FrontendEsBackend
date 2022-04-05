class Kosar {
    constructor() {
      //mutatók a grafikus elemekhez
      this.kosarElem = $('#kosaram');
      this.osszarElem = $('#osszar');
      this.rendetAtad = $('#rendAtad');
      this.megjegyzes = $('#megjegy');
      this.kosarTomb = [];
      this.kosarMegjegyzes = "";
      //localstorage-ból beolvassuk az adatokat és betesszük a tömbbe
      // console.log(localStorage.getItem('kosaram'))
      if (localStorage.getItem('kosaram') !== null) {
        this.kosarTomb = JSON.parse(localStorage.getItem('kosaram'));
        this.megjelenit();
      }
      this.rendetAtad.on("click", () => {
        this.rendelesAtadasa();
      });
    }

    osszeszamol(){
      let osszAr = 0;
      this.kosarTomb.forEach((elem, index) => {
        osszAr += elem.ar;
      });
      return osszAr;
    }

    rendelesAtadasa(){
      const myAjax = new MyAjax();
      let adat = {};
      let nyugta = {};
      let current = new Date();
      let jelenDatum = current.getFullYear() + "-0" + (current.getMonth()+1) + "-0" + current.getDate();
      adat.vegsoOsszeg = this.osszeszamol();
      console.log(this.osszeszamol());
      adat.fizetesAllapot = 1;
      adat.fizetesMod = 1;
      adat.datumrend = jelenDatum;
      adat.datumkifizet = jelenDatum;
      adat.megjegyzes = "nincs";
      console.log(adat);
      myAjax.adatPost("/api/nyugta", adat);
      myAjax.adatBetolt("/api/nyugta", nyugta, maxNyugtaszam);
    }

    setKosar(termek) {
      this.kosarTomb.push(termek);
      localStorage.setItem('kosaram', JSON.stringify(this.kosarTomb));
  
      this.megjelenit();
    }

    megjelenit(){
        let txt = '<table>';
        this.kosarTomb.forEach((elem, index) => {
            txt += 
                '<tr><td>' +
                elem.termeknev +
                '</td><td>' +
                elem.ar +
                ' Ft</td><td><button data-id="' +
                index +
                '" class="kosarTorol">X</button></td></tr>'
        });
        txt += '</table>';

        this.kosarElem.html(txt);
        this.osszarElem.html("Összesen: " + this.osszeszamol() + " Ft");
        this.kosarbaGombElem = $('.kosarTorol');
        this.kosarbaGombElem.on('click', (event) => {
            let id = $(event.target).attr('data-id');
            this.kosarTomb.splice(id, 1);
            localStorage.setItem('kosaram', JSON.stringify(this.kosarTomb))
            this.megjelenit();
        });
    }
}
function maxNyugtaszam(tomb){
  let maxErtek = -1;
  tomb.forEach((elem, index) => {
    if (elem.nyugtaszam>maxErtek) {
      maxErtek = elem.nyugtaszam;
    }
  });

  console.log(maxErtek);
  let esemeny  = new CustomEvent("rendelesFel", {
    detail: maxErtek,
  });
  window.dispatchEvent(esemeny); 
}