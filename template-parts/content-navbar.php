<?php
/**
 * Navigation bar
 *
 * @package Bogaty
 */
?>

<div id="main-navbar" class="justify-content-between justify-content-sm-start">
  	<a class="nav-logo" href="/">
		<img src='<?php echo get_template_directory_uri()?>/assets/img/logo-50x50.png' alt="Logo">
  	</a>
  	<div class="d-none d-sm-block nav-item position-relative">
		<!-- Start About KTCB -->
		<ul class="nav-item-dr-list position-absolute">
			<a class="nav-dropdown-items">
				Giới thiệu chung về KTCB
			</a>
			<a class="nav-dropdown-items">
				Sứ mệnh của KTCB
			</a>
			<a class="nav-dropdown-items">
				Giới thiệu về nhân sự KTCB
			</a>
			<a class="nav-dropdown-items">
				Thông tin liên hệ KTCB
			</a>
		</ul>
		<!-- End About KTCB -->
		Về KTCB
	</div>
  <div class= "d-none d-sm-block nav-item position-relative" href="#">
  	<ul class="nav-item-dr-list position-absolute">
		<a class="nav-dropdown-items">
			Hoạt động - dự án đã thực hiện
		</a>
		<a class="nav-dropdown-items">
			Hoạt động - dự án đang triển khai
		</a>
		<a class="nav-dropdown-items">
			Giới thiệu về nhân sự KTCB
		</a>
		<a class="nav-dropdown-items">
			Thông tin liên hệ KTCB
		</a>
	</ul>
	Hoạt Động - Dự Án</div>
  <div class= "d-none d-sm-block nav-item position-relative"href="#">	
  	<ul class="nav-item-dr-list position-absolute">
		<a class="nav-dropdown-items">
			Tài liệu training
		</a>
		<a class="nav-dropdown-items">
			Nội dung training
		</a>
		<a class="nav-dropdown-items">
			Các hoạt động team building
		</a>
	</ul>
  	TNV
  </div>
  <div class= "d-none d-sm-block nav-item position-relative"href="#">
  	<ul class="nav-item-dr-list position-absolute">
		<a class="nav-dropdown-items">
			Dành cho đối tượng muốn trở thành TNV
		</a>
		<a class="nav-dropdown-items">
			Dành cho Nhà tài trợ
		</a>
	</ul>	
  	Tham Gia
  </div>
  <div class="d-block d-sm-none">
	<label for="mobile__header-nav">
		<i class="fa-solid fa-bars text-light nav-menu-icon"></i>
	</label>
  </div>
</div>
<input type="checkbox" id="mobile__header-nav" class="d-none">
<label for="mobile__header-nav" class="modal__overlay">
</label>
<div class="mobile__header-nav">
  <div class="mobile__header-nav-wrapper">
    <ul class="mobile__category-list">
      <li class="mobile__category-item"><a href="" class="mobile__category-item-link">
          Tất cả sản phẩm
        </a>
      </li>
      <li class="mobile__category-item mobile__category-item--has-child">
        <div class="mobile__category-item-link accordion">
          <span>Ohui</span>
          <i class="fas fa-chevron-right mobile__category-item-icon "></i>
        </div>
        <ul class="mobile__category-item-child-list panel">
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Thefirst Tái Sinh </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Dưỡng Trắng</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Prime Advancer</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Dưỡng Ẩm</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Chống Lão Hóa</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Make Up</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Ohui Chống Nắng</a></li>

        </ul>
      </li>
      <li class="mobile__category-item">
        <div class="mobile__category-item-link accordion">
          <span>Whoo</span>
          <i class="fas fa-chevron-right mobile__category-item-icon"></i>
        </div>
        <ul class="mobile__category-item-child-list panel">
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Bichup </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Dưỡng Ẩm</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Dưỡng Trắng Trị Nám</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo cấp nước chống oxy hóa</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Tái Sinh</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Make Up</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Chống Nắng</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Spa</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Chống Lão Hóa</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Whoo Hoàn Lưu Cao</a></li>

        </ul>
      </li>
      <li class="mobile__category-item">
        <div class="mobile__category-item-link accordion">
          <span>Su:m37</span>
          <i class="fas fa-chevron-right mobile__category-item-icon"></i>
        </div>
        <ul class="mobile__category-item-child-list panel">
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Su:m37 Tái Sinh </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Sm:m37 Chống Lão Hóa </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Sm:m37 Dưỡng Trắng </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Su:m37 cấp ẩm water full </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Su:m37 Làm Sạch </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Su:m37 Chống Nắng Sun Away</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Su:m37 Make Up</a></li>
        </ul>
      </li>
      <li class="mobile__category-item">
        <div class="mobile__category-item-link accordion">
          <span>Set mini</span>
          <i class="fas fa-chevron-right mobile__category-item-icon"></i>
        </div>
        <ul class="mobile__category-item-child-list panel">
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Set Ohui Mini </a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Set Whoo Mini</a></li>
          <li class="mobile__category-item-child-item"><a href=""
              class="mobile__category-child-item-link">Set Su:m37 Mini</a></li>
        </ul>
      </li>

    </ul>
    <ul class="mobile__category-list">
      <li class="mobile__category-item">
        <a href="" class="mobile__category-item-link">
          <span>Thực phẩm chức năng</span>
        </a>
      </li>
      <li class="mobile__category-item">
        <a href="" class="mobile__category-item-link">
          <span>Dịch vụ</span>
        </a>
      </li>
    </ul>
    <ul class="mobile__category-list">
      <li class="mobile__category-item">
        <a href="" class="mobile__category-item-link">
          <span>Tin Tức</span>
        </a>
      </li>
      <li class="mobile__category-item">
        <a href="" class="mobile__category-item-link">
          <span>Liên Hệ</span>
        </a>
      </li>
    </ul>
  </div>
</div>
