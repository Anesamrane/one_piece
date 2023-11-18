<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Manrope:wght@300&family=Noto+Naskh+Arabic:wght@700&family=Noto+Sans+Arabic:wght@300&family=Poppins:wght@300;500&family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<title>Op arabic</title>
<link rel="shortcut icon" href="../../../1x/Artboard 1.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div><a href="../../../main/index.html" class="logo"><img src="../../../1x/Artboard 1.png" alt=""></a></div>
            <div class="hover1" ><a href="" class="nav"><i class="fa-solid fa-user"></i> حسابي</a></div>
            <div class="hover2"><a href="" class="nav"><i class="fa-solid fa-play"></i>  الأنمي</a>
                </div>
                <div class="hover3"><a href="" class="nav"><i class="fa-solid fa-book-open"></i>  المانجا</a>
                  <div class="chapters3all">
                    <nav class="chapters3">
                        <div><a href=""><i class="fa-solid fa-book"></i>  فصول المانجا </a></div>
                      <div><a href=""><i class="fa-solid fa-fire"></i>  التسريبات</a></div>
                    </nav>
                </div>
                    </div>
            <div class="hover5"><a href="" class="nav"><i class="fa-solid fa-message"></i>  نقاشات</a>
              <div class="chapters5all">
                <nav class="chapters5">
                    <div><a href=""><i class="fa-solid fa-fire"></i>  منشورات عامة </a></div>
                  <div><a href=""><i class="fa-solid fa-eye"></i>  نظريات</a></div>
                  <div><a href=""><i class="fa-brands fa-youtube"></i>  مقاطع يوتيوب </a></div>
                </nav>
            </div></div>
            <div class="hover4"><a href="" class="nav"><i class="fa-solid fa-person"></i>   معلومات</a>
              <div class="chapters4all">
                <nav class="chapters4">
                    <div><a href=""><i class="fa-solid fa-face-smile"></i>  الشخصيات </a></div>
                  <div><a href=""><i class="fa-solid fa-book"></i>  داتابوك</a></div>
                  <div><a href=""><i class="fa-solid fa-book"></i>  فيفر كارد</a></div>
                  <div><a href=""><i class="fa-solid fa-star"></i>  معلومات متنوعة </a></div>
                </nav>
            </div>
            </div>
            <div class="sun"><button><i class="fa-solid fa-sun"></i></button></div>
            <div><a><input type="text" class="search-input"></a></div>
        </nav>
    </header>



    

      <div class="wall">
        <h3>انشاء النظرية</h3>
        <form action="" class="inputBox">
            <div>
            <textarea name="feedback" class="feedback" id="feedback" cols="30" rows="1" required placeholder="عنوان النظرية "></textarea>
    </div>
        <div>
        <textarea name="feedback" class="feedback" id="feedback" cols="30" rows="3" required placeholder="مقدمة النظرية"></textarea>
    </div>
        <div>
        <textarea name="feedback" class="feedback" id="feedback" cols="30" rows="10" required placeholder="النظرية"></textarea>
    </div>
    <div>
      <textarea name="feedback" class="feedback" id="feedback" cols="30" rows="1" required placeholder=" رابط صورة النظرية "></textarea>
</div>
    <div class="spoil">
        <span>يحتوي على حرق</span>
    <button class="spoilbutton" onclick="spoil()">
        <i class="fa-solid fa-fire fa-xl" id="fire"></i>
      </button>
    </div>
    <div>
        <input type="file" placeholder="  صورة الغلاف " value="  صورة الغلاف ">
    </div>
    <div>
        <input type="submit" value="نشر النظرية">
    </div>
        </form>
        </div>


        <script>
            function canvas() { 
               let x = document.querySelector('.chapters');
                x.style.display = "block";
                let y = document.querySelector('.btn');
                y.setAttribute("onclick", "hideOffcanvas()");
            }
            
            function hideOffcanvas() {
                let x = document.querySelector('.chapters');
                x.style.display = "none";
                let y = document.querySelector('.btn');
                y.setAttribute("onclick", "canvas()");
            }



            function spoil(){
           let redheart = document.getElementById('fire').style.color = "red";
           let likeButton = document.querySelector('.spoilbutton');
           likeButton.setAttribute("onclick", "notspoil()");
        }
        function notspoil(){
            let redheart = document.getElementById('fire').style.color = "black";
            let likeButton = document.querySelector('.spoilbutton');
           likeButton.setAttribute("onclick", "spoil()");
        }

        </script>
 </body>
</html>