<h1><?echo $data['title']?></h1>
<table>
    <?php
        echo '<div class="container my-4">'.$data['smalldesc'].'</div>';
        echo '<div class="rounded" class="container-xl mt-2">'.$data['fulldesc'].'</div>';
        echo file_get_contents('http://pattern-hmvc.com/patterns/'.strtolower($data['title']).'/comments');
    ?>
</table>