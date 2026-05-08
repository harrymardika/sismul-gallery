<div align="center">
  <h1 align="center">Gallery Portfolio</h1>
  <p align="center">
    A fully-functional Portfolio & Image Gallery web application built with CodeIgniter 4 and DDEV.
    <br />
    <br />
  </p>
</div>

## 📖 About The Project

The **Gallery Portfolio** is a lightweight, fast, and feature-rich web application designed to help users upload, manage, and display portfolio items. Built on top of the CodeIgniter 4 framework, this project serves as both a practical gallery tool and a solid foundation for learning modern PHP web development.

It comes pre-configured with **DDEV**, meaning you can spin up a fully containerized local development environment in seconds without having to manually configure web servers, PHP extensions, or database servers.

### ✨ Key Features

- **Full Gallery CRUD**: Meaningful interface to Add, View, Update, and Delete portfolio images.
- **Image Upload Management**: Secure handling of file uploads through CodeIgniter's file system, moving items to the `public/uploads` folder.
- **Containerized Environment**: Out-of-the-box DDEV support for zero-friction local setups.
- **Modern MVC Architecture**: Follows best practices using CodeIgniter 4's Model-View-Controller pattern.

### 🛠️ Built With

- [CodeIgniter 4](https://codeigniter.com/) - PHP Full-Stack Framework
- [DDEV](https://ddev.com/) - Docker-based local development environment
- [PHP 8.2+](https://www.php.net/) - Core programming language

* [SQLite3](https://www.sqlite.org/) - Lightweight file-based relational database

---

## 🚀 Getting Started

Follow these instructions to get a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Before you begin, ensure you have the following installed on your system:

- [Docker Desktop](https://www.docker.com/products/docker-desktop/) (or a compatible Docker provider) running.
- [DDEV](https://ddev.com/get-started/) installed globally.

### Installation & Setup

1. **Clone the repository** (if you haven't already):

   ```bash
   git clone <your-repository-url>
   cd gallery-portfolio
   ```

2. **Start the DDEV environment:**
   This command provisions the web server, PHP, and database containers.

   ```bash
   ddev start
   ```

3. **Install Composer Dependencies:**
   Install required PHP packages directly inside the DDEV container.

   ```bash
   ddev composer install
   ```

4. **Environment Configuration:**
   Copy the example environment file to create your local `.env`.

   ```bash
   cp env .env
   ```

   **Important Settings in `.env`:**
   Open the `.env` file and verify/update the following:

   ```env
   CI_ENVIRONMENT = development
   app.baseURL = 'https://gallery-portfolio.ddev.site/'
   ```

   _Note: This project is pre-configured to use **SQLite3** as its database engine in `app/Config/Database.php`. The database file is located at `database/database.sqlite`, so you do not need to configure complex database credentials._

5. **Run Database Migrations:**
   Set up the database tables required for the gallery.

   ```bash
   ddev exec php spark migrate
   ```

6. **View the Application:**
   Once everything is set up, DDEV will give you a local URL. Usually, it is:
   [https://gallery-portfolio.ddev.site](https://gallery-portfolio.ddev.site)

---

## 📂 Directory Structure Highlights

Understanding the project structure is crucial for further development:

```text
gallery-portfolio/
├── app/
│   ├── Config/          # Configuration files (Routing, Database, etc.)
│   ├── Controllers/     # Application logic (e.g., Gallery.php, Home.php)
│   ├── Database/        # Migrations and Seeds (e.g., Gallery table setup)
│   ├── Models/          # Database interaction logic (e.g., GalleryModel.php)
│   └── Views/           # HTML templates (e.g., gallery/index, create, layout/template)
├── public/              # Document root (index.php, CSS, JS)
│   └── uploads/         # Uploaded gallery images are stored here
├── writable/            # Cache, logs, and session data
├── .ddev/               # DDEV local environment configuration
└── env                  # Template environment file
```

---

## ⌨️ Useful Commands

Here are some helpful commands when working with this repository via DDEV:

| Command                    | Description                                        |
| -------------------------- | -------------------------------------------------- |
| `ddev start`               | Starts the local development environment.          |
| `ddev stop`                | Stops the environment without destroying data.     |
| `ddev exec php spark list` | Lists all available CodeIgniter 4 spark commands.  |
| `ddev describe`            | Shows database credentials and project URLs.       |
| `ddev ssh`                 | Opens a terminal session inside the web container. |
