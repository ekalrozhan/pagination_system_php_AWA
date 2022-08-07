<?php include("postController.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pagination</title>
</head>

<body>
    <div class="page-wrapper">
        <div class="post-list">
            <h1>Articles</h1>
            <?php foreach ($pageData['posts'] as $post) : ?>
                <article>
                    <h3><?php echo $post['title']; ?></h3>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="pagination-links">
            <?php if ($pageData['prevPage']) : ?>
                <a href="index.php?page=<?php echo $pageData['prevPage']; ?>" class="btn">
                    <ion-icon name="arrow-back-outline"></ion-icon> Prev Page
                </a>
            <?php else : ?>
                <span></span>
            <?php endif; ?>

            <?php if ($pageData['nextPage']) : ?>
                <a href="index.php?page=<?php echo $pageData['nextPage']; ?>" class="btn">Next Page <ion-icon name="arrow-forward-outline"></ion-icon></a>
                </a>
            <?php else : ?>
                <span></span>
            <?php endif; ?>



        </div>
    </div>

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>