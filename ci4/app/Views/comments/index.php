<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    .topnav {
        visibility: hidden;
    }
    * {
        background-color: #1f1f1f;
    }
    a {
        color: #007bff;
    }
    a:visited {
        color: gray;
    }
    form {
        margin-bottom: 20px;
    }
</style>
<title><?= esc($title) ?></title>
<h2><?= esc($title) ?></h2>

<?php if (! empty($comments) && is_array($comments)): ?>

    <?php foreach ($comments as $comments_item): ?>

        <h3><?= esc($comments_item['alias']) ?></h3>

        <div class="main">
            <?= esc($comments_item['body']) ?>
        </div>
        <p><a href="./comments/<?= esc($comments_item['slug'], 'url') ?>">View Comment</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Comments RIP...</h3>

    <p>Unable to find any comments for you.</p>

<?php endif ?>

<form action="<?= base_url('comments/new') ?>" method="get">
    <button type="submit"style="color: white; cursor: pointer;">Post a Comment</button>
</form>

<form action="<?= base_url('me') ?>" method="get">
    <button type="submit" style="color: white; cursor: pointer;">Back to About Me</button>
</form>