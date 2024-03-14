<link href="<?= base_url('CSS/style.css') ?>" rel="stylesheet">
<style> 
    body {
        background-color: #1f1f1f;
    }
    .topnav {
        visibility: hidden;
    }
</style>
<p style="color:black">Comment successfully posted!</p>

<form action="<?= base_url('comments') ?>" method="get">
    <button type="submit" name="submit" style="color: white; cursor: pointer;">Back to Comments Page</button>
</form>