<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php echo base_url('/'); ?>"><?php echo $main_title ?></a>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/portofolio'); ?>">Portofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/pelatihan'); ?>">Pelatihan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/contact'); ?>">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#" type="button" class="btn-floating btn-sm text-white"><i class="fab fa-lg fa-facebook-f"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" type="button" class="btn-floating btn-sm text-white"><i class="fab fa-lg fa-twitter"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" type="button" class="btn-floating btn-sm text-white"><i class="fab fa-lg fa-instagram"></i></a>
      </li>
      <li class="nav-item">
        <a href="#" type="button" class="btn-floating btn-sm text-white"><i class="fab fa-lg fa-youtube"></i></a>
      </li>
    </ul>
  </div>
</nav>