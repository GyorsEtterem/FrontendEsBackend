class Kedvezmeny{
    constructor(node, adat) {
        console.log(adat)
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.termeknev = this.node.children(".termeknev");
        this.meret = this.node.children(".meret");
        this.kedvAr = this.node.children(".kedvAr");
        this.kedvKezd = this.node.children(".kezdet");
        this.kedvVeg = this.node.children(".veg");
        this.kedvezmeny = this.node.children(".szazalek");
        this.termekKep = this.node.children(".kep");
        this.setAdat(this.adat);
        this.atszamol(this.adat);
    }
    
    atszamol(adat){
        let kedvezmenyesAr = adat.ar*((100-adat.kedvezmeny)/100);
        this.kedvAr.text(kedvezmenyesAr);
    }

    setAdat(adat) {
        console.log(adat)
        this.adat = adat;
        this.termeknev.text(adat.termeknev);
        this.meret.text(adat.meret);
        this.kedvKezd.text(adat.mettol);
        this.kedvVeg.text(adat.meddig);
        this.kedvAr.text(adat.kedvAr);
        this.kedvezmeny.text(adat.kedvezmeny);
        this.termekKep.attr("src", adat.kep);
    }
}