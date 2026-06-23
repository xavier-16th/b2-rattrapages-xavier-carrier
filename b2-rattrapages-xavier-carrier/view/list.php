<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Tracking</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 12px; text-align: left; }
        
        /* Status colors */
        .status-received { background-color: #f8f9fa; }
        .status-progress { background-color: #fff3cd; }
        .status-completed { background-color: #d1e7dd; }
        .status-cancelled { background-color: #f8d7da; }
    </style>
</head>
<body>
    <h1>Kitchen Dashboard</h1>
    <a href="index.php">Back to home</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Address</th>
            <th>Price</th>
            <th>Current Status</th>
            <th>Action</th>
        </tr>
        <?php foreach($commandes as $c): ?>
            <?php
                $class = 'status-received';
                if($c['statut'] == 'In Progress') $class = 'status-progress';
                if($c['statut'] == 'Completed') $class = 'status-completed';
                if($c['statut'] == 'Cancelled') $class = 'status-cancelled';
            ?>
            <tr class="<?= $class ?>">
                <td><?= $c['id'] ?></td>
                <td><?= htmlspecialchars($c['nom']) ?> <?= htmlspecialchars($c['prenom']) ?></td>
                <td><?= htmlspecialchars($c['adresse']) ?></td>
                <td><?= $c['prix'] ?> €</td>
                <td><?= $c['statut'] ?></td>
                <td>
                    <form action="index.php?action=update" method="POST" style="margin:0;">
                        <input type="hidden" name="id" value="<?= $c['id'] ?>">
                        <select name="statut">
                            <option value="Order Received" <?= $c['statut'] == 'Order Received' ? 'selected' : '' ?>>Received</option>
                            <option value="In Progress" <?= $c['statut'] == 'In Progress' ? 'selected' : '' ?>>In Progress</option>
                            <option value="Completed" <?= $c['statut'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                            <option value="Cancelled" <?= $c['statut'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                        </select>
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>