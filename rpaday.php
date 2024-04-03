<?php 

$json = file_get_contents('event_data.json');
  
$json_data = json_decode($json);

    foreach($json_data as $page){
        echo '

        <div class="news-block_one col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: 100px;">
        <div class="news-block_one-inner">

            <div class="news-block_one-content">
                <ul class="news-block_one-info">
                    <li><span class="news-block_one-icon fa fa-regular fa-calendar fa-fw"></span>'.$page->eventdate; echo'</li>
                </ul>
                <h5 class="news-one_heading"><a href="#">'.$page->eventheading; echo'</a></h5>
                <div class="news-one_text" style="margin-top: 25px;">'.$page->eventdescription; echo'</div>
                <!-- Button Box -->
                <div class="news-one_button-box text-center">
                    <a class="theme-btn news-one_load-btn" href="'.$page->eventlink; echo'" target="_blank">
                        Load more
                    </a>
                </div>
            </div>
        </div>
    </div>

        ';
    }
?>     