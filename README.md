💻 LaptopStore – Full-Stack E-Commerce Platform

LaptopStore is a specialized, full-featured e-commerce web application dedicated to the retail and management of laptops. The project is built using a modern PHP-MySQL architecture, providing a seamless shopping experience for customers and a robust administrative suite for business owners.

🌟 Key Modules & Functionalities

1. Customer Experience (Front-End)

  •Dynamic Landing Page: Features a responsive product grid that loads items dynamically from the database.

  •	Advanced Search & Filtering: Users can find the perfect device using multi-criteria filters including:

  •	Brand & Category

•	Processor Type (Intel/AMD)

  •	Color & Price Range

  •	Shopping Cart System: Interactive cart allowing users to add/remove items and update quantities before proceeding to checkout.

  •	Secure Checkout & Invoicing: Integrated checkout process that generates professional PDF-style HTML invoices upon successful purchase.

  •	User Profile Management: Personalized dashboards where users can update their details and upload profile images.


2. Administrative Suite (Back-End)

  •	Admin Analytics Dashboard: Features a visual data representation using Chart.js, highlighting "Most Sold Products" to help with business decisions.

  •	Product Management: Tools to add and manage product attributes like Brands, Categories, Colors, and Processors.

  •	Inventory & Stock Control: Real-time stock management to update quantities and monitor availability.

  •	User Management: Ability to monitor registered users and manage their status (Active/Blocked).

  •	Comprehensive Reporting: Dedicated module for generating detailed reports on Users, Products, and Stock levels.


3. Security & Communication

  •	Authentication System: Secure Sign-In and Sign-Up flows with session-based access control.

  •	Password Recovery: Integrated PHPMailer support to facilitate secure "Forgot Password" functionality via email.
 
  •	Data Integrity: Custom Database class for centralized and secure MySQLi interactions.

🛠️ Technical Stack

  •	Frontend: HTML5, CSS3 (Custom + Bootstrap 5.3), JavaScript (Vanilla), Chart.js.

  •	Backend: PHP 8.x (Object-Oriented & Procedural).

  •	Database: MySQL (Relational Database Management).

  •	Libraries: PHPMailer for automated email services.

  •	Environment: Optimized for XAMPP/WAMP (Apache & MySQL).


📂 Project Structure Highlights

  •	connection.php: Centralized database singleton for secure queries.

  •	admin/: Dedicated modules for site administration and reporting.

  •	resources/: Organized assets for product images and UI elements.

•	script.js: Master AJAX-based logic for asynchronous page updates without reloading.

