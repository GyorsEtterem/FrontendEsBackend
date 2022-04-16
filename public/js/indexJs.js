class TermekAllito {
    constructor() {
      this.kosarElem = "";
    }
    setTipus(tipus){
        localStorage.setItem('termekTipus', JSON.stringify(tipus));
    }
    getTipus(){
        if (localStorage.getItem('termekTipus') !== null) {
            this.kosarElem = JSON.parse(localStorage.getItem('termekTipus'));
            return this.kosarElem;
        }
    }
}