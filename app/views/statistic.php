<?php include __DIR__ . '/templates/header.php'; ?>
    <main>
        <!-- Total Gross Revenue by Genre Chart -->
        <section>
            <!-- <h2>Total Gross Revenue by Genre</h2> -->
            <div id="chart-container">
                <canvas id="genreChart" width="800" height="400"></canvas>
            </div>
        </section>

        <!-- Top 10 Grossing Movies Chart -->
        <section>
            <!-- <h2>Top 10 Grossing Movies</h2> -->
            <div id="chart-container">
                <canvas id="topMoviesChart" width="800" height="400"></canvas>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 MovieWorld</p>
    </footer>

    <script>
        // Fetch data for Total Gross Revenue by Genre
        fetch('http://localhost:8080/movie/app/utils/get_chart_data.php')
            .then(response => response.json())
            .then(data => {
                const genres = data.map(item => item.genre);
                const totalGross = data.map(item => item.total_gross);

                // Render the Genre Chart
                const ctx = document.getElementById('genreChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: genres,
                        datasets: [{
                            label: 'Total Gross Revenue (USD)',
                            data: totalGross,
                            backgroundColor: 'rgba(54, 162, 235, 0.5)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            title: {
                                display: true,
                                text: 'Total Gross Revenue by Genre'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching genre chart data:', error));

        // Fetch data for Top 10 Grossing Movies
        fetch('http://localhost:8080/movie/app/utils/get_top_movies.php')
            .then(response => response.json())
            .then(data => {
                const movies = data.map(item => item.series_title);
                const totalGross = data.map(item => item.gross);

                // Render the Top Movies Chart
                const ctx = document.getElementById('topMoviesChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: movies,
                        datasets: [{
                            label: 'Total Gross Revenue (USD)',
                            data: totalGross,
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top'
                            },
                            title: {
                                display: true,
                                text: 'Top 10 Grossing Movies'
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching top movies data:', error));
    </script>
</body>
</html>
