<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $user;
    private $password;
    private $dbname;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $connection;

    public function __construct(string $host, string $user, string $password, string $dbname)
    {
        // TODO: Set any user and password information
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    public function connect(): PDO
    {
        // TODO: make the connection to the database
        $dsn = 'mysql:host=' .$this->host .';dbname=' .$this->dbname;
        $this->connection = new PDO($dsn, $this->user, $this->password); // create new PDO connection with the nex parameters : mysql:host, db name, and user name and passwrod (all data are from config.php)

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //to set the default mode of returning data (ASSOC - Associative array)

        return $this->connection; // to return connection with r=the DB
    }
}