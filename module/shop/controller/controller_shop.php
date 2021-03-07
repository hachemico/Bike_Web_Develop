<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/8_MVC_CRUD';
    include($path . "/module/shop/model/DAO_shop.php");

    
    switch($_GET['op']){
        
        case 'list';
			include("module/shop/view/shop.html");
        break;
        
        
        case 'shop';

        try{
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_shop();
      

        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
            
        break;
    
        case 'single';
       
        try{
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_single($_GET['id']);
       
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            echo json_encode($rdo);
           // echo($rdo);
        }
            
        break;

         
        case 'home_categoria';
            
        try{
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_categoria($_GET['categoria_cat']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
            
        break;

        case 'home_carousel';
            
        try{
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_carousel($_GET['categoria_car']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
            
        break;

        case 'filter';
            
        try{
    
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_filter($_GET['checks']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        }
            
        break;
        case 'count_cat';          
        try{
       
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_count_cat($_GET['category']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }   
        if(!$rdo){
            echo json_encode("error");
        }
        else{
            echo json_encode(" more_visited + 1 ");
        }
        break;

        case 'count_prod';        
        try{
       
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_count_prod($_GET['id']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }   
        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            echo json_encode(" more_visited + 1 ");
        }
        break;

        case 'search';
                   
        try{
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_search($_GET['varsearch']);
            
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
            
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
            // echo json_encode("HOLA");
        }   
        break;

        case 'count_all_pagination';
                   
        try{
       
            $daoshop = new DAO_shop();
            $rdo = $daoshop->select_count_all();
            
        } catch(Exception $e){
            echo json_encode("error");
        }

        if(!$rdo){
            echo json_encode("error");
        }
        else{
              
            $dinfo = array();
            foreach ($rdo as $row) {
            array_push($dinfo, $row);
            }
            echo json_encode($dinfo);
        // echo json_encode($rdo);
        }   
        break;

        case 'pagination';
            
          try{
         
              $daoshop = new DAO_shop();
              $rdo = $daoshop->select_pagination($_GET['offset']);
             // echo json_encode($rdo); 
          } catch(Exception $e){
              echo json_encode("error");
          }
  
          if(!$rdo){
              echo json_encode("error");
          }
          else{
                
              $dinfo = array();
              foreach ($rdo as $row) {
              array_push($dinfo, $row);
              }
              echo json_encode($dinfo);
        //   echo json_encode("DEBUG OK!");
          }   
          break;
  
        
        default:
        include("view/inc/error404.php");
        break;
    } //end_if_op            
?>