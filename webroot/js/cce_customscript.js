/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function coatsfilterTerm(termTofilter,dropdown){
        //var reg = '/^[a-z0-9]+$/i';  // another pattern
        //var strr = termTofilter; var tmpStr = strr.replace(";",""); tmpStr = tmpStr.replace("#","");
        var tmpStr = termTofilter;
        //var returnStr = termTofilter;
        // Permantly remove ;# from input to prevent PDO Exception
        tmpStr = tmpStr.replace(";",""); tmpStr = tmpStr.replace("#","");
        var returnStr = tmpStr;
        
        switch(dropdown){
            case 'order_no':
                //return tmpStr.replace(/[^a-zA-Z 0-9]+/g, "");  break;
                // Allows only: numbers, forward slash
                // Not Allowed: characters, special characters
                //var patt = /[^A-Za-z0-9\/]+$/g;
                var patt = /['"]+$/g;
                if(patt.test(tmpStr)){
                    //alert('found quotes');
                    returnStr = tmpStr.replace(/(['"])/g, "\\$1");
                } else {
                    //alert('not found');
                    returnStr = tmpStr;
                }
                //returnStr = tmpStr.replace(/[^A-Za-z0-9\/]+/g, "");
                break;
            case 'business_principal_name':
            case 'ship_to_party_name':
            case 'customer_name':
            case 'fce_name':
                //return tmpStr.replace(/[^A-Za-z0-9-_,\.\(\)]+/g, "");  working only ' need to replace by \''
                // Allows only: single and double quote append with backword slash
                returnStr = tmpStr.replace(/(['"])/g, "\\$1");
                break;
            case 'article':
            case 'ship_to_party_no':
            case 'customer_code':
            case 'shade_code':
                // Allows only: characters, numbers, Hypens, underscores
                // Not Allowed: single quote, comma, special characters
                returnStr = tmpStr.replace(/[^A-Za-z0-9-_]+/g, "");
                break;
            default : returnStr = tmpStr; break;
        }
        //alert(returnStr);
        return returnStr;
        //var filtered_without_special_char = tmpStr.replace(/[^a-zA-Z 0-9]+/g, "");
        //return filtered_without_special_char;
}

