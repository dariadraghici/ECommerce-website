# ART-ISAN: A Marketplace for Emerging Artists

**Short Description:** > A multi-page e-commerce ecosystem built with a PHP/MySQL backend to empower small-scale artists by showcasing and selling their unique masterpieces.

## 🎨 Project Essence

**ART-ISAN** is my "Atestat" (Professional Certification) project for the "Matematică-Informatică" profile. It is a full-stack web platform designed to function as a bridge between the niche world of independent art and the digital marketplace.

The project goes beyond simple aesthetics; it implements complex user management, a dynamic shopping cart system, and an interactive database to handle the real-world logic of an online store.

## ✨ Core Features

* **Comprehensive Art Portfolio:** Multiple gallery tiers (`products.html`, `products-2.html`, etc.) and dedicated story pages for individual pieces like *The Loneliest*, *Ethereal Bonds*, and *Charleston*.
* **User Lifecycle Management:** Complete Authentication flow including Registration, Login, and Logout functionality powered by PHP.
* **Database Integration:** Utilizes a **XAMPP (MySQL)** backend to persistently store:
* User credentials (securely managed via `register.php`).
* Customer reviews and ratings (`review.html`).
* Contact inquiries and support tickets.
* **E-commerce Workflow:** * A dynamic **Shopping Cart** (`cart.html`) and **Favorites** list.
* Order processing sequence: `orderdetails.html` → `orderplaced.html`.
* **Interactive UI/UX:** Features background videos (`us-video.mp4`), custom CSS animations, and JavaScript-driven interactivity for a premium, modern feel.
* **Support & Engagement:** A "Learn More" section for artist stories and a contact portal with phone and email integration.

## 🛠 Technical Stack

* **Frontend:** HTML5, CSS3 (Custom styles and Responsive Design), JavaScript (ES6).
* **Backend:** PHP 8.x for server-side logic and session management.
* **Database:** MySQL (relational database structure created in XAMPP).
* **Environment:** Developed and tested on a local Apache server.

## 📁 File Structure Highlights

* **`index.html`**: The main entry point featuring the primary gallery and branding.
* **`connect.php`**: The vital link establishing the connection between the application and the MySQL server.
* **`css/style.css`**: A centralized stylesheet managing the visual identity and responsiveness of all 30+ pages.
* **`registration.html` & `register.php**`: The frontend/backend pair handling new user creation.
* **Artwork Specifics**: Individual pages (e.g., `colivie.html`, `campagne.html`) providing deep-dive descriptions and pricing for specific works.

## ⚙️ Installation & Usage

1. **Server Setup**: Install and run [XAMPP](https://www.apachefriends.org/).
2. **Database Import**:
* Access `phpMyAdmin`.
* Create a database named `login` (as specified in `connect.php`).
* Ensure tables for `users` and `messages` are initialized.


3. **Deployment**: Copy the project folder into the `htdocs` directory of your XAMPP installation.
4. **Navigation**: Open your browser and go to `http://localhost/atestat_pr/index.html`.


## 📝 Conclusion

This project represents a significant personal and technical milestone. It successfully integrates the logic of computer science with the sensitivity of art. Developing ART-ISAN allowed me to master the coordination between frontend interactivity and backend data persistence, resulting in a professional-grade application ready for a portfolio.

**Developed with ❤️ by:** **Daria-Ioana Drăghici** *Class of 2023-2024* *Colegiul Național „Bogdan Petriceicu Hasdeu” Buzău*

**ENJOY <3**
