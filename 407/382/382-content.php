<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-382" style="background-color: #414956"; style="color: #414956";>
    <div class="container" style="background-color: #414956";>
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search..">
                            </div>
                            <button type="submit" class="btn btn-default"><img src="<?php echo $url_path ?>/images/menu/search.png" alt=""width="18px" height="18px"></button>
                        </form>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span class="caret"></span></a>				
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-md-2 col-sm-4">
                                    <div class="item">
                                        <a href="">
                                            <div class="img-hov"> 
                                                <img src="<?php echo $url_path ?>/images/menu/t1.png" class="responsive" alt=""width="100%" height="100%"/>
                                            </div> 
                                        </a>
                                    </div>                                      
                                </li>
                            </ul>				
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHOP<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Category – Right sidebar</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Category – Top slider 1</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Category – Full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">WIDGETS MENU<span class="caret"></span></a>				
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <div class="row">
                                    <li class="col-md-3 col-sm-6 col-xs-6">
                                        <ul>
                                            <li class="dropdown-header">Product Categories</li>
                                            <li class="divider"></li>
                                            <li><a href="#">Acustic</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hipster</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Men</a></li>
                                            <li class="divider"></li>
                                        </ul>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-6">
                                        <ul>
                                            <div class="img-hov">
                                                <img src="<?php echo $url_path ?>/images/menu/menu-banner-collection.jpg" alt="" width="100%" height="100%"/>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-6">
                                        <ul>
                                            <li class="dropdown-header">Top Rated Products</li>
                                            <li class="divider"></li>
                                            <div class="img-hov"> 
                                                <img src="<?php echo $url_path ?>/images/menu/j-1.jpg" alt=""/>
                                            </div>
                                            <span>Keni Jeans Mog</span>
                                            <li class="divider"></li>
                                            <div class="img-hov"> 
                                                <img src="<?php echo $url_path ?>/images/menu/j9.jpg" alt=""/>
                                            </div>
                                            <span >Mongoose L</span>
                                        </ul>
                                    </li>
                                    <li class="col-md-3 col-sm-6 col-xs-6">
                                        <ul>
                                            <li class="dropdown-header">Tags</li>
                                            <li class="divider"></li>
                                            <div class="tagcloud01">
                                                <ul>
                                                    <li><a href="#">tag</a></li>
                                                    <li><a href="#">tag</a></li>
                                                    <li><a href="#">tag</a></li>
                                                </ul>
                                            </div>
                                        </ul>
                                    </li>
                                </div>
                            </ul>				
                        </li>
                        <li class="dropdown">
                            <div class="clear"></div>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li class="dropdown mega-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">SHORTCODES<span class="caret"></span></a>				
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-md-3 col-sm-6">
                                    <ul>
                                        <li class="dropdown-header">Content</li>
                                        <li class="divider"></li>
                                        <li><a href="#">Acustic</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <ul>
                                        <li class="dropdown-header">Social & Carousels</li>
                                        <li class="divider"></li>
                                        <li><a href="#">Acustic</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <ul>
                                        <li class="dropdown-header">Text contents</li>
                                        <li class="divider"></li>
                                        <li><a href="#">Acustic</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3 col-sm-6">
                                    <ul>
                                        <li class="dropdown-header">Featured</li>
                                        <li class="divider"></li>
                                        <li><a href="#">Acustic</a></li>
                                    </ul>
                                </li>
                            </ul>				
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Classical blog</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Pinterest blog</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Big blog</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">EXTRAS<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Documentation</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Video Tutorials</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>
