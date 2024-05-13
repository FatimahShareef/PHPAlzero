<?php

// cookies --> identify the user proprites // must write cookeis before html

// setcookie(name,value,expire,path,domain,secure,httpolny)
// expire >> when it is end
//path >> in any page it enable  //contact
//domain >> /test.school.contact >> active in test domain and its sub domains
//secure >> send by https not http
//httpolny >> send by http only

setcookie("school","channel",time() + 86400,"/","localhost",TRUE); //86400 for one day
echo '<br>'."<pre>";
print_r($_COOKIE);
echo "</pre>";
if (count($_COOKIE)>0){
    echo "good the cookie is enable for this website";

}
else{
    echo "please enable cookies for best browsing journey";

}


