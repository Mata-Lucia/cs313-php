CREATE TABLE Book (
    bookID SERIAL PRIMARY KEY
,   authorID INTEGER REFERENCES Author(authorID)
,   title VARCHAR(100) NOT NULL
,   genre VARCHAR(100) NOT NULL
,   reading_level INTEGER NOT NULL
,   check_out   DATE NOT NULL
,   due_date    DATE NOT NULL
,   already_read BOOLEAN NOT NULL
);

CREATE TABLE Author (
    authorID SERIAL PRIMARY KEY
,   authorName VARCHAR(100) NOT NULL
);

CREATE TABLE Review (
    reviewID SERIAL PRIMARY KEY 
,   bookID INTEGER REFERENCES Book(bookID)
,   review_content VARCHAR(255) NOT NULL
);

INSERT INTO Author (authorName) VALUES ('Roald Dahl');
INSERT INTO Author (authorName) VALUES ('Louisa May Alcott');
INSERT INTO Author (authorName) VALUES ('Eleanor Estes');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (1, 'Charlie and the Chocolate Factory', 'Fiction', '2', '2019-10-19', '2019-10-31', 'false');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (2, 'Little Women', 'Fiction', '4', '2019-10-19', '2019-10-25', 'false');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (3, 'The Hundred Dresses', 'Fiction', '3', '2019-10-19', '2019-10-27', 'false');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (1, 'Matilda', 'Fiction', '2', '2019-10-19', '2019-10-27', 'false');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (1, 'James and The Giant Peach', 'Fiction', '2', '2019-10-3', '2019-10-15', 'true');

INSERT INTO Book (authorID, title, genre, reading_level, check_out, due_date, already_read ) 
    VALUES (3, 'The Moffats', 'Fiction', '3', '2019-10-3', '2019-10-12', 'true');

INSERT INTO Review (bookID, review_content) VALUES (5, 'Such a fun book!');

INSERT INTO Review (bookID, review_content) VALUES (6, 'Loved this book!');

SELECT title, authorname, genre, reading_level, check_out, due_date FROM Book AS b
JOIN Author AS a 
ON b.authorID = a.authorID
WHERE already_read = 'false';

SELECT title, authorname, genre, reading_level, check_out, due_date, review_content FROM Book AS b 
JOIN Review AS r ON b.bookID = r.bookID
JOIN Author AS a ON b.authorID = a.authorID
WHERE already_read = 'true';

UPDATE Book SET already_read = 'true' WHERE bookID = 2;

DELETE FROM Book WHERE bookID = 2;

