<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/index.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

  <title> EnderIO </title>
<!--
    @if (Request::segment(2))
      {{ Request::segment(2) }} — EnderIO
    @elseif (Request::segment(1))
      {{ Request::segment(1) }} — EnderIO
    @else
      EnderIO
    @endif
  </title>
-->
</head>
<body>
  <div id="header">
    <div class="container">
      <div class="logo">EnderIO</div>
      <a href="https://github.com/SleepyTrousers/EnderIO/wiki" id="wiki" class="ender-button" target="_blank">EnderIO Wiki <i class="fa fa-fw fa-angle-right"></i></a>
    </div>
  </div>
  <div id="mods">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="http://minecraft.curseforge.com/mc-mods/ender-io" target="_blank" class="mod enderio">
            <div class="info">
              <h3 class="title">EnderIO</h2>
              <p class="description">Compact conduits, machines, powerful tools and armour and more</p>
            </div>
          </a>
          <div class="mod-links row no-gutters">
            <div class="col-lg-6 col-12"><a href="https://minecraft.curseforge.com/projects/ender-io" target="_blank" class="ender-button">CurseForge</a></div>
            <div class="col-lg-6 col-12"><a href="https://minecraft.curseforge.com/projects/ender-io/files" target="_blank" class="ender-button">Downloads</a></div>
            <div class="col-lg-6 col-12"><a href="https://github.com/CrazyPants/EnderIO" target="_blank" class="ender-button">Source Code</a></div>
            <div class="col-lg-6 col-12"><a href="http://loenwind.info/eio_issue.html" target="_blank" class="ender-button">Bug Reports & Suggestions</a></div>
          </div>
        </div>
        <div class="col-md-6">
          <a href="http://minecraft.curseforge.com/mc-mods/ender-zoo" target="_blank" class="mod ender-zoo">
            <div class="info">
              <h3 class="title">Ender Zoo</h2>
              <p class="description">New hostile mobs from enderminies to dire wolves and fallen steeds</p>
            </div>
          </a>
          <div class="mod-links row no-gutters">
            <div class="col-lg-6 col-12"><a href="https://minecraft.curseforge.com/projects/ender-zoo" target="_blank" class="ender-button">CurseForge</a></div>
            <div class="col-lg-6 col-12"><a href="https://minecraft.curseforge.com/projects/ender-zoo/files" target="_blank" class="ender-button">Downloads</a></div>
            <div class="col-lg-6 col-12"><a href="https://github.com/CrazyPants/EnderZoo" target="_blank" class="ender-button">Source Code</a></div>
            <div class="col-lg-6 col-12"><a href="http://loenwind.info/eio_issue.html" target="_blank" class="ender-button">Bug Reports & Suggestions</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--
  <div id="news">
    <div class="container">
      @foreach ($posts as $post)
      <div class="news-item">
        <div class="header">
          <img class="avatar" src="http://enderio.com/img/avatars/{{ $post->author }}.png">
          <div class="meta">
            <h2 class="title">{{ $post->title }}</h2>
            <div class="info">
              <span>Posted by <strong>{{ $post->author }}</strong> on <strong>{{ date("d F Y, g:i A", strtotime($post->created_at)) }}</strong></span>
            </div>
          </div>
        </div>
        <div class="content">
          {{ $post->content }}
        </div>
      </div>
      @endforeach
    </div>
  </div>
-->
  <div id="footer">
    <div class="container">
      <div id="footer-content">
        <span>&copy; CrazyPants 2014</span>
      </div>
    </div>
  </div>
</body>
</html>
