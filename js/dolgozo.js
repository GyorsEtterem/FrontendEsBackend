class Dolgozo{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.dolgId = adat.dolg_id;
        this.dolgNev = this.node.children(".dolgozonev");
        this.szulDatum = this.node.children(".szuldatum");
        this.dolgCim = this.node.children(".cime");
        this.dolgTel = this.node.children(".telszam");
        this.dolgJelszo = this.node.children(".jelszo");
        this.dolgMunka = this.node.children(".munkakor");
        this.setAdat(this.adat);
        
        this.dolgozoTorles = this.node.children(".torles").children("button");
        this.dolgozoModosit = this.node.children(".modosit").children("button");
        this.dolgozoTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.dolgozoModosit.on("click ", () => {
            this.modositTrigger();
        });

    }

    setAdat(adat) {
        this.adat = adat;
        this.dolgNev.text(adat.neve);
        this.szulDatum.text(adat.szuldatum);
        this.dolgCim.text(adat.cim);
        this.dolgTel.text(adat.telefonszam);
        this.dolgJelszo.text(adat.jelszo);
        this.dolgMunka.text(adat.munkakor_id);
    }

    torlesTrigger(adat){
        let esemeny  = new CustomEvent("torles", {
            detail: this.adat,
        });
        
        window.dispatchEvent(esemeny); 
    }
    modositTrigger(){
        let esemeny  = new CustomEvent("modositas", {

            detail: this.adat, 
        });
        window.dispatchEvent(esemeny); 
    }
     
}