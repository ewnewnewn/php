<?php
function pointCheck($score1,$score2,$score3)
{
    $add= $score1 + $score2 + $score3;
    return $add;
}
$total = pointCheck(100,90,450);
if($total>210){
    echo "合計点は" . $total . "なので合格です" ;
}else{
    echo "合計点は" . $total . "なので不合格です" ;
}