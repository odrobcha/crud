<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {

    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        $sql = "SELECT * FROM crud.ponies";

        $result = $this->databaseManager->connection->query($sql)->fetchAll();  // get data form DB based on query
        var_dump($result);

        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}