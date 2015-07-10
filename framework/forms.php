<!-- Start Head -->
<?php include 'head.php'; ?>
<!-- End Head -->

<body>

	<!-- Start Header -->
	<?php include 'header.php'; ?>
	<!-- End Header -->
	
	<!-- Start Grid Wrapper -->
	<div id="grid-wrapper" class="grid-size-6">
		
		<!-- Start Sidebar -->
		<?php include 'sidebar.php'; ?>
		<!-- End Sidebar -->

		<div class="ctn-18">
			
			<div class="row">
				<h1>Form Elements With Style</h1>
			</div>

			<section>
				<div class="row">

					<h2>Inputs</h2>
					<div class="showcase">
						<p>Every form needs some inputs. They don't need to be boring either! Adding them to your forms have never been easier. Give it a try.</p>
					</div>
				
					<div class="ctn-8">
						<label for="name">Name</label>
						<input id="name" type="text" placeholder="Name" />
					</div>
					<div class="ctn-8">
						<label for="email">Email</label>
						<input id="email" type="email" placeholder="Email" />
					</div>
					<div class="ctn-8">
						<label for="phone">Phone</label>
						<input id="phone" type="tel" placeholder="Phone" />
					</div>
				</div>
				
				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<div class="ctn-8">
							<label for="name">Name</label>
							<input id="name" type="text" placeholder="Name" />
						</div>
						<div class="ctn-8">
							<label for="email">Email</label>
							<input id="email" type="email" placeholder="Email" />
						</div>
						<div class="ctn-8">
							<label for="phone">Phone</label>
							<input id="phone" type="tel" placeholder="Phone" />
						</div>
					]]></script>
				</div>

				<div class="row">
					<h3>Inputs With A Little Pizzazz</h3>
					<p>If you are feeling creative, jazz up those inputs with some icons!</p>

					<div class="grid-no-margin">
						<div class="ctn-8">
							<label for="name-2">Name</label>

							<div class="input-box ctn-3"><span class="glyphicons pencil"></span></div>
							<div class="ctn-21">
								<input id="name-2" class="border-radius-right-side" type="text" placeholder="Name" />
							</div>
						</div>
						<div class="ctn-8">
							<label for="email-2">Email</label>
							
							<div class="input-box ctn-3">@</div>
							<div class="ctn-21">
								<input id="email-2" class="border-radius-right-side" type="email" placeholder="Email" />
							</div>
						</div>
						<div class="ctn-8">
							<label for="phone-2">Phone</label>

							<div class="input-box ctn-3"><span class="glyphicons earphone"></span></div>
							<div class="ctn-21">
								<input id="phone-2" class="border-radius-right-side" type="tel" placeholder="Phone" />
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<div class="grid-no-margin">
							<div class="ctn-8">
								<label for="name-2">Name</label>

								<div class="input-box ctn-3"><span class="glyphicons pencil"></span></div>
								<div class="ctn-21">
									<input id="name-2" class="border-radius-right-side" type="text" placeholder="Name" />
								</div>
							</div>
							<div class="ctn-8">
								<label for="email-2">Email</label>
								
								<div class="input-box ctn-3">@</div>
								<div class="ctn-21">
									<input id="email-2" class="border-radius-right-side" type="email" placeholder="Email" />
								</div>
							</div>
							<div class="ctn-8">
								<label for="phone-2">Phone</label>

								<div class="input-box ctn-3"><span class="glyphicons earphone"></span></div>
								<div class="ctn-21">
									<input id="phone-2" class="border-radius-right-side" type="tel" placeholder="Phone" />
								</div>
							</div>
						</div>
					]]></script>
				</div>

				<div class="row">
					<h3>Inputs With Inline Labels</h3>
					<p>Sometimes you just want those labels to be inline right?</p>
					
					<div class="inline-label ctn-8">
						<label for="name-3" class="ctn-4 offset-r-1">Name</label>
						<div class="ctn-19">
							<input id="name-3" type="text" placeholder="Name" />
						</div>
					</div>
					<div class="inline-label ctn-8">
						<label for="email-3" class="ctn-4 offset-r-1">Email</label>
						<div class="ctn-19">
							<input id="email-3" type="email" placeholder="Email" />
						</div>
					</div>
					<div class="inline-label ctn-8">
						<label for="phone-3" class="ctn-4 offset-r-1">Phone</label>
						<div class="ctn-19">
							<input id="phone-3" type="tel" placeholder="Phone" />
						</div>
					</div>
				</div>
				
				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<div class="inline-label ctn-8">
							<label for="name-3" class="ctn-4 offset-r-1">Name</label>
							<div class="ctn-19">
								<input id="name-3" type="text" placeholder="Name" />
							</div>
						</div>

						<div class="inline-label ctn-8">
							<label for="email-3" class="ctn-4 offset-r-1">Email</label>
							<div class="ctn-19">
								<input id="email-3" type="email" placeholder="Email" />
							</div>
						</div>

						<div class="inline-label ctn-8">
							<label for="phone-3" class="ctn-4 offset-r-1">Phone</label>
							<div class="ctn-19">
								<input id="phone-3" type="tel" placeholder="Phone" />
							</div>
						</div>
					]]></script>
				</div>

				<div class="row">
					<h3>Inputs With Inline Labels And Icons?</h3>
					<p>Whoa, now we are really getting fancy!</p>

					<div class="grid-no-margin">
						<div class="inline-label ctn-8">
							<label for="name-4" class="ctn-5 offset-r-1">Name</label>

							<div class="input-box ctn-3"><span class="glyphicons pencil"></span></div>
							<div class="ctn-15">
								<input id="name-4" class="border-radius-right-side" type="text" placeholder="Name" />
							</div>
						</div>
						<div class="inline-label ctn-8">
							<label for="email-4" class="ctn-5 offset-r-1">Email</label>
							
							<div class="input-box ctn-3">@</div>
							<div class="ctn-15">
								<input id="email-4" class="border-radius-right-side" type="email" placeholder="Email" />
							</div>
						</div>
						<div class="inline-label ctn-8">
							<label for="phone-4" class="ctn-5 offset-r-1">Phone</label>

							<div class="input-box ctn-3"><span class="glyphicons earphone"></span></div>
							<div class="ctn-15">
								<input id="phone-4" class="border-radius-right-side" type="tel" placeholder="Phone" />
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<div class="grid-no-margin">
							<div class="inline-label ctn-8">
								<label for="name-4" class="ctn-5 offset-r-1">Name</label>

								<div class="input-box ctn-3"><span class="glyphicons pencil"></span></div>
								<div class="ctn-15">
									<input id="name-4" class="border-radius-right-side" type="text" placeholder="Name" />
								</div>
							</div>
							<div class="inline-label ctn-8">
								<label for="email-4" class="ctn-5 offset-r-1">Email</label>
								
								<div class="input-box ctn-3">@</div>
								<div class="ctn-15">
									<input id="email-4" class="border-radius-right-side" type="email" placeholder="Email" />
								</div>
							</div>
							<div class="inline-label ctn-8">
								<label for="phone-4" class="ctn-5 offset-r-1">Phone</label>

								<div class="input-box ctn-3"><span class="glyphicons earphone"></span></div>
								<div class="ctn-15">
									<input id="phone-4" class="border-radius-right-side" type="tel" placeholder="Phone" />
								</div>
							</div>
						</div>
					]]></script>
				</div>
				
				<div class="row">
					<h2>Radio Buttons</h2>
					<div class="showcase">
						<p>What are forms anyway without some inputs? Adding them to your forms is quick and easy.</p>
					</div>
				</div>
				
				<div class="row">
					<div class="ctn-6">
						<input id="back" type="radio" name="schwarzenegger" />
						<label for="back" class="label-float">I'll Be Back</label>
					</div>
					<div class="ctn-6">
						<input id="chopper" type="radio" name="schwarzenegger" />
						<label for="chopper" class="label-float">Get to the Chopper</label>
					</div>
					<div class="ctn-6">
						<input id="around" type="radio" name="schwarzenegger" />
						<label for="around" class="label-float">Stick Around</label>
					</div>
					<div class="ctn-6">
						<input id="learner" type="radio" name="schwarzenegger" />
						<label for="learner" class="label-float">I'm a quick learner</label>
					</div>
				</div>

				<div class="row">
					<h2>Checkboxes</h2>
					<div class="showcase">
						<p>What are forms anyway without some inputs? Adding them to your forms is quick and easy.</p>
					</div>
				</div>

				<div class="row">
					<div class="ctn-6">
						<input id="heavy" type="checkbox" />
						<label for="heavy" class="label-float">Whoa. This is heavy</label>
					</div>
					<div class="ctn-8">
						<input id="gigawatt" type="checkbox" />
						<label for="gigawatt" class="label-float">What the Hell Is a Gigawatt?</label>
					</div>
					<div class="ctn-10">
						<input id="tree" type="checkbox" />
						<label for="tree" class="label-float">Make like a Tree and Get Outta Here</label>
					</div>
				</div>

				<div class="row">
					<h2>Select Menues</h2>
					<div class="showcase">
						<p>What are forms anyway without some inputs? Adding them to your forms is quick and easy.</p>
					</div>
				</div>

				<div class="row">
					<div class="ctn-8">
						<label for="choose-below">Select</label>
						<select id="choose-below">
							<option value="Choose Below" disabled selected>Choose Below</option>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>
					</div>
				</div>
			</section>

		</div>
	</div>
	<!-- End Grid Wrapper -->

	<!-- Start Footer -->
	<?php include 'footer.php'; ?>
	<!-- End Footer -->
</body>
</html>