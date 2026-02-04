<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
    <link rel="stylesheet" href="./css/noticiaCompleta.css">
    <link rel="stylesheet" href="./css/responsiveNC.css">
</head>
<body>
    <?php
        $id = Array();
        $titulo = Array();
        $imagem = Array();
        $subtitle = Array();
        $desc = Array();

        //Notícia 1
        $id[0] = 1;
        $title[0]= 'Juiz diz que Musk provavelmente violou a Constituição dos EUA e bloqueia cortes na USAID';
        $imagem[0]= './images/elon.jpg';
        $subtitle[0] = 'Juiz entendeu que órgão chefiado por Elon Musk não tem poder para fazer cortes na USAID, determinando que o governo restaure o acesso a funcionários da agência.';
        $desc[0] = 'Um juiz federal bloqueou, nesta terça-feira (18), os cortes adicionais do governo dos Estados Unidos na Agência dos EUA para o Desenvolvimento Internacional (USAID). Na decisão, o magistrado afirmou que o desmonte da agência, determinado pelo bilionário Elon Musk, provavelmente violou a Constituição.
        Musk, atual chefe do Departamento de Eficiência Governamental (DOGE), não ocupa um cargo oficial no governo. A Casa Branca argumenta que ele não recebe salário e atua apenas como conselheiro do presidente Donald Trump. No entanto, o juiz federal Theodore Chuang, de Maryland, decidiu que o DOGE não tem autoridade para realizar tais cortes.
        Chuang ordenou que o governo Trump restaurasse o acesso a e-mails e computadores para todos os funcionários da USAID, incluindo aqueles que foram colocados em licença administrativa.
        Ele concluiu ainda que as evidências indicam que Musk tomou decisões que levaram ao fechamento da sede e do site da agência, apesar da alegação de que ele seria apenas um conselheiro do presidente.
        As declarações públicas de Musk e as postagens dele nas redes sociais demonstram que ele exerce "controle firme sobre o DOGE", segundo o juiz. Além disso, Chuang destacou que, diante das mudanças, a USAID provavelmente não será mais capaz de cumprir algumas de suas funções legais.';

        //Notícia 2
        $id[1] = 2;
        $title[1]='Capital registra chuva forte com raios, rajadas de vento e alagamentos em várias regiões da cidade.';
        $imagem[1]='./images/chuva.jpg';
        $subtitle[1] = 'Segundo o CGE, houve queda de granizo em dois pontos da cidade. Seis córregos ficaram em alerta para transbordamento. Um muro caiu em Itaquera, na Zona Leste.';
        $desc[1]='A cidade de São Paulo teve chuva forte com raios e rajadas de vento na tarde desta terça-feira (18). Às 3h25 desta quarta-feira (19), eram 40.175 imóveis sem energia na região metropolitana, sendo 36.874 somente na capital, segundo a concessionária Enel.
        Por volta das 22h, a Defesa Civil enviou alerta severo para os moradores da Zona Norte. Devido a fortes chuvas na região, ela estava em estado de atenção para alagamentos às 21h10. A chuva segue forte também na Zona Leste, onde há registros de transbordamentos, segundo o Centro de Gerenciamento de Emergências Climáticas (CGE) da prefeitura.
        O CGE registrou queda de granizo nas regiões de Campo Limpo, na Zona Sul, e Guilhermina Esperança, na Zona Leste. Até as 18h15, a cidade registrou 11,9 mm de chuvas.
        Ao menos 24 chamados por queda de árvore chegaram ao Corpo de Bombeiros. No cruzamento entre as ruas Afonso Celso e Pageú, na Vila Mariana, um tronco se partiu, fazendo com que a planta caísse sobre a via, bloqueando a passagem de carros e pedestres.
        Após ventania e chuva, 10 voos do Aeroporto Internacional de SP, em Guarulhos, são redirecionados para outras cidades
        Os córregos Água Espraiada, Guaratiba, Itaim, Lajeado, Água Vermelha e Três Pontes chegaram a ficar em estado de alerta para o transbordamento.
        Pontos de alagamento foram registrados na Zona Leste (veja vídeos abaixo), como na entrada da estação São Miguel Paulista, da Linha 12-Safira, e na Avenida São Miguel. Por volta das 16h10, a Defesa Civil estadual emitiu alerta severo de chuva persistente para a região.        
        Os radares meteorológicos do CGE indicam que as áreas de instabilidade que provocaram as pancadas de chuva nesta tarde já se afastaram da capital, mas ainda há condições para chuvas isoladas no restante do dia.       
        Em nota, a Secretaria Municipal de Segurança Urbana informou que a Defesa Civil atendeu, entre 7h e 18h30:        
        38 ocorrências para queda de árvores, sendo 14 na Zona Leste, três na Zona Norte, 11 na Zona Sul e 10 na Centro-Oeste;
        3 ocorrências de desabamentos, uma na Zona Leste, uma na Zona Norte e uma na Zona Sul.
        A Companhia de Engenharia de Tráfego (CET) registrou 15 semáforos apagados por falta de energia, seis por falhas e quatro em amarelo piscante. Às 17 horas, a lentidão na cidade alcançou 721 km.';

        //Notícia 3
        $id[2] = 3;
        $title[2]='Onda de ataques a concessionárias da Tesla, de Elon Musk, cresce e preocupa autoridades nos EUA.';
        $imagem[2]='./images/tesla.jpg';
        $subtitle[2] = 'Cybertrucks incendiados, balas e coquetéis molotov disparados contra showrooms: ataques a propriedades da Tesla, de Elon Musk, aumentaram nos EUA, e autoridades falam em terrorismo.';
        $desc[2]='Cybertrucks incendiados, balas e coquetéis molotov disparados contra showrooms: ataques a propriedades da Tesla, empresa de carros elétricos de Elon Musk, vêm ocorrendo com frequência nos Estados Unidos, e autoridades já falam em "terrorismo".
        Nesta terça-feira (18), após um novo episódio deste tipo acontecer em Las Vegas, a procuradora-geral dos EUA, Pam Bondi, condenou os recentes ataques violentos e afirmou que o Departamento de Justiça já acusou várias pessoas pelos crimes.
        "O enxame de ataques violentos à propriedade da Tesla nada mais é do que terrorismo doméstico. Continuaremos as investigações que impõem consequências severas aos envolvidos nesses ataques, incluindo aqueles que operam nos bastidores para coordenar e financiar esses crimes", disse Bondi em uma declaração.
        Em uma entrevista recente à rede de TV americana Fox News, o presidente dos EUA, Donald Trump, também disse que acredita que carros da Tesla incendiados podem ser um ato de terrorismo.
        Em publicação na rede social X, nesta terça, Elon Musk compartilhou o vídeo do ato de vandalismo registrado em Las Vegas e lamentou os ataques.
        "Este nível de violência é insano e profundamente errado. A Tesla só faz carros elétricos e não fez nada para merecer esses ataques malignos", afirmou o bilionário, que fez acusações durante participação em podcast no dia anterior: "Pelo menos parte disso é organizado e pago por organizações de esquerda, financiadas por bilionários de esquerda, essencialmente".
        O ataque mais recente
        Porta da concessionária da Tesla pichada com palavra de protesto em Las Vegas — Foto: Steve Marcus/Las Vegas Sun via AP
        Porta da concessionária da Tesla pichada com palavra de protesto em Las Vegas — Foto: Steve Marcus/Las Vegas Sun via AP
        O ataque em Las Vegas deixou pelo menos cinco veículos danificados - dois deles completamente consumidos pelas chamas -, informou o Departamento de Polícia Metropolitana da cidade em uma publicação nas redes sociais.
        Imagens tiradas por drones do centro de vendas (veja no vídeo acima) mostram alguns dos carros danificados, com pelo menos um parecendo muito destruído, e pichações nas portas do prédio com a palavra "Resist" - resistir em português - pintada com spray.
        Testemunhas disseram que viram um suspeito incendiando vários veículos, acrescentou a polícia.';

        //Notícia 4 
        $id[3] = 4;
        $title[3]='Gusttavo Lima anuncia que desistiu de se candidatar à Presidência da República e foca em novos projetos.';
        $imagem[3]='./images/gusttavoLima.jpg';
        $subtitle[3] = 'Gusttavo Lima anunciou que desistiu de disputar a presidência da República em 2026, decisão que foi divulgada pelo cantor nas redes sociais e gerou grande repercussão.';
        $desc[3]='O cantor e empresário Gusttavo Lima anunciou em uma rede social nesta quarta-feira (19) que desistiu da intenção de disputar a presidência da República em 2026 – anunciada pelo próprio artista no começo do ano.
        "Quero ressaltar aqui que não sou candidato a nenhum cargo político, em 2026 não serei candidato, nem mesmo não sou filiado a qualquer partido. Manifestei sim meu interesse de ajudar o Brasil, meu objetivo é contribuir de outras formas, sem a necessidade de concorrer ou ser eleito para algum cargo público", disse.
        No vídeo, Gusttavo Lima diz que quer continuar na carreira artística e no empreendedorismo. E que, mesmo sem disputar cargo político, quer seguir ajudando a sociedade.
        Gusttavo Lima faz vídeo no Instagram e afirma que desistiu de se candidatar à Presidência — Foto: Reprodução/Instagram
        Gusttavo Lima faz vídeo no Instagram e afirma que desistiu de se candidatar à Presidência — Foto: Reprodução/Instagram
        "Quero que todos os lados políticos se unam em prol do povo brasileiro. Vou continuar minha carreira política e tocar os meus negócios. Tenho muitas novidades para vocês que acompanham a vida do bebê aqui. Peço a todos que respeitem a minha opinião, a minha posição e a minha imparcialidade", seguiu.
        No começo de janeiro, Gusttavo Lima disse ao portal "Metrópoles" que se candidataria e que o Brasil "precisa de alternativas". Na época, tentou rejeitar rótulos de direita e esquerda – embora tenha manifestado, anteriormente, apoio a políticos de direita como Jair Bolsonaro e Pablo Marçal.';
   ?>

    <?php
        $x = $_GET['idNoticia'];
    ?>

    <section>
        <?php include('header.php');?>
        <h1> <?php echo $title[$x]; ?> </h1>
        <p class="subtitle">  <?php echo $subtitle[$x]; ?> </p>
        <div class="imagem">
            <?php echo '<img src="'.$imagem[$x].'" class="section-img" width="292" height="192">';?>
        </div>
        <div class="texto">
            <p class="desc"><?php echo $desc[$x]; ?></p>
        </div>

        <?php include('footer.php');?>
    </section>
</body>
</html>
