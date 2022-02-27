class Rendeles{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.rendelesId = adat.rendeles_id;
        this.rendNyugta = this.node.children(".rendelesszam");
        this.rendIdeje = this.node.children(".datum");
        this.setAdat(this.adat);
    }

    setAdat(adat) {
        this.adat = adat;
        this.rendNyugta.text(adat.nyugta);
        this.rendIdeje.text(adat.csere_ideje);
    }
    

}
class Rendelesek10percben extends Rendeles {
    constructor(node, adat){
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.rendelesId = adat.rendeles_id;
        this.rendNyugta = this.node.children(".rendelesszam");
        this.rendIdeje = this.node.children(".datum");
        this.setAdat(this.adat);
    }

    setAdat(adat) {
        this.adat = adat;
        this.rendNyugta.text(adat.nyugta);
        this.rendIdeje.text(adat.csere_ideje);
    }
}