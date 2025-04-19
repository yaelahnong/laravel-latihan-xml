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
```

---

## 🚀 Getting Started

Follow these steps to get the project up and running:

### 1. Clone the repository

```bash
git clone https://github.com/your-username/laravel-rss-reader.git
cd laravel-rss-reader
```

### 2. Install dependencies

```bash
composer install
```

### 3. Set up environment

```bash
cp .env.example .env
php artisan key:generate
```

> Make sure to configure your `.env` if needed, especially if using database or external services.

### 4. Place the RSS file

Put your `berita.xml` file inside:

```
storage/app/berita.xml
```

You can manually edit or update it with latest RSS content.

### 5. Run the development server

```bash
php artisan serve
```

Then open in browser:

```
http://localhost:8000/berita
```

---

## 🧠 Example Controller Method

```php
use Orchestra\Parser\Xml\Facade as XmlParser;

public function berita()
{
    $xml = XmlParser::load(storage_path('app/berita.xml'));
    $items = $xml->parse([
        'items' => ['uses' => 'channel.item[title,link,pubDate,description,enclosure::url]']
    ]);

    return view('berita.index', ['items' => $items['items']]);
}
```

---

## ✨ Future Improvements

- Fetch RSS feed from external URL automatically (e.g. suara.com)
- Add UI filters for date or title
- Display feed using TailwindCSS or Bootstrap
- Pagination for large feed

---

## 📄 License

MIT © 2025 – Developed for demo purposes.
