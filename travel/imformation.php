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
    <link rel="stylesheet" href="./css/dataTables.bootstrap4.min.css">
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
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">
                            <i class="fas fa-home"></i> 首頁
                        </a>
                    </li>
                    <li class="nav-item active">
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
    <?php

    $curl = curl_init();


    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");


    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curl, CURLOPT_URL, "http://data.ntpc.gov.tw/api/v1/rest/datastore/382000000A-002079-001");

    $result = curl_exec($curl);


    curl_close($curl);


    $json = json_decode($result, true);
?>
    <div id="page">
        <div class="container-fluid" id="loading">
            <div class="row h-100">
                <div class="col-12 text-center align-self-center">
                <img src="./img/butterfly.gif" alt="" width="2000" height="1000">                    
                <p class="text-white">載入中...</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-white rubberBand wow my-2">
                    <h1>賞魚、蝶、螢之資訊</h1>
                </div>
                <hr class="hr-white">
                <div class="col-12">
                    <table class="table table-hover table-light table-rwd my-2 rounded" id="showtable">
                        <thead class="thead-dark rounded tr-hide">
                            <tr>
                                <th>類別</th>
                                <th>區域</th>
                                <th>名稱</th>
                                <th>特徵</th>
                                <th>交通資訊</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    foreach($json["result"]["records"] as $rec){
            ?>
                            <tr>
                                <td data-th="類別"><?=$rec["category"]?></td>
                                <td data-th="區域"><?=$rec["district"]?></td>
                                <td data-th="名稱"><?=$rec["name"]?></td>
                                <td data-th="特徵"><?=$rec["characteristic"]?></td>
                                <td data-th="交通資訊"><?=$rec["Transportation"]?></td>
                            </tr>
                            <?php
        }
    ?>
                        </tbody>
                    </table>

        </div>
                </div>

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
    <div class="modal fade" tabindex="-1" role="dialog" id="modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).on("readystatechange", function () {
            if (document.readyState == "complete") {
                $("#loading").fadeOut(2000, function () {
                    $("#content").fadeIn(1000);
                    $("#footer").fadeIn(1000);

                    new WOW().init();
                });
            }
        })
        let sitetable = $("#showtable").DataTable({
            "language": {
                "url": "./js/datatables-chinese-traditional.json"
            },
        });
    </script>

</body>

</html>