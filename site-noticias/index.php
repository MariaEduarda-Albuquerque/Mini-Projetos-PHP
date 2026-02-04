<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mali Globo</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/responsiveIndex.css">
</head>
<body>
    <?php include('header.php'); ?>

    <h1 class="title"><?php echo 'Notícias'; ?></h1>

    <section>
    <div class="container">
        <div class="noticia">
            <figure>
                <figcaption>
                <a href="noticiaCompleta.php?idNoticia=0">
                    <h3>Juiz diz que Musk provavelmente violou a Constituição dos EUA e bloqueia cortes na USAI</h3>
                    <img src="./images/elon.jpg" width="292" height="192">
                    <p>Juiz entendeu que órgão chefiado por Elon Musk não tem poder para fazer cortes na USAID, determinando que o governo restaure o acesso a funcionários da agência.</p>
                </a>
                </figcaption>
            </figure>
        </div>

        <div class="noticia">
            <figure>
                <figcaption>
                <a href="noticiaCompleta.php?idNoticia=1">
                    <h3>Capital registra chuva forte com raios, rajadas de vento e alagamentos em várias regiões da cidade.</h3>
                    <img src="./images/chuva.jpg" width="292" height="192">
                    <p>Segundo o CGE, houve queda de granizo em dois pontos da cidade. Seis córregos ficaram em alerta para transbordamento. Um muro caiu em Itaquera, na Zona Leste.</p>
                </a>
                </figcaption>
            </figure>
        </div>

        <div class="noticia">
            <figure>
                <figcaption>
                <a href="noticiaCompleta.php?idNoticia=2">
                    <h3>Onda de ataques a Tesla, de Elon Musk, cresce e preocupa autoridades nos EUA.</h3>
                    <img src="./images/tesla.jpg" width="292" height="192">
                    <p>Cybertrucks incendiados, balas e coquetéis molotov disparados contra showrooms: ataques a propriedades da Tesla, de Elon Musk, aumentaram nos EUA, e autoridades falam em terrorismo.</p>
                </a>
                </figcaption>
            </figure>
        </div>

        <div class="noticia">
            <figure>
                <figcaption>
                <a href="noticiaCompleta.php?idNoticia=3">
                    <h3>Gusttavo Lima anuncia que desistiu de se candidatar à Presidência da República e foca em novos projetos.</h3>
                    <img src="./images/gusttavoLima.jpg" width="292" height="192">
                    <p>Gusttavo Lima anunciou que desistiu de disputar a presidência da República em 2026, decisão que foi divulgada pelo cantor nas redes sociais e gerou grande repercussão.</p>
                </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

    <?php include('footer.php'); ?>
</body>
</html>