<?php

if(!function_exists('contadorAlertas'))
{
    function contadorAlertas()
    {
        $ci = &get_instance();

        $ci->load->model('alertas_model');

            $total = 0;

        $total = count($ci->alertas_model->get_cms_ingredientes_por_traducir());

        $total = $total + count($ci->alertas_model->get_cms_platos_por_traducir());

        $total = $total + count($ci->alertas_model->get_cms_cantidades_por_traducir());

        $total = $total + count($ci->alertas_model->alertas_model->get_cms_menus_por_traducir());

        $total = $total + count($ci->alertas_model->alertas_model->get_cms_menus_semana_incompleta());

        $menus = $ci->alertas_model->get_cms_menus_noactivos_calendario();

        if(!empty($menus)){
            
            foreach ($menus as $key => $value) {
                $total = $total + count($value[0]);
            }
        }
     

        return $total;
    }
}







