<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biznet Photos</title>
    <link rel="stylesheet" href="album.css" type="text/css">
    <link rel="stylesheet" href="lightbox.css" type="text/css">

</head>

<body>



    <input type="radio" name="photos" id="check1" checked>
    <input type="radio" name="photos" id="check2">
    <input type="radio" name="photos" id="check3">
    <input type="radio" name="photos" id="check4">

    <div class="container">
        <h1>BIZNET PHOTO GALLERY</h1>
        <div class="top-content">
            <h3>Photo gallery</h3>
            <label for="check1">All photos</label>
            <label for="check2">Family Photos</label>
            <label for="check3">Staff</label>
            <label for="check4">Manager</label>
        </div>
        <div class="full-img" id="fullImgBox">
            <img src="./src/famille1.PNG" id="fullImg">
            <span onclick="closeFullImg()"><img src="./src/close.png"></span>
        </div>
        <div class="photo-gallery">
            <!-- <a href="apple.jpg" data-lightbox="models" data-title="caption1">
        </a> -->
            <div class="pic manager">
                <img src="./src/apple.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic Family">
                <img src="./src/famille1.PNG" onclick="openFullImg(this.src)">
            </div>

            <div class="pic staff">
                <img src="./src/20210102_082009.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic manager">
                <img src="./src/apple.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic Family">
                <img src="./src/famille2.PNG" onclick="openFullImg(this.src)">
            </div>
            <div class="pic staff">
                <img src="./src/20210102_082009.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic manager">
                <img src="./src/apple.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic Family">
                <img src="./src/famille3.PNG" onclick="openFullImg(this.src)">
            </div>
            <div class="pic staff">
                <img src="./src/20210102_082009.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic manager">
                <img src="./src/apple.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic Family">
                <img src="./src/famille4.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic staff">
                <img src="./src/20210102_082009.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic manager">
                <img src="./src/apple.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic Family">
                <img src="./src/famille5.jpg" onclick="openFullImg(this.src)">
            </div>
            <div class="pic staff">
                <img src="./src/20210102_082009.jpg" onclick="openFullImg(this.src)">
            </div>
        </div>
    </div>
    <script src="lightbox-plus-jquery.js"></script>
    <script>
        var fullImgBox = document.getElementById("fullImgBox");
        var fullImg = document.getElementById("fullImg");

        function openFullImg(pin) {
            fullImgBox.style.display = "flex";
            fullImg.src = pin;
        }
        function closeFullImg() {
            fullImgBox.style.display = "none";
        }
    </script>
</body>

</html>