<?php require_once('head.php'); ?>


<!-- Movie Container -->
<div id="movieContainer">
<div id="movieGrid">
<h3 id="showing">Now Showing</h3>

http://<? php echo $_SERVER['SERVER_NAME']; ?>/s3465614/wp/a3/php/movie-service.php
<!-- http://jupiter.csit.rmit.edu.au/~s3465614/wp/a3/php/movie-service.php -->
<!-- What do I do with this link?? -->


<div id="searchBox">
<input type="text" id="film" list="films" />
	<datalist id="films">
		<option value="AF">
		<option value="CH">
		<option value="RC">
		<option value="AC">
	</datalist>
	<button id="filmSearch">Search</button>	
</div>

<br>

<div id="tabs">

<!-- Tab Headings -->	
	<ul>
		<li><a href="#tab1">Today</a></li>
		<li><a href="#tab2">Popular</a></li>
		<li><a href="#tab3">Brand New</a></li>
		<li><a href="#tab4">Coming Soon</a></li>
	</ul>	

<!-- Today Tab -->
<!-- Row 1  -->
<div id="tab1">
				<div class="col one">
					<h3>Jupiter Ascending</h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
					<p>Directors: <a class="promoLink" href="">Lana and Andy Wachowski</a></p>
					<p>Starring: <a class="promoLink" href="">Channing Tatum</a>, 
					<a class="promoLink" href="">Mila Kunis</a>, 
					<a class="promoLink" href="">Douglas Booth</a></p>
					<p><a class="btnMoreInfo" id="tInfo1" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook1" href="#" >Times</a></p><br><br>
				</div>
			
				<div class="col two">
					<h3><?php foreach($movie):
					echo '<h3>'.$movie['title'].'</h2>';
					endforeach; ?></h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
					<p>Directors: <a class="promoLink" href="">Peter Jackson</a></p>
					<p>Starring: <a class="promoLink" href="">Johnny Depp</a>, 
					<a class="promoLink" href="">Helena Bonhman</a>
					<p><a class="btnMoreInfo" id="tInfo2" name="CH" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook2" href="#" value="m124">Times</a></p><br><br>
				</div>

				<div class="col three">
					<h3>Paul Blart</h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
					<p>Director/s: <a class="promoLink" href="#">Andy Fickman</a></p>
					<p>Starring: <a class="promoLink" href="#">Kevin James</a>, 
					<a class="promoLink" href="#">Adam Sandler</a></p>
					<p><a class="btnMoreInfo" id="tInfo3" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook3" href="#" >Times</a></p><br><br>
				</div>
<!-- Row 2 -->				
<div id="row2">
				<div class="col four">
					<h3>Cinderella</h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
	  				<p>Director/s: <a class="promoLink" href="#">Kenneth Branagh</a></p>
					<p>Starring: <a class="promoLink" href="#">Lily James</a>, 
					<a class="promoLink" href="#">Cate Blanchett</a>, 
					<a class="promoLink" href="#">Richard Madden</a></p>
					<p><a class="btnMoreInfo" id="tInfo4" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook4" href="#" >Times</a></p><br><br>
				</div>

				<div class="col five">
					<h3>The Wedding Ringer</h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
					<p>Director/s: <a class="promoLink" href="#">Jeremy Garelick</a></p>
					<p>Starring: <a class="promoLink" href="#">Josh Gad</a>, 
					<a class="promoLink" href="#">Kevin Hart</a>,
					<a class="promoLink" href="#">Kevon Spacey</a></p>
					<p><a class="btnMoreInfo" id="tInfo2" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook5" href="#" >Times</a></p><br><br>
				</div>

				<div class="col six">
					<h3>Reservoir Dogs</h3>
					<p>Rated PG</p>
					<img src="img/ratingSml.png" width="100" height="20" alt="This movie has a three star rating" />
					<p>Director/s: <a class="promoLink" href="#">Quentin Tarentino</a></p>
					<p>Starring: <a class="promoLink" href="#">Roger Avary</a>, 
					<a class="promoLink" href="#">Quentin Tarentino</a></p>
					<p><a class="btnMoreInfo" id="tInfo3" href="#" >Info</a>
					<a class="btnMoreInfo" id="tBook6" href="#" >Times</a></p><br><br>
				</div>
</div><!-- End Row 2 -->
<div class="clear"></div>
</div> <!-- End Today Tab -->
</div> <!-- End Movie Grid -->
</div> <!-- End Movie Container -->


<br><br>



<!-- tInfo2 Dialog -->
<div id="dialog">
	<img src="img/movieCoverOne.jpg" />
		<h3 id="title">Alice in Wonderland</h3>
		<p id="rating">Rated PG</p>
	  	<p id="Desc">Alice in Wonderland is a modern take on the original movie from the 60's. The 3D Film invites its audience to go tumbling down the rabbit hole with Alice on an aural and visual sensory explosion. Watch cups fly past your head as the Mad Hatter goes crazy over the tea party. Let the Cheshire Cat appear right in front of you. All of this and more at Silverado 3D Cinema.</p>
	  	<p>Directors: <a class="promoLink" href="#">Peter Jackson</a></p>
		<p>Starring: <a class="promoLink" href="#">Johnny Depp</a>, 
		<a class="promoLink" href="#">Mila Kunis</a>, 
		<a class="promoLink" href="#">Douglas Booth</a></p>
</div> 




<!-- tBook2 Dialog -->
<div id="dialog2">
<!-- Choose Session Time -->
	<div id="chooseTime">
			<h3>Choose Session</h3>
		<div>
			<table>
					<tbody>
						<tr>
							<td><span class="day" value="Monday">Monday</span></td>
							<td><span class="time"><a class="chooseTicket" value="1pm">13:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Tuesday">Tuesday</span></td>
							<td><span class="time">
						<a class="chooseTicket" value="1pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Tuesday&time=13.00">13:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Wednesday">Wednesday</span></td>
							<td><span class="time">
							<a class="chooseTicket" value="6pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Wednesday&time=18.00">18:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Thursday">Thursday</span></td>
							<td><span class="time">
							<a class="chooseTicket" value="6pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Thursday&time=18.00">18:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Friday">Friday</span></td>
							<td><span class="time">
							<a class="chooseTicket" value="6pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Friday&time=18.00">18:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Saturday">Saturday</span></td>
							<td><span class="time">
							<a class="chooseTicket" value="12pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Saturday&time=12.00">12:00</a></span></td>
						</tr>
						<tr>
							<td><span class="day" value="Sunday">Sunday</span>
							<td><span class="time">
							<a class="chooseTicket" value="12pm" href="http://jupiter.csit.rmit.edu.au/~s3465614/wp/a2/php/movie-service.php?film=CH&day=Sunday&time=12.00">12:00</a></span></td>
						</tr>
					</tbody>
			</table>
			<input id="cancel" type="button" class="btn" value="Cancel" />	
		</div>			
	</div> <!-- End Choose Time -->



	<!-- Add Ticket -->
		<div id="booking">
			<!-- Form -->
			<form method="post" action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php">
				<h3>Select Tickets</h3>
				<div>
					<table>
						<tbody>
							<tr>
								<td>First Class Adult</td>
								<td>
									<input type="number" id="FAinput" class="price" value="30.00" />
									$30<span id="FAprice"></span>
								</td>
								<td><input type="number" id="FAqty" class="qty" value="0" name="FA" /></td>
								<td>
									<input type="number"/>
									$<span id="FAsubtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>
								<td>First Class Child</td>
								<td>
									<input type="number" id="FCinput" class="price" value="25.00"/>
									$25<span id="FCprice"></span>
								</td>
								<td><input type="number" id="FCqty" class="qty" value="0" name="FC" /></td>
								<td>
									<input type="number" />
									$<span id="FCsubtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>
								<td>Adult</td>
								<td>
									<input type="number" id="SAinput" class="price" value="18.00"/>
									$18<span id="SAprice"></span>
								</td>
								<td><input type="number" id="SAqty" class="qty" value="0" name="SA" /></td>
								<td>
									<input type="number" />
									$<span id="SAsubtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>
								<td>Concession</td>
								<td>
									<input type="number" id="SPinput" class="price" value="15.00" />
									$15<span id="SPprice"></span>
								</td>
								<td><input type="number" id="SPqty" class="qty" value="0" name="SP" /></td>
								<td>
									<input type="number" />
									$<span id="SPsubtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>
								<td>Child</td>
								<td>
									<input type="number" id="SCinput" class="price" value="12.00" />
									$12<span id="priceChild"></span>
								</td>
								<td><input type="number" id="SCqty" class="qty" value="0" name="SC" /></td>
								<td>
									<input type="number" />
									$<span id="SCsubtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>
								<td>Beanbag 1</td>
								<td>
									<input type="number" id="B1input" class="price" value="30.00" />
									$30<span id="B1price"></span>
								</td>
								<td><input type="number" id="B1qty" class="qty" value="0" name="B1" /></td>
								<td>
									<input type="number" />
									$<span id="B1subtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>	
								<td>Beanbag 2</td>
									<td>
									<input type="number" id="B2input" class="price" value="30.00" />
									$30<span id="B2price"></span>
								</td>
								<td><input type="number" id="B2qty" class="qty" value="0" name="B2" /></td>
								<td>
									<input type="number" />
									$<span id="B2subtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr>			
								<td>Beanbag 3</td>
									<td>
									<input type="number" id="B3input" class="price" value="30.00" />
									$30<span id="B3price"></span>
								</td>
								<td><input type="number" id="B3qty" class="qty" value="0" name="B3" /></td>
								<td>
									<input type="number" />
									$<span id="B3subtotal" class="subtotal">0.00</span>
								</td>
							</tr>
							<tr><td colspan="4" id="white"><span id="quantityError">Please enter a valid quantity!</span></td></tr>
							<tr><td colspan="3" id="totalHead">Total Price</td>
								<td>
									<input type="number" id="totalInput"/>
									$<span id="totalPrice" class="totalPrice">0.00</span>
								</td>
							</tr>

						</tbody>
					</table>
				
					<input id="cart" type="button" class="btn" value="Cart" />
					<input id="backTime" type="button" class="btn" value="Back" />	
				</div> <!-- End Div -->
		</div><!-- End booking div -->


	
		
	<div id="subTotalCart">
				
				<h2>Booking Summary</h2>
				
					<table>			
						<tr><td>Day:</td><td><input type="hidden" name="day" value="" /><span id="day"></span></td></tr>	
						<tr><td>Time:</td><td><input type="hidden" name="time" value="" /><span id="time"></span></td></tr>
						<tr><td>Genre:</td><td><input type="hidden" name="film" value="" /><span id="film"></span></td></tr>
						<tr><td>Total:</td><td><input type="hidden" id="totalPriceInput" name="price" /><span id="totalCart"></span></td></tr>
					</table>	
					
				<button id="purchase" class="btn" onclick="calculateSum()">Buy</button>
			<input id="backTicket" type="button" class="btn" value="Back" />				
	</div><!-- End Sub Total Cart -->



</form><!-- End Form -->
</div><!-- End Dialog2 -->


<br><br>

<?php require_once('app/views/include/nav.php'); ?>
<?php require_once('app/views/include/footer.php'); ?>




	</div><!-- End Page -->

<script type="text/javascript" src="js/modalButtonControls.js"></script>
<script type="text/javascript" src="js/bookingForm.js"></script>
<script type="text/javascript" src="js/movieFinder.js"></script>
<script type="text/javascript" src="js/rotateBanner.js"></script>
</body>
</html>