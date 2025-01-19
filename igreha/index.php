<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreja</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            transition: background-color 0.3s;
            z-index: 1000;
        }

        header img {
            height: 40px;
        }

        #main-header.transparent {
            background-color: transparent;
        }

        #main-header.scrolled {
            background-color: #333; /* Cor fixa visível quando o usuário rolar a página */
        }

        section {
            width: 100%;
            height: 150vh; /* 100% da altura da viewport + 50% */
        }

        #sessao-01 video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #sessao-02 {
            height: 50vh; /* Ocupa menos espaço que as outras sessões */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #000;
            color: #fff;
            text-align: center;
        }

        #sessao-02 h2, #sessao-02 h3 {
            margin: 10px 0;
            cursor: pointer;
            transition: color 0.3s;
        }

        #sessao-02 h2:hover, #sessao-02 h3:hover {
            color: #0f0; /* Cor para hover, destacando o link */
        }

        #sessao-03 {
            padding: 60px 20px;
            background-color: #0c0c0c;
            color: #fff;
            text-align: center;
            height: auto;
        }

        #sessao-03 img {
            width: 200px;
            margin-bottom: 20px;
        }

        #sessao-03 p {
            font-size: 16px;
            margin: 10px 0;
            max-width: 800px;
            line-height: 1.6;
            margin-left: auto;
            margin-right: auto;
        }

        #sessao-03 p.penultimo {
            font-size: 14px;
            font-weight: normal;
        }

        #sessao-03 p.ultimo {
            font-size: 18px;
            font-weight: bold;
        }

        /* Sessão 4 Layout */
        .sessao4 {
            position: relative;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #0c0c0c;
            padding: 0 5%;
        }

        .left-text {
            font-size: 3rem;
            font-weight: bold;
            color: #ffffff;
            opacity: 0;
            transform: translateX(-100%);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
            z-index: 2;
            width: 30%;
        }

        .middle-image img {
            max-width: 100%;
            height: auto;
            z-index: 1;
            opacity: 0;
            transform: scale(0.8);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }

        .right-text {
            font-size: 1.2rem;
            color: #ffffff;
            z-index: 2;
            width: 25%;
            list-style: disc;
            opacity: 0;
            transform: translateX(100%);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }

        .right-text li {
            margin-bottom: 10px;
        }

        /* Keyframes for sliding in and out */
        @keyframes slideIn {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(-100%); opacity: 0; }
        }

        /* Sessão 5 */
        .sessao {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50vh; /* Metade da tela */
            background-color: #32CD32; /* Verde limão */
            color: #000;
        }

        .sessao5-container {
            text-align: center;
        }

        .sessao5-container h2 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 2rem;
        }

        .social-icons a img {
            width: 50px;
            height: 50px;
            filter: invert(1); /* Altera a cor do ícone se necessário */
        }

        .social-icons a:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }


        /* Sessão 6 */
        #sessao-06 {
            background-color: #777777;
            padding: 60px 20px;
            text-align: center;
            color: #333;
            height: auto;
        }

        #sessao-06 h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: bold;
        }

        #sessao-06 h3 {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }

        .participantes {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .participante {
            text-align: center;
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .participante img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            filter: grayscale(100%) brightness(80%);
            transition: transform 0.3s ease-in-out, filter 0.3s ease-in-out;
        }

        .participante:hover img {
            filter: none;
            transform: scale(1.1);
        }

        .participante h4 {
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }

        .participante p {
            font-size: 1rem;
            color: #666;
        }

        /* Sessão 7 */
        #sessao-07 {
            background-color: #f8f8f8;
            padding: 60px 20px;
            text-align: center;
            color: #333;
            height: auto;
        }

        #sessao-07 h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .programacao-nav {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .programacao-nav button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .programacao-nav button:hover {
            background-color: #555;
        }

        .programacao-container {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .programacao-container .evento {
            margin-bottom: 20px;
        }

        .programacao-container .evento h3 {
            color: #28a745;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .programacao-container .evento p {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .programacao-container .evento .titulo-importante {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .programacao-container .evento .instrucao {
            color: #888;
        }

        /* Oculta todos os dias exceto o primeiro por padrão */
        .programacao-container > div {
            display: none;
        }

        .programacao-container > div:first-child {
            display: block;
        }

        /* Sessão 8 */
        .sessao8 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            background-color: black;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;
        }

        .left-text8 {
            font-size: 4rem;
            font-weight: bold;
            color: #ffffff;
            opacity: 0;
            transform: translateX(-100%);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
            z-index: 2;
            width: 30%;
        }

        .middle-image8 img {
            max-width: 100%;
            height: auto;
            z-index: 1;
            opacity: 0;
            transform: scale(0.8);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }

        .right-text8 {
            font-size: 1.2rem;
            color: #ffffff;
            z-index: 2;
            width: 25%;
            list-style: disc;
            opacity: 0;
            transform: translateX(100%);
            transition: transform 1s ease-in-out, opacity 1s ease-in-out;
        }

        .right-text8 li {
            margin-bottom: 10px;
        }

        .pix-info {
            margin-top: 20px;
            font-size: 1rem;
            color: #ffffff;
        }

        .qr-code {
            margin-top: 10px;
        }

        .qr-code img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .sessao8.onscroll .left-text8 {
            transform: translateX(0);
            opacity: 1;
        }

        .sessao8.onscroll .middle-image8 img {
            transform: scale(1);
            opacity: 1;
        }

        .sessao8.onscroll .right-text8 {
            transform: translateX(0);
            opacity: 1;
        }

        /* Sessão 9 */
        .sessao9 {
            padding: 40px 5%;
            background-color: #333;
            color: white;
            text-align: center;
            height: auto;
        }

        .sessao9-mapa iframe {
            width: 100%;
            height: 450px;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .sessao9-info {
            margin-top: 20px;
        }

        .sessao9-info h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .sessao9-info h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .sessao9-info p {
            font-size: 1rem;
            margin-top: 5px;
        }

        .sessao9-botoes {
            margin-top: 20px;
        }

        .sessao9-botoes a {
            text-decoration: none;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            background-color: #444;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .sessao9-botoes a:hover {
            background-color: #555;
        }

        .sessao9-botoes a i {
            margin-right: 8px;
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.7);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            transition: opacity 0.3s ease;
        }

        #scrollToTopBtn img {
            width: 20px;
            height: 20px;
            filter: invert(1);
        }

        #scrollToTopBtn.show {
            display: flex;
            opacity: 1;
        }

        .site-footer {
            background-color: #222; /* Cor de fundo */
            color: #ccc; /* Cor do texto */
            padding: 20px;
            font-size: 0.875rem; /* Tamanho do texto */
        }

        .footer-content {
            max-width: 1200px; /* Largura máxima do conteúdo */
            margin: 0 auto;
            text-align: left; /* Alinhamento à esquerda */
        }

        .footer-content p {
            margin: 5px 0;
        }

        .footer-content a {
            color: #ccc; /* Cor dos links */
            text-decoration: none;
        }

        .footer-content a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header id="main-header" class="transparent">
        <a href="index.php">
            <img src="media/images/example_church.png" alt="Logo do Site">
        </a>
    </header>

    <section id="sessao-01">
        <video autoplay muted loop>
            <source src="media/videos/example.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.
        </video>
    </section>

    <section id="sessao-02">
        <h2 onclick="scrollToSection('sessao-09')">NO SANTO CLARO DE EXPOSIÇÕES</h2>
        <h3 onclick="scrollToSection('sessao-09')">DO PARQUE DA CIDADE - CAMPINAS / SP</h3>
        <h4>10 A 13 DE FEVEREIRO</h4>
    </section>

    <section id="sessao-03">
        <img src="media/images/logo.png" alt="Logo da Igreja">
        <p>O ministério Unidos em Cristo Vila Real Santista foi fundado no ano de 2018, inspirado na Palavra de Atos 2:42-43: "E perseveravam na doutrina dos apóstolos, na comunhão, no partir do pão e nas orações. E em cada alma havia temor, e muitos prodígios e sinais eram feitos pelos apóstolos."</p>
        <p>Sob a liderança da Pastora Alice Ferreira e de seu esposo, o Presbítero Silvio, o ministério tem como propósito principal realizar obras para o Reino de Deus, assistindo aos irmãos necessitados e buscando sempre a presença divina. A missão central da igreja é promover a união em Cristo e fortalecer a fé da comunidade, em contínua dedicação à Palavra e à comunhão cristã.</p>
        <p class="penultimo">Ao longo do tempo, Deus tem trabalhado através dos temas, trazendo mensagens que geram fé, arrependimento, transformação, renovo, libertação, cura e vida.</p>
        <p class="ultimo">Jesus Cristo é o centro e todos são bem-vindos!</p>
    </section>

    <!-- Sessão 4 -->
    <section class="sessao4">
        <div class="left-text">
            <h1>MOTIVOS PARA VOCÊ PARTICIPAR DO NOSSO CONGRESSO</h1>
        </div>
        <div class="middle-image">
            <img src="media/images/happyfamily.jpg" alt="Transparent PNG">
        </div>
        <ul class="right-text">
            <li>Lugar de louvor e adoração a Deus</li>
            <li>Lugar de pregação do Evangelho</li>
            <li>Lugar de oração e respostas</li>
        </ul>
    </section>

    <section id="sessao5" class="sessao">
        <div class="sessao5-container">
            <h2>Siga-nos</h2>
            <div class="social-icons">
                <a href="link-para-instagram" target="_blank"><img src="caminho-para-icone-instagram" alt="Instagram"></a>
                <a href="link-para-facebook" target="_blank"><img src="caminho-para-icone-facebook" alt="Facebook"></a>
                <a href="link-para-youtube" target="_blank"><img src="caminho-para-icone-youtube" alt="YouTube"></a>
                <a href="link-para-telegram" target="_blank"><img src="caminho-para-icone-telegram" alt="Telegram"></a>
                <a href="link-para-qr-code" target="_blank"><img src="caminho-para-icone-qr-code" alt="QR Code"></a>
            </div>
        </div>
    </section>

    <!-- Sessão 6 -->
    <section id="sessao-06">
        <h2>PARTICIPANTES</h2>
        <h3>Conheça nossos convidados especiais</h3>
        <div class="participantes">
            <div class="participante">
                <img src="media/images/eduardo1.png" alt="Participante 1">
                <h4>Participante 1</h4>
                <p>Ministro de Louvor</p>
            </div>
            <div class="participante">
                <img src="media/images/eduardo2.png" alt="Participante 2">
                <h4>Participante 2</h4>
                <p>Pastor Convidado</p>
            </div> 
            <div class="participante">
                <img src="media/images/eduardo3.png" alt="Participante 3">
                <h4>Participante 3</h4>
                <p>Preletor Internacional</p>
            </div>
            <div class="participante">
                <img src="media/images/eduardo4.png" alt="Participante 4">
                <h4>Participante 4</h4>
                <p>Coral Gospel</p>
            </div>
            <div class="participante">
                <img src="media/images/eduardo5.png" alt="Participante 5">
                <h4>Participante 5</h4>
                <p>Coronel Religioso</p>
            </div>
        </div>
    </section>

    <!-- Sessão 7 -->
    <section id="sessao-07">
        <h2>PROGRAMAÇÃO</h2>
        <div class="programacao-nav">
            <button onclick="mostrarProgramacao('dia-1')">Sexta-Feira</button>
            <button onclick="mostrarProgramacao('dia-2')">Sabado</button>
            <button onclick="mostrarProgramacao('dia-3')">Terça-Feira</button>
        </div>
        <div class="programacao-container">
            <div id="dia-1" class="evento">
                <h3>Sexta-Feira - 10:00 AM</h3>
                <p class="instrucao">Abertura dos portões às 9:00 AM</p>
                <p class="titulo-importante">Cerimônia de Abertura</p>
                <p>Início do evento com mensagens de boas-vindas e louvor.</p>
                <p class="titulo-importante">Palestra: "O poder da Fé"</p>
                <p>Palestrante internacional discutindo a importância da fé nos dias de hoje.</p>
            </div>
            <div id="dia-2" class="evento">
                <h3>Sabado - 14:00 PM</h3>
                <p class="instrucao">Abertura dos portões às 13:00 PM</p>
                <p class="titulo-importante">Workshop: "Louvor e Adoração"</p>
                <p>Técnicas e práticas de louvor com um dos maiores ministros de música.</p>
            </div>
            <div id="dia-3" class="evento">
                <h3>Terça-Feira - 16:00 PM</h3>
                <p class="instrucao">Abertura dos portões às 15:00 PM</p>
                <p class="titulo-importante">Encerramento</p>
                <p>Encerramento com oração e louvor final.</p>
            </div>
        </div>
    </section>

    <section class="sessao8">
        <div class="left-text8">SEJA UM PARCEIRO DESTE PROJETO</div>
        <div class="middle-image8">
            <img src="media/images/jeesushands.jpg" alt="Imagem Sessão 8"> <!-- Substitua por sua imagem -->
        </div>
        <div class="right-text8">
            <ul>
                <li>Ponto 1</li>
                <li>Ponto 2</li>
                <li>Ponto 3</li>
            </ul>
            <div class="pix-info">
                <p>CHAVE PIX<br>!chave pix!</p>
                <p>Tipo de Chave: !Tipo!</p>
                <p>Código de Transferência: !Código!</p>
            </div>
            <div class="qr-code">
                <img src="media/images/frame.png" alt="QR Code"> <!-- Substitua pelo QR Code -->
            </div>
        </div>
    </section>

    <section id="sessao-09" class="sessao9">
        <div class="sessao9-mapa">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3661.1864951672157!2d-47.17171482641525!3d-22.889563556226762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b8561226d57b%3A0x4836b8bedcfd43d9!2sIgreja%20Pentecostal%20Evangelica%20Unidos%20Em%20Cristo!5e0!3m2!1sen!2sbr!4v1693480940806!5m2!1sen!2sbr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="sessao9-info">
            <h2>Igreja Evangélica Pentecostal Unidos Em Cristo</h2>
            <h3><strong>Vila Real Santista, Hortolândia - SP</strong></h3>
            <p>CEP: 13183-641</p>
            <div class="sessao9-botoes">
                <a href="https://www.google.com/maps/place/Igreja+Pentecostal+Evangelica+Unidos+Em+Cristo/@-22.9015326,-47.2542756,12z/data=!4m10!1m2!2m1!1sigreja+pentecostal+unidos+em+cristo!3m6!1s0x94c8b8561226d57b:0x4836b8bedcfd43d9!8m2!3d-22.8895636!4d-47.1695259!15sCiNpZ3JlamEgcGVudGVjb3N0YWwgdW5pZG9zIGVtIGNyaXN0b5IBBmNodXJjaOABAA!16s%2Fg%2F11c6_wl3wd?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" 
                   class="btn-localizacao" target="_blank">
                    <i class="fas fa-map-marker-alt"></i> Localização
                </a>
                <a href="https://www.google.com/maps/dir/-22.9015552,-47.1924736/Igreja+Evang%C3%A9lica+Pentecostal+Unidos+Em+Cristo+-+Vila+Real+Santista,+Hortol%C3%A2ndia+-+SP,+13183-641/@-22.878512,-47.2232019,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x94c8bea6cfe9e91b:0x80f1a7a93cae6504!2m2!1d-47.2111115!2d-22.8500653?entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D" 
                   class="btn-como-chegar" target="_blank">
                    <i class="fas fa-directions"></i> Como chegar
                </a>
            </div>
        </div>
    </section>

    <button id="scrollToTopBtn">
        <img src="media/images/example_church.png" alt="Ir para o topo">
    </button>

    <footer class="site-footer">
        <div class="footer-content">
            <p>© ANO - 2024 - Igreja Evangélica Pentecostal Unidos Em Cristo - Todos os direitos reservados.</p>
            <p><a href="#">Rede Social principal |PRECISAS DE LINK|</a> – <a href="#">Criador |PRECISAS DE LINK|</a></p>
            <p>Desenvolvido por <a href="#">NOME |PRECISAS DE LINK|</a></p>
        </div>
    </footer>

    <script>
        // Mostra o botão ao rolar a página para baixo e solidifica o header
        window.onscroll = function() {
            var header = document.getElementById("main-header");
            if (window.pageYOffset > 0) {
                header.classList.remove("transparent");
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
                header.classList.add("transparent");
            }
            var scrollToTopBtn = document.getElementById("scrollToTopBtn");
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                scrollToTopBtn.classList.add("show");
            } else {
                scrollToTopBtn.classList.remove("show");
            }
        };

        // Função para rolar a página até o topo ao clicar no botão
        document.getElementById("scrollToTopBtn").addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });



        // Sessão 4 animação
        document.addEventListener('DOMContentLoaded', function() {
            const leftText = document.querySelector('.left-text');
            const middleImage = document.querySelector('.middle-image img');
            const rightText = document.querySelector('.right-text');
            const sessao4 = document.querySelector('.sessao4');

            function handleScroll() {
                const rect = sessao4.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;

                if (rect.top <= windowHeight && rect.bottom >= 0) {
                    // Anima a entrada dos elementos
                    leftText.style.transform = 'translateX(0)';
                    leftText.style.opacity = '1';
                    middleImage.style.transform = 'scale(1)';
                    middleImage.style.opacity = '1';
                    rightText.style.transform = 'translateX(0)';
                    rightText.style.opacity = '1';
                } else {
                    // Anima a saída dos elementos
                    leftText.style.transform = 'translateX(-100%)';
                    leftText.style.opacity = '0';
                    middleImage.style.transform = 'scale(0.8)';
                    middleImage.style.opacity = '0';
                    rightText.style.transform = 'translateX(100%)';
                    rightText.style.opacity = '0';
                }
            }

            window.addEventListener('scroll', handleScroll);
        });

        // Função para mostrar a programação do dia selecionado (Sessão 7)
        function mostrarProgramacao(dia) {
            var dias = document.querySelectorAll('.programacao-container > div');
            dias.forEach(function(d) {
                d.style.display = 'none';
            });
            document.getElementById(dia).style.display = 'block';
        }

        // Sessão 8
        window.addEventListener('scroll', function() {
            const sessao8 = document.querySelector('.sessao8');
            if (window.scrollY + window.innerHeight > sessao8.offsetTop + 100) {
                sessao8.classList.add('onscroll');
            } else {
                sessao8.classList.remove('onscroll');
            }
        });

        

    </script>
</body>
</html>
