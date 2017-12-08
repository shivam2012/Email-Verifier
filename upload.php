<?php
$target_dir="/My project/uploads";
$target_file=$target_dir.basename($_FILES["file"],["name"]);
echo $target_file;
$imgfiletype= pathinfo($target_file,PATHINFO_EXTENSION);
echo $imgfiletype;
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/")) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
?>
<?php
/*  //  include 'verify.php';
echo "hiii";
 if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];

        //Add code to verify extension of the file

        // $file_ext=strtolower(end(explode('.',$file_name)));

        // $expensions= array("docx","csv","xml");
        // if(in_array($file_ext,$expensions)=== false){
        //     $errors[]="extension not allowed, please choose a CSV or DOCX file.";
        // }

        if($file_size > 2097152){
        $errors[]='File size must be excatly 2 MB';
        }
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"uploads/".$file_name);
            echo "<br>File uploaded successfully.";
        }else{
            print_r($errors);
        }

    $file = fopen("uploads/".$file_name,"r");
    $mailids = fgetcsv($file);
    echo "Size of the file: ".count($mailids)."<br>";
    foreach($mailids as $key=>$value){
       $bulk_obj = new verify_mail();
       $result_data = $bulk_obj->curl_post_request($value);
       echo " $key: ".$result_data."<br>";
    }


   // $fp = file("uploads/".$file_name, FILE_SKIP_EMPTY_LINES);
    fclose($file);
 }*/
?>
