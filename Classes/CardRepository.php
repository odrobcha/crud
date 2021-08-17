<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;
    public string $message = '';

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)

    {
        $this->databaseManager = $databaseManager;
        $this->foundPonies= [];
    }

    public function create($ponyName) : void
    {
        $data = [                                                                //data to be inserted into DB
            'name' => $ponyName,
        ];
        if($ponyName!=''){
            $sql = "INSERT INTO crud.ponies (name) VALUES (:name)";               // create qsl query (to insert data to DB)
            $this->databaseManager->connect()->prepare($sql)->execute($data);     // chaining 2 things: 1.prepare($sql) 2.execute($data) query with certain data = $data
            $_POST['pony-name'] = '';                                             // clear $_POST['pony-name']
            header("Refresh:0");                                         //refresh page automatically

        } else {
            $this->message = 'Pony name can not be empty string';

        }


    }

    // Get one
    public function find()
    {
        if(isset($_POST['findPony'])){
            if($_POST['findPony']!=''){
                $sql = "SELECT * FROM crud.ponies WHERE name LIKE '%" .$_POST['findPony'] ."%'";
                $result = $this->databaseManager->connect()->query($sql);  // get data form DB based on query
                return $result;
            }
            else {

                $this->message = 'Pony name can not be empty string';
            }

        }

    }

    // Get all
    public function get()
    {
        $sql = "SELECT * FROM crud.ponies";
        $result = $this->databaseManager->connect()->query($sql);  // get data form DB based on query
        return $result;
    }

    public function update()
    {

    }

    public function delete()
    {
        $checkedItems = $this->checkboxesAreEmpty('delete_pony');
            if(empty($checkedItems)){
            return;
        }
        foreach ($checkedItems as $checkedItem) {
            foreach ($checkedItem as $checkedId){
                $sql = "DELETE FROM crud.ponies WHERE `id`="  .(int)$checkedId;
                $this->databaseManager->connect()->query($sql);
            }

           header("Refresh:0");
        }

    }

    public function checkboxesAreEmpty($postName){
        $checkedItems = [];
        if(!empty($_POST[$postName])){
            $chosenItem=$_POST['delete_pony'];
            array_push($checkedItems, $chosenItem);
        }

        return $checkedItems;
    }


}