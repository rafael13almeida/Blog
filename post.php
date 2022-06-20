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
        <p class="post-conteudo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab cum delectus assumenda eaque qui ut a labore, nulla, repellat repellendus tempore aperiam recusandae sunt iusto, quaerat modi itaque? Minus, temporibus.
            Quod, dignissimos exercitationem, ipsa, repellendus nihil assumenda ad illum modi impedit animi laboriosam ducimus? Dignissimos repudiandae tempore fugit nemo porro quisquam esse rerum. Veritatis vitae porro dolores possimus consequatur sapiente!
            Culpa modi alias, nostrum perspiciatis necessitatibus tempore architecto sit dicta quia magnam asperiores amet doloribus in beatae, eum iusto qui assumenda ipsa facilis dignissimos quod. Cupiditate similique eius laboriosam cum.
            Pariatur laboriosam mollitia possimus nostrum perferendis, temporibus quia veritatis voluptas quibusdam vero magnam beatae harum reprehenderit a odio cupiditate doloremque eum asperiores dicta, natus, consectetur saepe tempora! Suscipit, sequi deserunt?
            Labore repellat ex incidunt tempora distinctio, ipsa soluta id ab aliquam, sapiente laborum, consequuntur eveniet! Iure maiores porro dicta ut rem repellendus earum, esse voluptatum natus dignissimos quaerat, quo sit!
        </p>
        <p class="post-conteudo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab cum delectus assumenda eaque qui ut a labore, nulla, repellat repellendus tempore aperiam recusandae sunt iusto, quaerat modi itaque? Minus, temporibus.
            Quod, dignissimos exercitationem, ipsa, repellendus nihil assumenda ad illum modi impedit animi laboriosam ducimus? Dignissimos repudiandae tempore fugit nemo porro quisquam esse rerum. Veritatis vitae porro dolores possimus consequatur sapiente!
            Culpa modi alias, nostrum perspiciatis necessitatibus tempore architecto sit dicta quia magnam asperiores amet doloribus in beatae, eum iusto qui assumenda ipsa facilis dignissimos quod. Cupiditate similique eius laboriosam cum.
            Pariatur laboriosam mollitia possimus nostrum perferendis, temporibus quia veritatis voluptas quibusdam vero magnam beatae harum reprehenderit a odio cupiditate doloremque eum asperiores dicta, natus, consectetur saepe tempora! Suscipit, sequi deserunt?
            Labore repellat ex incidunt tempora distinctio, ipsa soluta id ab aliquam, sapiente laborum, consequuntur eveniet! Iure maiores porro dicta ut rem repellendus earum, esse voluptatum natus dignissimos quaerat, quo sit!
        </p>
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