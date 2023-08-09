<!doctype html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UNIC 링크 단축기</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h1>UNIC 링크 단축</h1>
        <p>긴 링크를 짧고 간단하게 바꿔드립니다.</p>
        <form action="process.php" method="post">
            <input class="form-control form-control-lg mt-5" type="text" placeholder="URL 입력"
                aria-label=".form-control-lg example" name="link">
            <input type="submit" class="btn btn-primary btn-lg mt-4" style="width: 100%;"></input>
            <div class="mt-5">
                <p>불법 도박, 성인 사이트 등 부적절한 사이트는 삭제됩니다.</p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>