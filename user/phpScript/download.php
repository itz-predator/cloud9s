<?php
    include '../../db.php';
    $userid=$_SESSION['id'];
    if (isset($_POST['file_id'])) {
        $id = $_POST['file_id'];
        $sql = "SELECT * FROM file_upload WHERE file_id='$id' and userId='$userid'";
        $result = mysqli_query($con, $sql);
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/'.$file['file_name'];

        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('uploads/' . $file['file_name']));
            readfile('uploads/' . $file['file_name']);
            // $newCount = $file['downloads'] + 1;
            // $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
            // mysqli_query($conn, $updateQuery);
            exit;
        }

    }
?>