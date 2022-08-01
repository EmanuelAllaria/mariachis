function cambiarColor() {
    let lista = document.querySelector(".details");

    if (lista.onclick && lista.open) {
        return lista.style.color = "green";
    } else if (lista.onclick && !lista.open) {
        return lista.style.color = "blue";
    } else {
        return lista.style.color = "green";
    }
}

cambiarColor()