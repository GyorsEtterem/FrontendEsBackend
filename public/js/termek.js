class Termek{
    constructor(node, adat) {
        console.log(adat)
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.termek_id = adat.termek_id;
        this.termeknev = this.node.children(".termeknev");
        this.meret = this.node.children(".meret");
        this.ara = this.node.children(".kedvAr");
        this.kedvezmeny = this.node.children(".szazalek");
        this.termekKep = this.node.children(".kep");
        this.setAdat(this.adat);
        this.termekTorles = this.node.children(".tTorles").children("button");
        this.termekModosit = this.node.children(".tModositas").children("button");
        /* this.atszamol(this.adat); */
        this.termekTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.termekModosit.on("click ", () => {
            this.modositTrigger();
        });
        this.termeknev.on("click", () => {
            this.termekreKatt(adat);
        });
    }

    termekreKatt(adat){
        let esemeny = new CustomEvent("kosarbarak", {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }

    atszamol(adat){
        let kedvezmenyesAr = adat.ar*((100-adat.kedvezmeny)/100);
        this.kedvAr.text(kedvezmenyesAr);
    }
    
    setAdat(adat) {
        console.log(adat);
        this.adat = adat;
        this.termeknev.text(adat.termeknev);
        this.meret.text("Termék méret besorolása: " + adat.meret);
        this.ara.text("Termék ára: " + adat.ar + " Ft");
        this.kedvezmeny.text("Kedvezmény százaléka: " + adat.kedvezmeny_id);
        this.termekKep.attr("src", adat.kep);
    }

    torlesTrigger(adat){
        let esemeny  = new CustomEvent("tTorles", {
            detail: this.adat,
        });
        
        window.dispatchEvent(esemeny); 
    }

    modositTrigger(){
        let esemeny  = new CustomEvent("tModositas", {

            detail: this.adat, 
        });
        window.dispatchEvent(esemeny); 
    }
     
}

/* class TermekAruhaz extends Termek {
    constructor(node, adat){
        super(node, adat);
        this.termekKep = this.node.children(".kep ");

        //this.setAdat(this.adat);
        this.termekKosar = this.node.children(".termekTerulet");

        this.termekKosar.on("click ", () => {
            this.kattintasTrigger("termekKosarba");
        });
    }
} */