class Reklamacio{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.reklIdeje = this.node.children(".leiras");
        this.reklLeiras = this.node.children(".mennyiseg");
        this.reklMenny = this.node.children(".datum");

    }

    setAdat(adat) {
        this.adat = adat;
        this.reklIdeje.text(adat.csere_ideje);
        this.reklLeiras.text(adat.leiras);
        this.reklMenny.text(adat.menny);
    }
}