<?php
class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->view('home_view');
    }

    function get_autocomplete()
    {
        if (isset($_GET['term'])) 
        {
            $result = $this->product->search($_GET['term']);
            if (count($result) > 0) 
            {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label'             => $row->producto,
                        'categoria'         => $row->categoria,
                        'upc'               => $row->upc,
                        'descripcion'       => $row->descripcion,
                        'precio'            => $row->precio,
                        'precio_especial'   => $row->precio_especial
                    );

                    echo json_encode($arr_result);
            }else{

                echo json_encode("No hay registros");
            }
        }
    }

}