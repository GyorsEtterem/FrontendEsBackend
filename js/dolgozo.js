class Dolgozo{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.dolgNev = this.node.children(".dolgozonev");
        this.szulDatum = this.node.children(".szuldatum");
        this.dolgCim = this.node.children(".cime");
        this.dolgTel = this.node.children(".telszam");
        this.dolgMunka = this.node.children(".munkakor");
        this.dolgJelszo = this.node.children(".jelszo");

    }

    setAdat(adat) {
        this.adat = adat;
        this.dolgNev.text(adat.neve);
        this.szulDatum.text(adat.szuldatum);
        this.dolgCim.text(adat.cim);
        this.dolgTel.text(adat.telefonszam);
        this.dolgMunka.text(adat.munkakor_id);
        this.dolgJelszo.text(adat.jelszo);
    }
}