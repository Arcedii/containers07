<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ site_name }}</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <h1>{{ site_name }}</h1>
    </header>

    <main>
        <section class="articles">
            {% for article in articles %}
                <article>
                    <h2>{{ article.title }}</h2>
                    <p>{{ article.content }}</p>
                    <a href="article.php?id={{ article.id }}">Подробнее</a>
                </article>
            {% endfor %}
        </section>
    </main>

    <footer>
        <p>&copy; {{ current_year }} {{ site_name }}</p>
    </footer>
</body>
</html>
