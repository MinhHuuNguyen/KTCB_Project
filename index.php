<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bogaty
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-banner-wrapper w-100 position-relative" id="hero-banner">
				<div class="position-absolute banner-logo">
					<img src='<?php echo get_template_directory_uri()?>/assets/img/ktcb-logo-512.png' alt="Logo">
				</div>
				<div class="position-absolute hero-banner-mission-wrapper w-100 row">
					<div class="col col-6 hiding-text">ádas</div>
					<div class="col col-6 d-none d-sm-flex align-items-center">
						<div class="hero-banner-mission-text p-4">
							Chúng tôi tin mỗi đứa trẻ đều xứng đáng có một nụ cười rạng rỡ, cuộc sống hạnh phúc.
						</div>
					</div>
				</div>
				<img class="hero-banner-img" src="<?php echo get_template_directory_uri()?>/assets/img/hero-banner.png" alt="Hero banner">
			</div>
			<!-- #hero-banner -->
			<div class="vision-section" id="vision">
				<div class="container">
					<h2 class="vision-title mx-auto d-flex justify-content-center h2">
						TẦM NHÌN	
					</h2>
					<div class="h4 vision-desc container">
						<span>Tại Khoảng Trời Của Bé, chúng tôi khát vọng về một tương lai nơi mà sức khỏe và quyền lợi bệnh nhân được cải thiện thông qua dịch vụ phẫu thuật an toàn.</span>
					</div>
					<div class="container row">
						<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/PHL_2012_Silay_184_Sayson_009_Circle-1.jpg" alt="" class="vision-items-img"></div>
							<div class="vision-items-img-desc">
								<span>
								Phẫu thuật an toàn nghĩa là mang đến cho bệnh nhân chất lượng chăm sóc tốt nhất dựa trên những tiêu chuẩn y tế cao nhất, bất kể bệnh nhân sống ở bất cứ đâu.
								</span>
							</div>
						</div>
						<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/IND_2010_Crowd_Screening_Circle.jpg" alt="" class="vision-items-img"></div>
							<div class="vision-items-img-desc">
								<span>
									Dị tật khe hở môi, vòm miệng là dị tật bẩm sinh phổ biến đứng thứ ba trên thế giới. Chỉ với vỏn vẹn 45 phút, một ca phẫu thuật an toàn có thể trao cho một em nhỏ cơ hội được hòa nhập với cuộc sống bình thường.	
								</span>
							</div>
						</div>
						<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/THA_2013_Sisaket_OR_Scene_021_Circle.jpg"></div>
							<div class="vision-items-img-desc">
								<span>
									Một đứa trẻ sinh ra với dị tật khe hở môi, vòm miệng có thể phải gánh chịu nguy cơ: Suy dinh dưỡng – Khó khăn trong việc nói và phát âm – Sự xa lánh và bắt nạt từ bạn bè, xã hội.
								</span>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#" class="btn btn-outline-info vision-btn">Tìm Hiểu Thêm</a>
					</div>
				</div>
			</div>
			<div class="activities">
			<div class="owl-carousel">
			<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/PHL_2012_Silay_184_Sayson_009_Circle-1.jpg" alt="" class="vision-items-img"></div>
							<div class="vision-items-img-desc">
								<span>
								Phẫu thuật an toàn nghĩa là mang đến cho bệnh nhân chất lượng chăm sóc tốt nhất dựa trên những tiêu chuẩn y tế cao nhất, bất kể bệnh nhân sống ở bất cứ đâu.
								</span>
							</div>
						</div>
						<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/IND_2010_Crowd_Screening_Circle.jpg" alt="" class="vision-items-img"></div>
							<div class="vision-items-img-desc">
								<span>
									Dị tật khe hở môi, vòm miệng là dị tật bẩm sinh phổ biến đứng thứ ba trên thế giới. Chỉ với vỏn vẹn 45 phút, một ca phẫu thuật an toàn có thể trao cho một em nhỏ cơ hội được hòa nhập với cuộc sống bình thường.	
								</span>
							</div>
						</div>
						<div class="col col-12 col-lg-4 d-flex flex-column align-items-center vision-items">
							<div class="vision-img-wrapper"><img src="https://operationsmile.org.vn/wp-content/uploads/2018/05/THA_2013_Sisaket_OR_Scene_021_Circle.jpg"></div>
							<div class="vision-items-img-desc">
								<span>
									Một đứa trẻ sinh ra với dị tật khe hở môi, vòm miệng có thể phải gánh chịu nguy cơ: Suy dinh dưỡng – Khó khăn trong việc nói và phát âm – Sự xa lánh và bắt nạt từ bạn bè, xã hội.
								</span>
							</div>
						</div>
</div>
			</div>
			<!-- #vision -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
