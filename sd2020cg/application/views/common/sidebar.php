<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li><a href="#"><i class="fa fa-fw fa-user"></i> <span>うちの13班</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-users"></i> <span>よその13班</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-comments"></i> <span>交流・投稿</span></a></li>
      <li><a href="#"><i class="fa fa-fw fa-star"></i> <span>お気に入り</span></a></li>
    </ul>
  </section>

  <?php if (ENVIRONMENT == 'development'){ ?>
  <p style="padding: 0.3em; color: #999999;">
    Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?><br>
    Memory usage : {memory_usage}
  </p>
  <?php } ?>
</aside>
