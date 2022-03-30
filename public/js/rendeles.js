class Rendeles{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.rendelesId = adat.rendeles_id;
        this.rendNyugta = this.node.children(".rendelesszam");
        this.rendIdeje = this.node.children(".csere_ideje");
        /* az utolsó 3 csak az átadott rendelésekhez kell */
        this.rendTermek = this.node.children(".termek_id");
        this.rendAr = this.node.children(".termekAr");
        this.rendMennyiseg = this.node.children(".menny");
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
        super(node, adat);
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.rendelesId = adat.rendeles_id;
        this.rendTermek = this.node.children(".termek_id");
        this.rendAr = this.node.children(".termekAr");
        this.rendMennyiseg = this.node.children(".menny");
        this.rendNyugta = this.node.children(".nyugta");
        this.rendIdeje = this.node.children(".csere_ideje");
        this.setAdat(this.adat);

        this.reklamacioHozza = this.node.children(".hozzaad").children("button");
        this.reklamacioHozza.on("click ", () => {
            this.hozzaadTrigger();
        });
    }

    setAdat(adat) {
        this.adat = adat;
        this.rendTermek.text(adat.termek_id);
        this.rendAr.text(adat.termekar);
        this.rendMennyiseg.text(adat.menny);
        this.rendNyugta.text(adat.nyugta);
        this.rendIdeje.text(adat.csere_ideje);
    }

    hozzaadTrigger(){
        let esemeny  = new CustomEvent("hozzaad", {

            detail: this.adat, 
        });
        window.dispatchEvent(esemeny); 
    }

}