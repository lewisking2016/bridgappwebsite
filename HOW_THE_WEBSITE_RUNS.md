# How BridgApp Africa Runs

This document explains how the website is structured, how it starts, and how the live contact flow works.

## 1. Project Layout

The project is split into two main areas:

- `frontend/` for pages, styles, scripts, and images
- `backend/` for database configuration, form processing, and SQL setup

The root [`index.php`](/C:/Users/lewis/Desktop/bridgappwebsite/index.php) only redirects visitors into the frontend entrypoint.

## 2. Request Flow

When a visitor opens the site:

1. The root [`index.php`](/C:/Users/lewis/Desktop/bridgappwebsite/index.php) redirects to [`frontend/index.php`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/index.php).
2. The frontend page loads [`frontend/header.php`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/header.php), which renders the shared `<head>`, navigation, and global page shell.
3. Each page includes shared styling from [`frontend/assets/css/style.css`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/assets/css/style.css).
4. Shared interaction logic is loaded from [`frontend/assets/js/main.js`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/assets/js/main.js) at the bottom of [`frontend/footer.php`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/footer.php).
5. Pages such as About, Services, Contact, and Become an Agent reuse the same header/footer system so the site stays consistent.

## 3. Frontend Behavior

The frontend handles:

- Navigation and active-page highlighting
- Mobile menu toggling
- Scroll-based reveal animations
- Parallax and settle effects
- Service-card hover motion
- Contact form submission feedback

The site design is controlled through CSS variables in [`frontend/assets/css/style.css`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/assets/css/style.css). The main visual system uses:

- white and slate surfaces
- blue and green brand accents
- soft shadows
- glass-like header and overlay panels

## 4. Contact Form Flow

The contact form lives in [`frontend/contact.php`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/contact.php).

When a user submits the form:

1. JavaScript intercepts the submit action in [`frontend/assets/js/main.js`](/C:/Users/lewis/Desktop/bridgappwebsite/frontend/assets/js/main.js).
2. The form is sent with `fetch()` to [`backend/contact_submit.php`](/C:/Users/lewis/Desktop/bridgappwebsite/backend/contact_submit.php).
3. The backend validates the request and checks the submitted fields.
4. If the database is available, the inquiry is stored in MySQL.
5. If the database is offline or unavailable, the inquiry is written to `backend/logs/inquiries_fallback.log`.
6. The frontend always receives a success response so the user experience stays smooth.

## 5. Backend Flow

The backend is intentionally small and focused:

- [`backend/config.php`](/C:/Users/lewis/Desktop/bridgappwebsite/backend/config.php) defines the database connection helper
- [`backend/contact_submit.php`](/C:/Users/lewis/Desktop/bridgappwebsite/backend/contact_submit.php) validates and stores contact form submissions
- [`backend/db_setup.sql`](/C:/Users/lewis/Desktop/bridgappwebsite/backend/db_setup.sql) creates the `inquiries` table

The database table stores:

- `id`
- `name`
- `email`
- `service_type`
- `message`
- `created_at`

## 6. Local Development

To run the site locally:

1. Open a terminal in `C:\Users\lewis\Desktop\bridgappwebsite`
2. Start PHP's built-in server:

```powershell
php -S 127.0.0.1:8000 -t .
```

3. Open `http://127.0.0.1:8000/` in your browser

If you are using XAMPP, PHP is already available at `C:\xampp\php\php.exe` in this workspace.

## 7. Sharing the Site with ngrok

To share a public review link:

1. Run the local PHP server on port `8000`
2. Start ngrok against that port:

```powershell
ngrok http 8000
```

3. Copy the public `https://...ngrok-free.app` URL and share it

If ngrok has not been configured on the machine yet, it may require an authtoken first:

```powershell
ngrok config add-authtoken "YOUR_AUTHTOKEN"
```

## 8. Operational Notes

- The site uses relative paths so it can run in a local folder or on shared hosting with the same directory structure.
- The contact form has a fallback log so inquiries are not lost if MySQL is down.
- PHP syntax and frontend script checks should be run after changes.

## 9. Summary

The website runs as a simple PHP application:

- root redirect
- shared frontend shell
- CSS/JS-driven interactions
- backend form submission with database fallback

This keeps the site lightweight, easy to deploy, and safe to review in environments where the database is not yet configured.
