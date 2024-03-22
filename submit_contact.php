<?php
$fileInfo = pathinfo($_FILES['screenShoot']['name']);
$extension = $fileInfo['extension'];
$allowExtension = ['jpg','jpeg','png','gif','py'];
$postData = $_POST;


if (!isset($postData['email'])|| !filter_var($postData['email'],FILTER_VALIDATE_EMAIL)||empty($postData['message'])
||trim($postData['message']) ===''){
    echo ('il faut un email valide et un message ');
    return;
}
if (isset($_FILES['scrennShoot']) && $_FILES['screenShoot']['error'] === 0){
    if ($_FILES['screenShoot']['size']>1000000 ){
        echo "l'envoie n'a pas  pu être effectué ,erreur ou l'image est trop volumineuse";
        return;
    }
}
if (!in_array($extension,$allowExtension)){
    echo 'echec envoie ';
    return;
}
$path = __DIR__.'/uploads/';
if (!is_dir($path)){
    echo "l'envoie n'a pas pu etre effectue ,le dossier uploads est manquant";
    return;
}
move_uploaded_file($_FILES['screenShoot']['tmp_name'],$path . basename($_FILES['screenShoot']['name']));
?>

    <link rel="stylesheet" href="assets/nav.css">
    <?php require_once(__DIR__ . '/header.php'); ?>

<h1>Message bien reçu !</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Rappel de vos informations </h5>
        <p class="card-text"> <b>Email</b> :<?php echo htmlspecialchars($_POST['email']);?></p>
        <p class="card-text"> <b>Message</b> :<?php echo htmlspecialchars($_POST['message']);?></p>
    </div>
</div>
<?php require_once(__DIR__ . '/footer.php'); ?>