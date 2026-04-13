# Inventory System (PHP + MySQL)

A backend-focused Inventory Management System built using PHP and MySQL.  
This project demonstrates CRUD operations, transaction processing, and stock management using a custom MVC-like structure.

---

## 🚀 Features

- Add, edit, delete items (CRUD)
- View inventory list
- Record stock transactions (IN / OUT)
- Automatic stock updates based on transactions
- Prevent negative stock values
- Transaction history tracking
- Input validation for data integrity
- Basic MVC-like architecture (Models, Controllers, Views separation)

---

## 🧱 Tech Stack

- PHP (Core PHP, OOP)
- MySQL
- HTML / CSS
- XAMPP (Local development server)
- Git & GitHub (Version control)

---

## ⚙️ How It Works (Core Logic)

- Items are stored in the `items` table
- Transactions are stored in the `transactions` table
- When a transaction is created:
  - The system inserts a record into the transactions table
  - It retrieves the current item quantity
  - It updates the item stock based on transaction type:
    - IN → adds stock
    - OUT → subtracts stock
  - Validation prevents negative stock values

---

## 📁 Project Structure
inventory-system/
│
├── config/
│ └── database.php
│
├── models/
│ ├── Item.php
│ └── Transaction.php
│
├── controllers/
│ ├── ItemController.php
│ └── TransactionController.php
│
├── views/
│ ├── items/
│ │ ├── list.php
│ │ ├── add.php
│ │ └── edit.php
│ │
│ └── transactions/
│ └── history.php
│
├── assets/
│ └── css/
│ └── style.css
│
├── index.php
├── add_item.php
├── edit_item.php
├── delete_item.php
├── add_transaction.php
├── transactions.php
│
└── README.md


---

## 🗄️ Database Setup

- Database name: `inventory_db`
- Import the provided SQL file into phpMyAdmin

Tables:
- `items`
- `transactions`

---

## ⚙️ Setup Instructions

1. Clone the repository:
https://github.com/boybu456/inventory-system-php

2. Move project to XAMPP:
C:/xampp/htdocs/inventory-system

3. Start Apache and MySQL in XAMPP

4. Open phpMyAdmin and create database:
inventory_db

5. Import SQL file

6. Run in browser:
http://localhost/inventory-system/

---

## 🎯 Key Learning Outcomes

- Built backend logic using PHP OOP
- Implemented CRUD operations with MySQL
- Designed transaction-based inventory system
- Applied input validation and basic security (prepared statements)
- Practiced MVC-like separation of logic
- Managed project using Git & GitHub

---

## 📌 Future Improvements

- Full MVC refactor (proper architecture)
- User authentication system (login/logout)
- Role-based access control (admin/user)
- REST API version of the system
- UI upgrade using Bootstrap or Tailwind
- Migration to Laravel framework

---

## 👨‍💻 Author

Carl Joshua Opinaldo  
Aspiring Backend Developer (PHP / Backend Systems)

---

## 📜 License

This project is for educational and portfolio purposes.