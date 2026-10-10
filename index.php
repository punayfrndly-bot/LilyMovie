<?php
$movies = [
    [
        'title' => 'The Dark Knight',
        'genre' => 'Action / Crime',
        'rating' => 9.0,
        'price' => '$12.99',
        'image' => 'https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?auto=format&fit=crop&w=900&q=80',
        'tag' => 'Trending',
        'category' => 'trending'
    ],
    [
        'title' => 'Inception',
        'genre' => 'Sci-Fi / Thriller',
        'rating' => 8.8,
        'price' => '$10.99',
        'image' => 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?auto=format&fit=crop&w=900&q=80',
        'tag' => 'Top Pick',
        'category' => 'genre'
    ],
    [
        'title' => 'Interstellar',
        'genre' => 'Adventure / Drama',
        'rating' => 8.7,
        'price' => '$11.49',
        'image' => 'https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?auto=format&fit=crop&w=900&q=80',
        'tag' => 'New',
        'category' => 'new-release'
    ],
    [
        'title' => 'Dune',
        'genre' => 'Epic / Sci-Fi',
        'rating' => 8.6,
        'price' => '$13.99',
        'image' => 'https://images.unsplash.com/photo-1513106580091-1d82408b8cd6?auto=format&fit=crop&w=900&q=80',
        'tag' => 'Popular',
        'category' => 'genre'
    ],
    [
        'title' => 'Parasite',
        'genre' => 'Thriller / Drama',
        'rating' => 8.5,
        'price' => '$9.99',
        'image' => 'https://images.unsplash.com/photo-1440404653325-ab127d49abc1?auto=format&fit=crop&w=900&q=80',
        'tag' => 'Awarded',
        'category' => 'trending'
    ],
    [
        'title' => 'Avatar',
        'genre' => 'Fantasy / Action',
        'rating' => 8.4,
        'price' => '$12.49',
        'image' => 'https://images.unsplash.com/photo-1556690559-7f9dcf6f3d7d?auto=format&fit=crop&w=900&q=80',
        'tag' => 'Classic',
        'category' => 'new-release'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LilyMovie | Discover Great Movies</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav">
            <div class="logo">Lily<span>Movie</span></div>
            <button class="nav-btn">Sign In</button>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-copy">
                    <p class="eyebrow">Best Movie Streaming</p>
                    <h1>Watch your favorite movies anytime.</h1>
                    <p>Find blockbuster hits, amazing stories, and unforgettable moments in one place.</p>
                    <div class="cta-row">
                        <button class="primary">Play Trailer</button>
                        <a href="movies.php" class="secondary browse-link">Browse Movies</a>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <strong>120K+</strong>
                            <span>Movies</span>
                        </div>
                        <div>
                            <strong>4.8/5</strong>
                            <span>Rating</span>
                        </div>
                        <div>
                            <strong>24/7</strong>
                            <span>Streaming</span>
                        </div>
                    </div>
                </div>
                <div class="hero-poster">
                    <div class="poster-card">
                        <span class="badge">Now Streaming</span>
                        <h3>Oppenheimer</h3>
                        <div class="poster-meta">
                            <span>Drama</span>
                            <span>★ 9.3</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="catalog">
            <div class="container">
                <div class="section-head">
                    <div>
                        <p class="eyebrow">Featured</p>
                        <h2>Popular Movies</h2>
                    </div>
                    <a href="#">View All</a>
                </div>

                <div class="filter-bar" aria-label="Movie filters">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="genre">Genre</button>
                    <button class="filter-btn" data-filter="trending">Trending</button>
                    <button class="filter-btn" data-filter="new-release">New Releases</button>
                </div>

                <div class="movie-grid">
                    <?php foreach ($movies as $movie): ?>
                        <article class="movie-card" data-category="<?php echo $movie['category']; ?>">
                            <div class="movie-image" style="background-image: url('<?php echo $movie['image']; ?>');">
                                <span class="movie-tag"><?php echo $movie['tag']; ?></span>
                            </div>
                            <div class="movie-info">
                                <div class="movie-topline">
                                    <span class="genre"><?php echo $movie['genre']; ?></span>
                                    <span class="rating">★ <?php echo $movie['rating']; ?></span>
                                </div>
                                <h3><?php echo $movie['title']; ?></h3>
                                <div class="movie-footer">
                                    <span class="price"><?php echo $movie['price']; ?></span>
                                    <button>Buy now</button>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
