<?php
class JBHIFI{

    public static function generateJBCorporateBenefitsURL(){
        $baseUrl = 'https://www.jbcommercial.com.au/corporatebenefits/';

        //set timezone to AU/Melbourne
        date_default_timezone_set('Australia/Melbourne');

    
        //Set configurables
        $affilliateid = '15914';
        $ts = date('Ymd_His', time()); //20220824_100426
        $secret = '02bdfb51df1ad5824dcd2971c0ec6810b54e14c3';

        //generate MD5 hash
        $hash = md5(''.$affilliateid.''.$ts.''.$secret.'');

       

        //build URL
        $generatedURL = $baseUrl . '?affilliateid=' . $affilliateid . '&ts=' . $ts . '&hash=' . $hash;
        return $generatedURL;
    }

    public static function redirectToGeneratedURL(){
        $url = self::generateJBCorporateBenefitsURL();
        header('Location: ' . $url);
        exit; // Ensure script execution ends here
    }
}

JBHIFI::redirectToGeneratedURL();
?>
