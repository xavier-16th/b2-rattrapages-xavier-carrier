<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>archi bdd Mongoo</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .container { max-width: 400px; margin: 0 auto; }
        form { display: flex; flex-direction: column; gap: 15px; }
        input, textarea, button { padding: 10px; }
        .link { margin-bottom: 20px; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order from Mongoo</h1>
        
        <a href="index.php?action=list" class="link">View order tracking</a>
        <form action="index.php?action=create" method="POST">  
            <!-- Form to create n send info to the database -->
            <input type="text" name="nom" placeholder="Your last name" required>
            <input type="text" name="prenom" placeholder="Your first name" required>
            <textarea name="adresse" placeholder="Delivery address" rows="4" required></textarea>
            <button type="submit">Place order</button>
        </form>
    </div>
</body>
</html>