<?php
require_once './model/ProductsLogic.php';
require_once './utility/utility.php';

class ProductsController
{
    public function __construct()
    {
        $this->ProductsLogic = new ProductsLogic();
        $this->utility = new utility();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function handleRequest()
    {
        try {
            $op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
            switch ($op) {
                case 'detail':
                    $this->collectReadContact($_REQUEST['id']);
                    break;
                case 'create':
                    if ($_POST['activiteit_naam'] == null) {
                        include 'view/old/create.php';
                    } else {
                        $this->collectCreateContact($_REQUEST);
                    }
                    break;
                case 'reads':
                    $this->collectReadContacts();
                    break;
                case 'read':
                    $this->collectReadContact($_REQUEST['id']);
                    break;
                case 'update':
                    if ($_POST['name'] == null) {
                        include 'view/old/update.php';
                    } else {
                        $this->collectUpdateContact($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address']);
                    }
                    break;
                case 'delete':
                    $this->collectDeleteContact($_REQUEST['id']);
                    break;
                case 'search':
                    $output = $this->collectSearchContacts($_REQUEST["input"]);
                    break;
                case 'readpage':
                    $this->collectReadPage($pages, $data);
                    break;
                default:
                    $this->collectReadContacts();
                    $this->collectReadPage($pages, $data);

                    break;
            }
        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }

    }

    public function collectCreateContact($request)
    {
        $products = $this->ProductsLogic->createContact($_POST['id'], $_POST['activiteit_naam'], $_POST['activiteit_benodigdheden'], $_POST['activiteit_beschrijving'], $_POST['acitviteit_vrijwilligers'], $_POST['event']);
        include 'view/old/create.php';
    }

    public function collectUpdateContact()
    {
        include 'view/old/update.php';
    }

    public function collectReadContact($id)
    {
        $products = $this->ProductsLogic->readContact($id);
        include 'view/DetailPage.php';
    }

    public function collectReadContacts()
    {
        $products = $this->ProductsLogic->readContacts();
        $result  = $this->utility->createTable($products);
        include 'view/ViewProducts.php';
    }

    public function collectDeleteContact($id)
    {
        //echo "Gebruiker is verwijderd";
        $products = $this->ProductsLogic->deleteContact($id);
        include 'view/old/delete.php';

    }

    public function collectSearchContacts($input){
        $searchOutput = $this->ProductsLogic->searchContact($input);

        $result = $this->utility->createTable($searchOutput);
        include 'view/ViewProducts.php';


    }

    /*public function collectReadPage($pages, $data){
        //get current starting point of records
        $item_per_page = 4;
        $position = (($_REQUEST['p']-1) * $item_per_page);
        $sql = "SELECT * FROM products LIMIT $position, $item_per_page";
        $result = $data->readData($sql);
        $pages = $data->countPages('SELECT COUNT(*) FROM products');
        include (view/ViewProducts.php);
    }*/
}
