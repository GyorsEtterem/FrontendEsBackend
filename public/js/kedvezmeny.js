class Kedvezmeny {
    constructor(node, adat) {
        console.log(adat);
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
    }

    setAdat(adat) {
        console.log(adat);
        this.adat = adat;
        this.kedvezmeny_id.text("Kedvezmény ID: " + adat.kedvezmeny_id);
        this.kedvSzaz.text("Kedvezmény: " + adat.kedvezmeny + "%");
        this.kedvKez.text("Kedvezmény kezdete: " + adat.mettol);
        this.kedvVeg.text("Kedvezmény vége: " + adat.meddig);
    }

    torlesTrigger(adat) {
        let esemeny = new CustomEvent("kTorles", {
            detail: this.adat,
        });

        window.dispatchEvent(esemeny);
    }
}
