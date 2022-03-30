class Reklamacio{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.reklamId = adat.reklam_id;
        this.termekId = adat.termek_id;
        this.reklNyugta = this.node.children(".nyugta");
        this.reklLeiras = this.node.children(".leiras");
        this.reklMenny = this.node.children(".menny");
        this.reklIdeje = this.node.children(".csere_ideje");
        this.setAdat(this.adat);
    }

    setAdat(adat) {
        //this.adat = adat;
        //this.reklnyugta.text(adat.nyugta);
        this.reklLeiras.text(adat.leiras);
        this.reklMenny.text(adat.menny);
        this.reklIdeje.text(adat.csere_ideje);
    }
}