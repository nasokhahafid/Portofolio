<p align="center">
  <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="180" alt="Laravel Logo"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://tailwindcss.com" target="_blank"><img src="https://raw.githubusercontent.com/tailwindlabs/tailwindcss/master/.github/logo-light.svg" width="180" alt="Tailwind CSS Logo"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://vitejs.dev" target="_blank"><img src="https://vitejs.dev/logo.svg" width="50" alt="Vite Logo"></a>
</p>

# Professional Portfolio Website

A modern, high-performance portfolio website designed to showcase professional skills, experience, and certifications. Built with the robust **Laravel 9** framework, styled with utility-first **Tailwind CSS 3**, and optimized with next-generation frontend tooling **Vite**.

## 🚀 Features

-   **Dynamic Hero Section**: Engaging introduction with smooth fade animations.
-   **About Me**: Comprehensive bio section to highlight personal background.
-   **Professional Experience**: Interactive timeline displaying career history.
-   **Skill Set Showcase**: Visual representation of technical proficiencies.
-   **Certifications Gallery**: Dedicated section for awards and certificates.
-   **Functional Contact Form**: Ready-to-use contact backend integration.
-   **Responsive & Mobile-First**: Flawless experience across all devices (Desktop, Tablet, Mobile).
-   **Dark Mode Support**: Elegant dark theme for modern aesthetics.
-   **Smooth Animations**: Integrated AOS (Animate On Scroll) for immersive scrolling.

## 🛠 Tech Stack

-   **Backend**: Laravel 9 (PHP 8.2+) - Robust MVC Framework.
-   **Frontend**: Blade Templates - Powerful templating engine.
-   **Styling**: Tailwind CSS 3 - Utility-first CSS framework.
-   **Build Tool**: Vite - Next Generation Frontend Tooling.
-   **Database**: MySQL - Reliable relational database.

## ⚙️ Installation & Setup

Follow these steps to set up the project locally:

1.  **Clone the Repository**

    ```bash
    git clone https://github.com/nasokhahafid/Portofolio.git
    cd Portofolio
    ```

2.  **Install PHP Dependencies**

    ```bash
    composer install
    ```

3.  **Install Node.js Dependencies**

    ```bash
    npm install
    ```

4.  **Environment Configuration**
    Copy the example environment file and configure your database settings:

    ```bash
    cp .env.example .env
    ```

    _Update `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in the `.env` file._

5.  **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

6.  **Run Database Migrations**

    ```bash
    php artisan migrate --force
    ```

7.  **Build Frontend Assets**

    ```bash
    npm run build
    ```

    _(Or usage `npm run dev` for hot-module replacement during development)_

8.  **Serve Application**
    ```bash
    php artisan serve
    ```

The application will be accessible at `http://127.0.0.1:8000`.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
