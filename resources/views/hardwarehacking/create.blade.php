<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add item - Project ASIX</title>
    <style>
        /* Paleta de colors */
        :root {
            --primary: #2a9d8f; /* Verd blavós principal */
            --secondary: #264653; /* Blau fosc */
            --accent: #a1dac4; /* Groc accentuat */
            --background: #DFF2EB; /* Fons clar */
            --text-color: #4A628A; /* Text genèric */
            --table-header: #1f7292; /* Fons per als encapçalaments de la taula */
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
            padding: 28px;
            font-size: 19px;
            text-align: center;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
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
            text-align: center;
            max-width: 80%;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
            text-align: center;
        }

        table th, table td {
            border: 1px solid var(--secondary);
            text-align: center;
            padding: 10px;
        }

        table th {
            background-color: var(--table-header);
            color: var(--background);
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a.button {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
            margin-bottom: 20px;
        }

        a.button:hover {
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

        /* Encapsulació per TailwindCSS */
        .tailwind-container {
            all: unset;
            display: block;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            nav {flex-direction: row; text-align: center;}
            nav a {padding: 0.8rem;}
            .content {width: 90%; font-size: 0.8rem;}
            .content img {width: 80%;}
            footer {font-size: 0.9rem; position: absolute; bottom: 0; width: 100%;}
        }

        @media screen and (max-width: 480px) {
            header h3 {font-size: 1.2rem;}
            nav a {font-size: 0.9rem;}
            .content {padding: 0.5rem;}
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header>
    <p>ASIX M9 - Hardware Hacking ツ</p>
</header>

<nav>
    <a href="/home">Home</a>
    <a href="/books">Books</a>
    <a href="/hardwarehacking">Hardware Hacking</a>
</nav>

<section class="content">
    <h3 style="text-align: center; margin-bottom: 2%; font-weight: bold;">Add item:</h3>
    <div class="tailwind-container">
        <form action="/hardwarehacking/store" method="POST" class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="used_for" class="block text-sm font-medium text-gray-700">Used for</label>
                <input type="text" name="used_for" id="used_for" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Price (€)</label>
                <input type="number" name="price" id="price"
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md"
                       required min="0" step="0.01" inputmode="decimal" placeholder="0.00">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add</button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2024 | Developed by <strong>Lucas López - 2 ASIX</strong></p>
</footer>
</body>
</html>
