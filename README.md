# Article Management System with Drupal & Docker Compose

This project is a **basic Article Management System** built using **Drupal 10** and **Docker Compose** for local development.

## 📌 Features
- **Drupal 10** with **Docker Compose**
- **MySQL** as the database
- **phpMyAdmin** for database management
- **Custom Content Type: Article**
- **Custom Module: article_stats**
- **Custom Theming and Views**

## 📋 Prerequisites
Make sure you have installed:
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Git](https://git-scm.com/downloads)

## 🚀 How to Use
### 1. Clone the Repository
```sh
git clone https://github.com/adistianherlambang/Relief-Application-Drupal-Test.git
cd drupal-article-management
```

### 2. Start Docker Compose
```sh
docker-compose up -d
```
Once all containers are running, open **http://localhost:8080** to access Drupal.

## 📜 Content Type: Article
This project defines a custom **Article** content type with the following fields:
- **Title** (Text)
- **Body** (Text with Summary)
- **Image** (Image field)
- **Tags** (Taxonomy reference)
- **Author** (User reference)

## 🛠 Custom Module: article_stats
A custom module that:
- Provides a block showing the total number of articles authored by the current user.
- Displays only on the user profile page.

## 🎨 Theming & Views
- Uses a **custom theme** or subtheme.
- Lists articles as **grid cards** (Image, Title, Summary).
- Provides a **View** listing all published articles:
  - **Filterable by Tag**
  - **Sortable by Created Date**
  - **AJAX-enabled**

## 🛠 Troubleshooting
- **Check Docker logs**
  ```sh
  docker-compose logs -f
  ```
- **Access the Drupal container**
  ```sh
  docker-compose exec drupal bash
  ```
- **Remove and recreate containers** (without deleting database data)
  ```sh
  docker-compose down && docker-compose up -d
  ```

## 📄 License
This project is licensed under the **MIT** license. You are free to use it as needed.

---

**Happy Coding! 🚀**

