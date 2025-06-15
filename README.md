#  MovieHub

A feature-rich web application built for personalized movie recommendations and exploration, developed as part of the CS637 Software Engineering II course at UMass Boston. It combines modern web development (React, Flask/Node.js), collaborative filtering, and interactive visual insights.

---

##  Project Files

-  **[frontend/](https://github.com/Pranathivutla30/CS637-MovieHub/tree/main/frontend)**  
  React.js frontend, including user interfaces for browsing movies, personalization settings, and viewing recommendation results.

-  **[backend/](https://github.com/Pranathivutla30/CS637-MovieHub/tree/main/backend)**  
  Flask or Node.js REST API server that handles:
  - Movie data fetching via TMDb API
  - Processing user inputs and preference data
  - Serving model-generated recommendations

-  **models/**  
  Saved collaborative filtering model files (e.g. `.pkl`), trained using historical user-movie rating data.

-  **scripts/**  
  Data-processing and model-building Python scripts:
  - `train_recommender.py` – builds and saves the recommendation model
  - `preprocess_data.py` – cleans and prepares raw input data

-  **public/**  
  Static assets like logos, CSS files, and helper images used by the frontend.

-  **README.md** – You’re reading it!

---

##  Project Goals

1. **Personalized Movie Recommendations**  
   Provide users with tailored movie suggestions based on their ratings and preferences.

2. **Interactive Browsing Experience**  
   Enable users to search for movies, view details (poster, synopsis, cast), and rate titles.

3. **Insightful Visual Analytics**  
   Present users and developers with plot-based dashboards such as genre distribution, rating trends, and heatmaps.

4. **Educational Value**  
   Demonstrate full-stack development, model training, API design, UI/UX best practices, and data visualization — all in one cohesive project.

---

##  Technology Stack

| Layer        | Tech Stack                                   |
|--------------|-----------------------------------------------|
|  Frontend  | React.js, Axios, Bootstrap/Material UI        |
|  Backend   | Flask or Node.js, Express/Tornado             |
|  Database | MongoDB or PostgreSQL                         |
|  ML Logic  | Python, pandas, scikit-learn (collaborative filtering) |
|  API       | The Movie Database (TMDb)                     |
|  Visualization | Chart.js / D3.js for interactive plots     |

---

##  System Workflow

1.  **User Interaction:** Users search or rate movies via the frontend.
2.  **API Requests:** These inputs are sent to the backend server.
3.  **Data Fetching:** TMDb API provides movie metadata (posters, overview, cast).
4.  **Recommendation Engine:** Collaborative filtering analyzes user ratings to generate (and store) recommendations.
5.  **Visualization:** Genre distribution and rating patterns are computed and sent back for dashboard charts.
6.  **UI Rendering:** The frontend displays recommendations and interactive visualizations.

---

##  Visualizations

*(Replace images in `images/` folder to display these in your repo)*

- ###  Genre Distribution
  ![Genre Distribution](images/genre_distribution.png)

- ###  Ratings Heatmap
  ![Ratings Heatmap](images/ratings_heatmap.png)

- ###  Recommendation Output
  ![Recommendations UI](images/recommendations_ui.png)

---
## Data & Model Training
Input Data: Collected user-movie rating interactions (sample or from public dataset)

Preprocessing Steps:

Handle missing/null values

Encode categorical data (genres, user IDs)

Normalize rating scales

Training Script:

Collaborative filtering using user-item matrix and cosine similarity

Save model artifacts in models/

Evaluation Metrics: RMSE (Root Mean Square Error), Precision@K, Recall@K


##  Author
-Lakshmi Pranathi Vutla
-Graduate Student – Computer Science, UMass Boston
