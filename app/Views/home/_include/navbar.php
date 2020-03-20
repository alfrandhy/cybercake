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
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Social Media</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Instagram</a>
          <a class="dropdown-item" href="#">Twitter</a>
          <a class="dropdown-item" href="#">youtube</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>