<!-- https://cs.colostate.edu:4444/~C830350809/eastwest/index.php -->
<!-- in the index is supposed to be logic of if direction variable then change the style to east or west -->
<?php
//Switch direction GET
if (isset($_GET["direction"])) {
    $direction = $_GET["direction"];
} else {
    $direction = "east"; // default
}


//Switch page (POST)
if (isset($_POST["page"])) {
    $page = $_POST["page"];
} elseif (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "home";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jennifer Pyle">
    <meta name="description" content="Portfolio site for Jennifer Pyle">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jennifer Pyle - Homepage</title>
    <link rel="stylesheet" href="content/<?php echo $direction; ?>.css">
</head>

<body>
    <?php include 'content/header.php'; ?>
    <div class="flex-container">
        <?php include 'content/navbar.php'; ?>
        <?php include 'content/' . $page . '.php'; ?>
    </div>
    <?php include 'content/footer.php'; ?>

</body>

</html>