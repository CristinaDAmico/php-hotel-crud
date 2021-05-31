<?php
require_once __DIR__ .'/partials/scripts/get-singola_stanza.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php //head
require_once __DIR__ .'/partials/templates/head.php'; ?>

<body>

    <main class="container">
        <?php if(!empty($stanza)) { ?>

            <h1>Dettagli stanza</h1>

            <ul>
                <li>Floor : <?php echo $stanza['floor']; ?></li>
                <li>Beds : <?php echo $stanza['beds']; ?></li>
            </ul>

        <?php } else { ?>
            <h2>No room found!</h2>
        <?php } ?>
       
        <a href="./">Back to archive</a>

    </main>
    
</body>
</html>

