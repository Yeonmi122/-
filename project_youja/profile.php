<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/h.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>유트브 자막 제작 구인 사이트_프로필 등록</title>
    <link rel = "stylesheet" href = "f_board.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&family=Jua&family=Kiwi+Maru:wght@300&family=Kosugi+Maru&display=swap" rel="stylesheet">
</head>
<body>
    <form name="profile_img" method="post" action="profile.php" enctype="multipart/form-data"> 
    <br>프로필 이미지 <input type="file" name="imgFile" /><br>
    <input type="submit" value="업로드" />
    </form>
</body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT']."/PROJECT_YOUJA/f.php"?>