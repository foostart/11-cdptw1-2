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
        <div class="col-md-12 chama">
            <div class="row">
                <h1 class="header">Related Archive</h1>
                <div class="col-md-4 ">
                    <img class="asss" src="images/images4.jpg" alt="img-responsive" style="width:100%;heigh:50px">
                    <p class="theb">Soft And Ultra Free</p>
                </div>
                <div class="col-md-4 ">
                    <img class="asss" src="images/images4.jpg" alt="img-responsive" style="width:100%;heigh:50px">
                    <p class="theb">Soft And Ultra Free</p>
                </div>
                <div class="col-md-4 ">
                    <img class="asss" src="images/images4.jpg" alt="img-responsive" style="width:100%;heigh:50px">
                    <p class="theb">Soft And Ultra Free</p>
                </div>
            </div>
        </div>
        <h2 class="comment">Comment</h2>
        <div class="col-md-12 khunghinh">

            <div class="" style="position:relative">
                <div class="col-md-1"><img src="images/images2.jpg" alt="img-responsive">
                </div>
                <div class="col-md-10 col-sm-6" style="position:relative">
                    <p>DEMOSER <a class="newbie">newbie</a></p>
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
                    </div> <br>
                    <p class="vcl ">April , 20/07/2019 at 20:00pm</p>
                </div> 
                <div class="col-md-1">
                    <p class="reply">Reply</p>
                </div>
                <div class="thisis">
                    This is so good
                </div>
            </div>
        </div>
        <div class="col-md-12 khunghinh">

            <div class="" style="position:relative">
                <div class="col-md-1"><img src="images/images2.jpg" alt="img-responsive">
                </div>
                <div class="col-md-10 col-sm-6">
                    <p>DEMOSER <a class="newbie">newbie</a></p>
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
                    </div> <br>
                    <p class="vcl">April , 20/07/2019 at 20:00pm</p>
                </div>
                <div class="col-md-1">
                    <p class="reply">Reply</p>
                </div> <br>
                <div class="thisis">
                    So prety thinks
                </div> <br>
            </div>
        </div>
        <h2 class="comment1">Leave a comment</h2>
        <div class="osad">
            <div class="col-md-6">
                <div class="form-group-inner inner">
                    <span class="text-medium">Email :</span><input type="text" name="filter-title" class="form-control"
                        placeholder="Email.....">
                </div>
                <div class="form-group-inner inner">
                    <span class="text-medium">WebSite :</span><input type="text" name="filter-title" class="form-control"
                        placeholder="WebSite.....">
                </div>
                <div class="form-group-inner inner">
                    <span class="text-medium">Name :</span><input type="text" name="filter-title" class="form-control"
                        placeholder="Name.....">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    Comment
                    <textarea class="form-control" rows="4" id="comment"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>