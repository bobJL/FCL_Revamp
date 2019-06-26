<?php

require_once "DataHandler.php";

class ProductsLogic
{
    public function __construct()
    {
        $this->DataHandler = new DataHandler("localhost", "mysql", "fcl_database", "root", "");
    }

    public function __destruct()
    {
    }

    public function createContact($id, $activiteit_naam, $activiteit_benodigdheden, $activiteit_beschrijving, $acitviteit_vrijwilligers	, $event)
    {
        try {
            $id = $_POST['id'];
            $activiteit_naam = $_POST['activiteit_naam'];
            $activiteit_benodigdheden = $_POST['activiteit_benodigdheden'];
            $activiteit_beschrijving = $_POST['activiteit_beschrijving'];
            $acitviteit_vrijwilligers = $_POST['acitviteit_vrijwilligers'];
            $event = $_POST['event'];


            $sql = "INSERT INTO activiteiten(`id`,`activiteit_naam`,`activiteit_benodigdheden`,`activiteit_beschrijving`, `acitviteit_vrijwilligers` ,`event`)
            VALUES('$id', '$activiteit_naam', '$activiteit_benodigdheden',  '$activiteit_beschrijving', '$acitviteit_vrijwilligers', '$event');";
            echo "test1";
            $result = $this->DataHandler->createData($sql);
            echo "test2";
            return $result;
        }catch (Exception $e){
            throw $e;
        }
    }

    public function readContacts(){
        try {
            $sql = "SELECT id, activiteit_naam, activiteit_benodigdheden, activiteit_beschrijving, activiteit_vrijwilligers FROM activiteiten;";
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

    public function updateContact($product_id, $product_type_code, $suplier_id, $product_name, $product_price, $other_product_details)
    {
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