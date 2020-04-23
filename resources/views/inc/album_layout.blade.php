<?php
$numOfCols = 2;
$rowCount = 0;
//Bootstrap grids are divided by 12 sections, split evently between numOfCols
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="mx-auto">
    <div class="row">
    <?php
    //for all albums
    foreach ($albums as $album){
    ?>
    <div class="col-md-<?php echo $bootstrapColWidth; ?>">
        <?php
        //for all photos passed
        foreach ($photos as $photo) {
            //finding the first photo with matching id to display
            if($album->id == $photo->album_id) {
         ?>
          <!-- displaying photo found, photos are uploaded into /storage/images via user dashboard -->
            <div style="background-image: url(/storage/images/{{$photo->location}});background-position: center; background-repeat: no-repeat; background-size: cover; width: 350px; height: 350px;" class="mt-4">
              <div class="nav-bg">
                <a class="text-white" href="/albums/{{$album->id}}/photos"><h3>{{ $album->title }}</h3></a>

                <!--<p class="text-white">{{$album->desc}}</p> -->
              </div>
            </div>
        <?php
                break; //break the loop
              }//closing album->id == $photo->album_id
          }//closing photo foreach
        ?>

    </div> <!-- closing col tag -->

    <?php
        $rowCount++;
        if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
    } //closing album foreach
    ?>
    </div>
</div>
