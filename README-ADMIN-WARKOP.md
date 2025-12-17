# Admin Warkop — CodeIgniter Packaging

This folder contains a CodeIgniter 4 project repackaging of the Admin Warkop static UI.

Quick start
- Requirements: PHP (8.0+), Composer
- From the project root run (or use XAMPP):

  cd ci4
  php spark serve --port 8080

Open http://localhost:8080 in your browser.

What I changed
- Copied static assets from `src/assets/` -> `ci4/public/assets/`
- Converted `src/*.html` -> `ci4/app/Views/pages/*.php`
- Added `App\Controllers\Pages` to render pages
- Added `ci4/app/Views/layouts/main.php` as a common layout and refactored pages to use it

Notes & next steps
- A few pages (`signin`, `signup`, `404`, `500`) were skipped by the automated refactor — they can be manually updated if needed.
- Some pages still include page-specific `id` attributes that duplicate layout ids (`mainContent`) — consider normalizing IDs if you plan to add dynamic JS.

If you want, I can finish the remaining cleanup (normalize ids, move inline scripts to `pages/*.php` script sections, and add a proper README at the repo root).
