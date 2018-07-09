
<?php
  include 'header.php';
?>
    <main role="main">
    
      <div class="container mt-4">
        <div class="row mt-4">
          <div class="col-md-12">
            <h2 class="text-center">Draggable</h2>
          </div>
           <div class="col-md-4">
             <img src="img/Desert.jpg" id="kart1"  class="img-fluid" alt="">
           </div>
           <div class="col-md-4">
              <img src="img/Hydrangeas.jpg" id="kart2" class="img-fluid" alt="">
           </div>
           <div class="col-md-4">
             <img src="img/Jellyfish.jpg"  id="kart3" class="img-fluid" alt="">
           </div>
         </div>
         <div class="row mt-4">
           <div class="col-md-12">
             <h2 class="text-center">Droppable</h2>
           </div>
           <div class="col-md-8 pics">
             <img src="img/Desert.jpg"  width="200" alt="">
             <img src="img/Hydrangeas.jpg" width="200" alt="">
             <img src="img/Chrysanthemum.jpg" width="200" alt="">
           </div>
           <div class="col-md-4">
             <img src="img/trashcan-empty-icon.png"  id="trash" alt="">
           </div>
         </div>
         <div class="row mt-4">
           <div class="col-md-12">
             <h2 class="text-center">Sortable</h2>
           </div>
           <div class="col-md-6">
             <ul class="spisok1">
               <li>Punkt 1a</li>
               <li>Punkt 2a</li>
               <li>Punkt 3a</li>
               <li>Punkt 4a</li>
               <li>Punkt 5a</li>
             </ul>
           </div>
           <div class="col-md-6">
             <ul class="spisok2">
               <li>Punkt 1</li>
               <li>Punkt 2</li>
               <li>Punkt 3</li>
               <li>Punkt 4</li>
               <li>Punkt 5</li>
             </ul>
           </div>
         </div>
         <div class="row mt-4">
           <div class="col-md-12">
             <h2 class="text-center">Resizable</h2>
           </div>
           <div class="col-md-6">
             <img id="resize" src="img/Desert.jpg" class="img-fluid" alt="">
           </div>
         </div>
        </div>
         <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container mt-4 text-center">
 
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
     <?php
       include 'footer.php';
     ?>

      