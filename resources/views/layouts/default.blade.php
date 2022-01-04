<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- @section('title')で定義したものをはめ込む -->
  <link rel="stylesheet" href="css/reset.css/">
  <link rel="stylesheet" href="css/index.css"/>
  <!--
    default.blade.phpの場所はresources/views/layouts
    CSSの場所はpublic/css/reset.css
    だけどこのパス指定でいいらしい
  -->
  
  <style>
  
  </style>
    
</head>
<body>

  <div class="content">
  @yield('content')
  </div>

</body>
</html>