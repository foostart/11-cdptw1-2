<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-572">
        <!--Text----Text----Text----Text----Text----Text----Text----Text----Text----Text----Text----Text----Text-->
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	
	<div class="collapse navbar-collapse js-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">LAUOUT EXAMPLES <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
                    <div class="cucu">
						<ul>
							<li><a href="#">List Home Page</a></li>
                            <li><a href="#">Gird Home page</a></li>
                            <li><a href="#">Full Width Example</a></li>
                        </ul>
                    </div>
				</ul>				
			</li>
            <li><a href="#">STORE LOCATION</a></li>
            <li><a href="#">GREEN FOOD</a></li>
            <li><a href="#">BABY</a></li>
            <li><a href="#">BODY</a></li>
            <li><a href="#">FACE</a></li>
            <li><a href="#">ORAL CARE</a></li>
            <li><a href="#">YOUR FAVORITES</a></li>
		</ul>
        <ul class="nav navbar-nav navbar-right">
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
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</section>