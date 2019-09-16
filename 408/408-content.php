<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-567">
    <div class="container">
        <div class="col-md-12">
            <div class="related_articles clearfix">
                <div class="related_title">
                    Related Articles
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <a href="#" class="rh_related_link_image">
                                <img src="images/images.jpg.jpg" alt=""/>
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
                <div class="col-md-3">
                    <ul>
                        <li>
                            <a href="#" class="rh_related_link_image">
                                <img src="images/images4.jpg" alt=""/>
                                <p>Statin, tablets</p>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
            <div >
                <div class="title_comments">6 Comments
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
                                        <div>
                                            <i class="fa fa-star-o">
                                                0.00
                                            </i>
                                        </div>
                                        <span>April 11, 2016 at 12:55 pm</span>
                                    </div>
                                </div>
                                <p>This is excellent deal, bro
                                </p>
                            </div>
                        </li><!-- #comment-## -->
                        <li class="comment odd alt" >
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#"> Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn">demouser<span class="rh-user-rank-mc">Newbie
                                            </span>
                                        </span>
                                        <div><i class="fa fa-star-o"></i> 0.00</div>
                                        <span class="time">April 11, 2016 at 12:55 pm</span>
                                    </div>
                                </div>
                                <p>So pretty thing</p>
                            </div>
                        </li><!-- #comment-## -->
                        <li class="comment even" >
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#" >Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn">nanetest</span>
                                        <div >
                                        </div>
                                        <span class="time">May 10, 2016 at 6:58 am</span>
                                    </div>
                                </div>
                                <p>This is a test comment</p>
                            </div>
                        </li><!-- #comment-## -->
                        <li class="comment odd alt" id=" 4">
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn">bill<span class="rh-user-rank-mc">Newbie
                                            </span>
                                        </span>
                                        <div><i class="fa fa-star-o"></i> 0.00</div>
                                        <span class="time">May 27, 2016 at 10:55 am</span>
                                    </div>
                                </div>
                                <p>O M G</p>
                            </div>
                        </li><!-- #comment-## -->
                        <li class="comment even" >
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn"><a href="#">dkssud
                                            </a>
                                        </span>
                                        <div>
                                            <i class="fa fa-star-o">
                                                15.00
                                            </i>
                                        </div>
                                        <span class="time">September 3, 2016 at 5:36 am</span>
                                    </div>
                                </div>
                                <p>Test</p>
                            </div>
                        </li><!-- #comment-## -->
                        <li class="comment odd alt" >
                            <div class="commbox">
                                <div class="comment-author clearfix">
                                    <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                    <img src="images/images2.jpg" alt=""/>
                                    <div >
                                        <span class="fn">
                                            <a href="#S" target="_blank" rel="nofollow">testor
                                            </a>
                                        </span>
                                        <div >
                                        </div>
                                        <span class="time">September 11, 2016 at 9:32 pm</span>
                                    </div>
                                </div>
                                <p>Testor</p>
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
                            <div class="lbl col-md-1">
                                <label>Name</label>
                            </div>
                            <div class="ip col-md-3">
                                <input type="text" name="" id ="name" placeholder ="Name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="lbl col-md-1">
                                <label>Email</label>
                            </div>
                            <div class="ip col-md-3">
                                <input type="text" name="" id ="email" placeholder ="Email...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="lbl col-md-1">
                                <label>Website</label>
                            </div>
                            <div class="ip col-md-3">
                                <input type="text" name="" id ="web" placeholder ="Website...">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="lbl col-md-1">
                                <label>Comment</label>
                            </div>
                            <div class="ip col-md-3">
                                <textarea type="text" name="" id ="comment" placeholder ="Comment..."></textarea>
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-primary">Submit Comment</button>
                </div>
            </div>
        </div>

    </div>
</div>