<?php
require 'Function.php';

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
            <script>
                alert('data deleted successfully!');
                document.location.href = 'Pendataan.php';
            </script>
        ";
}else{
    echo "
            <script>
                alert('data failed to delete!');
                document.location.href = 'Pendataan.php';
            </script>
        ";
}

?>
