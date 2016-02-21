CREATE TABLE cache (
    id char(128) NOT NULL PRIMARY KEY,
    expire int(11),
    data BLOB
);
