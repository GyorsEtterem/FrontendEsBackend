class Kedvezmeny{
    constructor(node, adat) {
        console.log(adat)
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.kedvezmeny_id = adat.kedvezmeny_id;
        this.kedvSzaz = this.node.children(".kedvSzaz");
        this.kedvKez = this.node.children(".kedvKez");
        this.kedvVeg = this.node.children(".kedvVeg");
        this.setAdat(this.adat);
        /* this.termekTorles = this.node.children(".tTorles").children("button");
        this.termekModosit = this.node.children(".tModositas").children("button");
        this.termekTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.termekModosit.on("click ", () => {
            this.modositTrigger();
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
}