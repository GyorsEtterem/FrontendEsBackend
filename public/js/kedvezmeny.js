class Kedvezmeny{
    constructor(node, adat) {
        console.log(adat)
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.kedvezmeny_id = this.node.children(".kedvId");
        this.kedvSzaz = this.node.children(".kedvSzaz");
        this.kedvKez = this.node.children(".kedvKez");
        this.kedvVeg = this.node.children(".kedvVeg");
        this.setAdat(this.adat);

        this.kedvTorles = this.node.children(".kTorles").children("button");
        this.kedvTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        /* this.reklamacioHozza = this.node.children(".kedvFelvesz").children("button");
        this.reklamacioHozza.on("click ", () => {
            this.hozzaadTrigger();
        }); */
    }

    setAdat(adat) {
        console.log(adat)
        this.adat = adat;
        this.kedvezmeny_id.text(adat.kedvezmeny_id);
        this.kedvSzaz.text(adat.kedvezmeny);
        this.kedvKez.text(adat.mettol);
        this.kedvVeg.text(adat.meddig);
    }

    torlesTrigger(adat){
        let esemeny  = new CustomEvent("kTorles", {
            detail: this.adat,
        });
        
        window.dispatchEvent(esemeny); 
    }

    /* hozzaadTrigger(){
        let esemeny  = new CustomEvent("kHozzaad", {
            detail: this.adat, 
        });
        window.dispatchEvent(esemeny); 
    } */
}