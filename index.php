<?php
include_once("templates/header.php");
?>

<main>
    <div id="titulo-container">
        <h1>Blog do Fael</h1>
        <p>Estudar muito para saber um pouco ;)</p>
    </div>
    <div id="post-container">
        <?php foreach($posts as $post): ?>
            <div id="post-box">
                <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['titulo'] ?>">
                <h2 class="post-titulo">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"> <?= $post['titulo'] ?></a>
                </h2>
                <p class="post-descricao"><?= $post['descricao'] ?></p>
                <div class="tags-container">
                <?php foreach($post['tags'] as $tag): ?>
                    <a href="#"><?=$tag?></a>
                <?php endforeach;?>    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php
include_once("templates/footer.php");
?>