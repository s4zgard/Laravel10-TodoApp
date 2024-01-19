<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Task Management App

This is a simple task management application built with Laravel.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Routes](#routes)
- [Contributing](#contributing)
- [License](#license)

## Overview

This application allows users to manage tasks, including creating, editing, and deleting tasks. It also provides a toggle functionality to mark tasks as completed or not completed.

## Features

- View a list of tasks
- Create a new task
- Edit an existing task
- View details of a specific task
- Delete a task
- Mark a task as completed or not completed

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/s4zgard/Laravel10-TodoApp.git
2. Install dependencies: 
   ```bash
   composer install
3. Create a copy of the .env.example file and rename it to .env. Update the database connection settings:
   ```bash
   cp .env.example .env
4. Generate the application key:
   ```bash
   php artisan key:generate
5. Run the migration (You can add --seed at the end to generate random 20 tasks)
   ```bash
   php artisan migrate
6. Run the server
   ```bash
   php artisan serve

   #Visit http://127.0.0.1:8000 in your browser.

## Usage

    Navigate to the application homepage.
    View, create, edit, and delete tasks as needed.
    Mark tasks as completed or not completed using the provided toggle functionality.

## Routes

    / - Redirects to the task index page.
    /task - Displays a paginated list of tasks.
    /task/create - Displays the task creation form.
    /task/{task}/edit - Displays the task edit form for a specific task.
    /task/{task} - Displays the details of a specific task.
    /task/store - Handles the creation of a new task.
    /task/{task}/update - Handles the updating of an existing task.
    /task/{task}/delete - Handles the deletion of a task.
    /task/{task}/toggle - Handles toggling the completion status of a task.
