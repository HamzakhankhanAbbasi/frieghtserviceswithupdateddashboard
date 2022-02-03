<?php include 'includes/headertwo.php';?>
	<section class="freight-userdashboard">
		<aside class="main-left-wrap">
		    <span class="closeBtn-top"><i class="fas fa-times"></i></span>
			<div class="top-left-sect">
				<div class="user-D-Logo">
					<img src="assets/images/logo.png" class="img-fluid" alt="">
				</div>
				<div class="tabs-Btns-section">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
							<img src="assets/images/profile-img.png" class="img-fluid" alt="">
							My Profile
						</button>
						<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
							<img src="assets/images/order-img.png" class="img-fluid" alt="">	
							My Orders
						</button>
						<button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
							<img src="assets/images/support-img.png" class="img-fluid" alt="">
							Support Request
						</button>
						<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">
							<img src="assets/images/unassigned-img.png" class="img-fluid unassignedImg" alt="">
							Unassigned
						</button>
					</div>
				</div>
			</div>
			<div class="home-link">
				<a href="#!">
					<img src="assets/images/home-img.png" class="img-fluid" alt="">
					Back to home
				</a>
			</div>
		</aside>
		<div class="main-right-wrap">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="user-info-box" >
						<div class="avatar-upload" >
							<div class="avatar-edit" >
								<input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
								<label for="imageUpload"><i class="fas fa-plus"></i></label>
							</div>
							<div class="avatar-preview" >
								<div id="imagePreview" style="background-image: url(assets/images/user-image.png);" >
								</div>
							</div>
						</div>
						<div class="info-box" >
							<div class="user-detail-box" >
								<div class="details" >
									<label>User Name</label>
									<p>John Doe</p>
								</div>
							</div>
							<div class="user-detail-box" >
								<div class="details" >
									<label>Address</label>
									<p>Lorem ipsum dolor sit</p>
								</div>
							</div>
							<div class="user-detail-box" >
								<div class="details" >
									<label>Phone Number</label>
									<p>You haven’t added a phone number yet</p>
								</div>
							</div>
						</div>
    				</div>
				</div>
				<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<div class="dealer-dashboard-wrap">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="home" aria-selected="true">
									<div class="my-order-bttns">
										<p class="inner-tb-title">Pending</p>
										<div class="inner-tabs-img">
											<img src="assets/images/wall-clock-img.png" class="img-fluid" alt="">
										</div>
									</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="process-tab" data-bs-toggle="tab" data-bs-target="#process" type="button" role="tab" aria-controls="profile" aria-selected="false">
									<div class="my-order-bttns">
										<p class="inner-tb-title">In-Process</p>
										<div class="inner-tabs-img">
											<img src="assets/images/process-img.png" class="img-fluid" alt="">
										</div>
									</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="dispatch-tab" data-bs-toggle="tab" data-bs-target="#dispatch" type="button" role="tab" aria-controls="contact" aria-selected="false">
									<div class="my-order-bttns">
										<p class="inner-tb-title">Dispatch</p>
										<div class="inner-tabs-img">
											<img src="assets/images/delivery-truck-img.png" class="img-fluid" alt="">
										</div>
									</div>
								</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="completed-tab" data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab" aria-controls="contact" aria-selected="false">
									<div class="my-order-bttns">
										<p class="inner-tb-title">Completed</p>
										<div class="inner-tabs-img">
											<img src="assets/images/check-mark-img.png" class="img-fluid" alt="">
										</div>
									</div>
								</button>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="pending" role="tabpanel" aria-labelledby="pending-tab">
								<div class="my-order-sec1">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Confirm Order</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Confirm Order</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Confirm Order</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Confirm Order</button>
            									</div>
            							    </div>
										</div> 
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="process-tab">
								<div class="my-order-sec1">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Dispatch</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Dispatch</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Dispatch</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Dispatch</button>
            									</div>
            							    </div>
										</div> 
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="dispatch" role="tabpanel" aria-labelledby="dispatch-tab">
								<div class="my-order-sec1">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Complete</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Complete</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
										    <div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Complete</button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn">Complete</button>
            									</div>
            							    </div>
										</div> 
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="completed" role="tabpanel" aria-labelledby="completed-tab">
								<div class="my-order-sec1">
									<div class="row">
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn"><i class="fas fa-check"></i></button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn"><i class="fas fa-check"></i></button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn"><i class="fas fa-check"></i></button>
            									</div>
            							    </div>
										</div>
										<div class="col-12 col-md-6 col-lg-6">
											<div class="padding-cls">
            								    <div class="unassigned-box">
            									<div class="box-s1">
            										<a href="#!">Will</a>
            										<div class="bx-text-sec">
            											<p class="pink-text">42 lbs</p>
            											<p class="grey-text">197ml</p>
            										</div>
            									</div>
            									<div class="box-s2">
            										<a href="#!"><i class="fas fa-map-marker-alt"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            									<div class="box-s2 bx-3">
            										<a href="#!"><i class="fas fa-dot-circle"></i></a>
            										<div class="box-s2-inner">
            											<p class="pink-text">497 Evergreen RD. Rosevilla,</p>
            											<p class="grey-text">01 Jan 18:00 CST</p>
            										</div>
            									</div>
            								<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">
            								</div>
            								    <div class="inquireBtn">
            										<button class="btn"><i class="fas fa-check"></i></button>
            									</div>
            							    </div>
										</div> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				    <div class="support-sect">
				        <p class="heading-text">Support & Request</p>
				        <div class="support-inner-wrap">
				            <form class="row g-3 mt-3">
        						<div class="col-md-12">
        							<input type="text" class="form-control" id="inputName4" placeholder="Name">
        						</div>
        						<div class="col-md-12">
        							<input type="Email" class="form-control" id="inputEmail4" placeholder="Email">
        						</div>
        						<div class="col-12">
        							<input type="text" class="form-control" id="inputAddress" placeholder="Phone no.">
        						</div>
        						<div class="col-12">
        						    <textarea placeholder="add comments"></textarea>
        						</div>
        						<div class="col-12 inquireBtn">
        							<a href="#!">Contact Now</a>
        						</div>
				            </form>
				        </div>
				    </div>
				</div>
				<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
					<div class="unassigned-sect-wrap">
						<!--<div class="row">-->
						<!--	<div class="col-12 col-md-6 col-lg-6">-->
						<!--	    <div class="padding-cls">-->
						<!--		    <div class="unassigned-box">-->
						<!--			<div class="box-s1">-->
						<!--				<a href="#!">Will</a>-->
						<!--				<div class="bx-text-sec">-->
						<!--					<p class="pink-text">42 lbs</p>-->
						<!--					<p class="pink-text">$ 50.00</p>-->
						<!--					<p class="grey-text">197ml</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2">-->
						<!--				<a href="#!"><i class="fas fa-map-marker-alt"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2 bx-3">-->
						<!--				<a href="#!"><i class="fas fa-dot-circle"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">-->
						<!--		</div>-->
						<!--		    <div class="inquireBtn">-->
						<!--				<button class="btn booknow" data-bs-toggle="" data-bs-target="#forgetmodal">Book Now </button>-->
						<!--				<button class="btn addprice" data-bs-toggle="modal" data-bs-target="#forgetmodal">Make an Offer </button>-->
						<!--			</div>-->
						<!--	    </div>-->
						<!--	</div>-->
						<!--	<div class="col-12 col-md-6 col-lg-6">-->
						<!--	    <div class="padding-cls">-->
						<!--		    <div class="unassigned-box">-->
						<!--			<div class="box-s1">-->
						<!--				<a href="#!">Will</a>-->
						<!--				<div class="bx-text-sec">-->
						<!--					<p class="pink-text">42 lbs</p>-->
						<!--					<p class="pink-text">$ 50.00</p>-->
						<!--					<p class="grey-text">197ml</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2">-->
						<!--				<a href="#!"><i class="fas fa-map-marker-alt"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2 bx-3">-->
						<!--				<a href="#!"><i class="fas fa-dot-circle"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">-->
						<!--		</div>-->
						<!--		    <div class="inquireBtn">-->
						<!--				<button class="btn booknow" data-bs-toggle="" data-bs-target="#forgetmodal">Book Now </button>-->
						<!--				<button class="btn addprice" data-bs-toggle="modal" data-bs-target="#forgetmodal">Make an Offer</button>-->
						<!--			</div>-->
						<!--	    </div>-->
						<!--	</div>-->
						<!--	<div class="col-12 col-md-6 col-lg-6">-->
						<!--	    <div class="padding-cls">-->
						<!--		    <div class="unassigned-box">-->
						<!--			<div class="box-s1">-->
						<!--				<a href="#!">Will</a>-->
						<!--				<div class="bx-text-sec">-->
						<!--					<p class="pink-text">42 lbs</p>-->
						<!--					<p class="pink-text">$ 50.00</p>-->
						<!--					<p class="grey-text">197ml</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2">-->
						<!--				<a href="#!"><i class="fas fa-map-marker-alt"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2 bx-3">-->
						<!--				<a href="#!"><i class="fas fa-dot-circle"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">-->
						<!--		</div>-->
						<!--		    <div class="inquireBtn">-->
						<!--				<button class="btn booknow" data-bs-toggle="" data-bs-target="#forgetmodal">Book Now </button>-->
						<!--				<button class="btn addprice" data-bs-toggle="modal" data-bs-target="#forgetmodal">Make an Offer</button>-->
						<!--			</div>-->
						<!--	    </div>-->
						<!--	</div>-->
						<!--	<div class="col-12 col-md-6 col-lg-6">-->
						<!--	    <div class="padding-cls">-->
						<!--		    <div class="unassigned-box">-->
						<!--			<div class="box-s1">-->
						<!--				<a href="#!">Will</a>-->
						<!--				<div class="bx-text-sec">-->
						<!--					<p class="pink-text">42 lbs</p>-->
						<!--					<p class="pink-text">$ 50.00</p>-->
						<!--					<p class="grey-text">197ml</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2">-->
						<!--				<a href="#!"><i class="fas fa-map-marker-alt"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<div class="box-s2 bx-3">-->
						<!--				<a href="#!"><i class="fas fa-dot-circle"></i></a>-->
						<!--				<div class="box-s2-inner">-->
						<!--					<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
						<!--					<p class="grey-text">01 Jan 18:00 CST</p>-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		<img src="assets/images/all-dot-img.png" class="img-fluid unassigned-dotted-img4" alt="">-->
						<!--		</div>-->
						<!--		    <div class="inquireBtn">-->
						<!--				<button class="btn booknow" data-bs-toggle="" data-bs-target="#forgetmodal">Book Now </button>-->
						<!--				<button class="btn addprice" data-bs-toggle="modal" data-bs-target="#forgetmodal">Make an Offer </button>-->
						<!--			</div>-->
						<!--	    </div>-->
						<!--	</div>-->
						<!--</div>-->
						<div class="unassigned-sec1">
						    <div class="input_icons">
						        <span><i class="fas fa-arrow-up"></i></span>
						        <input type="text" placeholder="Pickup Anywhere">
						    </div>
						    <div class="input_icons">
						        <span><i class="fas fa-arrow-up"></i></span>
						        <input type="text" placeholder="Deliver Anywhere">
						    </div>
						    <div class="input_icons">
						        <span><i class="far fa-calendar-minus"></i></span>
						        <input type="text" placeholder="Pickup Anytime">
						    </div>
						    <div class="input_icons">
						        <span><i class="fas fa-truck"></i></span>
						        <input type="text" placeholder="All Equipment">
						    </div>
						    <button type="button" class="load-btn">Find Loads</button>
						</div>
						<div class="unassigned-sec2">
						    <div class="unassigned-sec2-inner">
						        <p class="heading-text">Available Load</p>
						        <p class="small-text">Sort By: Nearest to origin</p>
						    </div>
						    <div class="scrollbar-sect">
    						    <div class="unassigned-sec3">
    						        <div class="table-box1">
    						            <p class="unassign-title">PICKUP</p>
    						        </div>
    						        <div class="table-box1">
    						            <p class="unassign-title">DELIVER</p>
    						        </div>
    						        <div class="table-box2">
    						            <p class="unassign-title">MILES</p>
    						        </div>
    						        <div class="table-box2">
    						            <p class="unassign-title">WEIGHT</p>
    						        </div>
    						        <div class="table-box2">
    						            <p class="unassign-title">PRICE</p>
    						        </div>
    						    </div>
    						    <div class="unassign-table">
    						        <div class="table-sec1">
    						            <span>
    						                <p class="tbold_title">Tue</p>
    						                <p class="tsmall_title">Feb 1</p>
    						            </span>
    						            <span>
    						                <p class="tbold_title">Pittston, PA</p>
    						                <p class="tsmall_title">11:00 EST</p>
    						            </span>
    						        </div>
    						        <div class="table-sec1">
    						            <span>
    						                <p class="tbold_title">Thu</p>
    						                <p class="tsmall_title">Feb 3</p>
    						            </span>
    						            <span>
    						                <p class="tbold_title">South Saint Paul, MN</p>
    						                <p class="tsmall_title">07:00 - 14:00 CST</p>
    						            </span>
    						        </div>
    						        <div class="table-sec3">
    						            <p class="tmiddle_title">1,099</p>
    						        </div>
    						        <div class="table-sec3">
    						            <p class="tmiddle_title">41.9K</p>
    						        </div>
    						        <div class="table-sec3">
    						            <p class="tmiddle_title">Contact Rep</p>
    						        </div>
    						    </div>
						    </div>
						</div>
					</div>
				</div>

				<!-- Load details page -->
			<!--<div class="load-details-page">-->
			<!--	<div class="row">-->
			<!--		<div class="col-lg-6">-->
			<!--			<div class="load-p-left">-->
			<!--				<button type="button" class="closeBtn">-->
			<!--					<i class="fas fa-times"></i>-->
			<!--				</button>-->
			<!--				<div class="unassigned-box">-->
			<!--					<div class="box-s1">-->
			<!--						<a href="#!">Martin</a>-->
			<!--						<div class="bx-text-sec">-->
			<!--							<p class="pink-text">42 ibs</p>-->
			<!--							<p class="pink-text">$ 50.00</p>-->
			<!--							<p class="grey-text">197ml</p>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="box-s2">-->
			<!--						<a href="#!"><i class="fas fa-map-marker-alt"></i></a>-->
			<!--						<div class="box-s2-inner">-->
			<!--							<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
			<!--							<p class="grey-text">01 Jan 18:00 CST</p>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="box-s2 bx-3">-->
			<!--						<a href="#!"><i class="fas fa-dot-circle"></i></a>-->
			<!--						<div class="box-s2-inner">-->
			<!--							<p class="pink-text">497 Evergreen RD. Rosevilla,</p>-->
			<!--							<p class="grey-text">01 Jan 18:00 CST</p>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="inquireBtn">-->
			<!--						<a href="#!">inquire</a>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="select-sect">-->
			<!--					<select class="form-select" aria-label="Default select example">-->
			<!--						<option selected>05: 00 Am</option>-->
			<!--					</select>-->
			<!--				</div>-->
			<!--				<div class="commodity-sect">-->
			<!--					<p class="loadP-bold-text">Commodity</p>-->
			<!--					<div class="com-inner-sect">-->
			<!--						<div class="type">-->
			<!--							<p>Truck Type</p>-->
			<!--							<a href="#!">Lorem ipsum</a>-->
			<!--						</div>-->
			<!--						<div class="type">-->
			<!--							<p>Commodity</p>-->
			<!--							<a href="#!">Lorem ipsum</a>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="com-inner-sect">-->
			<!--						<div class="type">-->
			<!--							<p>Packing Type</p>-->
			<!--							<a href="#!">Lorem ipsum</a>-->
			<!--						</div>-->
			<!--						<div class="type">-->
			<!--							<p>Weight</p>-->
			<!--							<a href="#!">Lorem ipsum</a>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="commodity-sect">-->
			<!--				    <div class="col-12">-->
   <!--                 			    <textarea placeholder="add comments"></textarea>-->
   <!--                 			</div>-->
								<!--<p class="loadP-bold-text">Load</p>-->
								<!--<div class="com-inner-sect">-->
								<!--	<div class="type">-->
								<!--		<p>Truck Type</p>-->
								<!--		<a href="#!">Lorem ipsum</a>-->
								<!--	</div>-->
								<!--	<div class="type">-->
								<!--		<p>Truck Type</p>-->
								<!--		<a href="#!">Lorem ipsum</a>-->
								<!--	</div>-->
								<!--</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--		<div class="col-lg-6">-->
			<!--			<div class="load-p-right">-->
			<!--				<div class="map-image">-->
			<!--					<img src="assets/images/map-image.png" class="img-fluid" alt="">-->
			<!--				</div>-->
			<!--				<div class="path-image">-->
			<!--					<img src="assets/images/path-image.png" class="img-fluid" alt="">-->
			<!--				</div>-->
			<!--				<div class="map-inprocess-btn">-->
			<!--					<a href="#!">In-Process</a>-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</div>-->
			</div>
		</div>
	</section>
<?php include 'includes/footertwo.php';?>
