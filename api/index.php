<?php


$data = [];

//request
if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'status':
            $data['status'] = 'SUCCESS';
            $data['message'] = 'API is running';
            break;

        default:
            $data['status'] = 'ERROR';
            break;
    }

} else {
    $data['status'] = 'ERROR';
}


// emitir resposta da API
response($data);

//construção de response

function response($data_response){
    header('Content-Type: application/json');
    echo json_encode($data_response);
}
?>