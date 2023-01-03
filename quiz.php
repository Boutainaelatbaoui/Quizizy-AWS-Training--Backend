<?php
require_once 'connection.php';

class Quizizy extends Connection
{
    public function getData()
    {
        $sql = "SELECT q.*, 
                MIN(CASE WHEN o.id = (q.id*4)-3 THEN o.id END) AS id_1,
                MIN(CASE WHEN o.id = (q.id*4)-3 THEN o.answer END) AS answer_1, 
                MIN(CASE WHEN o.id = (q.id*4)-2 THEN o.id END) AS id_2,
                MAX(CASE WHEN o.id = (q.id*4)-2 THEN o.answer END) AS answer_2, 
                MIN(CASE WHEN o.id = (q.id*4)-1 THEN o.id END) AS id_3,
                MIN(CASE WHEN o.id = (q.id*4)-1 THEN o.answer END) AS answer_3,
                MIN(CASE WHEN o.id = (q.id*4) THEN o.id END) AS id_4,
                MAX(CASE WHEN o.id = (q.id*4) THEN o.answer END) AS answer_4
                FROM questions q JOIN options o GROUP by q.id ORDER by q.id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        // print_r(json_encode($result));
        $encoded_quiz = json_encode($result);
        file_put_contents("data.json", $encoded_quiz);
        print_r(file_put_contents("data.json", $encoded_quiz));
    }
}

$quizizy = new Quizizy();
$quizizy -> getData();
