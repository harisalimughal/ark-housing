# Ark Housing Group — Frontend

This project uses a modern Front Controller architecture with a Smart Router to serve clean PHP pages.

## How to Run Locally

This project requires PHP (7.4+) to be installed on your system.

1.  **Open your terminal** (PowerShell, Command Prompt, or Bash).
2.  **Navigate into the `frontend` directory**:
    ```bash
    cd frontend
    ```
3.  **Start the PHP built-in web server with the router**:
    ```bash
    php -S localhost:8000 index.php
    ```
4.  **Open your web browser** and navigate to: [http://localhost:8000](http://localhost:8000)

---

## Project Structure

- `frontend/`
  - `index.php`          (Smart Router / Front Controller)
  - `src/`
    - `pages/`           (Page templates: `home.php`, `about.php`, ...)
    - `includes/`        (Global components: `header.php`, `footer.php`, `hero.php`)
  - `public/assets/`     (Static assets: CSS, Images, JS)

## Navigation & Routing

The project uses a **Smart Router**. You don't need to create files in the root for new pages. Simply add a new PHP file in `src/pages/` and it will automatically be accessible via a clean URL:

- `src/pages/about.php` → `http://localhost:8000/about`
- `src/pages/services.php` → `http://localhost:8000/services`

---

## Troubleshooting

- **404 Errors**: Ensure you started the server with `index.php` at the end of the command.
- **Port in Use**: If port 8000 is taken, use `php -S localhost:8080 index.php`.
