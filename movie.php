<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="movie.css">
</head>
<body>
    <header>
        <h1>Movie Ticket Booking</h1>
    </header>
    <main>
        <section id="movie-list">
            <h2>Available Movies</h2>
            <?php include 'get_movies.php'; ?>
        </section>
        <section id="booking-form">
            <h2>Book Tickets</h2>
            <form action="book_ticket.php" method="post">
                <label for="movie">Select Movie:</label>
                <select name="movie" id="movie" required>
                    <?php include 'get_movie_options.php'; ?>
                </select>
                <label for="seats">Number of Seats:</label>
                <input type="number" name="seats" id="seats" min="1" max="10" required>
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" required>
                <button type="submit">Book Now</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Movie Ticket Booking. All rights reserved.</p>
    </footer>
</body>
</html>