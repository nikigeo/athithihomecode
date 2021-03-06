<div id="home-top-section">
		
		<!-- Main Slider -->
		<div id="main-slider">
			<div class="items">
	            <a href="#" >
	            	<img src="images/Sitting_Room-1.jpg" alt="3"/><!-- Change the URL section based on your image\'s name -->
	            </a>
	        </div>
	        <div class="items">
	            <a href="#" >
	            	<img src="images/Sitting_Room-2.jpg" alt="3"/>
	            </a>
	        </div>
	        <div class="items" >
	            <a href="#" >
	            	<img src="images/Dinning_Room.jpg" alt="4"/>
	            </a>
	        </div>
	        <div class="items">
	            <a href="#" >
	            	<img src="images/Bedroom-3.jpg" alt="2"/>
	            </a>
	        </div>
	    </div>

		<!-- Booking Form -->
		<div class="booking-form-container container">
			<div class="booking-form-inner-container">
				<div id="main-booking-form" class="style-2">
					<h2><span>Reservation</span></h2>
					<form class="booking-form clearfix" action="sendreservation.php" method="post"><!-- Do Not remove the classes -->
						<div class="input-daterange clearfix">
				            <div class="booking-fields col-xs-6 col-md-12">
				                <input placeholder="Choose check in date" class="datepicker-fields check-in" type="text" name="start"/><!-- Date Picker field ( Do Not remove the "datepicker-fields" class ) -->
				                <i class="fa fa-calendar"></i><!-- Date Picker Icon -->
				            </div>
				            <div class="booking-fields col-xs-6 col-md-12">
				                <input placeholder="Choose check out date" class="datepicker-fields check-out" type="text" name="end"/>
				                <i class="fa fa-calendar"></i>
				            </div>
				        </div>
			           <!-- <div class="booking-fields col-xs-6 col-md-12">
			                <!-- Select boxes ( you can change the items and its value based on your project's needs ) -->
			               <!-- <select name="persons" required="required">
			                    <option value="">How Many Pax?</option>
			                    <option value="2">1</option>
			                    <option value="3">2</option>
			                    <option value="4">3</option>
			                    <option value="5">4</option>
			                    <option value="6">5</option>
			                </select>-->
			                <!-- End of Select boxes --
			            </div> -->
			            <div class="booking-fields col-xs-6 col-md-12">
			                <input type="text" class="email" name="email" placeholder="Email" required="required">
			            </div>
                        			            <div class="booking-fields col-xs-6 col-md-12">
			                <input type="text" class="text" name="phone" placeholder="Contact No" required="required">
			            </div>

			            <div class="booking-button-container">
			                <input class="btn btn-default" value="Send Request" type="submit"/><!-- Submit button -->
			            </div>
			        </form>
				</div>
			</div>
		</div>
	</div>