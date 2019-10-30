<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-413">
    <!--menu-->

    <div class="menu">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation" style="background-color:#2961ae;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layout Exemple<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu "  style="border-bottom: 1px solid red;">
                                <li style="border-bottom: 1px solid #f8f8f8;">  <a style="color:black" href="#">List Home Page</a></li>
                                <li style="border-bottom: 1px solid #f8f8f8;"><a style="color:black" href="#">Git Home Page</a></li>
                                <li ><a style="color:black" href="#">Full Width Exemple</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">STORE PAGE</a></li>
                        <li><a href="#">GREEN FOOD</a></li>
                        <li><a href="#">BABY</a></li>
                        <li><a href="#">BODY</a></li>
                        <li><a href="#">FACE</a></li>
                        <li><a href="#">ORAL CARE</a></li>
                        <li><a href="#">YOUR FAVORIUS</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-right">

                        <li>
                            <form action="" class="form-search">
                                <input type="search" class="search" placeholder="Search..." ,>
                                <i class="fa fa-search search-button"></i>
                            </form>
                        </li>
                        <li class="item-cart">
                            <a href="#" id="opennav"></i></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

        </div>
    </div>


</div>