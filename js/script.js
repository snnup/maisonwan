const cards = document.querySelectorAll('.produto-card');
const indicador = document.querySelector('.indicador');
const setaDireita = document.querySelector('.seta-direita');
const setaEsquerda = document.querySelector('.seta-esquerda');
const track = document.querySelector('.carrossel-track');
const carrossel = document.querySelector('.carrossel');

let pagina = 0;

function porVez() {
    return window.innerWidth <= 768 ? 2 : 3;
}

function totalPaginas() {
    return Math.ceil(cards.length / porVez());
}

function moverTrack() {
    const containerWidth = carrossel.offsetWidth;
    track.style.transform = 'translateX(' + (-pagina * containerWidth) + 'px)';
}

function atualizarSetas() {
    setaEsquerda.style.display = pagina === 0 ? 'none' : 'block';
    setaDireita.style.display = pagina >= totalPaginas() - 1 ? 'none' : 'block';
}

function atualizarIndicador() {
    indicador.textContent = (pagina + 1) + ' / ' + totalPaginas();
}

window.addEventListener('resize', function () {
    pagina = 0;
    moverTrack();
    atualizarSetas();
    atualizarIndicador();
});

setaDireita.addEventListener('click', function () {
    if (pagina < totalPaginas() - 1) {
        pagina++;
        moverTrack();
        atualizarSetas();
        atualizarIndicador();
    }
});

setaEsquerda.addEventListener('click', function () {
    if (pagina > 0) {
        pagina--;
        moverTrack();
        atualizarSetas();
        atualizarIndicador();
    }
});

atualizarSetas();
atualizarIndicador();
