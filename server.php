<?php
function validate_empty($name,$email,$topic,$content)
{
    return !empty($name) && !empty($email) && !empty($topic) && !empty($content);
}
$status='';


echo var_dump($_POST);

if(!empty($_POST))
{
    //APLICAMOS ARRAY UN PAKING
    $name=$_POST['name'];
    $topic=$_POST['topic'];
    $message=$_POST['content'];
    $email=$_POST['email'];
    
    if(validate_empty($name,$email,$topic,$message))
    {
      
        $status='success';

    }
    else
    {
        $status='danger';
    }
}

?>
