<body>
<!-- Wrapper All Content
===============================-->
<div class="wrapper">
  <!-- Header
===============================-->
  <header>
      <div class="container clearfix">
      <div class="aveta-logo"><a href="/admin"><img src="/images/foea.png" alt="Aveta Logo"  /></a></div>
      <!--End Logo-->
      <nav id="navigation">
          <ul class="menu-lamp hidden-phone" id="menu-lamp">
              <li><a href="/admin/dashboard" class="active" data-desc="dashboard">Dashboard</a></li>
              <li><a href="/admin/page"  data-desc="Pages">Pages</a></li>
              <li><a href="/admin/page/order"  data-desc="Order">Order pages</a></li>
              <li><a href="/admin/user"  data-desc="Users">Users</a></li>
              <li><a href="/admin/staff"  data-desc="Staff">Staff</a></li>
              <li><a href="/admin/customer"  data-desc="Customer">Customer</a></li>
              <?php
                /*foreach ($menu_items as $item => $item_data) {
                  echo '<li><a' . ($item == $menu_current ? ' class="active"' : '') . '';
                  echo ' href="/index.php/magazine/' . $item . '" data-desc="' . $item_data['desc'] .  '">' . $item_data['label'] . '</a>';
                  echo '</li>';
                }*/
              ?>
      </ul>
<div id="box">
            <div class="head"><i class="icon-caret-down"></i></div>
          </div>

      </nav>
      <!--End Navigation-->
    </div>
  </header>
  
    <section id="page-section-1" class="page-section">