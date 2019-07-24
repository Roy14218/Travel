<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>天地旅遊</title>


    <link rel="shortcut icon" href="./img/world.ico" type="image/x-icon">



    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/travel.css">
    <link rel="stylesheet" href="./css/animate.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-sm">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">
                            <i class="fas fa-home"></i>  首頁
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./imformation.php">
                            <i class="fas fa-globe-europe"></i>  旅遊信息
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./statistics.php">
                            <i class="fas fa-haykal"></i> 旅遊信息統計
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="page">
        <div class="container-fluid" id="loading">
            <div class="row h-100">
                <div class="col-12 text-center align-self-center">
                    <img src="./img/butterfly.gif" alt="" width="2000" height="1000">
                    <p class="text-white">載入中...</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
                <div class="col-12 text-center text-white rubberBand wow">
                <marquee class="horse" scrollamount="20">歡迎光臨天地旅遊網，本站介紹郊區旅遊景點，更提供旅遊信息及相關旅行社，歡迎踏青景點。</marquee>
                </div>
            </div>
        
        <div class="container" id="content"  style="margin-top: 70px;  margin-bottom:64px;">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/fish01.jpeg" class="d-block w-100 h-100 obj-fit" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>賞魚</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/butterfly01.jpg" class="d-block w-100 h-100 obj-fit" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>賞蝶</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/firefly01.jpg" class="d-block w-100 h-100 obj-fit" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>賞螢</h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
  
            <div class="row mt-5">
                <div class="col-12 text-center text-white rubberBand wow">
                    <h1>旅遊介紹</h1>
                </div>
                <hr class="hr-white">
            </div>
      
               


            <div class="row">
                <div class="col-12 col-md-5 my-3 indeximg slideInLeft wow">
                    <img src="./img/fish02.jpg" alt="" class="w-100 h-100 obj-fit">
                </div>
                <div class="col-12 col-md-7 my-3 text-white align-self-center indextext slideInRight wow">
                    <h1>賞魚</h1>
                    <p>
                    溪裡有魚，本是天經地義的事，尤其是遊客稀少的山中小溪，隨處都可看見魚群悠游。 
                    而愈接近都市的溪流，則因汙染嚴重或遭濫捕而致使魚跡滅絕，不得不藉由封溪保護來加以復育。
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-7 my-3 text-white align-self-center text-md-right indextext slideInLeft wow">
                    <h1>賞蝶</h1>
                    <p>
                    賞蝶旅遊線世界有二大越冬型蝴蝶，分別是墨西哥的帝王斑蝶及台灣的紫斑蝶，墨西哥的帝王斑蝶屬於溫帶型越冬蝶谷，
                    在海拔3000公尺車輛無法到達之山區，由於溫度關係，牠們緊密懸掛著，很少有活動型態，故大都只能靜態觀賞。
                    而相對的，台灣紫斑蝶是亞熱帶型越冬蝶谷，生活在海拔500公尺以下的山谷，每年11月到隔年3月，只要氣候無雨或陰天，
                    牠們幾乎是每天朝九晚五的的上下班，貫徹著三不政策：不打卡、不遲到、不請假，所以比較起來，欣賞台灣的紫斑蝶相對輕鬆、美妙、自在、容易、有趣多了。
                    </p>
                </div>
                <div class="col-12 col-md-5 my-3 indeximg slideInRight wow">
                    <img src="./img/butterfly02.jpg" alt="" class="w-100 h-100 obj-fit">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-5 my-3 indeximg slideInLeft wow">
                    <img src="./img/firefly02.jpg" alt="" class="w-100 h-100 obj-fit">
                </div>
                <div class="col-12 col-md-7 my-3 text-white align-self-center indextext slideInRight wow">
                    <h1>賞螢</h1>
                    <p>
                    螢火蟲又稱為「火金姑」，全球有2000多種，台灣約有60多種螢火蟲。
                    每年三月下旬至六月是螢火蟲旺季，是數量最多的季節，傍晚太陽下山後就會大量出現，直到隔日天亮前。
                    林木蓊鬱、清澈水質、無光害，都是適合螢火蟲生長、繁殖，出沒。
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-12 text-white text-center">
                <ul id="agency">
                    <li>
                        <a href="https://www.startravel.com.tw/"><img src="./img/startravel-logo.jpg"></a>
                    </li>
                    <li>
                        <a href="https://www.settour.com.tw/"><img src="./img/settour.jpg"></a>
                    </li>
                    <li>
                        <a href="https://www.liontravel.com/category/zh-tw/index"><img src="./img/liontravel.jpg"></a>
                    </li>
                    <li>
                        <a href="https://www.travel.com.tw/"><img src="./img/Phoenix_Tours.jpg"></a>
                    </li>
                    <li>
                        <a href="https://www.eztravel.com.tw/"><img src="./img/ezTravel.jpg"></a>
                    </li>
                </ul>
                
            </div>

        </div>

  
        </div>
        <div class="container-fluid bg-primary" id="footer">
        <div class="row justify-content-center">
            <div class="col-12 text-white text-center">
                &copy;<script>let d = new Date; document.write(d.getFullYear());</script>泰山PHP網頁設計班-熊君穎
            </div>
        </div>
    </div>
    </div>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script>
        $(document).on("readystatechange", function(){
            if(document.readyState == "complete"){
                $("#loading").fadeOut(2000, function(){
                    $("#content").fadeIn(1000);
                    $("#footer").fadeIn(1000);

                    new WOW().init();
                });
            }
        })
    </script>
</body>

</html>