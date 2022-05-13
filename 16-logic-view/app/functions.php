<?php
    // function view($name){
    //     global $title;
    //     require("view/$name.view.php");
    // }

    function view($name, $model){
        global $title;
        require("./view/layout.view.php");
    }

    function get_data(){
        $fname = CONFIG['data_file'];
        $json ='';

        //fname 값이 존재하지 않을 시, fname 파일생성
        if(!file_exists($fname)){
            //case 1:
            file_put_contents($fname, '');
            //case 2:
            // $handle = fopen("$fname", "w+");
            // fclose($handle);
        }
        else{
            //case 1:
            $json = file_get_contents($fname);
            //case 2: 
            // $handle = fopen("$fname", "r");
            // $json = fread($handle, filesize("$fname"));
        }

        return $json;
    }

?>