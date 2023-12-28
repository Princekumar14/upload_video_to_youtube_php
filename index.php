<?php
// Include configuration file
include_once './config.php';

$postData = array();
if(!empty($_SESSION['postData'])){
    $postData = $_SESSION['postData'];

    unset($_SESSION['potData']);
}

$status = $statusMsg = '';
if (!empty($_SESSION['status_response'])) {
    $status_response = $_SESSION['status_response'];
    $status = $status_response['status'];
    $statusMsg = $status_response['status_msg'];

    unset($_SESSION['status_response']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video to YouTube using PHP by Prince</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <h1>UPLOAD VIDEO TO YOUTUBE</h1>
        <div class="wrapper">

            <!-- Status message -->
            <?php if (!empty($statusMsg)) {?>
                <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
            <?php }?>

            <!-- Upload form -->
            <div class="col-md-12">
                <form method="post" action="upload.php" class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Video File:</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" name="title" class="form-control" value="<?php echo !empty($postData['title'])? $postData['title']:'' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" class="form-control"><?php echo !empty($postData['description'])? $postData['description']:'' ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tags:</label>
                        <input type="text" name="tags" class="form-control" value="<?php echo !empty($postData['tags'])? $postData['tags']:'' ?>">
                    </div>
                    <div class="form-group">
                        <label>Privacy:</label>
                        <select name="privacy" class="form-control form-select">
                            <?php
                            $selected = "";
                            if(!empty($postData['privacy']) && $postData['privacy'] == 'public'){
                                $selected = "selected";
                            }elseif(!empty($postData['privacy']) && $postData['privacy'] == 'private'){
                                $selected = "selected";
                            }
                            ?>
                            <option value="public" <?php echo !empty($postData['privacy']) && $postData['privacy'] == 'public'? 'selected="selected"':'' ?> >Public</option>
                            <option value="private" <?php echo !empty($postData['privacy']) && $postData['privacy'] == 'private'? 'selected="selected"':'' ?> >Private</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" class="form-control btn btn-primary" name="submit" value="Upload">
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>