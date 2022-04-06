class Reklamacio {
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.reklamId = adat.reklam_id;
        this.termekId = adat.termek_id;
        this.reklNyugta = this.node.children(".nyugta");
        this.reklNyugta = this.node.children(".nyugta");
        this.reklLeiras = this.node.children(".leiras");
        this.reklIdeje = this.node.children(".csere_ideje");
        this.setAdat(this.adat);
    }

    setAdat(adat) {
        //this.adat = adat;
        this.reklLeiras.text(adat.leiras);
        this.reklIdeje.text(adat.csere_ideje);
    }
}
