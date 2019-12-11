  
<a href="task2.php?category=sport">Sport news</a> | <a href="task2.php?category=politics">Politic news</a><br/><br/>
<a href="task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$categoryFromRequest = $_REQUEST["category"];
$JSON = $_REQUEST["format"];
$news = array("sport"=>array("C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"),"politics"=>array("Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"));
if($JSON == "json"){
    echo json_encode($news[$categoryFromRequest]);
}
else{
    echo $news[$categoryFromRequest][0] , '<br/>';  
    echo $news[$categoryFromRequest][1];
}

?>