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