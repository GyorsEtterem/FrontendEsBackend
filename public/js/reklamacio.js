class Reklamacio {
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.reklamId = adat.reklam_id;
        this.termekId = adat.termek_id;
        this.reklNyugta = this.node.children(".nyugta");
        this.reklTermek = this.node.children(".termek_id");
        this.reklLeiras = this.node.children(".leiras");
        this.reklIdeje = this.node.children(".csere_ideje");
        this.setAdat(this.adat);
    }

    setAdat(adat) {
        //this.adat = adat;
        console.log(adat.nyugta);
        this.reklTermek.text("Termék id: " + adat.termek_id);
        this.reklLeiras.text("Probléma: " + adat.leiras);
        this.reklIdeje.text("Csere megtörtént: "+adat.csere_ideje);
        this.reklNyugta.text("Rendelés sorszáma: "+adat.nyugta);
    }
}
