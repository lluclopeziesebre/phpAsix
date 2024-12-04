<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projecte ASIX</title>
    <style>
        /* CSS */
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

        .content img {
            width: 300px;
            margin-top: 20px;
            border-radius: 10px;
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
    <h3>ASIX M9 - PHP Project ツ</h3>
</header>

<nav>
    <a href="/home">Home</a>
    <a href="/books">Books</a>
    <a href="/hardwarehacking">Hardware Hacking</a>
</nav>

<section class="content">
    <h2>About the project</h2>
    <p style="text-align: justify;"> <strong>Hello everyone!</strong> <br>
        My name is Lucas López, and welcome to my landing page. This is my
        very first project for the M9 - Web Applications subject. The goal
        of this project is to showcase my webpage built using PHP and
        the MVC design pattern. If you're curious about MVC, I recommend
        checking out this great resource:
        <a href="https://www.geeksforgeeks.org/mvc-design-pattern/"
           target="_blank">GeeksForGeeks - MVC Design Pattern.</a></p>

    <p style="text-align: justify;">This is the main page, serving as a brief
        introduction. Feel free to explore the navigation bar at the top
        of the page! This project includes three different pages, all
        featuring CRUD functionality. That means you can create, read,
        update, and delete information. Pretty cool, right?</p>
    <img src="https://media.giphy.com/media/LmNwrBhejkK9EFP504/giphy.gif"
         alt="Excited GIF">
</section>

<footer>
    <p>&copy; 2024 | Developed by <strong>Lucas López - 2 ASIX</strong></p>
</footer>

</body>
</html>
