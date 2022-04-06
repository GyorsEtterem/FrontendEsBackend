class Dolgozo {
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.dolgId = adat.dolg_id;
        this.dolgNev = this.node.children(".dolgozonev");
        this.szulDatum = this.node.children(".szuldatum");
        this.dolgEmail = this.node.children(".email");
        this.dolgCim = this.node.children(".cim");
        this.dolgTel = this.node.children(".telszam");
        this.dolgJelszo = this.node.children(".jelszo");
        this.dolgMunka = this.node.children(".munkakor");
        this.dolgMunkaNev = this.node.children(".megnevezes");
        this.setAdat(this.adat);

        this.dolgozoTorles = this.node.children(".torles").children("button");
        this.dolgozoModosit = this.node
            .children(".modositas")
            .children("button");
        this.dolgozoTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.dolgozoModosit.on("click ", () => {
            this.modositTrigger();
        });
    }

    setAdat(adat) {
        this.adat = adat;
        this.dolgNev.html(adat.neve);
        this.szulDatum.html(adat.szuldatum);
        this.dolgEmail.html(adat.email);
        this.dolgCim.html(adat.cim);
        this.dolgTel.html(adat.telefonszam);
        this.dolgJelszo.html(adat.jelszo);
        this.dolgMunka.html(adat.munkakor_id);
        this.dolgMunkaNev.html(adat.megnevezes);
    }

    torlesTrigger(adat) {
        let esemeny = new CustomEvent("torles", {
            detail: this.adat,
        });

        window.dispatchEvent(esemeny);
    }
    modositTrigger() {
        let esemeny = new CustomEvent("modositas", {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }
}
