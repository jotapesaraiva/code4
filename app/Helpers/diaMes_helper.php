<?php

    function date_start() {
        //retorna a data inicio da mes atual
         return date('d/m/Y', mktime(0, 0, 0, date('m') , 1 , date('Y')));
    }

    function date_end() {
        //retorno a data final do mes atual
       return date('d/m/Y', mktime(23, 59, 59, date('m'), date("t"), date('Y')));
    }

    function date_start_traco() {
        //retorna a data inicio da mes atual
         return date('d-m-Y', mktime(0, 0, 0, date('m') , 1 , date('Y')));
    }

    function date_start_dez() {
        //retorna a data inicio da mes atual
         return date('10-m-Y', mktime(0, 0, 0, date('m') , 1 , date('Y')));
    }
    //https://www.php.net/manual/pt_BR/function.date.php
 ?>