const contenedor = document.getElementById("listatodos");
let todosLosPersonajes = [];
async function cargarPersonajes() {
    try {
        const respuesta = await fetch("../json/genshin_all_120_plus.json");
        const personajes = await respuesta.json();
        todosLosPersonajes = Object.entries(personajes);
        mostrarPersonajes(todosLosPersonajes);
    } catch (error) {
        console.log("Error cargando JSON:", error);
    }
}

function mostrarPersonajes(lista) {
    contenedor.innerHTML = "";
    lista.forEach(([nombre, data]) => {
        crearCard(
            nombre,
            data.element,
            data.roles[0],
            data.icon,
            data.region,
            data.rarity
        );
    });
}

function crearCard(
    nombre,
    elemento,
    rol,
    imagen,
    nacion,
    rareza
) {
    const div = document.createElement("div");
    div.classList.add("personaje");
    div.dataset.elemento = elemento.toLowerCase();
    div.dataset.rol = rol
        .toLowerCase()
        .replace(/\s+/g, "-");
    div.dataset.nacion = nacion.toLowerCase();
    div.dataset.rareza = rareza;
    div.innerHTML = `
        <div class="imagen-perso">
            <img 
                src="${imagen}" 
                alt="${nombre}"
                onerror="this.src='../img/icono/default.png'"
            >
        </div>
        <div class="info-perso">
            <h2 class="nombre-perso">
                ${nombre}
            </h2>
            <div class="perso-tipos">
                <p class="${elemento} tipo">
                    ${elemento}
                </p>
            </div>
            <div class="perso-rol">
                <p class="rol">
                    ${rol}
                </p>
            </div>
        </div>
    `;
    contenedor.appendChild(div);
}


function obtenerFiltros(nombre) {
    return [...document.querySelectorAll(`input[name="${nombre}"]:checked`)]
        .map(el => el.id.toLowerCase());
}


function aplicarFiltros() {
    const elementos = obtenerFiltros("elemento");
    const roles = obtenerFiltros("rol");
    const naciones = obtenerFiltros("nacion");
    const rarezas = obtenerFiltros("rareza")
        .map(r => r.replace("-star", ""));
    const filtrados = todosLosPersonajes.filter(([nombre, data]) => {
        const elemento = data.element.toLowerCase();
        const rol = data.roles[0]
            .toLowerCase()
            .replace(/\s+/g, "-");
        const nacion = data.region.toLowerCase();
        const rareza = data.rarity.toString();
        const coincideElemento =
            elementos.length === 0 ||
            elementos.includes(elemento);
        const coincideRol =
            roles.length === 0 ||
            roles.includes(rol);
        const coincideNacion =
            naciones.length === 0 ||
            naciones.includes(nacion);
        const coincideRareza =
            rarezas.length === 0 ||
            rarezas.includes(rareza);
        return (
            coincideElemento &&
            coincideRol &&
            coincideNacion &&
            coincideRareza
        );
    });
    mostrarPersonajes(filtrados);
}

document
    .querySelectorAll(".advanced-filters input")
    .forEach(input => {
        input.addEventListener("change", aplicarFiltros);
    });

cargarPersonajes();