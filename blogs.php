<?php 

$json = file_get_contents('my_data.json');
  
$json_data = json_decode($json);

    foreach($json_data as $page){
        echo '
        <div class="news-block">
            <div class="inner-box">
                <div class="image">
                    <a href="'.$page->link; echo'" target="_blank" ><img src="'.$page->imagePath; echo'" alt="" /></a>
                </div>
                <div class="lower-content">
                    <div class="post-date">'.$page->postdate; echo'</div>
                    <h5><a href="'.$page->link; echo'" target="_blank">'.$page->heading; echo' </a></h5>
                    <div class="text">'.$page->subject; echo' ...</div>
                    <div class="lower-box">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <div class="author">
                                <span class="author-image"><img src="images/icons/news-icon.png" alt="" /></span>
                                '.$page->author; echo'
                            </div>
                            <a href="'.$page->link; echo'" target="_blank" class="detail">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ';
    }
?>     
