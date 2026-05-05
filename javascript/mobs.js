const contenedorMobs = document.getElementById("lista-mobs");

const enemigos = [
    "abyss-herald", "abyss-lector", "abyss-mage", "bathysmal-vishap", "bathysmal-vishap-hatchling", "cicin", "consecrated-beast", "defense-mechanism", "eye-of-the-storm", "fatui-agent", "fatui-cicin-mage", "fatui-skirmisher", "floating-fungus", "geovishap", "geovishap-hatchling", "grounded-shroom", "hilichurl", "hilichurl-shooter", "kairagi", "large-slime", "lawachurl", "mirror-maiden", "mitachurl", "nobushi", "praetorian-golem", "primal-construct", "rifthound", "ruin-drake", "ruin-grader", "ruin-guard", "ruin-hunter", "ruin-sentinel", "samachurl", "slime", "specter", "stretchy-fungus", "the-black-serpent", "the-eremite", "the-great-snowboar-king", "treasure-hoarder", "whirling-fungus", "whopperflower", "winged-shroom"
];

async function cargarMobs() {

    for (const enemigo of enemigos) {

        try {
            const res = await fetch(`https://genshin.jmp.blue/enemies/${enemigo}`);
            const data = await res.json();

            crearCardMob(data, enemigo);

        } catch (error) {
            console.log("Error con:", enemigo);
        }
    }
}

function crearCardMob(data, nombreApi) {

    const div = document.createElement("div");
    div.classList.add("mob-card");

    const imagen = `https://genshin.jmp.blue/enemies/${nombreApi}/icon`;

    // 🔥 ELEMENTOS (BADGES SEPARADOS)
    const elementos = data.elements || [];

    let elementosHTML = "Ninguno";

    if (elementos.length > 0) {
        elementosHTML = elementos.map(el => {
            const clase = el.toLowerCase();

            return `
                <span class="element-badge ${clase}">
                    ${el}
                </span>
            `;
        }).join("");
    }

    // DROPS
    let dropsHTML = "Sin drops";

    if (data.drops && data.drops.length > 0) {
        dropsHTML = data.drops.map(drop => `
            <div class="drop-item">
                ${drop.name} ⭐${drop.rarity} (Lv.${drop["minimum-level"]})
            </div>
        `).join("");
    }

    div.innerHTML = `
        <div class="mob-img">
            <img src="${imagen}" alt="${data.name}">
        </div>

        <div class="mob-name">${data.name}</div>

        <div class="mob-info">
            <strong>Elemento:</strong>
            <div class="element-container">
                ${elementosHTML}
            </div>
        </div>

        <div class="mob-drops">
            <strong>Drops:</strong>
            ${dropsHTML}
        </div>
    `;

    contenedorMobs.appendChild(div);
}

cargarMobs();