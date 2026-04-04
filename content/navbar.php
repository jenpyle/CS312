<!-- https://cs.colostate.edu:4444/~C830350809/eastwest/content/navbar.php -->
<!-- in the navbar you should be using the GET and POST to change direction variable for the home page -->
<ul class="navigation-list">

    <?php if ($direction === "west") { ?>
        <li>
            <form method="GET" action="index.php">
                <input type="hidden" name="direction" value="east">
                <input type="hidden" name="page" value="<?php echo $page; ?>">
                <button type="submit">Switch to East</button>
            </form>
        </li>
    <?php } else { ?>
        <li>
            <form method="GET" action="index.php">
                <input type="hidden" name="direction" value="west">
                <input type="hidden" name="page" value="<?php echo $page; ?>">
                <button type="submit">Switch to West</button>
            </form>
        </li>
    <?php } ?>

    <li>
        <form method="POST" action="index.php?direction=<?php echo $direction; ?>">
            <input type="hidden" name="page" value="home">
            <button type="submit">Home Page</button>
        </form>
    </li>

    <li>
        <form method="POST" action="index.php?direction=<?php echo $direction; ?>">
            <input type="hidden" name="page" value="about">
            <button type="submit">About Page</button>
        </form>
    </li>
    <li>
        <form method="POST" action="index.php?direction=<?php echo $direction; ?>">
            <input type="hidden" name="page" value="contact">
            <button type="submit">Contact Page</button>
        </form>
    </li>
</ul>