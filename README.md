# 🌐 Simple PHP Multi-Page Website

## 📌 Project Overview

This project is a **simple multi-page website built with HTML, CSS, and PHP**.
It demonstrates how to create a structured website using **reusable components like header and footer with PHP `include_once()`**.

The website contains a **Home page, About page, and Contact page** along with a **search bar, responsive navigation, and a styled contact form**.

This project is ideal for **beginners learning PHP and frontend development**.

---

# 🚀 Features

✔ Multi-page website structure
✔ Reusable **Header and Footer using PHP**
✔ Responsive navigation bar with logo
✔ Homepage with sections and images
✔ Search bar UI
✔ Contact form
✔ About page with image and content
✔ Responsive design
✔ CSS animations and hover effects
✔ Dynamic copyright year using PHP

---

# 🛠 Technologies Used

* **HTML5**
* **CSS3**
* **PHP**

---

# 📂 Project Structure

```bash
project-folder/
│
├── index.php        # Home page
├── about.php        # About page
├── contact.php      # Contact page
│
├── header.php       # Website header (logo + navigation)
├── footer.php       # Website footer
│
├── style.css        # Main stylesheet
├── favicon.ico      # Website icon
│
└── README.md
```

---

# 🧩 Website Components

## Header

The header contains:

* Website logo
* Navigation menu
* Links to main pages

Navigation menu:

* Home
* About
* Contact

Example usage:

```php
include_once("header.php");
```

---

## Footer

The footer includes navigation links and a dynamic copyright year.

Example:

```php
&copy; <?php echo date("Y"); ?> MyWebsite. All rights reserved.
```

This automatically shows the **current year**.

---

## Home Page

The homepage contains:

* Search bar
* Content sections
* Images
* Explore links

It provides a simple **landing page layout**.

---

## About Page

The about page includes:

* Informational text
* An illustrative image
* Clean responsive layout

---

## Contact Page

The contact page contains a **contact form** with:

* Name input
* Email input
* Message textarea
* Send Message button

The form is styled with **modern CSS design**.

---

# 🎨 UI Features

The project includes several UI improvements:

* Responsive layout
* Smooth hover animations
* Image zoom hover effect
* Section fade-in animation
* Styled buttons and forms

---

# ⚙ How to Run the Project

### 1️⃣ Install Local Server

Install any of these:

* XAMPP
* WAMP
* Laragon

---

### 2️⃣ Move Project

Copy the project folder into:

```
htdocs
```

---

### 3️⃣ Start Apache

Start the **Apache server**.

---

### 4️⃣ Open Website

Open browser and visit:

```
http://localhost/project-folder/
```

---

# 📚 What You Will Learn

From this project you can learn:

* Basic PHP website structure
* Using `include_once()` for reusable components
* Navigation bar creation
* Multi-page website linking
* Contact form creation
* Responsive CSS design
* Basic UI animations

---

# 👨‍💻 Author

**Rupinder Kumar**

---

⭐ If you like this project, consider giving it a **star on GitHub**.
