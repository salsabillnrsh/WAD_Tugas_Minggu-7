<?php
require 'Pendataan.php';

$id = $_GET["id"];

if(hapus($id) > 0 ) {
    echo "
            <script>
                alert('data deleted successfully!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
}else{
    echo "
            <script>
                alert('data failed to delete!');
                document.location.href = 'trackerpage.php';
            </script>
        ";
}

?>
