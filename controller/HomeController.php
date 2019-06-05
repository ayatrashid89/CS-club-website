<?php
require 'model/Event.php';
class HomeController {

  public function buildAnnouncement(){
    $announ= new Event();
    $result=$announ->annoicmentSelect();
    foreach($result as $announcement){
      foreach ($announcement as $key=>$value)
    ?>
    <div class="announcements-container">
  <div class="container-title">Annoucement</div>
  <ul class="announcements">
  <li><?=$announcement['text']?></li>
    
    
  </ul>
</div>
    <?php
  }

  }

public function bulidComingEvent(){
$comingEvent= new Event();
$result=$comingEvent->upcomingEvents();
?>
<div class="main-content">
        <section class="slideshow">
          <div class="slideshow-inner">
            <div class="slides">

<?php
$count = 1;
foreach($result as $event){

    ?>
<div class="slide  <?php if($count===1){echo"is-active";}?>">
                <div class="slide-content">
                  <div class="caption">
                    <div class="title"><?=$event['title']?></div>
                    <div class="text">
                      <p><?=$event['description']?></p>
                     <p>Time and date: <?= $event['timestamp']?>
                    </div> 
                    <!--<a href="#" class="btn">-->
                      <!--<span class="btn-inner">Learn More</span>-->
                    </a>
                  </div>
                </div>
                <div class="image-container"> 
                  <img src="<?=$count?>.jpg" alt="" class="image" />
                </div>
              </div>

<?php
$count++;
} ?>
 </div>
            <div class="pagination">
              <div class="item is-active"> 
                <span class="icon">1</span>
              </div>
              <div class="item">
                <span class="icon">2</span>
              </div>
              <div class="item">
                <span class="icon">3</span>
              </div>
              <div class="item">
                <span class="icon">4</span>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow prev">
                <span class="svg svg-arrow-left">
                  <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
              <div class="arrow next">
                <span class="svg svg-arrow-right">
                  <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                  <span class="alt sr-only"></span>
                </span>
              </div>
            </div>
          </div> 
        </section>
    </div>
<?php
}

        public function previousEventsTemplate(){
            $allEvents =  new Event();
            $result = $allEvents->preEvents();
            ?>
            <div class="main-content">
                    <section class="slideshow">
                      <div class="slideshow-inner">
                        <div class="slides">
            
            <?php
            $count = 1;
            foreach($result as $event){
            
                ?>
            <div class="slide  <?php if($count===1){echo"is-active";}?>">
                            <div class="slide-content">
                              <div class="caption">
                                <div class="title"><?=$event['title']?></div>
                                <div class="text">
                                  <p><?=$event['description']?></p>
                                  <p>Time and date: <?= $event['timestamp']?>
                                </div> 
                                <!--<a href="#" class="btn">-->
                                  <!--<span class="btn-inner">Learn More</span>-->
                                </a>
                              </div>
                            </div>
                            <div class="image-container"> 
                              <img src="./images/<?=$count?>.jpg" alt="" class="image" />
                            </div>
                          </div>
            
            <?php
            $count++;
            } ?>
             </div>
                        <div class="pagination">
                          <div class="item is-active"> 
                            <span class="icon">1</span>
                          </div>
                          <div class="item">
                            <span class="icon">2</span>
                          </div>
                          <div class="item">
                            <span class="icon">3</span>
                          </div>
                          <div class="item">
                            <span class="icon">4</span>
                          </div>
                        </div>
                        <div class="arrows">
                          <div class="arrow prev">
                            <span class="svg svg-arrow-left">
                              <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
                              <span class="alt sr-only"></span>
                            </span>
                          </div>
                          <div class="arrow next">
                            <span class="svg svg-arrow-right">
                              <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
                              <span class="alt sr-only"></span>
                            </span>
                          </div>
                        </div>
                      </div> 
                    </section>
                </div>
            <?php
            }
           
        

public function eventCalendar(){
  $allEvents =  new Event();
  $eventsCalendar = $allEvents->eventsCalendar();
  foreach ($eventsCalendar as $key) {
    // converting string to timestamp with millisecond ($date*1000)
    $date = strtotime($key['timestamp']);
    $date = $date * 1000;
    $newArray[] = array("title" => $key['title'], "date" => $date);
    $upcomingEvents = json_encode($newArray);

}
return $upcomingEvents;


}
    

}





?>  