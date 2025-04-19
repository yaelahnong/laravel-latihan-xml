# 📰 Laravel RSS Feed Reader

A simple Laravel application to read and display news from an RSS feed (e.g. Suara.com - Otomotif).

---

## 📌 Features

- Parses local RSS feed from XML file (`berita.xml`)
- Displays a list of news items: title, link, publication date, description, and image
- Built using Laravel 12 and `orchestra/parser` for XML parsing

---

## 📂 Project Structure

- `storage/app/berita.xml`: The RSS XML file
- `app/Http/Controllers/DataController.php`: Logic to parse and serve RSS data
- `routes/web.php`: Defines a route to display the news list
- `resources/views/berita/index.blade.php`: (Optional) Blade template to render the feed

---

## 🧩 Dependencies

Defined in `composer.json`:

```json
"require": {
    "php": "^8.2",
    "laravel/framework": "^12.0",
    "orchestra/parser": "^10.0"
}
