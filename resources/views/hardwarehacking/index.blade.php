<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware Hacking - Project ASIX</title>
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

        a.newitem {
            display: inline-block;
            background-color: #4A628A;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
            margin: 1%;
        }

        a.newitem:hover {
            background-color: #7a8cac;
            color: var(--background);
        }

        a.deletebutton {
            display: inline-block;
            background-color: #b83636;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
            margin: 3%;
        }

        a.deletebutton:hover {
            background-color: #d18989;
            color: var(--background);
        }

        footer {
            background-color: var(--secondary);
            color: white;
            text-align: center;
            padding: 1rem 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Responsive */
        @media screen and (max-width: 768px) {
            nav {flex-direction: row; text-align: center;}
            nav a {padding: 0.8rem;}
            .content {width: 90%; font-size: 0.8rem;}
            .content img {width: 80%;}
            footer {font-size: 0.9rem;}
        }

        @media screen and (max-width: 480px) {
            header h3 {font-size: 1.2rem;}
            nav a {font-size: 0.9rem;}
            .content {padding: 0.5rem;}
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
    <h3>Hardware Hacking Items:</h3>
    <div>
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Used For</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?=$item->id;?></td>
                <td><?=$item->name;?></td>
                <td><?=$item->used_for;?></td>
                <td><?=$item->price;?></td>
                <td>
                    <a href="/hardwarehacking/edit/<?=$item->id;?>" class="button">Edit</a>
                    <a href="/hardwarehacking/confirm-delete/<?=$item->id;?>" class="deletebutton";>Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/hardwarehacking/create" class="newitem">Add a new item!</a>
    </div>

</section>

<footer>
    <p>&copy; 2024 | Developed by <strong>Lucas López - 2 ASIX</strong></p>
</footer>

</body>
</html>
