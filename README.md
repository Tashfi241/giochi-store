# 🎮 GIOCHI. — Luxury Dark Gaming E-Commerce Store

Welcome to the official repository for **GIOCHI**, an ultra-sleek, minimalist dark-themed digital gaming storefront built with WordPress, WooCommerce, and a custom PHP/HTML template.

---

## 📌 Project Summary

This project transforms a standard WordPress & Astra setup into a custom luxury gaming e-commerce platform for selling digital activation keys. 

Instead of relying on heavy page builders, the storefront was built using a custom PHP page template (`page-custom-giochi.php`) styled with Tailwind CSS and FontAwesome, providing maximum speed, micro-animations, glassmorphism UI elements, and full control over the layout.

---

## 🚀 Everything Done From Start to Finish

### 1. Environment & Stack Setup
* **Local Web Server:** Installed and configured **XAMPP** to run a local WordPress environment (`http://localhost/wordpress/`).
* **Base Theme:** Installed the **Astra** theme to serve as the Lightweight foundation.
* **E-Commerce Engine:** Installed and activated **WooCommerce** for product management, cart logic, and checkout workflows.

---

### 2. Custom Storefront Design & Coding (`page-custom-giochi.php`)
* **Custom Theme Template:** Created `page-custom-giochi.php` inside `wp-content/themes/astra/`.
* **Luxury Dark Theme UI:** Designed an interactive UI using Tailwind CSS with violet/indigo accents (`#8b5cf6`, `#6366f1`), dark surface colors (`#08080a`), and smooth glassmorphism panels.
* **Interactive Frontend Features:**
  * **Hero Section:** Clean showcase highlighting featured digital keys.
  * **Dynamic Category Filters:** Filter titles by genres (*Action & RPG, Cyberpunk, Indie, Pre-Orders*).
  * **Real-time Search:** Search games dynamically by title or genre.
  * **Sorting Controls:** Sort games by price (Low/High) and ratings.
  * **Quick View Modal:** Pop-up preview providing release year, file size, platforms, and descriptions.
  * **Slide-over Shopping Bag:** Animated side drawer to manage items and view totals before checking out.

---

### 3. WordPress & Homepage Integration
* **Page Creation:** Created a new page titled **Home** in the WordPress admin panel.
* **Template Assignment:** Applied the custom template (**Custom Giochi Store**) via the page attributes sidebar.
* **Reading Settings:** Configured WordPress static homepage settings (**Settings > Reading**) to set `Home` as the root front page.

---

### 4. WooCommerce Backend & Payment Setup
* **Digital Products:** Created game catalog entries (e.g., *Cyberpunk 2077: Phantom Liberty*).
* **Payment Gateways:** Configured offline payment gateways (**Cash on Delivery**) to enable full checkout testing on the local XAMPP environment without real credit card credentials.
* **Virtual Orders:** Configured WooCommerce settings to process virtual/digital product orders instantly.

---

### 5. Version Control & GitHub Deployment
* **Git Initialized:** Set up Git version control in the local Astra theme directory.
* **User Identity Configured:** Configured Git credentials (`Tashfi241` / `tanvirali2410@gmail.com`).
* **Remote Repository:** Connected the local codebase to GitHub and pushed the initial version to `https://github.com/Tashfi241/giochi-store`.

---

## 📂 Key File Structure

```text
wp-content/themes/astra/
│── page-custom-giochi.php   # Custom minimalist dark storefront template
│── style.css               # Theme stylesheet header & custom styles
│── functions.php           # Theme functions and WooCommerce hooks
└── README.md               # Project documentation
