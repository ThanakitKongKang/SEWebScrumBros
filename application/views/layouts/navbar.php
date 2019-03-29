<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo current_url() ==  base_url().'projects' ? 'active' : ''; ?>">
            <a href="<?php echo base_url().'projects'; ?>">
                Projects
                <!-- <span class="sr-only">(current)</span> -->
            </a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
          <?php if ($this->session->userdata('logged_in')): ?>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      <?php echo $this->session->userdata('username'); ?>
                      <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url().'users/logout'; ?>">Logout</a></li>
                  </ul>
                </li>

          <?php else: ?>
              <li><a href="<?php echo base_url().'users/register'; ?>">Register</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
