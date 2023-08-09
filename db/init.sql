CREATE TABLE cars (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    make VARCHAR(255),
    model VARCHAR(255),
    year INT
);

INSERT INTO cars (name, make, model, year) VALUES
    ('civic', 'honda', 'civic', 2022),
    ('accord', 'honda', 'accord', 2022);
