# Toposel WordPress Assignment

This project is a custom WordPress theme developed as part of the Toposel technical assignment.

The goal of this project was to create a **mobile-first WooCommerce storefront** with dynamic CMS management using WordPress and ACF.

---

## 🚀 Features

- Fully responsive (Mobile-first design)
- Custom WordPress theme (no page builder)
- WooCommerce integration
- Dynamic "New Arrivals" product section
- Announcement bar (editable from admin)
- Hero section (editable from admin)
- Icons / Features section (dynamic)
- Clean and structured theme files
- Non-technical user friendly CMS setup

---

## 🛠 Tech Stack

- WordPress
- WooCommerce
- Advanced Custom Fields (ACF)
- PHP
- HTML5
- CSS3
- Git & GitHub

---

## 📂 Theme Structure

```

toposel-theme/
│
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── single-product.php
├── assets/
│   └── css/style.css

```

---

## ⚙️ CMS Structure Explanation

### 1️⃣ Announcement Bar
Managed via:
- ACF → Theme Settings (Options Page)
- Fields:
  - announcement_text
  - announcement_button_text
  - announcement_button_url

This allows non-technical users to update the top notification bar easily.

---

### 2️⃣ Hero Section
Managed via:
- ACF fields
- Editable title, description, button text, and image.

---

### 3️⃣ Icons Section
- Created using ACF Repeater field
- Users can add/remove icons without touching code.

---

### 4️⃣ New Arrivals (WooCommerce)
- Dynamically pulls latest products
- Displays:
  - Product image
  - Title
  - Rating
  - Price
  - Sale price
  - Discount percentage
- Fully manageable from WooCommerce → Products

---

## 📦 Installation Steps

1. Install WordPress
2. Install and activate WooCommerce
3. Install and activate Advanced Custom Fields (ACF)
4. Upload this theme folder to:
```

wp-content/themes/

```
5. Activate the theme
6. Import / create products
7. Add ACF fields in Theme Settings


If you want, I can also give you a **short professional description** to paste in the GitHub repo description section 👌
