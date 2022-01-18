<!--Start Admin SideBar-->
<div class="sidebar">
  <div class="logo-details">
    <i class="fas fa-store"></i>
    <span class="logo_name">E3rd</span>
  </div>

  <ul class="nav-links">
    <li>
      <a href="dashboard.php">
        <i class="fas fa-th-large"></i>
        <span class="link_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="categories.php">
        <i class="fas fa-sitemap"></i>
        <span class="link_name"><?php echo lang('CATEGORIRES') ?></span>
      </a>
    </li>
    <li>
      <a href="items.php">
        <i class="fas fa-puzzle-piece"></i>
        <span class="link_name"><?php echo lang('ITEMS') ?></span>
      </a>
    </li>
    <li>
      <a href="members.php">
        <i class="fas fa-users"></i>
        <span class="link_name"><?php echo lang('MEMBERS') ?></span>
      </a>
    </li>
    <li>
      <a href="comments.php">
      <i class="fas fa-comments"></i>
      <span class="link_name"><?php echo lang('COMMENTS') ?></span>
      </a>
    </li>
    <li>
      <a href="../index.php">
        <i class="fas fa-eye"></i>
        <span class="link_name"> Visit Shop</span>
      </a>
    </li>

    <li>
      <a href="members.php?do=Edit&userid=<?php echo $_SESSION['ID'] ?>">
        <i class="fas fa-edit"></i>
        <span class="link_name">Edit profile</span>
      </a>
    </li>

    <li>
      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        <span class="link_name">Log out</span>
      </a>
    </li>

  </ul>
</div>





<!--Home section-->
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class="fas fa-bars sidebarBtn"></i>
      <span class="dashboard">Dashboard</span>
    </div>

    <div class="searchbox">
      <input type="text" placeholder="search...">
      <i class="fas fa-search"></i>
    </div>

    <div class="profile-details">
      <img src="../images/no_avatar.png" alt="No avatar">
      <span class="admin_name">Mahmood Alfoqahaa</span>
      <i class="fas fa-chevron-down"></i>
    </div>
  </nav>

  <div class="seperator"></div>
  <!--Home content 
  

  Sales Content
  <div class="sales-boxes">
    <div class="recent-sale box">
      <div class="title">Recent Sales</div>
      <div class="sales-details">
        <ul class="details">
          <li class="Topic">Date</li>
          <li><a href="#">02 Jan 2021</a></li>
          <li><a href="#">02 Jan 2021</a></li>
          <li><a href="#">02 Jan 2021</a></li>
          <li><a href="#">02 Jan 2021</a></li>
          <li><a href="#">02 Jan 2021</a></li>
          <li><a href="#">02 Jan 2021</a></li>
        </ul>
        <ul class="details">
          <li class="Topic">Customer</li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">Alex Doe</a></li>
          <li><a href="#">Alex Doe</a></li>
        </ul>
        <ul class="details">
          <li class="Topic">Sale</li>
          <li><a href="#">Delivered</a></li>
          <li><a href="#">Delivered</a></li>
          <li><a href="#">Pending</a></li>
          <li><a href="#">Delivered</a></li>
          <li><a href="#">Retruned</a></li>
          <li><a href="#">Delivered</a></li>
        </ul>
        <ul class="details">
          <li class="Topic">Total</li>
          <li><a href="#">100JOD</a></li>
          <li><a href="#">102JOD</a></li>
          <li><a href="#">43JOD</a></li>
          <li><a href="#">2JOD</a></li>
          <li><a href="#">32JOD</a></li>
          <li><a href="#">54JOD</a></li>
        </ul>
      </div>
      <div class="button">
        <a href="#">See All</a>
      </div>
    </div>

    Right Side 
    <div class="top-sales box">
      <div class="title">Top Selling Product</div>
      <ul>
          <li>
            <a href="#">
              <img src="../images/R.jfif" alt="">
              <span class="product_name">Gucci Woman's Bag</span>
            </a>
            <span class="price">15.65JOD</span>
          </li>
          <li>
            <a href="#">
              <img src="../images/R.jfif" alt="">
              <span class="product_name">Gucci Woman's Bag</span>
            </a>
            <span class="price">15.65JOD</span>
          </li>
          <li>
            <a href="#">
              <img src="../images/R.jfif" alt="">
              <span class="product_name">Gucci Woman's Bag</span>
            </a>
            <span class="price">15.65JOD</span>
          </li>
          <li>
            <a href="#">
              <img src="../images/R.jfif" alt="">
              <span class="product_name">Gucci Woman's Bag</span>
            </a>
            <span class="price">15.65JOD</span>
          </li>
          <li>
            <a href="#">
              <img src="../images/R.jfif" alt="">
              <span class="product_name">Gucci Woman's Bag</span>
            </a>
            <span class="price">15.65JOD</span>
          </li>
          
        </ul>
       
    </div>
  </div>
</section> -->



