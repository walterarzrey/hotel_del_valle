function LinkTours(clicked_id) {
    alert(clicked_id);
    if (clicked_id == "parqueidentidad_link") {
        var name = document.getElementById("parqueidentidad")
        var name2 = document.getElementById("plazadearmas")
        var name3 = document.getElementById("cerritodelalibertad")
        
        name.classList.remove("d-none");
        name.classList.add("d-block");
        name2.classList.add("d-none");
        name3.classList.add("d-none");

    }else if (clicked_id == "plazadearmas_link") {
        var name = document.getElementById("plazadearmas")
        var name2 = document.getElementById("parqueidentidad")
        var name3 = document.getElementById("cerritodelalibertad")
        
        name.classList.remove("d-none");
        name.classList.add("d-block");
        name2.classList.add("d-none");
        name3.classList.add("d-none");

    }else if (clicked_id == "cerritodelalibertad_link") {
        var name = document.getElementById("cerritodelalibertad")
        var name2 = document.getElementById("parqueidentidad")
        var name3 = document.getElementById("plazadearmas")
        
        name.classList.remove("d-none");
        name.classList.add("d-block");
        name2.classList.add("d-none");
        name3.classList.add("d-none");

    }else{
        return false;
    }
    
} 