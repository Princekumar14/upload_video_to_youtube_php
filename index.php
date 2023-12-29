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

<?php
    include_once './dbconfig.php';
    // Fetch video details from the database 
    $sqlQ = "SELECT * FROM videos ORDER BY id desc"; 
    $stmt = $db->prepare($sqlQ);
    $stmt->execute(); 
    $result = $stmt->get_result();
    $videoData = $result->fetch_all(MYSQLI_ASSOC);


?>
    <div class="container-fluid p-sm-5 mt-5" >
      <div class="row" id="all_vid">
      <h2>Uploaded Video List :</h2>
         <?php 
         $vidCount = count($videoData);
        if($vidCount>0){
            for($i = 0; $i < $vidCount; $i++){ 
                
                $youtubeURL = 'https://youtu.be/'.$videoData[$i]['youtube_video_id']; 
                $privacy_class = ($videoData[$i]['privacy'] == 'private')?'danger':'success'; 
        ?>
         
         <div class="col-xl-3 col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <embed width="100%" src="https://www.youtube.com/embed/<?php echo $videoData[$i]['youtube_video_id']; ?>" style="height: 350px;"></embed>

                <div class="card-body m-2" style="height:260px">
                    <h5 class="card-title"><?php echo $videoData[$i]['title']; ?></h5>
                    <p class="card-text"><?php echo $videoData[$i]['description']; ?></p>
                    <p><b>Tags:</b> <?php echo $videoData[$i]['tags']; ?></p>
                    <p><b>Privacy:</b> <span class="badge bg-<?php echo $privacy_class; ?>"><?php echo $videoData[$i]['privacy']; ?></span></p>
                    <p><b>YouTube URL:</b> <a href="<?php echo $youtubeURL; ?>" target="_blank"><?php echo $youtubeURL; ?></a></p>
               </div>
            </div>
         </div>
         <?php
          } 
        }else{
           echo "<h3>No Video Uploaded.</h3>";     
        }
         ?>

      </div>
   </div>
</body>
</html>