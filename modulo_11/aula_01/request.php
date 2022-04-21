
<?php
    if(isset($_post['acao'])){
    $url = urlencode($_POST['adress']);
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');
    
    echo "<pre>";
        var_dump($str);
    echo "</pre>";
}
?>