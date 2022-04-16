function LinkTours(clicked_id) {
    
    if (clicked_id == "parqueidentidad_link") {
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        $(imgccc).fadeOut("slow");
        $(imgcdl).fadeOut("slow");
        $(imgpiw).fadeIn("slow");
        $(titleccc).fadeOut("slow");
        $(titlecdl).fadeOut("slow");
        $(titlepiw).fadeIn("slow");
        $(textoccc).fadeOut("slow");
        $(textocdl).fadeOut("slow");
        $(textopiw).fadeIn("slow");
        
        imgpiw.classList.remove("d-none");
        imgccc.classList.add("d-none");
        imgcdl.classList.add("d-none");
        titlepiw.classList.remove("d-none");
        titleccc.classList.add("d-none");
        titlecdl.classList.add("d-none");
        textopiw.classList.remove("d-none");
        textoccc.classList.add("d-none");
        textocdl.classList.add("d-none");

    }else if (clicked_id == "plazadearmas_link") {
        var imgccc = document.getElementById("plazadearmas_img")
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        $(imgcdl).fadeOut("slow");
        $(imgpiw).fadeOut("slow");
        $(imgccc).fadeIn("slow");
        $(titlecdl).fadeOut("slow");
        $(titlepiw).fadeOut("slow");
        $(titleccc).fadeIn("slow");
        $(textocdl).fadeOut("slow");
        $(textopiw).fadeOut("slow");
        $(textoccc).fadeIn("slow");

        imgccc.classList.remove("d-none");
        imgpiw.classList.add("d-none");
        imgcdl.classList.add("d-none");
        titleccc.classList.remove("d-none");
        titlepiw.classList.add("d-none");
        titlecdl.classList.add("d-none");
        textoccc.classList.remove("d-none");
        textopiw.classList.add("d-none");
        textocdl.classList.add("d-none");

    }else if (clicked_id == "cerritodelalibertad_link") {
        var imgcdl = document.getElementById("cerritodelalibertad_img")
        var imgpiw = document.getElementById("parqueidentidad_img")
        var imgccc = document.getElementById("plazadearmas_img")
        var titlecdl = document.getElementById("cerritodelalibertad_titulo")
        var titlepiw = document.getElementById("parqueidentidad_titulo")
        var titleccc = document.getElementById("plazadearmas_titulo")
        var textocdl = document.getElementById("cerritodelalibertad_texto")
        var textopiw = document.getElementById("parqueidentidad_texto")
        var textoccc = document.getElementById("plazadearmas_texto")
        $(imgccc).fadeOut("slow");
        $(imgpiw).fadeOut("slow");
        $(imgcdl).fadeIn("slow");
        $(titleccc).fadeOut("slow");
        $(titlepiw).fadeOut("slow");
        $(titlecdl).fadeIn("slow");
        $(textoccc).fadeOut("slow");
        $(textopiw).fadeOut("slow");
        $(textocdl).fadeIn("slow");

        imgcdl.classList.remove("d-none");
        imgpiw.classList.add("d-none");
        imgccc.classList.add("d-none");
        titlecdl.classList.remove("d-none");
        titlepiw.classList.add("d-none");
        titleccc.classList.add("d-none");
        textocdl.classList.remove("d-none");
        textopiw.classList.add("d-none");
        textoccc.classList.add("d-none");

    }else{
        return false;
    }
    
} 