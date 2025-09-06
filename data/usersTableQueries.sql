--TABLE CREATION

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_name VARCHAR,
    password VARCHAR
);

--INSERTING FIRST USER

INSERT INTO users (
    user_name,
    password
) VALUES (
    'sebaseg',
    'sebaseg'
);