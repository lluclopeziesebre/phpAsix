CREATE TABLE books (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(100) NOT NULL,
                       author VARCHAR(100) NOT NULL,
                       releaseYear INT
);

CREATE TABLE hardwarehacking (
                                 id INT AUTO_INCREMENT PRIMARY KEY,
                                 name VARCHAR(30) NOT NULL,
                                 used_for VARCHAR(50) NOT NULL,
                                 price DECIMAL(10, 2)
);

INSERT INTO hardwarehacking (name, used_for, price)
VALUES
    ('Rubber Ducky', 'Keystroke Injection', 49.99),
    ('WiFi Pineapple', 'Network Analysis', 99.99),
    ('USB Killer', 'USB Testing', 39.99),
    ('LAN Turtle', 'Network Exploitation', 79.99),
    ('HackRF One', 'RF Analysis', 299.99);

INSERT INTO books (name, author, releaseYear)
VALUES
    ('Attack on Titan', 'Hajime Isayama', 2009),
    ('One Piece', 'Eiichiro Oda', 1997),
    ('Vinland Saga', 'Makoto Yukimura', 2005),
    ('Berserk', 'Kentaro Miura', 1989),
    ('Steel Ball Run', 'Hirohiko Araki', 2004);
