# 🚀 PHP Docker Project

A simple PHP website running inside a Docker container using the official **PHP + Apache** image.

## 📌 Features

* PHP 8.2
* Apache Web Server
* Dockerized Application
* Responsive HTML & CSS
* Easy to Run
* Beginner Friendly

---

## 📂 Project Structure

```text
php-project/
│── Dockerfile
│── index.php
│── about.php
│── contact.php
│── style.css
└── README.md
```

---

## 🐳 Docker Image

This project uses the official Docker image:

```dockerfile
FROM php:8.2-apache
```

---

## ⚙️ Build Docker Image

```bash
docker build -t php-project .
```

---

## ▶️ Run Docker Container

```bash
docker run -d -p 8080:80 --name php-container php-project
```

---

## 🌐 Open in Browser

```text
http://localhost:8080
```

---

## 📋 Useful Docker Commands

### Check Running Containers

```bash
docker ps
```

### Stop Container

```bash
docker stop php-container
```

### Start Container

```bash
docker start php-container
```

### Remove Container

```bash
docker rm php-container
```

### Remove Docker Image

```bash
docker rmi php-project
```

---

## 💻 Technologies Used

* PHP
* HTML5
* CSS3
* Apache
* Docker

---

## 🎯 Learning Objectives

This project demonstrates how to:

* Create a simple PHP website.
* Build a Docker image using a Dockerfile.
* Run a PHP application inside a Docker container.
* Expose the application on port 8080.
* Access the application through a web browser.

---

## 👨‍💻 Author

**Abdulrehman Jamil**

GitHub: https://github.com/Abdulrehman-Jamil-473
