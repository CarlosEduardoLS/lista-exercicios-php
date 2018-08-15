<?php
$target_dir = "uploads/"; // Indica a pasta onde o arquivo será salvo.
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //Indica o diretório onde o arquivo sera salvo e o nome do arquivo;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //Indica a extensão do arquivo que será salvo
if(isset($_POST["submit"])) { // Checa se o arquivo é de fato uma imagem
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]); //A função getimagesize() determina o tamanho de qualquer arquivo de imagem.
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
?>