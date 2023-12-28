<?php
// Include configuration file 
include_once './dbconfig.php';

if(!empty($_GET['fid'])){ 
    $file_id = base64_decode($_GET['fid']); 
     
    // Fetch video details from the database 
    $sqlQ = "SELECT * FROM videos WHERE id = ?"; 
    $stmt = $db->prepare($sqlQ);  
    $stmt->bind_param("i", $db_file_id); 
    $db_file_id = $file_id; 
    $stmt->execute(); 
    $result = $stmt->get_result(); 
    $videoData = $result->fetch_assoc(); 
} 
 
if(empty($videoData)){ 
    header("Location: index.php"); 
    exit(); 
} 
 
$status = $statusMsg = ''; 
if(!empty($_SESSION['status_response'])){ 
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

        <div class="wrapper info">
            <h2>Video Details <a href="logout.php"><span class="badge bg-primary">logout</span></a></h2>
            <!-- Status message -->
            <?php if(!empty($statusMsg)){ ?>
                <div class="alert alert-<?php echo $status; ?>"><?php echo $statusMsg; ?></div>
            <?php } ?>

            <!-- YouTube video info -->
            <?php 
            if(!empty($videoData)){ 
                $youtubeURL = 'https://youtu.be/'.$videoData['youtube_video_id']; 
                $privacy_class = ($videoData['privacy'] == 'private')?'danger':'success'; 
            ?>
            <div class="card">
                <embed width="100%" src="https://www.youtube.com/embed/<?php echo $videoData['youtube_video_id']; ?>"></embed>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $videoData['title']; ?></h5>
                    <p class="card-text"><?php echo $videoData['description']; ?></p>
                    <p><b>Tags:</b> <?php echo $videoData['tags']; ?></p>
                    <p><b>Privacy:</b> <span class="badge bg-<?php echo $privacy_class; ?>"><?php echo $videoData['privacy']; ?></span></p>
                    <p><b>YouTube URL:</b> <a href="<?php echo $youtubeURL; ?>" target="_blank"><?php echo $youtubeURL; ?></a></p>
                </div>
                <a href="index.php" class="btn btn-primary mt-3">New Upload</a>
            </div>

            <?php } ?>

            
        </div>
    </div>
</body>
</html>