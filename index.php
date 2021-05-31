<?php
require_once __DIR__ .'/partials/scripts/get-stanze.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php //head
require_once __DIR__ .'/partials/templates/head.php'; ?>

<body>

    <main class="container">
        <h1>Archivio stanze</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room number</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php // Loop DB records 
                    if(!empty($stanze)) {
                        foreach($stanze as $stanza) { ?>
                            <tr>
                                <td><?php echo $stanza['id']; ?></td>
                                <td><?php echo $stanza['room_number']; ?></td>
                                <td>
                                    <a class="text-success" 
                                        href="./show.php?id=<?php echo $stanza['id']; ?>">
                                        View 
                                    </a>
                                </td>
                            </tr>
                        <?php }
                    }
                ?>
            </tbody>
        </table>
    </main>
    
</body>
</html>

