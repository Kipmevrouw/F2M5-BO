<?php $this->layout('layouts::adminwebsite');?>

<h1><?php echo $account['voornaam']?></h1>

<?php if ($account['active'] == 0){
    echo "account is niet actief";
}else if ($account['active'] == 1){
    echo "account is actief";
}
?>