

<body>
    <!-- modal login -->
        <div id="onphpidLogin" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form login -->
                    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" />
                    </div>
                    <div class="text-right">
                        <a href="#" data-toggle="modal"  class="btn btn-danger" aria-label="Close"
                                data-target="#Register">Register</a>
                        <button class="btn btn-danger" type="submit">Login</button>
                    </div>
                    </form>
                    <!-- end form login -->
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

             <!-- modal Register -->
        <div id="Register" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- form login -->
                    <form action="<?php echo base_url().'crud/register'; ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control" />
                    </div>
                    <div class="text-right">
                        <button class="btn btn-danger" type="submit">Register</button>
                    </div>
                    </form>
                    <!-- end form login -->
                </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header__nav">
            <div class="logo">
                <nav class="navbar text-light">
                <a class="navbar-brand ml-3"><i class="fa  fa-bookmark"></i>   UMKM</a>
                <form class="form-inline">

                <?php if($this->session->userdata('status') == "login"){ ?>
                     
                    

                        <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin : @<?php echo $this->session->userdata('nama'); ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
                        </div>
                        </div>

                    <?php }else{ ?>
                    <a href="#" data-toggle="modal"  class="btn btn-outline-light my-2 my-sm-0"
                            data-target="#onphpidLogin"><b>Login/Register</b></a>
                    <?php } ?>
                </form>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->


    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="fa fa-close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>

</html>