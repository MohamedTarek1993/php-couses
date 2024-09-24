<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php 
// get image from url
if(!empty($_GET['image']) && !empty($imageTitles[$_GET['image']]) && array_key_exists($_GET['image'], $imageDescriptions)) {
    // value of array is discription
    $image_discription = $imageDescriptions[$_GET['image']];
    // key of array is image name
    $image_link = $_GET['image'];
    // title of image
    $image_title = $imageTitles[$image_link];
} else{
    echo 'Image not found';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="image">
        <h1> <?php echo $image_title; ?> </h1>
        <img src="images/<?php echo  rawurlencode($image_link); ?>" alt="">
        <p> <?php echo $image_discription; ?> </p>
    </div>
    <a href="gallery.php"> Go Back</a>
</body>

</html>

<?php include './views/footer.php'; ?>