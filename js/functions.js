function LinkTours(clicked_id) {
    const link1 = document.getElementById("parqueidentidad_link");
    const link2 = document.getElementById("plazadearmas_link");
    const link3 = document.getElementById("cerritodelalibertad_link");
    const link4 = document.getElementById("parquemates_link");
    if (clicked_id == "parqueidentidad_link") {
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var imgpmb = document.getElementById("parquemates_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var titlepmb = document.getElementById("parquemates_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        var textopmb = document.getElementById("parquemates_texto")
        $(imgccc).fadeOut("slow");
        $(imgcdl).fadeOut("slow");
        $(imgpmb).fadeOut("slow");
        $(imgpiw).fadeIn("slow");
        $(titleccc).fadeOut("slow");
        $(titlecdl).fadeOut("slow");
        $(titlepmb).fadeOut("slow");
        $(titlepiw).fadeIn("slow");
        $(textoccc).fadeOut("slow");
        $(textocdl).fadeOut("slow");
        $(textopmb).fadeOut("slow");
        $(textopiw).fadeIn("slow");

        link1.classList.add("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        imgpiw.classList.remove("d-none");
        imgccc.classList.add("d-none");
        imgcdl.classList.add("d-none");
        imgpmb.classList.add("d-none");
        titlepiw.classList.remove("d-none");
        titleccc.classList.add("d-none");
        titlecdl.classList.add("d-none");
        titlepmb.classList.add("d-none");
        textopiw.classList.remove("d-none");
        textoccc.classList.add("d-none");
        textocdl.classList.add("d-none");
        textopmb.classList.add("d-none");

    } else if (clicked_id == "plazadearmas_link") {
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var imgpmb = document.getElementById("parquemates_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var titlepmb = document.getElementById("parquemates_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        var textopmb = document.getElementById("parquemates_texto")
        $(imgcdl).fadeOut("slow");
        $(imgpiw).fadeOut("slow");
        $(imgpmb).fadeOut("slow");
        $(imgccc).fadeIn("slow");
        $(titlecdl).fadeOut("slow");
        $(titlepiw).fadeOut("slow");
        $(titlepmb).fadeOut("slow");
        $(titleccc).fadeIn("slow");
        $(textocdl).fadeOut("slow");
        $(textopiw).fadeOut("slow");
        $(textopmb).fadeOut("slow");
        $(textoccc).fadeIn("slow");

        link1.classList.remove("active_link")
        link2.classList.add("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        imgccc.classList.remove("d-none");
        imgpiw.classList.add("d-none");
        imgcdl.classList.add("d-none");
        imgpmb.classList.add("d-none");
        titleccc.classList.remove("d-none");
        titlepiw.classList.add("d-none");
        titlecdl.classList.add("d-none");
        titlepmb.classList.add("d-none");
        textoccc.classList.remove("d-none");
        textopiw.classList.add("d-none");
        textocdl.classList.add("d-none");
        textopmb.classList.add("d-none");

    } else if (clicked_id == "cerritodelalibertad_link") {
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var imgpmb = document.getElementById("parquemates_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var titlepmb = document.getElementById("parquemates_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        var textopmb = document.getElementById("parquemates_texto")
        $(imgccc).fadeOut("slow");
        $(imgpiw).fadeOut("slow");
        $(imgpmb).fadeOut("slow");
        $(imgcdl).fadeIn("slow");
        $(titleccc).fadeOut("slow");
        $(titlepiw).fadeOut("slow");
        $(titlepmb).fadeOut("slow");
        $(titlecdl).fadeIn("slow");
        $(textoccc).fadeOut("slow");
        $(textopiw).fadeOut("slow");
        $(textopmb).fadeOut("slow");
        $(textocdl).fadeIn("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.add("active_link")
        link4.classList.remove("active_link")
        imgcdl.classList.remove("d-none");
        imgpiw.classList.add("d-none");
        imgccc.classList.add("d-none");
        imgpmb.classList.add("d-none");
        titlecdl.classList.remove("d-none");
        titlepiw.classList.add("d-none");
        titleccc.classList.add("d-none");
        titlepmb.classList.add("d-none");
        textocdl.classList.remove("d-none");
        textopiw.classList.add("d-none");
        textoccc.classList.add("d-none");
        textopmb.classList.add("d-none");

    } else if (clicked_id == "parquemates_link") {
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var imgpmb = document.getElementById("parquemates_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var titlepmb = document.getElementById("parquemates_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        var textopmb = document.getElementById("parquemates_texto")
        $(imgccc).fadeOut("slow");
        $(imgpiw).fadeOut("slow");
        $(imgpmb).fadeIn("slow");
        $(imgcdl).fadeOut("slow");
        $(titleccc).fadeOut("slow");
        $(titlepiw).fadeOut("slow");
        $(titlepmb).fadeIn("slow");
        $(titlecdl).fadeOut("slow");
        $(textoccc).fadeOut("slow");
        $(textopiw).fadeOut("slow");
        $(textopmb).fadeIn("slow");
        $(textocdl).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.add("active_link")
        imgcdl.classList.add("d-none");
        imgpiw.classList.add("d-none");
        imgccc.classList.add("d-none");
        imgpmb.classList.remove("d-none");
        titlecdl.classList.add("d-none");
        titlepiw.classList.add("d-none");
        titleccc.classList.add("d-none");
        titlepmb.classList.remove("d-none");
        textocdl.classList.add("d-none");
        textopiw.classList.add("d-none");
        textoccc.classList.add("d-none");
        textopmb.classList.remove("d-none");

    } else {
        return false;
    }

}

window.onscroll = function () {
    scrollFunction();
}

function Carga() {
    var primero = document.getElementById("primer-fade");
    primero.classList.add("appear");
}

function scrollFunction() {
    var image = document.getElementById("myLogo");
    var despl = document.getElementById("navdesplegable");
    var nav = document.getElementById("navorigin");
    if (document.documentElement.scrollTop > 0)
        image.src = "img/logo_largo_v2.png", despl.style.display = "flex",
            nav.style.boxShadow = "0 3px 20px rgba(0, 0, 0, 0.4)";
    else
        image.src = "img/logo_general.png", despl.style.display = "block",
            nav.style.boxShadow = "none";
}

function Load(clicked_id) {
    var loadroom = document.getElementById(clicked_id).innerHTML;
    localStorage.setItem("storageRoom", loadroom);
}

function LoadRoom() {
    var $window = $(window);
    if ($window.width() < 1000) {
        LinkRoomsS();
    } else {
        LinkRoomsL();
    }
}

function LinkRoomsL(clicked_id) {
    var loadedroom = localStorage.getItem("storageRoom");
    console.log(loadedroom);
    const linknav = document.getElementById(clicked_id);
    const link1 = document.getElementById("Ejecutivo_link");
    const link2 = document.getElementById("Doble_link");
    const link3 = document.getElementById("Triple_link");
    const link4 = document.getElementById("Matrimonial_link");
    const link5 = document.getElementById("Premium_link");
    if (clicked_id == "Ejecutivo_link" || clicked_id == "Ejecutivos" || loadedroom == "Ejecutivos") {
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgtri = document.getElementById("carruselRoomTriple")
        var imgejc = document.getElementById("carruselRoomEjecutivo")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomPremium")
        var descdob = document.getElementById("Doble_descripcion")
        var desctri = document.getElementById("Triple_descripcion")
        var descejc = document.getElementById("Ejecutivo_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Premium_descripcion")
        var icondob = document.getElementById("Doble_icono")
        var icontri = document.getElementById("Triple_icono")
        var iconejc = document.getElementById("Ejecutivo_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Premium_icono")
        $(imgdob).fadeOut("slow");
        $(imgtri).fadeOut("slow");
        $(imgejc).fadeIn("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(desctri).fadeOut("slow");
        $(descejc).fadeIn("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(icontri).fadeOut("slow");
        $(iconejc).fadeIn("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");

        link1.classList.add("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgejc.classList.remove("d-none");
        imgdob.classList.add("d-none");
        imgtri.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descejc.classList.remove("d-none");
        descdob.classList.add("d-none");
        desctri.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconejc.classList.remove("d-none");
        icondob.classList.add("d-none");
        icontri.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");
    } else if (clicked_id == "Doble_link" || clicked_id == "Dobles" || loadedroom == "Dobles") {
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgtri = document.getElementById("carruselRoomTriple")
        var imgejc = document.getElementById("carruselRoomEjecutivo")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomPremium")
        var descdob = document.getElementById("Doble_descripcion")
        var desctri = document.getElementById("Triple_descripcion")
        var descejc = document.getElementById("Ejecutivo_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Premium_descripcion")
        var icondob = document.getElementById("Doble_icono")
        var icontri = document.getElementById("Triple_icono")
        var iconejc = document.getElementById("Ejecutivo_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Premium_icono")
        $(imgdob).fadeIn("slow");
        $(imgtri).fadeOut("slow");
        $(imgejc).fadeOut("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeIn("slow");
        $(desctri).fadeOut("slow");
        $(descejc).fadeOut("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(icondob).fadeIn("slow");
        $(icontri).fadeOut("slow");
        $(iconejc).fadeOut("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.add("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgejc.classList.add("d-none");
        imgdob.classList.remove("d-none");
        imgtri.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descejc.classList.add("d-none");
        descdob.classList.remove("d-none");
        desctri.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconejc.classList.add("d-none");
        icondob.classList.remove("d-none");
        icontri.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");

    } else if (clicked_id == "Triple_link" || clicked_id == "Triples" || loadedroom == "Triples") {
        var imgejc = document.getElementById("carruselRoomEjecutivo")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgtri = document.getElementById("carruselRoomTriple")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomPremium")
        var descejc = document.getElementById("Ejecutivo_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var desctri = document.getElementById("Triple_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Premium_descripcion")
        var iconejc = document.getElementById("Ejecutivo_icono")
        var icondob = document.getElementById("Doble_icono")
        var icontri = document.getElementById("Triple_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Premium_icono")
        $(imgejc).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgtri).fadeIn("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(desctri).fadeIn("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(descejc).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(icontri).fadeIn("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconejc).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.add("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgejc.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgtri.classList.remove("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descejc.classList.add("d-none");
        descdob.classList.add("d-none");
        desctri.classList.remove("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconejc.classList.add("d-none");
        icondob.classList.add("d-none");
        icontri.classList.remove("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");

    } else if (clicked_id == "Matrimonial_link" || clicked_id == "Matrimoniales" || loadedroom == "Matrimoniales") {
        var imgejc = document.getElementById("carruselRoomEjecutivo")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgtri = document.getElementById("carruselRoomTriple")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomPremium")
        var descejc = document.getElementById("Ejecutivo_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var desctri = document.getElementById("Triple_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Premium_descripcion")
        var iconejc = document.getElementById("Ejecutivo_icono")
        var icondob = document.getElementById("Doble_icono")
        var icontri = document.getElementById("Triple_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Premium_icono")
        $(imgejc).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgtri).fadeOut("slow");
        $(imgmat).fadeIn("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(desctri).fadeOut("slow");
        $(descmat).fadeIn("slow");
        $(descque).fadeOut("slow");
        $(descejc).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(icontri).fadeIn("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconejc).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.add("active_link")
        link5.classList.remove("active_link")
        imgejc.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgtri.classList.add("d-none");
        imgmat.classList.remove("d-none");
        imgque.classList.add("d-none");
        descejc.classList.add("d-none");
        descdob.classList.add("d-none");
        desctri.classList.add("d-none");
        descmat.classList.remove("d-none");
        descque.classList.add("d-none");
        iconejc.classList.add("d-none");
        icondob.classList.add("d-none");
        icontri.classList.add("d-none");
        iconmat.classList.remove("d-none");
        iconque.classList.add("d-none");

    } else if (clicked_id == "Premium_link" || clicked_id == "Premium" || loadedroom == "Premium") {
        var imgejc = document.getElementById("carruselRoomEjecutivo")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgtri = document.getElementById("carruselRoomTriple")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomPremium")
        var descejc = document.getElementById("Ejecutivo_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var desctri = document.getElementById("Triple_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Premium_descripcion")
        var iconejc = document.getElementById("Ejecutivo_icono")
        var icondob = document.getElementById("Doble_icono")
        var icontri = document.getElementById("Triple_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Premium_icono")
        $(imgejc).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgtri).fadeOut("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeIn("slow");
        $(descdob).fadeOut("slow");
        $(desctri).fadeOut("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeIn("slow");
        $(descejc).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(icontri).fadeOut("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeIn("slow");
        $(iconejc).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.add("active_link")
        imgejc.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgtri.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.remove("d-none");
        descejc.classList.add("d-none");
        descdob.classList.add("d-none");
        desctri.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.remove("d-none");
        iconejc.classList.add("d-none");
        icondob.classList.add("d-none");
        icontri.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.remove("d-none");

    } else {
        return false;
    }
    localStorage.clear();
}

function openLinks() {
    var dropdownLinks = document.querySelector(".dropdown-rooms");
    dropdownLinks.style.display = "block";
}

function LinkRoomsS(clicked_id) {
    var loadedroom = localStorage.getItem("storageRoom");
    console.log(loadedroom);
    const linknav = document.getElementById(clicked_id);
    const linkS1 = document.getElementById("EjecutivoS_link");
    const linkS2 = document.getElementById("DobleS_link");
    const linkS3 = document.getElementById("TripleS_link");
    const linkS4 = document.getElementById("MatrimonialS_link");
    const linkS5 = document.getElementById("PremiumS_link");
    if (clicked_id == "EjecutivoS_link" || clicked_id == "Ejecutivos" || loadedroom == "Ejecutivos") {
        document.getElementById("btnRooms").innerHTML = "Exclusivo Ejecutivo";
        var dropdownLinks = document.querySelector(".dropdown-rooms");
        dropdownLinks.style.display = "none";
        var imgejcS = document.getElementById("carruselRoomEjecutivoS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgtriS = document.getElementById("carruselRoomTripleS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomPremiumS")
        var descejcS = document.getElementById("EjecutivoS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var desctriS = document.getElementById("TripleS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("PremiumS_descripcion")
        var iconejcS = document.getElementById("EjecutivoS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var icontriS = document.getElementById("TripleS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("PremiumS_icono")
        $(imgejcS).fadeIn("slow");
        $(imgdobS).fadeOut("slow");
        $(imgtriS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(desctriS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descejcS).fadeIn("slow");
        $(icondobS).fadeOut("slow");
        $(icontriS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconejcS).fadeIn("slow");

        linkS1.classList.add("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgejcS.classList.remove("d-none");
        imgdobS.classList.add("d-none");
        imgtriS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descejcS.classList.remove("d-none");
        descdobS.classList.add("d-none");
        desctriS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconejcS.classList.remove("d-none");
        icondobS.classList.add("d-none");
        icontriS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");
    }
    if (clicked_id == "DobleS_link" || clicked_id == "Dobles" || loadedroom == "Dobles") {
        document.getElementById("btnRooms").innerHTML = "Tradicional Doble";
        var dropdownLinks = document.querySelector(".dropdown-rooms");
        dropdownLinks.style.display = "none";
        var imgejcS = document.getElementById("carruselRoomEjecutivoS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgtriS = document.getElementById("carruselRoomTripleS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomPremiumS")
        var descejcS = document.getElementById("EjecutivoS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var desctriS = document.getElementById("TripleS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("PremiumS_descripcion")
        var iconejcS = document.getElementById("EjecutivoS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var icontriS = document.getElementById("TripleS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("PremiumS_icono")
        $(imgejcS).fadeOut("slow");
        $(imgdobS).fadeIn("slow");
        $(imgtriS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeIn("slow");
        $(desctriS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descejcS).fadeOut("slow");
        $(icondobS).fadeIn("slow");
        $(icontriS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconejcS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.add("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgejcS.classList.add("d-none");
        imgdobS.classList.remove("d-none");
        imgtriS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descejcS.classList.add("d-none");
        descdobS.classList.remove("d-none");
        desctriS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconejcS.classList.add("d-none");
        icondobS.classList.remove("d-none");
        icontriS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");

    } else if (clicked_id == "TripleS_link" || clicked_id == "Triples" || loadedroom == "Triples") {
        document.getElementById("btnRooms").innerHTML = "Tradicional Triple";
        var dropdownLinks = document.querySelector(".dropdown-rooms");
        dropdownLinks.style.display = "none";
        var imgejcS = document.getElementById("carruselRoomEjecutivoS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgtriS = document.getElementById("carruselRoomTripleS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomPremiumS")
        var descejcS = document.getElementById("EjecutivoS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var desctriS = document.getElementById("TripleS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("PremiumS_descripcion")
        var iconejcS = document.getElementById("EjecutivoS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var icontriS = document.getElementById("TripleS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("PremiumS_icono")
        $(imgejcS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgtriS).fadeIn("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(desctriS).fadeIn("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descejcS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(icontriS).fadeIn("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconejcS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.add("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgejcS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgtriS.classList.remove("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descejcS.classList.add("d-none");
        descdobS.classList.add("d-none");
        desctriS.classList.remove("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconejcS.classList.add("d-none");
        icondobS.classList.add("d-none");
        icontriS.classList.remove("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");

    } else if (clicked_id == "MatrimonialS_link" || clicked_id == "Matrimoniales" || loadedroom == "Matrimoniales") {
        document.getElementById("btnRooms").innerHTML = "Tradicional Matrimonial";
        var dropdownLinks = document.querySelector(".dropdown-rooms");
        dropdownLinks.style.display = "none";
        var imgejcS = document.getElementById("carruselRoomEjecutivoS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgtriS = document.getElementById("carruselRoomTripleS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomPremiumS")
        var descejcS = document.getElementById("EjecutivoS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var desctriS = document.getElementById("TripleS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("PremiumS_descripcion")
        var iconejcS = document.getElementById("EjecutivoS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var icontriS = document.getElementById("TripleS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("PremiumS_icono")
        $(imgejcS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgtriS).fadeOut("slow");
        $(imgmatS).fadeIn("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(desctriS).fadeOut("slow");
        $(descmatS).fadeIn("slow");
        $(descqueS).fadeOut("slow");
        $(descejcS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(icontriS).fadeIn("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconejcS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.add("active_link")
        linkS5.classList.remove("active_link")
        imgejcS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgtriS.classList.add("d-none");
        imgmatS.classList.remove("d-none");
        imgqueS.classList.add("d-none");
        descejcS.classList.add("d-none");
        descdobS.classList.add("d-none");
        desctriS.classList.add("d-none");
        descmatS.classList.remove("d-none");
        descqueS.classList.add("d-none");
        iconejcS.classList.add("d-none");
        icondobS.classList.add("d-none");
        icontriS.classList.add("d-none");
        iconmatS.classList.remove("d-none");
        iconqueS.classList.add("d-none");

    } else if (clicked_id == "PremiumS_link" || clicked_id == "Premium" || loadedroom == "Premium") {
        document.getElementById("btnRooms").innerHTML = "Exclusivo Premium";
        var dropdownLinks = document.querySelector(".dropdown-rooms");
        dropdownLinks.style.display = "none";
        var imgejcS = document.getElementById("carruselRoomEjecutivoS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgtriS = document.getElementById("carruselRoomTripleS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomPremiumS")
        var descejcS = document.getElementById("EjecutivoS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var desctriS = document.getElementById("TripleS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("PremiumS_descripcion")
        var iconejcS = document.getElementById("EjecutivoS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var icontriS = document.getElementById("TripleS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("PremiumS_icono")
        $(imgejcS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgtriS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeIn("slow");
        $(descdobS).fadeOut("slow");
        $(desctriS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeIn("slow");
        $(descejcS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(icontriS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeIn("slow");
        $(iconejcS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.add("active_link")
        imgejcS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgtriS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.remove("d-none");
        descejcS.classList.add("d-none");
        descdobS.classList.add("d-none");
        desctriS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.remove("d-none");
        iconejcS.classList.add("d-none");
        icondobS.classList.add("d-none");
        icontriS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.remove("d-none");

    } else {
        return false;
    }
    localStorage.clear();
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
function ValidarForm() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                var response = grecaptcha.getResponse();
                if (response.length == 0) {
                    document.getElementById("invalid-captcha").style.display = "block";
                    event.preventDefault()
                    event.stopPropagation()
                }
                else {
                    document.getElementById("invalid-captcha").style.display = "none";
                }

                // Configurar los datos del correo electrónico
                var emailData = {
                    to: 'destinatario@example.com',
                    subject: 'Asunto del correo',
                    body: 'Contenido del correo'
                };

                // Llamar a la función para enviar el correo
                sendEmail(emailData);

                form.classList.add('was-validated')
            }, false)
        })
}

function onlyNumbers(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}


function minDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    today = yyyy + '-' + mm + '-' + dd;
    var start = document.getElementById("ValidationDate");
    start.setAttribute("min", today);
}

function validateDate() {
    var fecha = document.getElementById("ValidationDate");
    if (fecha.value == "") {
        fecha.type = 'text';
    } else {
        fecha.type = 'date';
    }
}

// Función para enviar el correo electrónico usando SMTPJS
function sendEmail(data) {
    Email.send({
        SecureToken: 'tu_token_seguro',
        To: data.to,
        From: 'remite@example.com',
        Subject: data.subject,
        Body: data.body
    }).then(
        message => console.log(message)
    );
}

let imageContainers = document.querySelectorAll('.container-overlay');

imageContainers.forEach(container => {
    container.addEventListener('click', (e) => {
        let target = e.target.parentElement.children;
        let image = Array.from(target).filter(child => child.tagName === 'IMG')[0];
        console.log(image);
        let src = image.src;
        console.log(src)
        let div = document.createElement('div');
        div.style.background = 'RGBA(0,0,0,.5) url(' + src + ') no-repeat center';
        div.style.backgroundSize = 'contain';
        div.style.width = '100%';
        div.style.height = '100%';
        div.style.position = 'fixed';
        div.style.zIndex = '10000';
        div.style.top = '0';
        div.style.left = '0';
        div.style.cursor = 'zoom-out';
        div.addEventListener('click', function () {
            document.body.removeChild(this);
        });
        document.body.appendChild(div);
    }
    )
});