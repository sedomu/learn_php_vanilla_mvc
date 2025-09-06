--TABLE CREATION
--using default parameters from SQLite, FOREIGN KEYS are not supported by default

CREATE TABLE comments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    album_id INTEGER,
    user_id INTEGER,
    comment TEXT
);

--INSERTING FIRST COMMENT

INSERT INTO comments (
    album_id,
    user_id,
    comment
) VALUES (
    30,
    1,
    'This is my first comment, handcoded into the SQLite table'
);