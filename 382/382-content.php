<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-382">
    <div class="top-header">
        <div class="container">
                <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse navbar-left">
                        <ul class="nav navbar-nav">
                            <li class="dropdown menu-large dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> HOMEPAGES <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu megamenu row sm-menu">
                                    <li>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-2">
                                            <a href="#" class="thumbnail">
                                                <img src="./images/menu/t1.png" class="img-responsive" alt="" width="100%"
                                                    height="100%" />
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> SHOP <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu sm-menu">
                                    <li><a href="#">Category – Right sidebar</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category – Full width</a></li>
                                </ul>
                            </li>
                            <li class="dropdown menu-large dmenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">WIDGETS MENU <b
                                        class="caret"></b></a>
                                <ul class="dropdown-menu megamenu row sm-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Products Categoreis</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li class="divider"></li>
                                            <li class="disabled"><a href="#">How to use</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Examples</a></li>
                                            <li class="divider"></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <img src="./images/menu/menu-banner-collection.jpg" alt="" width="100%"
                                                height="100%" class="img-responsive" />
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Top Rated Products</li>
                                            <li class="divider"></li>
                                            <img src="./images/menu/j-1.jpg" alt="" width="40%" height="40%"
                                                class="img-responsive" />
                                            <li><a href="#">Keni Jeans Mog</a></li>
                                            <li class="divider"></li>
                                            <img src="./images/menu/j9.jpg" alt="" width="40%" height="40%"
                                                class="img-responsive" />
                                            <li><a href="#">Mongoose L</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Tags</li>
                                            <li class="divider"></li>
                                            <div class="tg">
                                                <button>Beatifull</button>
                                                <button>Best</button>
                                                <button>Big</button>
                                                <button>Blog</button>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>

                            </li>
                            <li class="dropdown dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> PAGES <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu sm-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category – Full width</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                </ul>
                            </li>
                            <li class="dropdown menu-large dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> SHORTCODES <b
                                        class="caret"></b>
                                </a>
                                <ul class="dropdown-menu megamenu row sm-menu">
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Products Categoreis</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Products Categoreis</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Products Categoreis</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Products Categoreis</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Available glyphs</a></li>
                                            <li><a href="#">How to use</a></li>
                                            <li><a href="#">Examples</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> BLOG <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu sm-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category – Full width</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                </ul>
                            </li>
                            <li class="dropdown dmenu">
                                <a href=" #" class="dropdown-toggle" data-toggle="dropdown"> EXTRA <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu sm-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Category – Full width</a></li>
                                    <li><a href="#">Category – Top slider 1</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form" role="search">
                                <div class="input-group add-on">
                                    <input class="form-control" placeholder="Search" name="srch-term" id="srch-term"
                                        type="text">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i
                                                class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
</div>
