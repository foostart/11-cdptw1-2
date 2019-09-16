<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-572">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar" ></span>
                <span class="icon-bar"></span >
            </button>
            <a class="navbar-brand" href="#"> </a >
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" >
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAYOUT EXAMPLES <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">List Home Page</a></li>
                        <li><a href="#">Gird Home Page</a></li>
                        <li><a href="#">Full Width Example</a></li>
                    </ul>
                </li>
                <li><a href="#">STORE PAGE</a></li>
                <li><a href="#">GREEN FOOD</a></li>
                <li><a href="#">BABY</a></li>
                <li><a href="#">BODY</a></li>
                <li><a href="#">FACE</a></li>
                <li><a href="#">ORAL CARE</a></li>
                <li><a href="#">YOUR FAVORITES</a></li>
            </ul>
            <div class="searchscroll search-form">
                <form method="post" action="#">
                    <div class="input-d">
                        <input type="text" name="tk" placeholder="Search...">
                    </div>
                    <button type="submit" class="s-btn">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</section>