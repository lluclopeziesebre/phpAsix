<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete book - Project ASIX</title>
    <style>
        /* Paleta de colors */
        :root {
            --primary: #2a9d8f; /* Verd blavós principal */
            --secondary: #264653; /* Blau fosc */
            --accent: #a1dac4; /* Groc accentuat */
            --background: #DFF2EB; /* Fons clar */
            --text-color: #4A628A; /* Text genèric */
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: var(--background);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background-color: var(--secondary);
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background: var(--primary);
            padding: 0.5rem 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            font-weight: bold;
            position: relative;
            transition: 0.5s;
            cursor: pointer;
        }

        nav a:hover {
            background-color: var(--accent);
            color: var(--secondary);
            border-radius: 5px;
            transform: translateY(-5px);
        }

        .content {
            padding: 2rem;
            width: 70%;
            margin: 0 auto;
            text-align: center;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .content form {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        button, a {
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover, a:hover {
            background-color: var(--accent);
            color: var(--secondary);
        }

        footer {
            background-color: var(--secondary);
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<header>
    <h3>ASIX M9 - PHP Project ツ</h3>
</header>

<nav>
    <a href="/home">Home</a>
    <a href="/books">Books</a>
    <a href="/hardwarehacking">Hardware Hacking</a>
</nav>

<section class="content">
    <h2>Delete book</h2>
    <p>Are you sure you want to delete the book <strong><?= $book->name ?></strong>?</p>
    <form action="/books/destroy/<?= $book->id ?>" method="POST">
        <button type="submit">Delete</button>
        <a href="/books">Cancel</a>
    </form>
    <img style="margin: 7%;"
         src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExOWNwaHh3MHJhOWF1ZHFnMjV5MGgybDE4ZnI0djllZzM4MXpnMGVtNyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/FO2ALAo2bwU1Vq45bJ/giphy.gif"
         alt="Excited GIF">
</section>

<footer>
    <p>&copy; 2024 | Developed by <strong>Lucas López - 2 ASIX</strong></p>
</footer>
</body>
</html>
