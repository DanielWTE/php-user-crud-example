## Tools
- [XAMPP](https://www.apachefriends.org/index.html)
- [Visual Studio Code](https://code.visualstudio.com/)
- [MySQL Workbench](https://www.mysql.com/products/workbench/)

## Description
This repository contains the source code for a simple PHP application that connects to a MySQL database. The application allows users to create, read, update, and delete users from a database. (CRUD)

## SQL Statements

- Create User
```sql
CREATE USER 'username'@'%' IDENTIFIED BY 'password';
```

- Grant Privileges
```sql
GRANT ALL PRIVILEGES ON *.* TO 'username'@'%';
```

- Create Database
```sql
CREATE DATABASE 'database_name';
```

- Create Table
```sql
CREATE TABLE 'table_name' (
    'column_name' 'data_type' 'constraint',
    'column_name' 'data_type' 'constraint',
    'column_name' 'data_type' 'constraint',
    ...
);
```

- Insert Data
```sql
INSERT INTO 'table_name' ('column_name', 'column_name', 'column_name', ...)
VALUES ('value', 'value', 'value', ...);
```

- Select Data
```sql
SELECT 'column_name', 'column_name', 'column_name', ...
FROM 'table_name';
```

- Update Data
```sql
UPDATE 'table_name'
SET 'column_name' = 'value', 'column_name' = 'value', 'column_name' = 'value', ...
WHERE 'condition';
```

- Delete Data
```sql
DELETE FROM 'table_name'
WHERE 'condition';
```

- Drop Table
```sql
DROP TABLE 'table_name';
```

- Drop Database
```sql
DROP DATABASE 'database_name';
```

- Inner Join
```sql
SELECT 'column_name', 'column_name', 'column_name', ...
FROM 'table_name'
INNER JOIN 'table_name' ON 'table_name'.'column_name' = 'table_name'.'column_name';
```