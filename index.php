<!-- https://cs.colostate.edu:4444/~C830350809/eastwest/index.php -->
<!-- in the index is supposed to be logic of if direction variable then change the style to east or west -->
<!DOCTYPE html>
<html lang="en">

<?php
// Handle direction (GET)
if (isset($_GET["direction"])) {
    $direction = $_GET["direction"];
} else {
    $direction = "east";
}

// Only allow east or west
if ($direction !== "east" && $direction !== "west") {
    $direction = "east";
}

// Handle page (POST)
if (isset($_POST["page"])) {
    $page = $_POST["page"];
} else {
    $page = "home";
}

// Only allow valid page names
if ($page !== "home" && $page !== "about") {
    $page = "home";
}
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Jennifer Pyle" />
    <meta name="description" content="Portfolio site for Jennifer Pyle" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jennifer Pyle - Homepage1</title>
    <link rel="stylesheet" type="text/css" href="content/<?php echo $direction; ?>.css">
</head>

<body>
    <?php include 'content/header.php'; ?>
    <?php include 'content/navbar.php'; ?>

    <main>
        <?php include 'content/' . $page . '.php'; ?>
    </main>

    <?php include 'content/footer.php'; ?>
</body>

</html>