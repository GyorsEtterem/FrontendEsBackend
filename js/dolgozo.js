class Dolgozo{
    constructor(node, adat) {
        console.log(adat)
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.dolgNev = this.node.children(".dolgozonev");
        this.szulDatum = this.node.children(".szuldatum");
        this.dolgCim = this.node.children(".cime");
        this.dolgTel = this.node.children(".telszam");
        this.dolgJelszo = this.node.children(".jelszo");
        this.dolgMunka = this.node.children(".munkakor");
        this.setAdat(this.adat);

    }

    setAdat(adat) {
        console.log(adat)
        this.adat = adat;
        this.dolgNev.text(adat.neve);
        this.szulDatum.text(adat.szuldatum);
        this.dolgCim.text(adat.cim);
        this.dolgTel.text(adat.telefonszam);
        this.dolgJelszo.text(adat.jelszo);
        this.dolgMunka.text(adat.munkakor_id);
    }
}