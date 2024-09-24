<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>  
    <style>
        .gallery{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;

        }
        .gallery .card{
            width: 30%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
        }
        .gallery .card img{
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
        }

    </style>
</head>

<body>

    <section class="gallery">
        <?php foreach($imageTitles as $src => $imageTitles): ?>
        <a href="image.php? <?php echo http_build_query(['image' => $src]); ?>" class="card">
            <img src="images/<?= rawurlencode($src) ?>" alt="image" srcset="">
            <h6><?= $imageTitles ?></h6>
        </a>
        <?php endforeach; ?>

    </section>


</body>

</html>


<?php include './views/footer.php'; ?>