<?php


function judgment($month,$date){
//牡羊座 3/21 - 4/20
$horoscope = array("牡羊","金牛","雙子","巨蟹","獅子","處女","天秤","天蠍","射手","魔羯","水瓶","雙魚");
// php好像不能這樣寫  $x=$horoscpoe;

if($month==3){
    if(in_array($date, range(21,31))){  
        return $horoscope[0];
    }
}
if($month==4){
    if(in_array($date, range(1,20))){  
        return $horoscope[0];
    }
}
//金牛座 4/21-5/21
if($month==4){
    if(in_array($date, range(21,30))){  
        return $horoscope[1];
    }
}
if($month==5){
    if(in_array($date, range(1,21))){  
        return $horoscope[1];
    }
}

//雙子座 5/22-6/21
if($month==5){
    if(in_array($date, range(22,31))){  
        return $horoscope[2];
    }
}
if($month==6){
    if(in_array($date, range(1,21))){  
        return $horoscope[2];
    }
}

//巨蟹座 6/22-7/23
if($month==6){
    if(in_array($date, range(22,30))){  
        return $horoscope[3];
    }
}
if($month==7){
    if(in_array($date, range(1,23))){  
        return $horoscope[3];
    }
}

//獅子座 7/24-8/23
if($month==7){
    if(in_array($date, range(24,31))){  
        return $horoscope[4];
    }
}
if($month==8){
    if(in_array($date, range(1,23))){  
        return $horoscope[4];
    }
}
//處女座 8/24-9/23
if($month==8){
    if(in_array($date, range(24,31))){  
        return $horoscope[5];
    }
}
if($month==9){
    if(in_array($date, range(1,23))){  
        return $horoscope[5];
    }
}
//天秤座 9/24-10/23
if($month==9){
    if(in_array($date, range(24,30))){  
        return $horoscope[6];
    }
}
if($month==10){
    if(in_array($date, range(1,23))){  
        return $horoscope[6];
    }
}
//天蠍座 10/24-11/22
if($month==10){
    if(in_array($date, range(24,31))){  
        return $horoscope[7];
    }
}
if($month==11){
    if(in_array($date, range(1,22))){  
        return $horoscope[7];
    }
}
//射手座 11/23-12/22
if($month==11){
    if(in_array($date, range(23,30))){  
        return $horoscope[8];
    }
}
if($month==12){
    if(in_array($date, range(1,22))){  
        return $horoscope[8];
    }
}
//魔羯座 12/23-1/20
if($month==12){
    if(in_array($date, range(23,31))){  
        return $horoscope[9];
    }
}
if($month==1){
    if(in_array($date, range(1,20))){  
        return $horoscope[9];
    }
}
//水瓶座 1/21-2/19
if($month==1){
    if(in_array($date, range(21,31))){  
        return $horoscope[10];
    }
}
if($month==2){
    if(in_array($date, range(1,19))){  
        return $horoscope[10];
    }
}
//雙魚座 2/20-3/20
if($month==2){
    if(in_array($date, range(20,30))){  
        return $horoscope[11];
    }
}
if($month==3){
    if(in_array($date, range(1,20))){  
        return $horoscope[11];
    }
}



}
//echo judgment(9,26);
//echo judgment(3,30);
 //judgment(4,18);
//echo print_r(range(21,31));


//var_dump(in_array(25,range(21,31)));







?>
