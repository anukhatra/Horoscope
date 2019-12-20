<?php
function getHoroscope($inputDate) {
    $horoscope = array(
        "Väduren" => "03:21:04:19", 
        "Oxen" => "04:20:05:20 ",
        "Tvillingarna" => "05:21:06:21",
        "kräftan" => "06:22:07:22",
        "Lejonet" => "07:23:08:22",
        "Jungfrun" => "08:23:09:22", 
        "Vågen" => "09:23:10:22",
        "Skorpionen" => "10:23:11:21",
        "Skytten" =>"11:22:12:21",
        "Stenbocken" =>"12:22:01:19",
        "Vattumannen" => "01:20:02:18 ",
        "Fiskarna" => "02:19:03:20 "              
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
            
         if($fromMonth >= $inputDateMnth){
            if($fromDate >= $inputDateD){              
                return $key;
            }
         } 
         if($toMonth <= $inputDateMnth){
             if($toDate <= $inputDateD){               
                return $key;
            }
        }  
        
    }     
}
