<?php

function add_question($question){
        $arrayQuestions = get_file_content_question();
        if (!isset($arrayQuestions)) {
            $arrayQuestions = [];
        }
    
        array_push($arrayQuestions, $question);
        ajouter_fichier_question($arrayQuestions);
    
}
function ajouter_fichier_question(array $array) {
    $json = json_encode($array);
    file_put_contents(ROUTE_DIR.'data/question.data.json', $json);
}

function get_file_content_question() {
    $json = file_get_contents(ROUTE_DIR.'data/question.data.json');
    return json_decode($json, true);
}