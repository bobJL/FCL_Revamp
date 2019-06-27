<?php

class utility
{

    public function createTable($result)
    {
        $tableheader = false;
        $html = "";
        $html .= "<table class='table' border='2px'>";


        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {


                $html .= "<tr>";
                foreach ($row as $key => $value) {


                    $html .= "<th>$key</th>";
                }

                $html .= "<th colspan='3'>Acties</th>";




                $html .= "</tr>";
                $tableheader = true;
            }

            $html .= "<tr>";

            foreach ($row as $key => $value) {
                if($key == "id"){
                    $id = $row['id'];
                }

            }

            foreach ($row as $key => $value) {
                if($key == "product_price"){
                    $html .= "<td> €" . str_replace('.', ',', $value) . "</td>";
                } else {
                    $html .= "<td>$value</td>";
                }

            }


            $html .= "<td><button type='button' class=\"btn btn-success\" name='read'><i class=\"fas fa-book-open\"> Read</i></button></td>";
            $html .= "<td><button onclick=window.location.href='index.php?op=update&id=$id' type='button' class=\"btn btn-warning\"  name='update'><i class=\"fas fa-pencil-alt\"> Update</i></button></td>";
            $html .= "<td><button onclick=window.location.href='index.php?op=delete&id=$id' type='button' class='btn btn-danger' name='delete'><i class=\"fas fa-times\"> Delete</i></button></td>";
            $html .= "</tr>";
        }

        $html .= "</table>";
        /*$html .= "<ul><li><a href=''>1</a></li><li><a href=''>2</a></li><li><a href=''>3</a></li></ul>";
        for ($i=1; $i <= $pages; $i++){
            $html.= "<li><div onClick=\'localhost/index.php?op=readpage&p='.$i\">".$i."</div></li>";
        }*/
        return $html;

    }



}
?>