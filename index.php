<!-- https://cs.colostate.edu:4444/~C830350809/eastwest/index.php -->
<!-- in the index is supposed to be logic of if direction variable then change the style to east or west -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="Jennifer Pyle" />
    <meta name="description" content="Portfolio site for Jennifer Pyle" />
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jennifer Pyle - Homepage</title>
</head>
<main>
    <?php
    $direction = isset($_GET["direction"]) ? $_GET["direction"] : "east";
    if ($direction !== "east" && $direction !== "west") {
        $direction = "east";
    }

    $page = isset($_POST["page"]) ? $_POST["page"] : "home";
    if ($page !== "home" && $page !== "about") {
        $page = "home";
    }

    echo '<link rel="stylesheet" type="text/css" href="content/' . $direction . '.css" >';


    // include 'content/navbar.php';
    // include 'content/' . $page . '.php';
    
    ?>

</main>

<body>
    <?php include 'content/header.php'; ?>
    <?php include 'content/navbar.php'; ?>
    <?php include 'content/' . $page . '.php'; ?>
</body>

</html>