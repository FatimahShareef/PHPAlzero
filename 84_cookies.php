<?php

// cookies --> identify the user proprites // must write cookeis before html

setcookie("Zero","Test",time() +3600,"/");
if (count($_COOKIE)>0){
    echo "good the cookie is enable for this website";
}
else{
    echo "please enable cookies for best browsing journey";

}


