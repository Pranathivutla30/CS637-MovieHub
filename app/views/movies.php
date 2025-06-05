<?php include __DIR__ . '/templates/header.php'; ?>

<main>
    <section id="search" class="fade-in">
        <input type="text" id="search-bar" placeholder="Search for movies...">
        <button id="search-button">Search</button>
        <select id="genre-filter">
            <option value="">Pick a genre u like 😊</option>
            <?php
            foreach ($genres as $genre) {
                echo "<option value='{$genre['id']}'>{$genre['genre']}</option>";
            }
            ?>
        </select>
    </section>
    <!-- Movie list handled by JavaScript -->
    <section id="movie-list" class="fade-in"></section>
    <div id="pagination" class="pagination-controls"></div>
    
    <div id="movie-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-details"></div>
            <hr>
            <div id="comment-section">
                <h6>Comments</h6>
                <div id="comments-list"></div> <!-- List of existing comments -->
                <textarea id="new-comment" placeholder="Add your comment"></textarea>
                <button id="submit-comment">Comment</button>
            </div>
        </div>
    </div>

    <script>
        // Passing movie data to scripts
        const movies = <?php echo json_encode($movies); ?>;
        const genres = <?php echo json_encode($genres); ?>;
    </script>
    <script type="module" src="/movie/public/assets/scripts/scripts.js"></script>
</main>
<footer>
    <p>&copy; 2024 MovieWorld</p>
</footer>
</body>
</html>
