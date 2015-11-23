<?php
    require('db_connect.php');
    $sql = "SELECT * FROM categories";
    $statement = $db->prepare($sql);
    $statement->execute();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cheesy Categories</title>
</head>
<body>
    <h1>Cheesy Categories</h1>
    <?php if ($statement->rowCount() > 0): ?>
        <ul>
            <?php while ($row = $statement->fetch()): ?>
                <li>
                    <a href="category.php?id=<?= $row['id'] ?>">
                        <?= $row['name'] ?>
                    </a>
                </li>
            <?php endwhile ?>
        </ul>
    <?php else: ?>
        <p>There are no cheese categories in the database.</p>
    <?php endif ?>
</body>
</html>