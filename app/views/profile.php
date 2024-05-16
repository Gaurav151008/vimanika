<?php require_once APP_ROOT."/app/views/layout/header.php"; ?>

<div class="row  p-0 m-0  mt-md-5 font-eng" style="background-image: url('<?php echo assets('imgs/left-blob.svg')?>');background-size: cover;">

    <div class="col-md-8 offset-md-2 mt-4">

        <h5 class="text-secondary pb-3 text-white text-center " style="color: white !important;">About Us <hr class='shine-br'></h5>

        <div class="row  no-gutter">

            <div class="col-md-6 toup ">
                <h3 class='mt-md-5 mt-3 text-secondary' style="color: white !important;">VYAMANIKA </h3>
                <h5 class='mt-3'>Drone Aerial Photography,Video, Agriculture & Mapping</h5>
                <p class='font-weight-bold mt-4 '>VYAMANIKA specializes in drone aerial photography, videography, agriculture services, and mapping solutions. With a focus on cutting-edge technology and precision, we capture stunning aerial imagery and videos for various purposes, including real estate, events, and promotional content. Our agricultural services utilize drones to gather data for crop monitoring, precision agriculture, and yield optimization.</p>
                <a href="<?php url('/report');?>" class='btn btn-sm btn-info'>Send Message</a><br>
                <div class='mt-3'>
                <img  src="<?=assets('imgs/brands/fb.png')?>" class='mr-2 ' style="height:30px;">
                <img  src="<?=assets('imgs/brands/twitter.png')?>" class='mr-2'  style="height:30px;">
                <img  src="<?=assets('imgs/brands/youtube.png')?>" class='mr-2'  style="height:30px;">
                <img  src="<?=assets('imgs/brands/instagram.png')?>" class='mr-2' style="height:30px;">
                </div>
            </div>
            
            <div class="col-md-6 animated zoomIn" style="animation-duration: 2000ms;">
                <div class="mt-5 hoverInOut pl-md-3 pr-md-3" style="border-radius: 20px;" >
                    <img src="<?=assets('imgs/logo.jpg')?>" class="img-fluid rounded">
                </div>
            </div>
            
        </div>
        <br>
    </div>
    
    <div class="col-md-8  offset-md-2  rounded mt-5 ">

        <h5 class='text-center pt-3' style="color: white !important;">Our Team</h5>
        <hr class='mt-1 shine-br'>

        <div class='row no-gutters mt-5 pt-2'>

            <div class='col-md-6 offset-md-3' >
                <p>"Meet the skilled professionals behind VYAMANIKA's innovative drone solutions."
                </p>
            </div>

            <div class='col-md-4 pr-3 pl-3 mt-3'>
                <div class="card p-2 hoverInOut box">
                    <img class="card-img-top" src="<?=assets('imgs/team/rm.jpg')?>" height='200px' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Viral Sondagar</h5>
                        <p class="card-text">testing data</p>
                        <img  src="<?=assets('imgs/brands/fb.png')?>" class='mr-2 ml-3' style="height:25px;">
                        <img  src="<?=assets('imgs/brands/twitter.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/youtube.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/instagram.png')?>" class='mr-2' style="height:25px;">
                    </div>
                </div>
            </div>

            <div class='col-md-4 pr-3 pl-3  mt-3'>
                <div class="card p-2 hoverInOut box">
                    <img class="card-img-top" src="<?=assets('imgs/team/vd.jpg')?>" height='200px' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Viral Sondagar</h5>
                        <p class="card-text">testing data</p>
                        <img  src="<?=assets('imgs/brands/fb.png')?>" class='mr-2 ml-3' style="height:25px;">
                        <img  src="<?=assets('imgs/brands/twitter.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/youtube.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/instagram.png')?>" class='mr-2' style="height:25px;">
                    </div>
                </div>
            </div>
            
            <div class='col-md-4 pr-3 pl-3  mt-3'>
                <div class="card p-2 hoverInOut box">
                    <img class="card-img-top" src="<?=assets('imgs/team/pw.jpg')?>" height='200px' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Viral Sondagar</h5>
                        <p class="card-text">Testing data</p>
                        <img  src="<?=assets('imgs/brands/fb.png')?>" class='mr-2 ml-3' style="height:25px;">
                        <img  src="<?=assets('imgs/brands/twitter.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/youtube.png')?>" class='mr-2'  style="height:25px;">
                        <img  src="<?=assets('imgs/brands/instagram.png')?>" class='mr-2' style="height:25px;">
                    </div>
                </div>
            </div>

        </div>
        <br><br><br><br>
    </div>
</div>

<?php require_once APP_ROOT."/app/views/layout/footer.php"; ?>


