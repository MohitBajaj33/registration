<?php  
@session_start();
function make_validation($method_type,$validetion_rules =[]){
if(count($validetion_rules)>0){

    foreach($validetion_rules as $filed_name => $rules){
       foreach($rules as $rule_key => $option){
         if($rule_key =='rule' and $option == 'Required'){
             if(required($method_type[$filed_name])){
                $_SESSION['validation_error'][$filed_name] = $validetion_rules[$filed_name]['error'];
                unset( $_SESSION['validation_data'][$filed_name] );
              
              
             }else{
  
                unset($_SESSION['validation_error'][$filed_name]);
                 $_SESSION['validation_data'][$filed_name] = $method_type[$filed_name];
              }

         }
       }
    }

   }else{
    echo 'Not Faund validestion Rules.';
  }
    if(count($_SESSION['validation_error'])>0){
         header("location:".$_SERVER['HTTP_REFERER']);
    }
}
function required($key){
    return empty($key)? true: false;
}
function set_error($key){
    return @$_SESSION['validation_error'][@$key];
}
function set_value($key){
    return @$_SESSION['validation_data'][@$key];
}
?>