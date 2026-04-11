console.log('script carregado');

    const hamburger = document.querySelector('.hamburger');
    const menuDrawer = document.querySelector('.menu-drawer');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuFechar = document.querySelector('.menu-fechar');

    // menu hambúrguer — funciona em todas as páginas
if (hamburger && menuDrawer && menuOverlay && menuFechar) {
    console.log('if entrou!');
        function abrirMenu() {
            menuDrawer.classList.add('aberto');
            menuOverlay.classList.add('ativo');
            document.body.style.overflow = 'hidden';
        }

        function fecharMenu() {
            menuDrawer.classList.remove('aberto');
            menuOverlay.classList.remove('ativo');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', abrirMenu);
        menuFechar.addEventListener('click', fecharMenu);
        menuOverlay.addEventListener('click', fecharMenu);
    }

    // carrossel — só roda se existir na página
    const cards = document.querySelectorAll('.produto-card');
    const track = document.querySelector('.carrossel-track');
    const carrossel = document.querySelector('.carrossel');
    const setaDireita = document.querySelector('.seta-direita');
    const setaEsquerda = document.querySelector('.seta-esquerda');
    const indicador = document.querySelector('.indicador');

    if (track && carrossel && setaDireita && setaEsquerda && indicador) {
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

        setaDireita.addEventListener('click', function() {
            if (pagina < totalPaginas() - 1) {
                pagina++;
                moverTrack();
                atualizarSetas();
                atualizarIndicador();
            }
        });

        setaEsquerda.addEventListener('click', function() {
            if (pagina > 0) {
                pagina--;
                moverTrack();
                atualizarSetas();
                atualizarIndicador();
            }
        });

        window.addEventListener('resize', function() {
            pagina = 0;
            moverTrack();
            atualizarSetas();
            atualizarIndicador();
        });

        atualizarSetas();
        atualizarIndicador();
    }