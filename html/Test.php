
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/OyamadaBar.css">
    <link rel="stylesheet" href="../css/Oyamadaprofile2.css">
    <link rel="stylesheet" href="../css/modal.css">
</head>


<body>
    
   <!-- ヘッダー -->
   <header class="mb-3 border-bottom" id="header">
    <div class="container-fluid">
        <div class="row row justify-content-between">
            <div class="d-flex align-items-center mb-0 text-dark text-decoration-none col-7 text-left px-0" style="height: 50px; padding-top: 55px;">
            </div>
    
            <button class="navbar-toggler col-3 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation" style="height: 50px; box-shadow: none;">
                <!-- <svg width="50" height="50" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="60" height="60" fill="url(#pattern1)"/> -->
                    <!-- <defs>
                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_173_3205" transform="scale(0.00333333)"/>
                    </pattern>
                    </defs> -->
                    <img src="../svg/b.svg">
                </svg>          
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarsExample05">
            <form wtx-context="0C9FB6AB-0B58-4B25-A43A-44B7ADC851E5" class="mx-4">
              <input class="form-control text-center mb-3" type="text" placeholder="キーワードを入力" aria-label="Search" wtx-context="AA84657A-0F9B-4A04-B5FA-D24659B477FD"
              style="height: 34px;
              border: 3px solid #FFAC4A; 
              box-shadow: none;">
            </form>
        </div>
    </div>
  </header>

  <h1>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</h1>
  
  <!-- ヘッダー↑ -->
  <div id="app">
  <div id="photo">
  <!--画像 -->
  <div class="icon-image">
  </div>
    </div>
    <!-- open-modalの中身が表示される -->
    <open-modal v-show="showContent" v-on:from-child="closeModal">
        <form method="POST" action="../DAO/newuserimagedb.php" enctype="multipart/form-data">
                <div>
                <input type="file" name="image">
                <input type="submit" value="送信！">
            </div>
        </form>
    </open-modal>

    </div>


    <div class="edit">
    
        <!-- <img src="../svg/tpyosaka.svg" alt="編集ボタン" onclick="openModal()"> -->

</div>
    <div class="account">
    </div>
    <div>
    </div>
    <div class="rank">
    <div class="waku">
    <div class="frame">
    </div>
    </div>
   <!-- モーダル -->
<!-- <div id="modal" class="modal">
    <div class="modal-content">
    <form method="POST" action="../DAO/userupdate.php" enctype="multipart/form-data">
        <h2>プロフィール編集</h2>
        <label for="edit-username">ユーザー名:</label>
        <input type="text" id="user_name">
        <label for="edit-bio">自己紹介文:</label>
        <textarea id="bio"
        <button onclick="saveChanges()" type="submit">保存</button>
        <button onclick="closeModal()">キャンセル</button>
    </form>
    </div>
</div> -->

<!-- <div id="modal" class="modal">
    <div id="overlay" class="modal-content">
        <div id="content">
    <form method="POST" action="../DAO/userupdate.php" enctype="multipart/form-data">
    <h2>プロフィール編集</h2>
        <p>ユーザー名:</p>
        <input type="text" name="user_name" id="edit-username">
        <p>自己紹介文:</p>
        <input type="text" name="bio" id="edit-bio"
        <button onclick="saveChanges()" type="submit">保存</button>
        <button onclick="closeModal()">キャンセル</button>
    </form>
</div>
    </div>
</div> -->

    
<!-- 
    <div class="toukou">
        <button class="button">投稿一覧</button>
    </div> -->
</div>
    <!-- navigationBar -->
    <div class="border"></div>
 
    <div class="navigation">
     <a class="list-link" href="#" onclick="changeImage(this, 'timeLine.php')">
     <i class="icon">
     <img src="../svg/time.svg" class="image-size">
     </i>
     </a>
     <a class="list-link" href="#" onclick="changeImage2(this, 'forum.php')">
     <i class="icon">
     <img src="../svg/forum.svg" class="image-size1">
     </i>
     </a>
     <a class="list-link" href="#" onclick="changeImage3(this, 'Oyamadatokou.html')">
     <i class="icon">
     <img src="../svg/post.svg" class="image-size">
     </i>
     </a>
     <a class="list-link" href="#" onclick="changeImage4(this, 'myProfile.php')">
     <i class="icon">
     <img src="../svg/profile2.svg" class="image-size">
     </i>
     </a>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/OyamadaBar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="../js/MaedaTest.js"></script>
    <script src="../js/Maeda2.js"></script>

</body>
</html>