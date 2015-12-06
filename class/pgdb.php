<?PHP
    class pgdb {
    var $link;
        
        /*
         *Инициализация соединения
         */
        function connect ($connect_str)
        {
            $test_con =pg_connect($connect_str);
            if (!$test_con){
                return "error no connect";
            }
            else{
                $this->link=$test_con;
                return $test_con;
            }
        }
        
        /*$connect_str - строка соединеини
         *Закрытие сеанса соединения
         */
        function disconnect ()
        {
            pg_close($this->link);
        }
        
        
        
    }
    
?>