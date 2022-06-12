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

    }else if (clicked_id == "plazadearmas_link") {
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

    }else if (clicked_id == "cerritodelalibertad_link") {
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

    }else if (clicked_id == "parquemates_link") {
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

    }else{
        return false;
    }
    
}

window .onscroll = function () {
    scrollFunction();
}

function Carga(){
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

function Load(clicked_id){
    var loadroom = document.getElementById(clicked_id).innerHTML;
    localStorage.setItem("storageRoom", loadroom);
}

function LoadRoom(){
    var $window = $(window);
    if ($window.width() < 1000) {
        LinkRoomsS();
    }else{
        LinkRoomsL();
    }
}

function LinkRoomsL(clicked_id) {
    var loadedroom = localStorage.getItem("storageRoom");
    console.log(loadedroom);
    const linknav = document.getElementById(clicked_id);
    const link1 = document.getElementById("Individual_link");
    const link2 = document.getElementById("Doble_link");
    const link3 = document.getElementById("Familiar_link");
    const link4 = document.getElementById("Matrimonial_link");
    const link5 = document.getElementById("Queen_link");
    if (clicked_id == "Individual_link" || clicked_id == "Accesibles" || loadedroom == "Accesibles") {
        var imgind = document.getElementById("carruselRoomIndividual")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgfam = document.getElementById("carruselRoomFamiliar")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomQueen")
        var descind = document.getElementById("Individual_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var descfam = document.getElementById("Familiar_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Queen_descripcion")
        var iconind = document.getElementById("Individual_icono")
        var icondob = document.getElementById("Doble_icono")
        var iconfam = document.getElementById("Familiar_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Queen_icono")
        $(imgind).fadeIn("slow");
        $(imgdob).fadeOut("slow");
        $(imgfam).fadeOut("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(descfam).fadeOut("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(descind).fadeIn("slow");
        $(icondob).fadeOut("slow");
        $(iconfam).fadeOut("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconind).fadeIn("slow");

        link1.classList.add("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgind.classList.remove("d-none");
        imgdob.classList.add("d-none");
        imgfam.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descind.classList.remove("d-none");
        descdob.classList.add("d-none");
        descfam.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconind.classList.remove("d-none");
        icondob.classList.add("d-none");
        iconfam.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");

    }else if (clicked_id == "Doble_link") {
        var imgind = document.getElementById("carruselRoomIndividual")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgfam = document.getElementById("carruselRoomFamiliar")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomQueen")
        var descind = document.getElementById("Individual_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var descfam = document.getElementById("Familiar_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Queen_descripcion")
        var iconind = document.getElementById("Individual_icono")
        var icondob = document.getElementById("Doble_icono")
        var iconfam = document.getElementById("Familiar_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Queen_icono")
        $(imgind).fadeOut("slow");
        $(imgdob).fadeIn("slow");
        $(imgfam).fadeOut("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeIn("slow");
        $(descfam).fadeOut("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(descind).fadeOut("slow");
        $(icondob).fadeIn("slow");
        $(iconfam).fadeOut("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconind).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.add("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgind.classList.add("d-none");
        imgdob.classList.remove("d-none");
        imgfam.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descind.classList.add("d-none");
        descdob.classList.remove("d-none");
        descfam.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconind.classList.add("d-none");
        icondob.classList.remove("d-none");
        iconfam.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");

    }else if (clicked_id == "Familiar_link"  || clicked_id == "Familiares" || loadedroom == "Familiares") {
        var imgind = document.getElementById("carruselRoomIndividual")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgfam = document.getElementById("carruselRoomFamiliar")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomQueen")
        var descind = document.getElementById("Individual_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var descfam = document.getElementById("Familiar_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Queen_descripcion")
        var iconind = document.getElementById("Individual_icono")
        var icondob = document.getElementById("Doble_icono")
        var iconfam = document.getElementById("Familiar_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Queen_icono")
        $(imgind).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgfam).fadeIn("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(descfam).fadeIn("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeOut("slow");
        $(descind).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(iconfam).fadeIn("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconind).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.add("active_link")
        link4.classList.remove("active_link")
        link5.classList.remove("active_link")
        imgind.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgfam.classList.remove("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.add("d-none");
        descind.classList.add("d-none");
        descdob.classList.add("d-none");
        descfam.classList.remove("d-none");
        descmat.classList.add("d-none");
        descque.classList.add("d-none");
        iconind.classList.add("d-none");
        icondob.classList.add("d-none");
        iconfam.classList.remove("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.add("d-none");

    }else if (clicked_id == "Matrimonial_link" || clicked_id == "Matrimoniales" || loadedroom == "Matrimoniales") {
        var imgind = document.getElementById("carruselRoomIndividual")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgfam = document.getElementById("carruselRoomFamiliar")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomQueen")
        var descind = document.getElementById("Individual_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var descfam = document.getElementById("Familiar_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Queen_descripcion")
        var iconind = document.getElementById("Individual_icono")
        var icondob = document.getElementById("Doble_icono")
        var iconfam = document.getElementById("Familiar_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Queen_icono")
        $(imgind).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgfam).fadeOut("slow");
        $(imgmat).fadeIn("slow");
        $(imgque).fadeOut("slow");
        $(descdob).fadeOut("slow");
        $(descfam).fadeOut("slow");
        $(descmat).fadeIn("slow");
        $(descque).fadeOut("slow");
        $(descind).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(iconfam).fadeIn("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeOut("slow");
        $(iconind).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.add("active_link")
        link5.classList.remove("active_link")
        imgind.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgfam.classList.add("d-none");
        imgmat.classList.remove("d-none");
        imgque.classList.add("d-none");
        descind.classList.add("d-none");
        descdob.classList.add("d-none");
        descfam.classList.add("d-none");
        descmat.classList.remove("d-none");
        descque.classList.add("d-none");
        iconind.classList.add("d-none");
        icondob.classList.add("d-none");
        iconfam.classList.add("d-none");
        iconmat.classList.remove("d-none");
        iconque.classList.add("d-none");

    }else if (clicked_id == "Queen_link" || clicked_id == "Suites" || loadedroom == "Suites") {
        var imgind = document.getElementById("carruselRoomIndividual")
        var imgdob = document.getElementById("carruselRoomDoble")
        var imgfam = document.getElementById("carruselRoomFamiliar")
        var imgmat = document.getElementById("carruselRoomMatrimonial")
        var imgque = document.getElementById("carruselRoomQueen")
        var descind = document.getElementById("Individual_descripcion")
        var descdob = document.getElementById("Doble_descripcion")
        var descfam = document.getElementById("Familiar_descripcion")
        var descmat = document.getElementById("Matrimonial_descripcion")
        var descque = document.getElementById("Queen_descripcion")
        var iconind = document.getElementById("Individual_icono")
        var icondob = document.getElementById("Doble_icono")
        var iconfam = document.getElementById("Familiar_icono")
        var iconmat = document.getElementById("Matrimonial_icono")
        var iconque = document.getElementById("Queen_icono")
        $(imgind).fadeOut("slow");
        $(imgdob).fadeOut("slow");
        $(imgfam).fadeOut("slow");
        $(imgmat).fadeOut("slow");
        $(imgque).fadeIn("slow");
        $(descdob).fadeOut("slow");
        $(descfam).fadeOut("slow");
        $(descmat).fadeOut("slow");
        $(descque).fadeIn("slow");
        $(descind).fadeOut("slow");
        $(icondob).fadeOut("slow");
        $(iconfam).fadeOut("slow");
        $(iconmat).fadeOut("slow");
        $(iconque).fadeIn("slow");
        $(iconind).fadeOut("slow");

        link1.classList.remove("active_link")
        link2.classList.remove("active_link")
        link3.classList.remove("active_link")
        link4.classList.remove("active_link")
        link5.classList.add("active_link")
        imgind.classList.add("d-none");
        imgdob.classList.add("d-none");
        imgfam.classList.add("d-none");
        imgmat.classList.add("d-none");
        imgque.classList.remove("d-none");
        descind.classList.add("d-none");
        descdob.classList.add("d-none");
        descfam.classList.add("d-none");
        descmat.classList.add("d-none");
        descque.classList.remove("d-none");
        iconind.classList.add("d-none");
        icondob.classList.add("d-none");
        iconfam.classList.add("d-none");
        iconmat.classList.add("d-none");
        iconque.classList.remove("d-none");

    }else{
        return false;
    }
    localStorage.clear();
}

function LinkRoomsS(clicked_id) {
    var loadedroom = localStorage.getItem("storageRoom");
    console.log(loadedroom);
    const linknav = document.getElementById(clicked_id);
    const linkS1 = document.getElementById("IndividualS_link");
    const linkS2 = document.getElementById("DobleS_link");
    const linkS3 = document.getElementById("FamiliarS_link");
    const linkS4 = document.getElementById("MatrimonialS_link");
    const linkS5 = document.getElementById("QueenS_link");
    if (clicked_id == "IndividualS_link" || clicked_id == "Accesibles" || loadedroom == "Accesibles") {
        document.getElementById("btnRooms").innerHTML = "Accesible Individual"
        var imgindS = document.getElementById("carruselRoomIndividualS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgfamS = document.getElementById("carruselRoomFamiliarS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomQueenS")
        var descindS = document.getElementById("IndividualS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var descfamS = document.getElementById("FamiliarS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("QueenS_descripcion")
        var iconindS = document.getElementById("IndividualS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var iconfamS = document.getElementById("FamiliarS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("QueenS_icono")
        $(imgindS).fadeIn("slow");
        $(imgdobS).fadeOut("slow");
        $(imgfamS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(descfamS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descindS).fadeIn("slow");
        $(icondobS).fadeOut("slow");
        $(iconfamS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconindS).fadeIn("slow");

        linkS1.classList.add("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgindS.classList.remove("d-none");
        imgdobS.classList.add("d-none");
        imgfamS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descindS.classList.remove("d-none");
        descdobS.classList.add("d-none");
        descfamS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconindS.classList.remove("d-none");
        icondobS.classList.add("d-none");
        iconfamS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");

    }else if (clicked_id == "DobleS_link") {
        document.getElementById("btnRooms").innerHTML = "Accesible Doble"
        var imgindS = document.getElementById("carruselRoomIndividualS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgfamS = document.getElementById("carruselRoomFamiliarS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomQueenS")
        var descindS = document.getElementById("IndividualS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var descfamS = document.getElementById("FamiliarS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("QueenS_descripcion")
        var iconindS = document.getElementById("IndividualS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var iconfamS = document.getElementById("FamiliarS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("QueenS_icono")
        $(imgindS).fadeOut("slow");
        $(imgdobS).fadeIn("slow");
        $(imgfamS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeIn("slow");
        $(descfamS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descindS).fadeOut("slow");
        $(icondobS).fadeIn("slow");
        $(iconfamS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconindS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.add("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgindS.classList.add("d-none");
        imgdobS.classList.remove("d-none");
        imgfamS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descindS.classList.add("d-none");
        descdobS.classList.remove("d-none");
        descfamS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconindS.classList.add("d-none");
        icondobS.classList.remove("d-none");
        iconfamS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");

    }else if (clicked_id == "FamiliarS_link"  || clicked_id == "Familiares" || loadedroom == "Familiares") {
        document.getElementById("btnRooms").innerHTML = "Tradicional Familiar"
        var imgindS = document.getElementById("carruselRoomIndividualS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgfamS = document.getElementById("carruselRoomFamiliarS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomQueenS")
        var descindS = document.getElementById("IndividualS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var descfamS = document.getElementById("FamiliarS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("QueenS_descripcion")
        var iconindS = document.getElementById("IndividualS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var iconfamS = document.getElementById("FamiliarS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("QueenS_icono")
        $(imgindS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgfamS).fadeIn("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(descfamS).fadeIn("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeOut("slow");
        $(descindS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(iconfamS).fadeIn("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconindS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.add("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.remove("active_link")
        imgindS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgfamS.classList.remove("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.add("d-none");
        descindS.classList.add("d-none");
        descdobS.classList.add("d-none");
        descfamS.classList.remove("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.add("d-none");
        iconindS.classList.add("d-none");
        icondobS.classList.add("d-none");
        iconfamS.classList.remove("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.add("d-none");

    }else if (clicked_id == "MatrimonialS_link"  || clicked_id == "Matrimoniales" || loadedroom == "Matrimoniales") {
        document.getElementById("btnRooms").innerHTML = "Tradicional Matrimonial"
        var imgindS = document.getElementById("carruselRoomIndividualS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgfamS = document.getElementById("carruselRoomFamiliarS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomQueenS")
        var descindS = document.getElementById("IndividualS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var descfamS = document.getElementById("FamiliarS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("QueenS_descripcion")
        var iconindS = document.getElementById("IndividualS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var iconfamS = document.getElementById("FamiliarS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("QueenS_icono")
        $(imgindS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgfamS).fadeOut("slow");
        $(imgmatS).fadeIn("slow");
        $(imgqueS).fadeOut("slow");
        $(descdobS).fadeOut("slow");
        $(descfamS).fadeOut("slow");
        $(descmatS).fadeIn("slow");
        $(descqueS).fadeOut("slow");
        $(descindS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(iconfamS).fadeIn("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeOut("slow");
        $(iconindS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.add("active_link")
        linkS5.classList.remove("active_link")
        imgindS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgfamS.classList.add("d-none");
        imgmatS.classList.remove("d-none");
        imgqueS.classList.add("d-none");
        descindS.classList.add("d-none");
        descdobS.classList.add("d-none");
        descfamS.classList.add("d-none");
        descmatS.classList.remove("d-none");
        descqueS.classList.add("d-none");
        iconindS.classList.add("d-none");
        icondobS.classList.add("d-none");
        iconfamS.classList.add("d-none");
        iconmatS.classList.remove("d-none");
        iconqueS.classList.add("d-none");

    }else if (clicked_id == "QueenS_link" || clicked_id == "Suites" || loadedroom == "Suites") {
        document.getElementById("btnRooms").innerHTML = "Superior Queen"
        var imgindS = document.getElementById("carruselRoomIndividualS")
        var imgdobS = document.getElementById("carruselRoomDobleS")
        var imgfamS = document.getElementById("carruselRoomFamiliarS")
        var imgmatS = document.getElementById("carruselRoomMatrimonialS")
        var imgqueS = document.getElementById("carruselRoomQueenS")
        var descindS = document.getElementById("IndividualS_descripcion")
        var descdobS = document.getElementById("DobleS_descripcion")
        var descfamS = document.getElementById("FamiliarS_descripcion")
        var descmatS = document.getElementById("MatrimonialS_descripcion")
        var descqueS = document.getElementById("QueenS_descripcion")
        var iconindS = document.getElementById("IndividualS_icono")
        var icondobS = document.getElementById("DobleS_icono")
        var iconfamS = document.getElementById("FamiliarS_icono")
        var iconmatS = document.getElementById("MatrimonialS_icono")
        var iconqueS = document.getElementById("QueenS_icono")
        $(imgindS).fadeOut("slow");
        $(imgdobS).fadeOut("slow");
        $(imgfamS).fadeOut("slow");
        $(imgmatS).fadeOut("slow");
        $(imgqueS).fadeIn("slow");
        $(descdobS).fadeOut("slow");
        $(descfamS).fadeOut("slow");
        $(descmatS).fadeOut("slow");
        $(descqueS).fadeIn("slow");
        $(descindS).fadeOut("slow");
        $(icondobS).fadeOut("slow");
        $(iconfamS).fadeOut("slow");
        $(iconmatS).fadeOut("slow");
        $(iconqueS).fadeIn("slow");
        $(iconindS).fadeOut("slow");

        linkS1.classList.remove("active_link")
        linkS2.classList.remove("active_link")
        linkS3.classList.remove("active_link")
        linkS4.classList.remove("active_link")
        linkS5.classList.add("active_link")
        imgindS.classList.add("d-none");
        imgdobS.classList.add("d-none");
        imgfamS.classList.add("d-none");
        imgmatS.classList.add("d-none");
        imgqueS.classList.remove("d-none");
        descindS.classList.add("d-none");
        descdobS.classList.add("d-none");
        descfamS.classList.add("d-none");
        descmatS.classList.add("d-none");
        descqueS.classList.remove("d-none");
        iconindS.classList.add("d-none");
        icondobS.classList.add("d-none");
        iconfamS.classList.add("d-none");
        iconmatS.classList.add("d-none");
        iconqueS.classList.remove("d-none");

    }else{
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

          form.classList.add('was-validated')
        }, false)
      })      
  }

  function onlyNumbers(evt){
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
  }


function minDate() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
  var yyyy = today.getFullYear();
  if(dd<10){
    dd='0'+dd
  } 
  if(mm<10){
    mm='0'+mm
  } 
  
  today = yyyy+'-'+mm+'-'+dd;
  var start = document.getElementById("ValidationDate");
  start.setAttribute("min", today);
}

function validateDate() {
    var fecha = document.getElementById("ValidationDate");
    if (fecha.value == "") {
        fecha.type='text';
    }else{
        fecha.type='date';
    }
}