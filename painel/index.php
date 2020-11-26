<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7,edge,chrome=1">
    <title>SanLis Gestão</title>
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>img/logo.png" type="image/x-icon">

    <!-- SEO -->
    <meta name="description" content="SanLis Gestão Serviços especializados em atividades financeiras, administrativas e operacionais.">
    <meta name="keywords" content="gestão,serviços,especializados,empresarial,consultoria, vendas, financeiro, compras, estoque, produção, administrativo, processos, tarefas, atividades">
    <meta name="author" content="Angelita Santos">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- JavaScript, Font Awesome, Google Font, CSS -->
    <script src="https://kit.fontawesome.com/f7cb610b49.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/responsive.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/root.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/stylepainel.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/styles.css">
</head>

<body>

    <?php

    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    switch ($url) {
        case 'clientes':
            echo '<target target="clientes" />';
            break;
        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
    ?>

    <header id="navegacao">
        <div class="center">
            <h2 class="logo left"><a href="/consultoria/sanlisgestao/#home">SanLis Gestão</a></h2><!-- nome -->
            <nav class="desktop right">
                <ul>
                    <li><a href="/consultoria/sanlisgestao/#home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>login">Login</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>registrar">Registrar</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="/consultoria/sanlisgestao/#home">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>login">Login</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>registrar">Registrar</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div><!-- clear -->
        </div><!-- center -->
    </header>

    <?php

    if (file_exists('pages/' . $url . '.php')) {
        include('pages/' . $url . '.php');
    } else {
        if ($url != 'clientes' && $url != 'servicos') {
            $pagina404 = true;
            include('pages/erro404.php');
        } else {
            include('pages/home.php');
        }
    }

    ?>

    <footer id="rodape">

        <div class="center cardsgroup">
            <article class="w20 left">
                <div class="textcenter">
                    <header>
                        <h6>Institucional</h6>
                    </header>
                    <ul>
                        <li><a href="/consultoria/sanlisgestao/#quemsomos" onclick="mostrarEquipe()">Quem Somos</a></li>
                        <li><a href="/consultoria/sanlisgestao/#servicos">Nossos Serviços</a></li>
                        <li><a href="/consultoria/sanlisgestao/#planos">Nossos Planos</a></li>
                        <li><a href="/consultoria/sanlisgestao/#clientes">Nossos Clientes</a></li>
                    </ul>
                </div><!-- textcenter -->
            </article><!-- Institucional -->
            <article class="w20 left">
                <div class="textcenter">
                    <header>
                        <h6>Conteúdo</h6>
                    </header>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Downloads</a></li>
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Podcasts</a></li>
                    </ul>
                </div><!-- textcenter -->
            </article><!-- Conteúdo -->
            <article class="w20 left">
                <div class="textcenter">
                    <header>
                        <h6>Dados para Contato</h6>
                        <p><strong>E-mail</strong></p>
                        <p><a href="https://outlook.live.com/owa/" target="_blank" role="button">sanlisgestao@hotmail.com</a></p>
                        <p><strong>Telefone</strong></p>
                        <p>(31) 98112-4429</p>
                        <p><strong>Horário de atendimento</strong></p>
                        <p>Segunda-feira a Sexta-feira</p>
                        <p>08h00 às 18h00</p>
                    </header>
                </div><!-- textcenter    -->
            </article><!-- E-mail e Telefone -->
            <article class="w20 left">
                <div class="textcenter">
                    <header>
                        <h6>Redes Sociais</h6>
                    </header>
                    <div class="redessociais w50 center">
                        <a href="https://web.whatsapp.com/" target="_blank"><i class="fab fa-whatsapp-square fa-3x"></i></a>
                        <a href="https://web.telegram.org/" target="_blank"><i class="fab fa-telegram fa-3x"></i></a>
                        <div class="clear"></div><!-- clear -->
                    </div>

                    <div class="redessociais w50 center">
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
                        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square fa-3x"></i></a>
                        <div class="clear"></div><!-- clear -->
                    </div>

                    <div class="redessociais w50 center">
                        <a href="https://www.instagram.com/sanlisgestao" target="_blank"><i class="fab fa-instagram fa-3x"></i></a>
                        <a href="https://www.twitter.com/sanlisgestao" target="_blank"><i class="fab fa-twitter-square fa-3x"></i></a>
                        <div class="clear"></div><!-- clear -->
                    </div>
                </div><!-- textcenter -->
            </article><!-- Redes Sociais -->
            <article class="w20 left">
                <div class="textcenter">
                    <header>
                        <h6>Área Restrita</h6>
                    </header>
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>login"><button type="button">Entrar</button></a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>registrar"><button type="button">Registrar</button></a></li>
                    </ul>
                </div>
            </article><!-- Área Restrita -->
            <div class="clear"></div><!-- clear -->
        </div><!-- center -->

    </footer><!-- Rodapé -->

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/mainpainel.js"></script>

</body>

</html>