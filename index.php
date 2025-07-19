	<?php
include("header.php");
?>
	<!--/ Carousel Star /-->
	<!-- <div class="intro intro-carousel" style="height:auto">
	    <div id="carousel" class="owl-carousel owl-theme">
	        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/satenet-slider3.jpg)">
	            <div class="overlay overlay-a"></div>
	            <div class="intro-content display-table">
	                <div class="table-cell">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-10">
	                                <div class="intro-body">
	                                    <p class="intro-title-top"> <span>Admission Open</span> </p>
	                                    <h1 class="intro-title mb-4">
	                                        Take Your Career to the Next Level with<br>
	                                        <span class="color-b">Amity university Online</span>
	                                    </h1>

	                                    <p>Online MBA Hurry limited Seat Offer Only </p>

	                                    <button class=" slider_button"> <a href="contact.php">Now More</a> </button>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/satenet-slider2.jpg)">
	            <div class="overlay overlay-a"></div>
	            <div class="intro-content display-table">
	                <div class="table-cell">
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-lg-8">
	                                <div class="intro-body">
	                                    <p class="intro-title-top"> <span>Admission Open</span> </p>
	                                    <h1 class="intro-title mb-4">
	                                        Pursue UGC & AICTE Approved <br>
	                                        <span class="color-b">Online MBA Degree Programme</span>
	                                    </h1>
	                                    <p> </p>
	                                    <button class=" slider_button"> <a href="#"> Now More</a> </button>

	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div> -->

	<!-- MY CODE -->
	<div class="intro intro-carousel" style="height:auto;">
	    <div id="carousel" class="owl-carousel owl-theme">

	        <!-- Slide 1 -->
	        <div class="carousel-item-a intro-item bg-image"
	            style="background-image: url('img/satenet-slider3.jpg'); background-size:cover; background-position:center;">
	            <div class="overlay overlay-a"
	                style="background-color: rgba(0,0,0,0.5); position:absolute; width:100%; height:100%; top:0; left:0;">
	            </div>
	            <div class="intro-content display-table" style="position: relative; z-index: 2;">
	                <div class="table-cell">
	                    <div class="container">
	                        <div class="row align-items-center">
	                            <div class="col-lg-6 col-md-12 text-white">
	                                <div class="intro-body">
	                                    <p class="intro-title-top"><span>Admission Open</span></p>
	                                    <h1 class="intro-title mb-4" style="color:white;">
	                                        Take Your Career to the Next Level with<br>
	                                        <span class="color-b">Amity University Online</span>
	                                    </h1>
	                                    <p>Online MBA Hurry, Limited Seat Offer Only</p>
	                                    <button class="slider_button"
	                                        style="background:#ffc107; border:none; padding:10px 20px;">
	                                        <a href="contact.php" style="color:#000; text-decoration:none;">Know More</a>
	                                    </button>
	                                </div>
	                            </div>

	                            <!-- Enquiry Form -->
	                            <div class="col-lg-6 col-md-12 mt-4">
	                                <div
	                                    style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.2); padding: 20px; border-radius: 12px; color: white;">
	                                    <h3 style="text-align:center; color:#fff; margin-bottom: 20px;">Enquiry Now</h3>
	                                    <form class="form-a contactForm" action="contactform.php" method="post" role="form"
	                                        style="color:#fff;">
	                                        <div class="row">
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="enquiryName" class="form-control"
	                                                    placeholder="Your Name" style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="email" name="enquiryEmail" class="form-control"
	                                                    placeholder="Your Email" style="width:100%; padding:10px;"
	                                                    required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="eqquiryMobile" class="form-control"
	                                                    placeholder="Phone No." style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="city" class="form-control" placeholder="City"
	                                                    style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <select name="highestEducation" class="form-control"
	                                                    style="width:100%; padding:10px;" required>
	                                                    <option value="">Select Highest Education</option>
	                                                    <option value="10">10th</option>
	                                                    <option value="12">12th</option>
	                                                    <option value="graduate">Graduate</option>
	                                                    <option value="post_graduate">Post Graduate</option>
	                                                </select>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <select name="selectedCourse" class="form-control"
	                                                    style="width:100%; padding:10px;" required>
	                                                    <option value="">Select Course</option>
	                                                    <option value="MBA">MBA</option>
	                                                    <option value="BBA">BBA</option>
	                                                </select>
	                                            </div>
	                                            <div class="col-md-12 mb-3">
	                                                <textarea name="enquiryAddress" class="form-control"
	                                                    placeholder="Query" rows="2"
	                                                    style="width:100%; padding:10px;"></textarea>
	                                            </div>
	                                            <div class="col-md-12 mb-3 text-center">
	                                                <input type="submit" class="btn" name="eqnuirySubmit"
	                                                    value="Send Message"
	                                                    style="padding: 10px 20px; background-color: #ffc107; border: none; color: black;">
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                                <div style="margin-bottom: 50px;"></div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <!-- Slide 2 -->
	        <div class="carousel-item-a intro-item bg-image"
	            style="background-image: url('img/satenet-slider2.jpg'); background-size:cover; background-position:center;">
	            <div class="overlay overlay-a"
	                style="background-color: rgba(0,0,0,0.5); position:absolute; width:100%; height:100%; top:0; left:0;">
	            </div>
	            <div class="intro-content display-table" style="position: relative; z-index: 2;">
	                <div class="table-cell">
	                    <div class="container">
	                        <div class="row align-items-center">
	                            <div class="col-lg-6 col-md-12 text-white">
	                                <div class="intro-body">
	                                    <p class="intro-title-top"><span>Admission Open</span></p>
	                                    <h1 class="intro-title mb-4" style="color:white;">
	                                        Pursue UGC & AICTE Approved<br>
	                                        <span class="color-b">Online MBA Degree Programme</span>
	                                    </h1>
	                                    <button class="slider_button"
	                                        style="background:#ffc107; border:none; padding:10px 20px;">
	                                        <a href="#" style="color:#000; text-decoration:none;">Know More</a>
	                                    </button>
	                                </div>
	                            </div>

	                            <!-- Enquiry Form (duplicate) -->
	                            <div class="col-lg-6 col-md-12 mt-4">
	                                <div
	                                    style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.2); padding: 20px; border-radius: 12px; color: white;">
	                                    <h3 style="text-align:center; color:#fff; margin-bottom: 20px;">Enquiry Now</h3>
	                                    <form class="form-a contactForm" action="contactform.php" method="post" role="form"
	                                        style="color:#fff;">
	                                        <div class="row">
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="enquiryName" class="form-control"
	                                                    placeholder="Your Name" style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="email" name="enquiryEmail" class="form-control"
	                                                    placeholder="Your Email" style="width:100%; padding:10px;"
	                                                    required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="eqquiryMobile" class="form-control"
	                                                    placeholder="Phone No." style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <input type="text" name="city" class="form-control" placeholder="City"
	                                                    style="width:100%; padding:10px;" required>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <select name="highestEducation" class="form-control"
	                                                    style="width:100%; padding:10px;" required>
	                                                    <option value="">Select Highest Education</option>
	                                                    <option value="10">10th</option>
	                                                    <option value="12">12th</option>
	                                                    <option value="graduate">Graduate</option>
	                                                    <option value="post_graduate">Post Graduate</option>
	                                                </select>
	                                            </div>
	                                            <div class="col-md-6 mb-3">
	                                                <select name="selectedCourse" class="form-control"
	                                                    style="width:100%; padding:10px;" required>
	                                                    <option value="">Select Course</option>
	                                                    <option value="MBA">MBA</option>
	                                                    <option value="BBA">BBA</option>
	                                                </select>
	                                            </div>
	                                            <div class="col-md-12 mb-3">
	                                                <textarea name="enquiryAddress" class="form-control"
	                                                    placeholder="Query" rows="2"
	                                                    style="width:100%; padding:10px;"></textarea>
	                                            </div>
	                                            <div class="col-md-12 mb-3 text-center">
	                                                <input type="submit" class="btn" name="eqnuirySubmit"
	                                                    value="Send Message"
	                                                    style="padding: 10px 20px; background-color: #ffc107; border: none; color: black;">
	                                            </div>
	                                        </div>
	                                    </form>
	                                </div>
	                                <div style="margin-bottom: 50px;"></div>
	                            </div>

	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	    </div>
	</div>


	<section>
	    <div style="height:10vh;background-color:#f4f4f4">
	        .
	    </div>
	</section>


	<!--/ Carousel end /-->



	<div id="container">


	    <!-- Each image is 350px by 233px -->
	    <div id="container">
	        <div class="photobanner">
	            <!-- First set -->
	            <img class="first" src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3.png" />
	            <img src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3.png" />
	            <img src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3.png" />
	            <!-- Duplicated set -->
	            <img src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3.png" />
	            <img src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3.png" />
	            <img src="img/banner/image_1.png" />
	            <img src="img/banner/image_2.png" />
	            <img src="img/banner/image_3x.png" />
	        </div>
	    </div>
	    <section class="features section_space" style="background-color:#F4F4F4; padding:1vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <h2 class="title">About Amity University</h2>
	                </div>
	            </div>
	        </div>
	    </section>
	    <section class="card_section_about" style="background-color:#F4F4F4; padding:1vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-6 col-sm-12 card_heading1">
	                </div>

	                <div class="col-lg-6 col-sm-12 card_heading1">

	                </div>


	                <div class="col-lg-3 col-sm-12  col_fourth">
	                    <div class="counter" style="background-color:#ff6000; color:white; height:25vh">
	                        <h2 class="timer count-title count-number" data-to="50" data-speed="3000"></h2>
	                        <h3>Year Of Excellence </h3>
	                        <!--<p class="count-text ">There are many variations of passages of Lorem Ipsum available, but the majority. </p>-->
	                    </div>
	                </div>

	                <div class="col-lg-3 col-sm-12  col_fourth">
	                    <div class="counter" style="background-color:#ff6000; color:white; height:25vh">
	                        <h2 class="timer count-title count-number" data-to="60" data-speed="3000"></h2>
	                        <h3>Programs & Specializations </h3>

	                    </div>
	                </div>

	                <div class="col-lg-3 col-sm-12  col_fourth">
	                    <div class="counter" style="background-color:#ff6000; color:white; height:25vh">
	                        <h2 class="timer count-title count-number" data-to="112000" data-speed="10000"></h2>
	                        <h3>Learners </h3>
	                    </div>
	                </div>

	                <div class="col-lg-3 col-sm-12  col_fourth end">
	                    <div class="counter" style="background-color:#ff6000; color:white; height:25vh">

	                        <h2 class="timer count-title count-number" data-to="3500000" data-speed="10000"></h2>
	                        <h3>Strong Alumni Network</h3>

	                    </div>
	                </div>



	            </div>
	        </div>
	    </section>


	    <section class="features section_space" style="background-color:#F4F4F4; padding:1vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <h2 class="title">Recognitions & Approvals</h2>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-3 margin-top-40">
	                    <div class="feature">
	                        <div class="fa-stack fa-lg fa-5x">
	                            <img src="img/images/img1.webp" alt="no images " style="background-color:white"
	                                height='100vh'>
	                        </div>
	                        <h3>Ranked 29 by National Institutional Ranking Framework</h3>
	                        <p></p>
	                    </div>
	                </div>
	                <div class="col-sm-3 margin-top-40">
	                    <div class="feature">
	                        <div class="fa-stack fa-lg fa-5x">
	                            <img src="img/images/img2.webp" alt="no images " style="background-color:white"
	                                height='100vh'>
	                        </div>
	                        <h3>Ranked among Top 3% Globally</h3>
	                        <p></p>
	                    </div>
	                </div>
	                <div class="col-sm-3 margin-top-40">
	                    <div class="feature">
	                        <div class="fa-stack fa-lg fa-5x">
	                            <img src="img/images/img3.jpg" alt="no images " style="background-color:white"
	                                height='100vh'>

	                        </div>
	                        <h3>50 Years of excellence in education</h3>
	                        <p></p>
	                    </div>
	                </div>
	                <div class="col-sm-3 margin-top-40">
	                    <div class="feature">
	                        <div class="fa-stack fa-lg fa-5x">
	                            <img src="img/images/img4.jpg" alt="no images " style="background-color:white"
	                                height='100vh'>
	                        </div>
	                        <h3>3,50,000 + strong alumni network across the globe</h3>
	                        <p></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="features section_space" style="background-color:#F4F4F4; padding:1vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <h2 class="title">Fees: Indian Civilian : Total Fee : ₹ 1,99,000/-</h2>
	                </div>
	            </div>
	        </div>
	    </section>


	    <section>
	        <div class="tablee" style="background-color:#F4F4F4">
	            <div class="custom-table-container">
	                <table class="custom-data-table">
	                    <thead class="custom-table-header">
	                        <tr class="custom-header-row">
	                            <th class="custom-header-cell">Semester</th>
	                            <th class="custom-header-cell">1st</th>
	                            <th class="custom-header-cell">2nd</th>
	                            <th class="custom-header-cell">3rd</th>
	                            <th class="custom-header-cell">4th</th>
	                        </tr>
	                    </thead>
	                    <tbody class="custom-table-body">
	                        <tr class="custom-body-row">
	                            <td class="custom-body-cell" data-label="Column 1">Fee(INR)</td>
	                            <td class="custom-body-cell" data-label="Column 2">49,750</td>
	                            <td class="custom-body-cell" data-label="Column 2">49,750</td>
	                            <td class="custom-body-cell" data-label="Column 2">49,750</td>
	                            <td class="custom-body-cell" data-label="Column 2">49,750</td>
	                        </tr>
	                        <!-- Add more rows as needed -->
	                    </tbody>
	                </table>
	            </div>
	        </div>

	    </section>
	    <!--/ News Star /-->
	    <section class="section-news section-t8">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="title-wrap d-flex justify-content-between services_heading">
	                        <div class=" col-lg-12  col-sm-12 title-box">
	                            <h2 class="title-a"> Why Choose Amity online?</h2>
	                        </div>

	                    </div>
	                </div>
	            </div>

	            <div class="row">
	                <!--Start single offering box-->
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img1.png" style="width:15vh" alt="support">
	                        <h4>Industry Visits for Real-World Exposure</h4>
	                        <p>Experience hands-on learning through visits to top industry workplaces.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">

	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img2.webp" style="width:15vh" alt="support">
	                        <h4>Dedicated Academic Advisors</h4>
	                        <p>Dedicated experts and advisor to guide you at every step of your professional career</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img//why/img3.svg" style="width:15vh" alt="support">
	                        <h4>AI-Professor AMI</h4>
	                        <p>Powered by Chat-GPT 4 and open AI-driven technology for online learning</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img4.webp" style="width:15vh" alt="support">
	                        <h4>Diverse learning mediums</h4>
	                        <p>E-books, printed & audio books, videos to cater your preferences & unique learning</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img5.webp" style="width:15vh" alt="support">
	                        <h4>Doorstep delivery of books</h4>
	                        <p>India's only online university to provide physical books to read at your door step</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img6.png" style="width:15vh" alt="support">
	                        <h4>beSocial - Student Community Platform</h4>
	                        <p>Where 75,000+ students connect, engage, and grow.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">

	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img7.png" style="width:15vh" alt="support">
	                        <h4>Placement opportunities</h4>
	                        <p>Job interview prep, placement assistance & resume building for students to be job-ready</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
	                        <img src="img/why/img8.webp" style="width:15vh" alt="support">
	                        <h4>Metaverse Campus</h4>
	                        <p>Discovering endless possibilities of Amity campus through our metaverse tour</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">View Details</a>
	                        </div>
	                    </div>
	                </div>

	            </div>
	            <div class="col-md-12 pt-20">
	                <div class="button text-center">
	                    <a class="btn-one" href="contact.php">View More</a>
	                </div>
	            </div>


	        </div>
	    </section>
	    <!--/ News End /-->

	    <section class="section-news section-t8">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="title-wrap d-flex justify-content-between services_heading">
	                        <div class="col-lg-12 col-sm-12 title-box">
	                            <h2 class="title-a"> Specializations</h2>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="row" id="specializations-main">
	                <!-- 4 main specialization cards here -->
	                <!-- Example: Marketing Management -->
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img1.webp" style="width:15vh" alt="support">
	                        <h4>MBA with Dual Specialization</h4>
	                        <p>An MBA with Dual Specialization means a Master of Business Administration degree where a
	                            student focuses on two different areas of business (e.g., Marketing and Finance) instead of
	                            just one, gaining broader skills and career opportunities.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img2.webp" style="width:15vh" alt="support">
	                        <h4>MBA in General Management</h4>
	                        <p>An MBA in General Management provides a broad understanding of all key business areas—like
	                            marketing, finance, operations, and HR—without focusing deeply on one specialization. It’s
	                            ideal for those aiming for leadership, executive, or managerial roles across various
	                            industries.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img3.webp" style="width:15vh" alt="support">
	                        <h4>International Finance</h4>
	                        <p>International Finance is the study of financial management in a global context, including
	                            foreign investments, exchange rates, international markets, and cross-border transactions.
	                            It prepares students to handle financial challenges faced by multinational companies and
	                            global economies.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img4.webp" style="width:15vh" alt="support">
	                        <h4>Digital Entrepreneurship</h4>
	                        <p>Digital Entrepreneurship involves starting and managing businesses online using digital
	                            tools and technologies. It focuses on e-commerce, digital marketing, online platforms, and
	                            innovation, enabling entrepreneurs to build and scale businesses in the digital world.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>


	                <!-- Add the other 3 here (HR, IT, Project) -->
	            </div>

	            <!-- Hidden additional specializations -->
	            <div class="row" id="specializations-more" style="display: none;">
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img5.webp" style="width:15vh" alt="Finance">
	                        <h4>Business Analytics</h4>
	                        <p>Business Analytics is the use of data, statistical methods, and technology to analyze
	                            business performance, make decisions, and predict future trends. It helps organizations
	                            make data-driven decisions for better efficiency and growth.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img6.webp" style="width:15vh" alt="Finance">
	                        <h4>Data Science</h4>
	                        <p>Data Science is the field that combines statistics, programming, and machine learning to
	                            extract insights and knowledge from structured and unstructured data. It helps in solving
	                            complex problems and making informed decisions using data.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img7.webp" style="width:15vh" alt="Finance">
	                        <h4>HR Analytics</h4>
	                        <p>HR Analytics (Human Resource Analytics) is the use of data and analytical techniques to
	                            measure and improve HR practices like recruitment, employee performance, retention, and
	                            workforce planning. It helps HR teams make data-driven decisions to enhance employee
	                            management and organizational effectiveness.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
	                    <div class="single-offering-box" style="background-color:#f4f4f4">
	                        <img src="img/specialization/img9.webp" style="width:15vh" alt="Finance">
	                        <h4>Digital Marketing Management</h4>
	                        <p>Digital Marketing Management involves planning and executing marketing strategies using
	                            digital channels like social media, search engines, email, and websites. It focuses on
	                            online brand promotion, customer engagement, lead generation, and performance tracking to
	                            grow a business in the digital space.</p>
	                        <div class="button">
	                            <a class="btn-detail" href="contact.php">Know More</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-12 pt-20">
	                    <div class="button text-center">
	                        <a class="btn-one" href="contact.php">Know More</a>
	                    </div>
	                </div>



	                <!-- Add more as needed -->
	            </div>

	            <!-- View More Button -->
	            <div class="col-md-12 pt-20">
	                <div class="button text-center">
	                    <button class="btn-one" onclick="showMoreSpecializations()">View More</button>
	                </div>
	            </div>
	        </div>
	    </section>


	    <script>
	    function showMoreSpecializations() {
	        var moreSection = document.getElementById("specializations-more");
	        moreSection.style.display = "flex"; // or "block" if layout breaks
	        event.target.style.display = "none"; // hide the View More button
	    }
	    </script>











	    <section class="logo_slider" style="margin-bottom:20vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-12 col-sm-12 logo_heading">
	                    <h2> Our Students are Working With </h2>
	                </div>

	                <div class="brand-carousel section-padding owl-carousel">
	                    <div class="single-logo">
	                        <img src="img/logo/1.avif" alt="">
	                    </div>
	                    <div class="single-logo">
	                        <img src="img/logo/2.webp" alt="">
	                    </div>
	                    <div class="single-logo">
	                        <img src="img/logo/3.webp" alt="">
	                    </div>
	                    <div class="single-logo">
	                        <img src="img/logo/4.webp" alt="">
	                    </div>
	                    <div class="single-logo">
	                        <img src="img/logo/5.webp" alt="">
	                    </div>
	                    <div class="single-logo">
	                        <img src="img/logo/6.webp" alt="">
	                    </div>

	                    <div class="single-logo">
	                        <img src="img/logo/7.webp" alt="">
	                    </div>

	                    <div class="single-logo">
	                        <img src="img/logo/8.webp" alt="">
	                    </div>

	                    <div class="single-logo">
	                        <img src="img/logo/9.webp" alt="">
	                    </div>

	                    <div class="single-logo">
	                        <img src="img/logo/10.webp" alt="">
	                    </div>

	                </div>



	            </div>
	        </div>
	    </section>
	    <section class="features section_space" style="background-color:#F4F4F4; padding:1vh">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12">
	                    <h2 class="title">Contact Us</h2>
	                </div>
	            </div>
	        </div>
	    </section>





	    <!--/ Contact Star /-->
	    <section class="contact">
	        <div class="container">
	            <div class="row">

	                <div class="col-sm-12 section-t8" style="padding-top: 2vh">
	                    <div class="row">
	                        <div class="col-md-7">

	                            <form class="form-a contactForm" action="contactform.php" method="post" role="form">
	                                <div id="sendmessage">Your message has been sent. Thank you!</div>
	                                <div id="errormessage"></div>
	                                <div class="row">
	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <input type="text" name="enquiryName"
	                                                class="form-control form-control-lg form-control-a"
	                                                placeholder="Your Name" data-rule="minlen:4"
	                                                data-msg="Please enter at least 4 chars">
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <input name="enquiryEmail" type="email"
	                                                class="form-control form-control-lg form-control-a"
	                                                placeholder="Your Email" data-rule="email"
	                                                data-msg="Please enter a valid email">
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <input type="text" name="eqquiryMobile"
	                                                class="form-control form-control-lg form-control-a"
	                                                placeholder="Phone No." data-rule="minlen:8"
	                                                data-msg="Please enter valid Mobile Number">
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <input type="text" name="city"
	                                                class="form-control form-control-lg form-control-a" placeholder="City"
	                                                data-rule="minlen:9" data-msg="Please enter City">
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <!-- New Field: Highest Education -->
	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <select name="highestEducation"
	                                                class="form-control form-control-lg form-control-a"
	                                                data-rule="required" data-msg="Please select your highest education">
	                                                <option value="">Select Highest Education</option>
	                                                <option value="10">10th</option>
	                                                <option value="12">12th</option>
	                                                <option value="graduate">Graduate</option>
	                                                <option value="post_graduate">Post Graduate</option>
	                                            </select>
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <!-- New Field: Select Course -->
	                                    <div class="col-md-6 mb-3">
	                                        <div class="form-group">
	                                            <select name="selectedCourse"
	                                                class="form-control form-control-lg form-control-a"
	                                                data-rule="required" data-msg="Please select a course">
	                                                <option value="">Select Course</option>
	                                                <option value="MBA">MBA</option>
	                                                <option value="BBA">BBA</option>
	                                            </select>
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <div class="col-md-12 mb-3">
	                                        <div class="form-group">
	                                            <textarea name="enquiryAddress" class="form-control" cols="45" rows="2"
	                                                data-msg="Please write something for us"
	                                                placeholder="Query"></textarea>
	                                            <div class="validation"></div>
	                                        </div>
	                                    </div>

	                                    <div class="col-md-12">
	                                        <input type="submit" class="btn btn-b" name="eqnuirySubmit"
	                                            value="Send Message">
	                                    </div>
	                                </div>
	                            </form>

	                        </div>
	                        <div class="col-md-5 section-md-t3">
	                            <div class="icon-box section-b2">
	                                <div class="icon-box-icon">
	                                    <span class="ion-ios-paper-plane"></span>
	                                </div>
	                                <div class="icon-box-content table-cell">
	                                    <div class="icon-box-title">
	                                        <h4 class="icon-title">Say Hello</h4>
	                                    </div>
	                                    <div class="icon-box-content">
	                                        <p class="mb-1">Email.
	                                            <span class="color-a"> arshad.working.02@gmail.com</span>
	                                        </p>
	                                        <p class="mb-1">Phone.
	                                            <span class="color-a">+91 8149564674</span>
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="icon-box section-b2">
	                                <div class="icon-box-icon">
	                                    <span class="ion-ios-pin"></span>
	                                </div>
	                                <div class="icon-box-content table-cell">
	                                    <div class="icon-box-title">
	                                        <h4 class="icon-title">Find us in</h4>
	                                    </div>
	                                    <div class="icon-box-content">
	                                        <p class="mb-1">
	                                            <b>Reg.Office </b>- Destiny Lerning, Pune, Maharashtra, India
	                                        </p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="icon-box">
	                                <div class="icon-box-icon">
	                                    <span class="ion-ios-redo"></span>
	                                </div>
	                                <div class="icon-box-content table-cell">
	                                    <div class="icon-box-title">
	                                        <h4 class="icon-title">Social networks</h4>
	                                    </div>
	                                    <div class="icon-box-content">
	                                        <div class="socials-footer">
	                                            <ul class="list-inline">
	                                                <li class="list-inline-item">
	                                                    <a href="#" class="link-one">
	                                                        <i class="fa fa-facebook" aria-hidden="true"></i>
	                                                    </a>
	                                                </li>
	                                                <li class="list-inline-item">
	                                                    <a href="#" class="link-one">
	                                                        <i class="fa fa-twitter" aria-hidden="true"></i>
	                                                    </a>
	                                                </li>
	                                                <li class="list-inline-item">
	                                                    <a href="#" class="link-one">
	                                                        <i class="fa fa-instagram" aria-hidden="true"></i>
	                                                    </a>
	                                                </li>
	                                                <!-- <li class="list-inline-item">
                                               <a href="#" class="link-one">
                                                 <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                               </a>
                                             </li>
                                             <li class="list-inline-item">
                                               <a href="#" class="link-one">
                                                 <i class="fa fa-dribbble" aria-hidden="true"></i>
                                               </a>
                                             </li>-->
	                                            </ul>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	    </section>




	    <?php

include("footer.php");
?>