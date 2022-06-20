<?php
include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];
    $postAtual;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $postAtual = $post;
        }
    }
}

?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-titulo"><?= $postAtual['titulo'] ?></h1>
        <p id="post-descicao"><?= $postAtual['descricao'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $postAtual['img'] ?>" alt="<?= $postAtual['titulo'] ?>">
        </div>
        <p class="post-conteudo">Quais os tipos de testes de software?
            Existem diferentes tipos de testes que podem ser aplicados num software para identificar suas falhas, sendo as principais:

            – Teste da caixa branca – utiliza o aspecto interno do programa/sistema, o código fonte, para avaliar seus componentes. Ele também é conhecido como teste orientado à lógica ou estrutural. Podem ser analisados itens como: fluxo dos dados, condição, ciclos etc. Na hora de implementá-lo é preciso verificar a criticidade, a complexidade, a estrutura e o nível de qualidade que se pretende obter do programa, envolvendo confiança e segurança;

            – Teste da caixa preta – diferente do teste anterior, que prioriza os aspectos internos, o teste da caixa preta verifica aspectos externos. Os requisitos funcionais do sistema são avaliados. Não se observa o modo de funcionamento, sua operação, tendo como foco as funções que deverão ser desempenhadas pelo programa. Desse modo, avalia-se se um grupo de entrada de dados resultou nas saídas pretendidas, levando-se em consideração a especificação do programa. Ou seja, o que se esperava que o software deveria fazer. É conhecido também como técnica funcional;

            – Teste da caixa cinza – esse tipo de teste une os dois anteriores, por isso o termo “cinza”. Avalia tanto os aspectos internos quanto os externos, de entrada e saída. Pode utilizar-se de engenharia reversa;

            – Teste de regressão – esse consiste em realizar testes a cada versão de um software, onde se modificam-se funcionalidades. Desse modo, evita-se que erros que foram corrigidos antes no software antes voltem a aparecer na hora de se incrementar algo novo a ele.

            – Teste de unidade – testa-se unidades menores de um software, de modo isolado, para ver se todas funcionam adequadamente;

            – Teste de integração – depois das unidades testadas, realiza-se uma verificação se elas funcionam juntas, integradas. Pode ocorrer delas apresentarem incompatibilidades ao funcionarem em conjunto, mesmo após terem sido aprovadas no teste de unidade;

            – Teste de carga – esse teste é feito para avaliar os limites de uso do software, o quanto ele suporta em volume de informações, tráfego etc. sem que apresente erros;

            – Teste de usabilidade – esse teste é feito por um pequeno grupo de usuários para ver se o software satisfaz as suas necessidades. Nesse teste analisa-se como o usuário usa o sistema, verificando onde ele tem mais dificuldade. Ouve-se também suas impressões, porém é preciso confrontá-las com as observações do avaliador;

            – Teste de stress – aqui leva-se o software ao seu limite de potência e funcionamento, para mais ou para menos, de modo a avaliar em qual ponto ele deixa de funcionar adequadamente. Isso é feito para verificar se suas especificações máximas ou mínimas de uso estão corretas.</p>
    </div>

    <aside class="nav-container">
        <h3 id="tags-titulo">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($postAtual['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>

        <h3 id="categorias-titulo">Categorias</h3>
        <ul id="categoria-list">
            <?php foreach ($categorias as $categoria) : ?>
                <li><a href="#"><?= $categoria ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>

</main>

<?php
include_once("templates/footer.php");
?>