class Kosar {
    constructor() {
        //mutatók a grafikus elemekhez
        this.kosarElem = $("#kosaram");
        this.osszarElem = $("#osszar");
        this.rendetAtad = $("#rendAtad");
        this.megjegyzes = $("#megjegy");
        this.kosarTomb = [];
        this.kosarMegjegyzes = "";
        //localstorage-ból beolvassuk az adatokat és betesszük a tömbbe
        if (localStorage.getItem("kosaram") !== null) {
            this.kosarTomb = JSON.parse(localStorage.getItem("kosaram"));
            this.megjelenit();
        }
        this.rendetAtad.on("click", () => {
            if (localStorage.getItem("kosaram") !== null) {
                this.rendelesAtadasa();
            }
        });
    }

    rendelesAtadasa() {
        const myAjax = new MyAjax();
        let adat = {};
        let nyugta = {};
        let current = new Date();
        let jelenDatum =
            current.getFullYear() +
            "-0" +
            (current.getMonth() + 1) +
            "-0" +
            current.getDate();
        adat.vegsoOsszeg = osszeszamol(this.kosarTomb);
        console.log(osszeszamol(this.kosarTomb));
        adat.fizetesAllapot = 1;
        adat.fizetesMod = 1;
        adat.datumrend = jelenDatum;
        adat.datumkifizet = jelenDatum;
        adat.megjegyzes = "nincs";
        console.log(adat);
        myAjax.adatPost("/api/nyugta", adat);
        myAjax.adatBetolt("/api/nyugta", nyugta, maxNyugtaszam);
    }

    setKosar(termek) {
        this.kosarTomb.push(termek);
        localStorage.setItem("kosaram", JSON.stringify(this.kosarTomb));

        ajaxKedvez();

        this.megjelenit();
    }

    megjelenit() {
        tablazatEpito(this.kosarTomb);
    }
}

function osszeszamol(tomb) {
    let osszAr = 0;
    tomb.forEach((elem, index) => {
        osszAr += elem.kedvezmenyes_ar;
    });
    return osszAr;
}

function tablazatEpito(tomb) {
    let txt = "<table>";
    tomb.forEach((elem, index) => {
        txt +=
            "<tr><td>" +
            elem.termeknev +
            "</td><td>" +
            elem.kedvezmenyes_ar +
            ' Ft</td><td><button data-id="' +
            index +
            '" class="kosarTorol cursor">X</button></td></tr>';
    });
    txt += "</table>";
    $("#kosaram").html(txt);

    $("#osszar").html("Összesen: " + osszeszamol(tomb) + " Ft");

    let kosarbaGombElem = $(".kosarTorol");
    kosarbaGombElem.on("click", (event) => {
        let id = $(event.target).attr("data-id");
        tomb.splice(id, 1);
        localStorage.setItem("kosaram", JSON.stringify(tomb));
        ajaxKedvez();
    });
}

function ajaxKedvez() {
    const myAjax = new MyAjax();
    const kedvezTomb = [];
    myAjax.adatBetolt("/api/kedvezmeny", kedvezTomb, localValtoz);
}

function maxNyugtaszam(tomb) {
    let maxErtek = -1;
    tomb.forEach((elem, index) => {
        if (elem.nyugtaszam > maxErtek) {
            maxErtek = elem.nyugtaszam;
        }
    });

    console.log(maxErtek);
    let esemeny = new CustomEvent("rendelesFel", {
        detail: maxErtek,
    });
    window.dispatchEvent(esemeny);
}
function localValtoz(adat) {
    let tarolo = JSON.parse(localStorage.getItem("kosaram"));
    console.log(tarolo);

    for (let szam1 = 0; szam1 < tarolo.length; szam1++) {
        for (let szam2 = 0; szam2 < adat.length; szam2++) {
            if (tarolo[szam1].kedvezmeny_id == adat[szam2].kedvezmeny_id) {
                tarolo[szam1].kedvezmenyes_ar = Math.round(
                    tarolo[szam1].ar * (1 - adat[szam2].kedvezmeny / 100)
                );
                console.log(tarolo[szam1].kedvezmeny_id);
                console.log(adat[szam2].kedvezmeny_id);
            }
        }
    }
    localStorage.setItem("kosaram", JSON.stringify(tarolo));
    tablazatEpito(tarolo);
    console.log("halo4");
}
