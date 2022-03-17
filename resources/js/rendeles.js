class Rendeles{
    constructor(node, adat) {
        this.node = node;
        /**selectorok elnvezése */
        this.adat = adat;
        this.rendelesId = adat.rendeles_id;
        this.rendNyugta = this.node.children(".rendelesszam");
        this.rendIdeje = this.node.children(".datum");
        this.rendTermekNev = this.node.children(".termeknev");
        this.rendTermekAr = this.node.children(".termekAr");


        this.setAdat(this.adat);

        this.rendTorles = this.node.children(".torles").children("button");
        this.rendModosit = this.node.children(".modositas").children("button");
        this.rendTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.rendModosit.on("click ", () => {
            this.modositTrigger();
        });
    }

    setAdat(adat) {
        this.adat = adat;
        this.rendNyugta.text(adat.nyugta);
        this.rendIdeje.text(adat.csere_ideje);
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
class Rendelesek10percben extends Rendeles {
    constructor(node, adat){
        super(node, adat);
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