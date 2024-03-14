<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style>
    .topnav {
        visibility: hidden;
    }
    * {
        background-color: #1f1f1f;
        margin:20px;
    }
    a {
        color:gray;
    }
</style>
<h2><?= esc($comments['alias']) ?></h2>
<p><?= esc($comments['body']) ?></p>

<a href="<?= base_url('comments') ?>" class="button">Back to Comments Page</a>