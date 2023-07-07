<link href="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script>
    $(document).ready(function() {

    // Gets the video src from the data-src on each button

    var $videoSrc;  
    $('.video-btn').click(function() {
        $videoSrc = $(this).data( "src" );
    });
    console.log($videoSrc);

    // when the modal is opened autoplay it  
    $('#myModal').on('shown.bs.modal', function (e) {

    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" );

    })


    // stop playing the youtube video when I close the modal
    $('#myModal').on('hide.bs.modal', function (e) {
        // a poor man's stop video
        $("#video").attr('src',$videoSrc); 
    }) 
    // document ready  
    });
</script>
<style>
    
    .modal-dialog {
        max-width: 800px;
        margin: 30px auto;
    }



    .modal-body {
    position:relative;
    padding:0px;
    }
    .close {
        position:absolute;
        right:-30px;
        top:0;
        z-index:999;
        font-size:2rem;
        font-weight: normal;
        color:#fff;
        opacity:1;
    }
</style>


<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar') ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                    <?php if ($user == 'superadmin'): ?>
                        <div class="card-header" id="headingOne">
                        <h6 class="mb-0 text-primary">
                        <a class="nav nav-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>TUTORIAL ROLE ADMIN</span>
                        </a>
                        </h6>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body ml-3 text-justify">
                            Tutorial untuk akun admin adalah kumpulan tutorial penggunaan website Archive Digital dan penjelasan beberapa fitur yang ada di website Archive Digital
                            </div>
                            <button type="button" class="btn btn-primary ml-4 mb-3">
                                Download Tutorial Untuk Admin
                            </button>
                        </div>
                    <?php endif; ?>
                    </div>

                    <div class="card">
                    <?php if ($user == 'admin'): ?>
                    <div class="card-header" id="headingTwo">
                        <h6 class="mb-0 text-primary">
                        <a class="nav nav-link collapsed" type="button" data-toggle="collapse" data-target="#collapsedua" aria-expanded="false" aria-controls="collapseTwo">
                        <span>TUTORIAL ROLE USER</span>
                        </a>
                        </h6>
                    </div>
                    <div id="collapsedua" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                        Tutorial untuk akun User adlaah kumulan tutorial penggunaan website Archive Digital dan penjelasan beberapa Fitur yang dapat di akses
                        </div>
                        <button type="button" class="btn btn-primary video-btn ml-4 mb-3" data-toggle="modal" data-src="https://www.youtube.com/embed/Wyb0ExKOE4w" allowfullscreen data-target="#myModal">
                                Download Turorial Untuk User
                        </button>
                    </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">

    
    <div class="modal-body">

    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>        
        <!-- 16:9 aspect ratio -->
    <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>