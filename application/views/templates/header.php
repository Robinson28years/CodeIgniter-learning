<html>
<head>
    <title>CodeIgniter Tutorial</title>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="#">
                    asdfas
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="/threads">全部帖子</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        浏览
                        <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="/threads">全部帖子</a></li>
                        <!-- @if (auth()->check())
                          <li><a href="/threads?by={{ auth()->user()->name }}">我发布的帖子</a></li>
                        @endif -->
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        栏目
                        <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- @foreach ($channels as $channel)
                          <li><a href="/threads/{{ $channel->slug }}">{{ $channel->name}}</a></li>
                        @endforeach -->
                      </ul>
                    </li>
                    <li><a href="/threads/create">新的帖子</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <?php if($this->session->email == NULL) {?>
                        <li><a href="<?php echo site_url('user/login');?>">Login</a></li>
                        <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                    <?php }else{ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                11111<?php $this->session->email ?>
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?php echo site_url('user/logout');?>">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
