<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>board</title>
    <link href="/css/board.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="active navbar-brand" href="/">board</a>
            </div>
        </div>
    </nav>
    <div style="min-height: calc(100vh - 30px)">
        <div style="height:50px; background-color:transparent"></div>
        @yield('content')
    </div>
    <footer class="bs-docs-footer" style="background-color: #000000; height: 30px">
        <div class="container">
            <p class="text-muted"></p>
        </div>
    </footer>
</body>
</html>