# ART-ISAN: A Marketplace for Emerging Artists

> A sophisticated, multi-tier e-commerce ecosystem architected with a PHP/MySQL backend, specifically engineered to empower independent creators by digitizing the acquisition and showcase of unique artworks.


## Project Essence

**ART-ISAN** represents my high school graduation thesis (*Atestat Profesional*) for the **Mathematics and Computer Science** intensive profile. It is a full-stack digital solution conceived to bridge the gap between contemporary artistic expression and modern commercial viability.

Far surpassing a mere aesthetic gallery, this platform integrates rigorous user session management, a persistent relational database, and an intricate e-commerce pipeline to simulate the operational complexities of a real-world online enterprise.

## Core Functionalities

* **Exhaustive Artistic Catalog:** A tiered navigation system featuring multiple gallery levels (`products.html` through `products-4.html`) and immersive narrative pages for individual masterpieces.
* **End-to-End User Authentication:** A secure lifecycle including encrypted registration, login validation, and session termination (`logout.php`), all handled via server-side PHP.
* **Relational Data Persistence:** Powered by a **XAMPP/MySQL** architecture, the system maintains high-integrity records for:
* Secure user credentials and profile metadata.
* Asynchronous customer testimonials and quantitative reviews.
* Relational mappings for contact inquiries and support tickets.


* **Dynamic Procurement Workflow:** * A state-aware **Shopping Cart** (`cart.html`) and **Wishlist** (`favorites.html`).
* A sequential checkout pipeline: `orderdetails.html` → `orderplaced.html`.

* **High-Fidelity UX/UI:** Leverages HTML5 video backgrounds (`us-video.mp4`), bespoke CSS3 transitions, and JavaScript-driven DOM manipulation for a premium user experience.

## Technical Stack

* **Frontend:** HTML5, CSS3 (Modular Stylesheets & Responsive Design), JavaScript ES6+.
* **Backend:** PHP 8.x (Session Handling, CRUD Operations, Server-side Logic).
* **Database:** MySQL (Relational schema managed via phpMyAdmin).
* **Environment:** Cross-platform deployment via Apache/XAMPP local server.


## Comprehensive Repository Roadmap

The repository is structured into over 30 interconnected files, categorized by their functional role within the ecosystem:

### Primary Interfaces & Logic

* **`index.html`**: The high-impact entry point featuring the flagship hero section and brand identity.
* **`homepage.php`**: The authenticated user dashboard, serving as the central hub after login.
* **`connect.php`**: The critical bridge establishing the PDO connection between the application and the MySQL server.
* **`DOCUMENTATIE.docx`**: The extensive 12th-grade thesis detailing the algorithmic choices and database normalization.

### Security & Identity Management

* **`register&login.html` / `registration.html**`: Front-facing portals for user onboarding.
* **`register.php` / `register&login.php**`: Backend scripts governing POST requests and SQL injections prevention.
* **`logout.php`**: Ensures comprehensive session destruction for user security.

### E-Commerce & Transaction Modules

* **`products.html` (1-4)**: A scalable catalog system allowing for diverse art classifications.
* **`cart.html` / `favorites.html**`: Interactive interfaces for managing pending acquisitions.
* **`orderdetails.html` / `orderplaced.html**`: The finalization tier of the transactional funnel.
* **`review.html`**: An interactive feedback loop for community engagement.

### Masterpiece Storytelling (Product Pages)

Individualized pages providing historical context and granular pricing for specific works:

* *Realism & Classical:* `TheCardPlayers.html`, `campagne.html`, `colivie.html`.
* *Contemporary & Abstract:* `ethereal.html`, `charleston.html`, `theLoneliest.html`, `LovedandLost.html`, `hereStill.html`, `WorthFightingFor.html`.

### Assets & Utilities

* **`css/style.css`**: The monolithic stylesheet controlling the global visual language and grid layouts.
* **`script.js` / `index.js**`: Logic engines for cart calculations, image sliders, and UI interactivity.
* **`css/video/us-video.mp4`**: High-definition media asset for an immersive landing experience.


## Installation & Deployment

1. **Environment Setup**: Install [XAMPP](https://www.apachefriends.org/) and initiate the Apache and MySQL modules.
2. **Database Configuration**:
* Navigate to `phpMyAdmin` and create a database titled `login`.
* Configure the tables for `users` and `messages` according to the schema defined in the `DOCUMENTATIE.docx`.


3. **Local Deployment**: Clone the repository into the `C:/xampp/htdocs/ART-ISAN/` directory.
4. **Launch**: Access the platform via `http://localhost/ART-ISAN/index.html`.


## Conclusion

This project stands as a testament to my technical evolution, harmonizing the logical rigor of Computer Science with the evocative nature of the Fine Arts. Through the development of **ART-ISAN**, I have mastered the orchestration of frontend interactivity with backend data persistence, creating a professional-grade application ready for a real-world portfolio.

**Developed with ❤️ by:** **Daria-Ioana Drăghici** 
*Class of 2020-2024* *Mathematics & Computer Science Intensive* *Colegiul Național „Bogdan Petriceicu Hasdeu” Buzău*

**ENJOY <3**
