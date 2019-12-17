<?php
function getHoroscope($inputDate) {
    $horoscope = array(
        "Vattumannen" => "21:20:02:18 ",
        "Fiskarna" => "30:19:03:20 ",
        "Väduren" => "03:21:04:19",  
        "Oxen" => "04:20:05:20 ",
        "Tvillingarna" => "05:21:06:21"
    );
    $keys = array_keys($horoscope);

    $inputDateMnth = (int)substr($inputDate,0,2);
    $inputDateD = (int)substr($inputDate,2,5);

    for ($i = 0; $i < count($keys); $i++) {
        $key = $keys[$i];
        $dateString = $horoscope[$key];
         
        $arr = explode(":", $dateString);

        $fromMonth = (int)$arr[0];
        $fromDate= (int)$arr[1];
        $toMonth = (int)$arr[2];
        $toDate = (int)$arr[3];
            //12< 21 && 02 <= 12
/*         if($fromMonth <= $inputDateMnth && $toMonth <= $inputDateMnth){
            if($fromDate <= $inputDateD && $toDate <= $inputDateD){
                    error_log(" I M IN");
            }else{
                error_log("I M OUT");
            }
        } */
        
    }
    
    return 'fish';
}
