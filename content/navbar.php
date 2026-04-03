<!-- https://cs.colostate.edu:4444/~C830350809/eastwest/content/navbar.php -->
<!-- in the navbar you should be using the GET and POST to change direction variable for the home page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Navigation Bar</title>
</head>
<header>
    <h1> Navigation Bar </h1>
</header>
<main>

    <ul>

        <li>
            <form method="GET" action="index.php">
                <input type="hidden" name="direction" value="east"></input><br>
                <button type="submit">East</button>
            </form>
        </li>
        <li>
            <form method="GET" action="index.php">
                <input type="hidden" name="direction" value="west"></input><br>
                <button type="submit">West</button>
            </form>
        </li>

        <li>
            <form method="POST" action="index.php?direction=<?php echo $direction ?>">
                <!-- page is the variable that's going to change and set which page to change -->
                <input type="hidden" name="page" value="home"></input><br>
                <button type="submit">Home Page</button>
            </form>
        </li>
        <li>
            <form method="POST" action="index.php?direction=<?php echo $direction ?>">
                <input type="hidden" name="page" value="about"></input><br>
                <button type="submit">About Page</button>
            </form>
        </li>

    </ul>

</main>

</html>