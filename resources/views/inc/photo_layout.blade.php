<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 2;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
?>
<div class="row">
<?php
foreach ($photos as $photo){
?>
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">

          <a class="lightbox" href="#{{$photo->title}}">
            <div style="background-image: url(/storage/images/{{$photo->location}});" class="mt-1">

            </div>
          </a>
          <div class="lightbox-target" id="{{$photo->title}}">
            <div style="background-image: url(/storage/images/{{$photo->location}})"></div>
            <a class="lightbox-close" href="#"></a>
          </div>

      </div>

<?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
}
?>
</div>
