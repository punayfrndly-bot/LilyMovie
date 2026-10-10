<?php
require 'db_connect.php';

$sql = "SELECT title, genre, rating, price FROM movies ORDER BY id DESC";
$result = $conn->query($sql);
$movies = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $movies[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LilyMovie | Browse Movies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav">
            <div class="logo">Lily<span>Movie</span></div>
            <a href="index.php" class="nav-btn" style="text-decoration:none; display:inline-flex; align-items:center;">Back Home</a>
        </div>
    </header>

    <main>
        <section class="catalog">
            <div class="container">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">Browse</p>
                        <h2>All Movies</h2>
                    </div>
                    <a href="index.php">Home</a>
                </div>

                <?php if (empty($movies)): ?>
                    <p style="color: var(--muted);">No movies found in the database yet.</p>
                <?php else: ?>
                    <div class="movie-grid">
                        <?php foreach ($movies as $movie): ?>
                            <article class="movie-card">
                                <div class="movie-image" style="background-image: url('https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?auto=format&fit=crop&w=900&q=80');">
                                    <span class="movie-tag">Movie</span>
                                </div>
                                <div class="movie-info">
                                    <div class="movie-topline">
                                        <span class="genre"><?php echo htmlspecialchars($movie['genre']); ?></span>
                                        <span class="rating">★ <?php echo htmlspecialchars($movie['rating']); ?></span>
                                    </div>
                                    <h3><?php echo htmlspecialchars($movie['title']); ?></h3>
                                    <div class="movie-footer">
                                        <span class="price">$<?php echo number_format((float)$movie['price'], 2); ?></span>
                                        <button type="button">Buy now</button>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
