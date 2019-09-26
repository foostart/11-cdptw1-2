<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="type-567">
    <div class="container">
        <div class="col-md-12 ">
            <div class="related_articles clearfix">
                <div class="related_title">
                    Related Articles
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#" class="rh_related_link_image">
                                <img class="img-responsive" src="images/images.jpg.jpg" alt=""/>
                                <p>Soft and Ultra fine bristles</p>
                            </a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#" class="rh_related_link_image">
                                <img src="images/images1.jpg.jpg" alt=""/>
                                <p>Angel Baby, Bottom Balm</p>
                            </a>

                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#" class="rh_related_link_image">
                                <img src="images/images4.jpg" alt=""/>
                                <p>Statin, tablets</p>
                            </a>

                        </li>
                    </ul>
                </div>
                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlid  e(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
            </div>
            <div >
                <div class="title_comments"> Comments
                </div>
                <div class="cmtlist">
                    <ol class="commentlist">
                        <li class="comment even" >
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn">demouser
                                            <span class="rh-user-rank-mc">Newbie</span>
                                        </span>
                                        <div class="rate">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                            </div>
                                        <span>April 11, 2016 at 12:55 pm</span>
                                    </div>
                                </div>
                                <p>This is excellent deal, bro
                                </p>
                            </div>
                        </li><!-- #comment-## -->
                    </ol>
                    <div >
                    </div>
                </div>
                <ol class="commentlist">
                </ol>
                <div class="comment-">
                    <h3 >Leave a reply </h3>
                    <form class="form-horizontal" role="form" action="#" method="POST">
                        <div class="form-group">
                                <label>Name</label>
                                <div>
                                <input type="text" name="" id ="name" placeholder ="Name..."></div>
                        </div>
                        <div class="form-group">
                                <label>Email</label>
                                <div>
                                <input type="text" name="" id ="email" placeholder ="Email..."></div>
                        </div>
                        <div class="form-group">
                                <label>Website</label>
                                <div>
                                <input type="text" name="" id ="web" placeholder ="Website..."></div>
                        </div>
                        <div class="form-group">
                                <label>Comment</label>
                                <div>
                                <textarea type="text" name="" id ="comment" placeholder ="Comment..." rows="5" cols="146.3"></textarea></div>
                        </div>
                        <div class="form-group1">
                        <div class="aas">
                            <div class="rate">
                            <input type="text" id="comment" name="rates" value="5" />
                            <label for="star6" title="text">5 stars</label>
                            <input type="text" id="comment" name="rates" value="4" />
                            <label for="star7" title="text">4 stars</label>
                            <input type="text" id="comment" name="rates" value="3" />
                            <label for="star8" title="text">3 stars</label>
                            <input type="text" id="stcomment" name="rates" value="2" />
                            <label for="star9" title="text">2 stars</label>
                            <input type="text" id="comment" name="rates" value="1" />
                            <label for="star10" title="text">1 star</label>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="lol">
                    <button class="btn btn-primary">Submit Comment</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>