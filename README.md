# PHP Project

A website purely made in PHP for my uncle. The whole purpose of project is to learn PHP and understand security flaws that are avoidable (XSS, SQL injection and CSFR being the most common ones). Additionally, this is not the final 

**Features**
- Built-in MariaDB (MySQL).
- Login System with the usage of `PDO` (PHP Data Objects).
- All queries are using prepare statements. Prevent SQL injection.
- CSFR for forms
- Contact page and message board system.
- Bootstrap 4 Beta. I must be honest here. I am not really fan of Bootstrap 4, due to major documentation changes.
- Password encryption via `password_hash()`

**Future Implementation**
- Move all Procedural to OOP. My main concern is, that there is a potential that the website needs to have more flexibility and scability. And the only way to ensure 
- Remove inline CSS. I was anware that Google Chrome was caching the files, which prevented me seeing the changes. Mindless I started using inline CSS everywhere, which is something that I need to remove in the future.
- Implementing Google Analytics
- Auto setup SQL queries, when the project is opened for the first time.
- Add validation to the forms.

** Would you like to clone this project? **

1. Open your command prompt / terminal and type: `git clone https://github.com/Akiraff2015/promill`

2. Go to `phpmyadmin` and create the following tables: `user_table` and `message_table`

**user_table** SQL Query

```
CREATE TABLE user_table (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    username VARCHAR(16) UNIQUE NOT NULL, 
    is_active TINYINT(1) DEFAULT 0, 
    password VARCHAR(100), 
    date_registered DATETIME NOT NULL)
```

**message_table** SQL Query

```
CREATE TABLE message_table (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    company_name VARCHAR(255) NOT NULL, 
    company_name VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    cep VARCHAR(30) NOT NULL, 
    telephone VARCHAR(30) NOT NULL, 
    address TEXT NOT NULL, subject VARCHAR(100) NOT NULL, 
    date_created DATETIME NOT NULL, utext_id VARCHAR(100) NOT NULL UNIQUE, 
    is_read TINYINT(1) DEFAULT 0, 
    is_hidden TINYINT(1) DEFAULT 0
)
```

You are also required to create a user in order to access: `http://localhost/admin/login`. Please note that the password is hashed. Therefore you need to use the function `echo password_hash($password, PASSWORD_DEFAULT)` in order to get a hashed version of your `$password`. 

If there any questions, feel free to send me a message.
