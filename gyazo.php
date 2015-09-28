<?php
echo "URL";
if(isset($_FILES['imagedata']['name'])) {
    $path = 'gyazo/' . substr(md5(time()), -28) . '.png';
    if(move_uploaded_file($_FILES['imagedata']['tmp_name'], $path))
        echo $path;
}
