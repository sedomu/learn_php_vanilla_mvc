# Learning Project - PHP Vanilla Blog

## Summary
This project is a simple blog built in pure PHP (no frameworks, no Composer).  
It uses MVC architecture, an SQLite database, and implements basic CRUD operations as a learning exercise.  
The content is based on the Beastie Boys’ discography, used as sample data.

---

## Description
This blog is a playground to learn and practice **vanilla PHP** concepts:  
- Object-Oriented Programming (OOP)  
- Model-View-Controller (MVC) architecture  
- Database queries with SQL (SQLite)  
- Authentication and user management  
- Full CRUD operations  

### Purposes
- Learn PHP without frameworks ("vanilla" PHP)  
- Practice OOP and design patterns  
- Work with a relational database (SQLite)  
- Build and query a database with SQL  
- Implement full CRUD features in a real project  

---

## Live Demo

A live version of this blog is hosted at: [https://sebaseg.42web.io/](https://sebaseg.42web.io/)

You can try all the features there, including:  
- Creating an account with a default profile picture  
- Logging in and posting comments  
- Deleting your own comments  
- ~~Updating your profile and uploading a custom `.jpg` profile image~~ ⚠️  _(not working on the deployed version yet)_

---

## Project structure

```
/controllers     # Application controllers (Album, User, etc.)
/models          # Database managers and entities (User, Comment, Album)
/views           # PHP templates with Bulma styling
/assets          # Static files (CSS, JS, images, default profile picture)
index.php        # Front controller
```

---

## Technologies
- **Backend:** PHP 8 (vanilla, no framework)  
- **Database:** SQLite (file-based, no server needed)  
- **Frontend:** [Bulma CSS](https://bulma.io/)  
- **Authentication:** PHP sessions, password hashing with `password_hash()` / `password_verify()`  

---

## Installation
Requirements: PHP 8+ must be installed locally.  
The project embeds its SQLite database, so no additional setup is required.

Clone the project and simply run:

```bash
php -S localhost:8000
```

Then visit the site in your browser at [http://localhost:8000](http://localhost:8000).

---

## CRUD operations

* **Create**

  * A visitor can create an account with a username, a password, and a profile picture (a default image is assigned at registration)
  * A connected user can post a comment on an album page

* **Read**

  * Albums are read from the SQLite database
  * Users and comments are also retrieved from the database

* **Update**

  * A connected user can update their profile information (name, password, profile picture)
  * Profile picture update supports a real `.jpg` upload

* **Delete**

  * A connected user can delete comments they have previously published

---

## Features

* Authentication system (register, login, logout)
* Profile management (username, password, profile picture)

  * Default picture is set on registration
  * Users can upload their own `.jpg` as profile image
* Albums listing and detail pages
* Comment system (add and delete, with user permissions)
* Session-based login state

---

## Known limitations

This is a **learning project**, so some production-ready features are not implemented:

* No CSRF protection
* Only `.jpg` images supported for profile picture upload
* Comments cannot be edited (only added or deleted)
* Minimal input validation (basic PHP filters and `htmlspecialchars`)
* Missing feedbacks to the visitor to get a satisfactory UX

---

## Learning goals

This project was built to practice:

* Writing PHP without frameworks or Composer
* Designing an application with MVC
* Structuring code with OOP (entities, managers, controllers)
* Writing SQL queries in PHP with PDO
* Handling authentication and user permissions
* Implementing file uploads securely