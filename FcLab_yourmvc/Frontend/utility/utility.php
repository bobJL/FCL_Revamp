<?php

class utility
{

    public function createTable($result)
    {
        $tableheader = false;
        $html = "";
        $html .= "<div class='container' style='padding-top: 50px;'>";
        $html .= "<div class='row'>";
        $html .= "<div class='col-md-8'>";
        $html .= "<h1 class='my-4'>Toekomstige evenementen
      <small>alle nodige informatie</small>
    </h1>";
        $html .= "<div class='card mb-4'>";



        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

            if ($tableheader == false) {


                $html .= "<div class='col'>";
                foreach ($row as $key => $value) {

                    if($key == 'id') {
                        $id = $value;
                    }
                }
                foreach ($row as $key => $value) {

                    if($key == 'activiteit_naam') {
                        $html .= $value;
                    }
                }
                $html .= '<br>';
                foreach ($row as $key => $value) {

                    if($key == 'activiteit_beschrijving') {
                        $html .= $value;
                    }
                }
                $html .= '<br>';
                $html .= '<a href="index.php?op=read&id=' . $id . '"><button type="button" class="btn btn-primary">Lees meer</button></a> 
';

                $html .= "</div>";
                $tableheader = false;
            }

            $html .= "";

            /*foreach ($row as $key => $value) {
                if($key == "product_price"){
                    $html .= "<td> €" . str_replace('.', ',', $value) . "</td>";
                } else {
                    $html .= $value;

                }

            }*/
            $html .= "</div>";


        }

        $html .= "</div>";

        $html .= "</div>";

        $html .= "</div>";

        /*$html .= "<ul><li><a href=''>1</a></li><li><a href=''>2</a></li><li><a href=''>3</a></li></ul>";
        for ($i=1; $i <= $pages; $i++){
            $html.= "<li><div onClick=\'localhost/index.php?op=readpage&p='.$i\">".$i."</div></li>";
        }*/
        return $html;

    }



}
?>