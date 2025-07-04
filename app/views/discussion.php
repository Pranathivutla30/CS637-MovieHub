<?php include __DIR__ . '/templates/header.php'; ?>
    <main>
        <div id="posts-list">
            <?php foreach ($posts as $post): ?>
                <div class="post-item">
                    <h2><?= htmlspecialchars($post['title']) ?></h2>
                    <p><strong>By:</strong> <?= htmlspecialchars($post['username']) ?></p>
                    <p><?= htmlspecialchars($post['content']) ?></p>
                    <p><em>Posted on: <?= htmlspecialchars($post['created_at']) ?></em></p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Create Review Button -->
        <button id="create-review-btn">Create Review</button>

        <!-- Create Review Modal -->
        <div id="create-review-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Create Review</h2>
                <form id="create-review-form">
                    <label for="review-title">Title:</label>
                    <input type="text" id="review-title" name="title" required>

                    <label for="review-content">Content:</label>
                    <textarea id="review-content" name="content" required></textarea>

                    <label for="review-rating">Rating (1-10):</label>
                    <input type="number" id="review-rating" name="rating" min="1" max="10" required>

                    <label for="review-movie-id">Movie:</label>
                    <select id="review-movie-id" name="movie_id" required>
                        <?php foreach ($movies as $movie): ?>
                            <option value="<?= $movie['id'] ?>"><?= htmlspecialchars($movie['series_title']) ?></option>
                        <?php endforeach; ?>
                    </select>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 MovieWorld</p>
    </footer>
    <script src="/movie/public/assets/scripts/add_reviews.js"></script>
</body>
</html>
