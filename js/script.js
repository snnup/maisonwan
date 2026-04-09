const grupos = document.querySelectorAll('.grupo-produtos');
const indicador = document.querySelector('.indicador');
const setaDireita = document.querySelector('.seta-direita');
const setaEsquerda = document.querySelector('.seta-esquerda');
const track = document.querySelector('.carrossel-track');

let atual = 0;

function porVez() {
    return window.innerWidth <= 768 ? 2 : 3;
}

function totalPaginas() {
    return Math.ceil(grupos.length / porVez());
}

function paginaAtual() {
    return Math.floor(atual / porVez()) + 1;
}

function moverTrack() {
    const larguraGrupo = grupos[0].offsetWidth;
    track.style.transform = 'translateX(' + (-atual * larguraGrupo) + 'px)';
}

function atualizarSetas() {
    setaEsquerda.style.display = atual === 0 ? 'none' : 'block';
    setaDireita.style.display = atual >= grupos.length - porVez() ? 'none' : 'block';
}

function atualizarIndicador() {
    indicador.textContent = paginaAtual() + ' / ' + totalPaginas();
}

setaDireita.addEventListener('click', function() {
    atual += porVez();
    moverTrack();
    atualizarSetas();
    atualizarIndicador();
});

setaEsquerda.addEventListener('click', function() {
    atual -= porVez();
    moverTrack();
    atualizarSetas();
    atualizarIndicador();
});

atualizarSetas();
atualizarIndicador();