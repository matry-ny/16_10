<?php

function createMigration(string $name): void
{
    initMigrations();
}

function initMigrations()
{
    $connection = getDbConnection();
    $result = mysqli_query( $connection, 'SHOW TABLES LIKE "migrations"');
    $tableExists = count(mysqli_fetch_all($result)) > 0;
    if ($tableExists) {
        return;
    }

    $query = <<<SQL
CREATE TABLE `migrations` (
  id int(11) auto_increment primary key, 
  name varchar(255), 
  executed_at TIMESTAMP DEFAULT now()
)
SQL;

    mysqli_query($connection, $query);
}
