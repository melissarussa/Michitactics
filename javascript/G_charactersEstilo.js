const contenedor = document.getElementById("listatodos");

// TODOS LOS PERSONAJES
const personajes = [
    "albedo","alhaitham","aloy","amber","arataki-itto",
    "arlecchino","ayaka","ayato","baizhu","barbara",
    "beidou","bennett","candace","charlotte","chevreuse",
    "chiori","chongyun","clorinde","collei","cyno",
    "dehya","diluc","diona","dori","emilie","eula",
    "faruzan","fischl","freminet","furina","gaming",
    "ganyu","gorou","hu-tao","jean","kachina","kaeya",
    "kaveh","kazuha","keqing","kinich","kirara","klee",
    "kokomi","kuki-shinobu","layla","lisa","lynette",
    "lyney","mika","mona","mualani","nahida","navia",
    "neuvillette","nilou","ningguang","noelle","qiqi",
    "raiden","razor","rosaria","sara","sayu","sethos",
    "shenhe","shikanoin-heizou","sigewinne","sucrose",
    "tartaglia","thoma","tighnari","traveler-anemo",
    "traveler-dendro","traveler-electro","traveler-geo",
    "traveler-hydro","venti","wanderer","wriothesley",
    "xiangling","xianyun","xiao","xingqiu","xinyan",
    "yae-miko","yanfei","yaoyao","yelan","yoimiya",
    "yun-jin","zhongli"
];

// ROLES
const roles = {

    "albedo": "sub-dps",
    "alhaitham": "main-dps",
    "amber": "sub-dps",
    "arataki-itto": "main-dps",
    "arlecchino": "main-dps",
    "ayaka": "main-dps",
    "ayato": "main-dps",
    "baizhu": "healer",
    "barbara": "healer",
    "beidou": "sub-dps",
    "bennett": "support",
    "candace": "support",
    "charlotte": "healer",
    "chevreuse": "support",
    "chiori": "sub-dps",
    "chongyun": "sub-dps",
    "clorinde": "main-dps",
    "collei": "sub-dps",
    "cyno": "main-dps",
    "dehya": "shielder",
    "diluc": "main-dps",
    "diona": "healer",
    "dori": "healer",
    "emilie": "sub-dps",
    "eula": "main-dps",
    "faruzan": "support",
    "fischl": "sub-dps",
    "freminet": "main-dps",
    "furina": "support",
    "gaming": "main-dps",
    "ganyu": "main-dps",
    "gorou": "support",
    "hu-tao": "main-dps",
    "jean": "healer",
    "kachina": "support",
    "kaeya": "sub-dps",
    "kaveh": "main-dps",
    "kazuha": "support",
    "keqing": "main-dps",
    "kinich": "main-dps",
    "kirara": "shielder",
    "klee": "main-dps",
    "kokomi": "healer",
    "kuki-shinobu": "healer",
    "layla": "shielder",
    "lisa": "sub-dps",
    "lynette": "support",
    "lyney": "main-dps",
    "mika": "support",
    "mona": "support",
    "mualani": "main-dps",
    "nahida": "support",
    "navia": "main-dps",
    "neuvillette": "main-dps",
    "nilou": "support",
    "ningguang": "main-dps",
    "noelle": "shielder",
    "qiqi": "healer",
    "raiden": "main-dps",
    "razor": "main-dps",
    "rosaria": "sub-dps",
    "sara": "support",
    "sayu": "healer",
    "sethos": "main-dps",
    "shenhe": "support",
    "shikanoin-heizou": "main-dps",
    "sigewinne": "healer",
    "sucrose": "support",
    "tartaglia": "main-dps",
    "thoma": "shielder",
    "tighnari": "main-dps",
    "traveler-anemo": "support",
    "traveler-dendro": "support",
    "traveler-electro": "support",
    "traveler-geo": "support",
    "traveler-hydro": "support",
    "venti": "support",
    "wanderer": "main-dps",
    "wriothesley": "main-dps",
    "xiangling": "sub-dps",
    "xianyun": "support",
    "xiao": "main-dps",
    "xingqiu": "sub-dps",
    "xinyan": "shielder",
    "yae-miko": "sub-dps",
    "yanfei": "main-dps",
    "yaoyao": "healer",
    "yelan": "sub-dps",
    "yoimiya": "main-dps",
    "yun-jin": "support",
    "zhongli": "shielder"

};

// CARGAR PERSONAJES
async function cargarPersonajes() {

    for (const nombre of personajes) {

        try {

            const respuesta = await fetch(
                `https://genshin.jmp.blue/characters/${nombre}`
            );

            const data = await respuesta.json();

            crearCard(
                data.name,
                data.vision,
                roles[nombre] || "support",
                nombre,
                data.nation,
                data.rarity
            );

        } catch (error) {

            console.log("Error:", nombre);

        }
    }
}

// CREAR TARJETAS
function crearCard(
    nombre,
    elemento,
    rol,
    nombreApi,
    nacion,
    rareza
) {

    const div = document.createElement("div");

    div.classList.add("personaje");

    // DATOS PARA FILTRO
    div.dataset.elemento = elemento.toLowerCase();
    div.dataset.rol = rol.toLowerCase();
    div.dataset.nacion = nacion.toLowerCase();
    div.dataset.rareza = rareza;

    const imagen =
        `https://genshin.jmp.blue/characters/${nombreApi}/icon-big`;

    div.innerHTML = `
    
        <div class="imagen-perso">
            <img src="${imagen}" alt="${nombre}">
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

// FILTROS
function aplicarFiltros() {

    // ELEMENTOS
    const elementosActivos = [];

    document
        .querySelectorAll('input[name="elemento"]:checked')
        .forEach(check => {
            elementosActivos.push(check.id);
        });

    // ROLES
    const rolesActivos = [];

    document
        .querySelectorAll('input[name="rol"]:checked')
        .forEach(check => {
            rolesActivos.push(check.id);
        });

    // NACIONES
    const nacionesActivas = [];

    document
        .querySelectorAll('input[name="nacion"]:checked')
        .forEach(check => {
            nacionesActivas.push(check.id);
        });

    // RAREZAS
    const rarezasActivas = [];

    document
        .querySelectorAll('input[name="rareza"]:checked')
        .forEach(check => {

            if (check.id === "4-star") {
                rarezasActivas.push("4");
            }

            if (check.id === "5-star") {
                rarezasActivas.push("5");
            }

        });

    // TODAS LAS CARDS
    const cards = document.querySelectorAll(".personaje");

    cards.forEach(card => {

        const elemento = card.dataset.elemento;
        const rol = card.dataset.rol;
        const nacion = card.dataset.nacion;
        const rareza = card.dataset.rareza;

        const cumpleElemento =
            elementosActivos.length === 0 ||
            elementosActivos.includes(elemento);

        const cumpleRol =
            rolesActivos.length === 0 ||
            rolesActivos.includes(rol);

        const cumpleNacion =
            nacionesActivas.length === 0 ||
            nacionesActivas.includes(nacion);

        const cumpleRareza =
            rarezasActivas.length === 0 ||
            rarezasActivas.includes(rareza);

        // MOSTRAR O ESCONDER
        if (
            cumpleElemento &&
            cumpleRol &&
            cumpleNacion &&
            cumpleRareza
        ) {

            card.style.display = "block";

        } else {

            card.style.display = "none";

        }

    });
}

// EVENTOS CHECKBOX
document
    .querySelectorAll('input')
    .forEach(check => {

        check.addEventListener(
            "change",
            aplicarFiltros
        );

    });

// INICIAR
cargarPersonajes();