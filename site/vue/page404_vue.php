<head>
    <link href="static/css/page404.css" rel="stylesheet" />
</head>

<body>
    
    <h1>
        <?php
        $dataJson = json_decode($data, true);
        echo $dataJson["404"];
        ?>
    </h1>

    <img src="static/images/404.jpg" alt="image 404" />
</body>