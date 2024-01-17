<?php
// tên class phải dống tên file
class connect{
    //thuộc tính
    var $db = null;
    // hàm tạo
    function __construct(){
        $dsn = 'mysql:host=localhost;dbname=shopxe';
        $user = 'root';
        $pass = '';
        //set array để không bị mã hoá
        try {
            $this->db = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); 
        } catch (\Throwable $th) {
            echo "NÔ";
            echo $th;
            //$th để hiển thị lỗi ở đâu
        } 
    }
    function getList($select){
        $result = $this->db->query($select); //seclect * form
       // $result = $result->fetch(); // kết quả là 1 array của 1 dòng trong database
        return $result;
    }
    //phương thức câu truy vấn insert,updata,delete
    function exec($query){
        $result = $this->db->exec($query);
        return $result;
    }
    //phương thức dùng prepare
    function exec1($query){
        $sta = $this->db->prepare($query);
        return $sta;
    }
}
?>