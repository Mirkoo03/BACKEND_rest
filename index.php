<?php


include "query.php";

$requestedMethod = $_SERVER['REQUEST_METHOD']; //ottenimento del metodo richiesto

$page = isset($_GET['page']) ? $_GET['page'] : 0;
$size = isset($_GET['size']) ? $_GET['size'] : 20;
$data = json_decode(file_get_contents('php://input'));


//effettuo controlli in modo da riconoscere il metodo di chiamata

if ($requestedMethod === "POST") {

    echo postRequest($data);

} else if ($requestedMethod === "GET" && !isset($_GET['id'])) {

    echo getRequest($page, $size);
} 
else if($requestedMethod === "GET" && isset($_GET['id'])){

    echo getEmployeeRequest($_GET['id']);
} 
else if ($requestedMethod === "PUT") {

    echo putRequest($data);

} else if ($requestedMethod === 'DELETE' && isset($_GET['id'])) {

    echo deleteRequest($_GET['id']);

}

?>