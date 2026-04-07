# Inventory System (PHP + MySQL)

A simple Inventory Management System built using PHP and MySQL with basic CRUD functionality. This project is part of my portfolio to demonstrate backend development skills using core PHP.

---

## 🚀 Features

- Add new items to inventory
- Edit existing items
- Delete items
- View list of items
- Track transactions (if applicable in current build)
- Simple and clean UI using HTML/CSS
- MySQL database integration

---

## 🧱 Tech Stack

- PHP (Core PHP, no framework)
- MySQL
- HTML / CSS
- XAMPP (Local development server)
- Git & GitHub for version control

---

## 📁 Project Structure
```
inventory-system/
│
├── config/
│   └── database.php
│
├── models/
│   ├── Item.php
│   └── Transaction.php
│
├── controllers/
│   ├── ItemController.php
│   └── TransactionController.php
│
├── views/
│   ├── items/
│   │   ├── list.php
│   │   ├── add.php
│   │   └── edit.php
│   │
│   └── transactions/
│       └── history.php
│
├── assets/
│   └── css/
│       └── style.css
│
├── index.php
├── add_item.php
├── edit_item.php
├── delete_item.php
│
└── README.md
```

## ⚙️ Setup Instructions

1. Clone the repository:
https://github.com/boybu456/inventory-system-php
2. Move project to XAMPP `htdocs`:
C:/xampp/htdocs/inventory-system

3. Start Apache and MySQL in XAMPP

4. Create database:
inventory_db

5. Import SQL file (if available)

6. Open in browser:


---

## 🗄️ Database Configuration

Update database credentials in:
config/database.php

Default setup:
- Host: localhost
- Username: root
- Password: (empty)
- Database: inventory_db

---

## 🎯 Learning Goals

- Understand MVC-like structure in PHP
- Practice CRUD operations
- Learn database integration using PDO/MySQLi
- Improve Git & GitHub workflow
- Build portfolio-ready backend project

---

## 📌 Future Improvements

- Full MVC refactor
- User authentication (login system)
- Role-based access (admin/user)
- Better UI using Bootstrap or Tailwind
- API version of the system
- Laravel migration

---

## 👨‍💻 Author

Carl Joshua Opinaldo  
Aspiring Backend Developer (PHP / JavaScript)

---

## 📜 License

This project is for educational and portfolio purposes.