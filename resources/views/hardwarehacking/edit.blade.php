<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit item - Project ASIX</title>
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

        form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 15px;
            text-align: left;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input {
            width: 95%;
            padding: 10px;
            margin: 0 auto;
            border: 1px solid var(--primary);
            border-radius: 5px;
        }

        form button {
            background-color: var(--primary);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: 0.3s;
        }

        form button:hover {
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

        /* Responsive */
        @media screen and (max-width: 768px) {
            nav {flex-direction: row; text-align: center;}
            nav a {padding: 0.8rem;}
            .content {width: 90%; font-size: 0.8rem;}
            form {padding: 15px;}
            footer {position: relative; bottom: 0;}
        }

        @media screen and (max-width: 480px) {
            header h3 {font-size: 1.2rem;}
            nav a {font-size: 0.9rem;}
            .content {padding: 0.5rem;}
            footer {position: relative; bottom: 0;}

        }
    </style>
</head>
<body>
<header>
    <h3>ASIX M9 - Hardware Hacking ツ</h3>
</header>

<nav>
    <a href="/home">Home</a>
    <a href="/books">Books</a>
    <a href="/hardwarehacking">Hardware Hacking</a>
</nav>

<section class="content">
    <h3>Editing item: <?= $item->name ?></h3>
    <form action="/hardwarehacking/update/<?= $item->id ?>" method="POST">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $item->name ?>">
        </div>
        <div>
            <label for="used_for">Used For</label>
            <input type="text" name="used_for" id="used_for" value="<?= $item->used_for ?>">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" value="<?= $item->price ?>">
        </div>
        <button type="submit">Edit</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 | Developed by <strong>Lucas López - 2 ASIX</strong></p>
</footer>

</body>
</html>
