<?php

require_once "DataHandler.php";

class ProductsLogic
{
    public function __construct()
    {
        $this->DataHandler = new DataHandler("localhost", "mysql", "eventplanner", "ilias", "12345");
    }

    public function __destruct()
    {
    }

    public function createContact($activiteit_naam, $activiteit_benodigdheden, $activiteit_beschrijving, $activiteit_vrijwilligers	, $event, $activiteit_datum, $activiteit_tijd)
    {
        try {
            //$id = NULL;
            $activiteit_naam = $_POST['activiteit_naam'];
            $activiteit_datum = $_POST['activiteit_datum'];
            $activiteit_tijd = $_POST['activiteit_tijd'];
            $activiteit_benodigdheden = $_POST['activiteit_benodigdheden'];
            $activiteit_beschrijving = $_POST['activiteit_beschrijving'];
            $activiteit_vrijwilligers = $_POST['activiteit_vrijwilligers'];
            $event = $_POST['event'];


            $sql = "INSERT INTO activiteiten(`id`,`activiteit_naam`, activiteit_benodigdheden, activiteit_beschrijving ,`activiteit_vrijwilligers`,`event`, `datum` ,`tijd`)
            VALUES(NULL, '$activiteit_naam', '$activiteit_benodigdheden', '$activiteit_beschrijving' ,'$activiteit_vrijwilligers',  '$event', '$activiteit_datum', '$activiteit_tijd');";
            echo "Evenement is toegevoegd!";
            $result = $this->DataHandler->createData($sql);
            //echo "test2";
            return $result;
        }catch (Exception $e){
            throw $e;
        }
    }

    public function readContacts(){
        try {
            $sql = "SELECT * FROM activiteiten;";
            $result = $this->DataHandler->readsData($sql);

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }


    public function readContact($id)
    {

        try {

            $sql = "SELECT * FROM activiteiten WHERE id =" . $id;

            $result = $this->DataHandler->readsData($sql);

            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function updateContact($id, $activiteit_naam, $activiteit_benodigdheden, $activiteit_beschrijving, $activiteit_vrijwilligers	, $event, $activiteit_datum, $activiteit_tijd)
    {
        $id = $_POST['id'];
        $activiteit_naam = $_POST['activiteit_naam'];
        $activiteit_datum = $_POST['activiteit_datum'];
        $activiteit_tijd = $_POST['activiteit_tijd'];
        $activiteit_benodigdheden = $_POST['activiteit_benodigdheden'];
        $activiteit_beschrijving = $_POST['activiteit_beschrijving'];
        $activiteit_vrijwilligers = $_POST['activiteit_vrijwilligers'];
        $event = $_POST['event'];

        $sql = "UPDATE `activiteiten` 
SET `activiteit_naam` = '$activiteit_naam', `activiteit_benodigdheden` = '$activiteit_benodigdheden', 
`activiteit_beschrijving` = '$activiteit_beschrijving', `activiteit_vrijwilligers` = '$activiteit_vrijwilligers', 
`datum` = '$activiteit_datum', `tijd` = '$activiteit_tijd' WHERE `activiteiten`.`id` = $id";
    }


    public function deleteContact($id)
    {
        try {
            $sql = "DELETE FROM activiteiten WHERE id =" . $id ;
            $result = $this->DataHandler->deleteData($sql);
            return $result;
        }catch (Exception $e) {
            throw $e;
        }
    }

    public function searchContact($input){
        try{
            $sql ="SELECT * FROM activiteiten
WHERE activiteiten_naam LIKE '%$input%'";
            $result = $this->DataHandler->searchData($sql);
            return $result;
        }catch (Exception $e){
            throw $e;
        }
    }

}
