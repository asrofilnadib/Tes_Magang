## Skill Test Assignment Backend Developer at CTARSA Internship Program

### Description

Welcome to this repository! This repository has been developed as part of the skill test for the CTARSA Internship Program 2024 for the CRUD (Create, Read, Update, Delete) project and authentication system using either PHP Native or Laravel framework and RESTful API.

### Internship Test Objectives

1. **CRUD Development:**
   1. Implementation of CRUD operations for relevant entities (e.g., "Books," "Users," or other entities) using either PHP Native or Laravel framework. 
   2. Inclusion of basic functions such as adding, retrieving, updating, and deleting data.

2. **Authentication System:**
   1. Laravel Breeze is utilized as the foundation for authentication in this project.
   2. Utilization of Breeze features such as user registration, email verification, login, logout, and password reset.
   3. Every CRUD operation involves user authentication to ensure secure access and compliance with specified access rights.\

## CTARSA Backend Developer Internship Skill Test

### Project Requirements:
- Language: PHP Native or Framework (Codeigniter/Laravel)
- Database: MySQL
- Frontend: JavaScript, HTML, CSS Native or Framework

### Test: Creating a CMS (Content Management System) for content management containing:
1. Login (Admin and User)
2. Register 
3. List of Book Data 
4. Book Data List with filters based on Book Category 
5. Master Data Book Actions (Create, Read, Update, Delete, and Upload File)
6. Book Data Form includes: Book Title, Book Category (dropdown), Description, Quantity, Upload Book File (PDF), and Upload Book Cover (jpeg/jpg/png)
7. List of Book Category Data 
8. Master Data Category Book Actions (Create, Read, Update, Delete)
9. Book Category Data Form includes: Book Category Name 
10. Export Data (Excel/PDF) from Book Data 
11. Access Rights (Privilege) restricted to only open, view, edit, and delete the List of Book Data according to the data created by the user itself (except for admin)

## Installation Guide

1). Install Composer in your computer

2). Clone Repository on your computer

```git clone -b nusantara https://github.com/asrofilnadib/Test-Magang.git```

3). Run ```php artisan key:generate```

4). Change or duplicate file ```.env.example``` with name ```.env```

4). compile the assets with ```npm i && npm run dev``` after that run open a new terminal then type ```gulp copy```

5). install composer packages with ```composer install --no-interaction --no-ansi```
or update with ```composer update --no-interaction --no-ansi```

5). Run ```php artisan migrate --seed```

6). Run ```php artisan serve```

7). Open http://127.0.0.1:8000

