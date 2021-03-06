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
				<h1>Clean, consistent styles for your content</h1>
			</div>

			<section>
				<div class="row">
					<h2>Headings</h2>
					<div class="showcase">
						<p>Headings are a very important piece of your content hierarchy. They can help a user navigate through content effectively. You now have the option to use headings from H1 to H6.</p>
					</div>
				</div>

				<div class="row no-style">
					<h1>h1 - Ain't gonna be no rematch </h1>
					<h2>h2 - Yo... It's cold outside, Paulie</h2>
					<h3>h3 - Yea, to you it's Thanksgiving; to me it's Thursday</h3>
					<h4>h4 - Where did you get the name, "The Italian Stallion"?</h4>
					<h5>h5 - Yeah, and I'm running a business here, not a goddamn soup kitchen</h5>
					<h6>h6 - I think we make a real sharp couple of coconuts</h6>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<h1>/*h1 - Ain't gonna be no rematch*/</h1>
						<h2>/*h2 - Yo... It's cold outside, Paulie*/</h2>
						<h3>/*h3 - Yea, to you it's Thanksgiving; to me it's Thursday*/</h3>
						<h4>/*h4 - Where did you get the name, "The Italian Stallion"?*/</h4>
						<h5>/*h5 - Yeah, and I'm running a business here, not a goddamn soup kitchen*/</h5>
						<h6>/*h6 - I think we make a real sharp couple of coconuts*/</h6>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Subheadings</h2>
					<div class="showcase">
						<p>Subheadings are available to use for  H1, H2 and H3 elements. For example, if you want to add a subheading for your H1 element, 
						just add a small tag inside your h1 tag. To display the subheading underneath the heading, just add the class <span class="highlight">block</span> to the small tag.</p>
					</div>
				</div>

				<div class="row no-style">
					<h1>Everyone has a favorite saying: <small>Mine is Cowabunga</small></h1>
					<h2>Odd question: <small>Do you like penicillin on your pizza?</small></h2>
					<h3>People see strange things: <small>Looked like sort of a big turtle, in a trench coat</small></h3>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<h1>/*Everyone has a favorite saying: <small>Mine is Cowabunga</small>*/</h1>
						<h2>/*Odd question: <small>Do you like penicillin on your pizza?</small>*/</h2>
						<h3>/*People see strange things: <small class="block">Looked like sort of a big turtle, in a trench coat.</small>*/</h3>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Paragraphs</h2>
					<div class="showcase">
						<p>Ohh, just look at those beautiful paragraphs. Paragraphs have built in line height and padding to allow for a more enjoyable reading experience.</p>
					</div>
				</div>
				
				<h3>Left Aligned</h3>
				<div class="row no-style">
					<p class="left-aligned">What is real? How do you define 'real'? If you're talking about what you can feel, what you can smell, what you can taste and see, then 'real' is simply electrical signals interpreted by your brain.</p>
				</div>

				<h3>Right Aligned</h3>
				<div class="row no-style">
					<p class="right-aligned">Have you ever had a dream, Neo, that you were so sure was real? What if you were unable to wake from that dream? How would you know the difference between the dream world and the real world?</p>
				</div>

				<h3>Center Aligned</h3>
				<div class="row no-style">
					<p class="centered-aligned">I see it in your eyes. You have the look of a man who accepts what he sees because he is expecting to wake up. Ironically, that's not far from the truth. Do you believe in fate, Neo?</p>
				</div>

				<h3>Justified</h3>
				<div class="row no-style">
					<p class="justified">This is your last chance. After this, there is no turning back. You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe. 
					You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<p class="left-aligned">/*Your content*/</p>
						<p class="right-aligned">/*Your content*/</p>
						<p class="centered-aligned">/*Your content*/</p>
						<p class="justified">/*Your content*/</p>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Lists</h2>
					<div class="showcase">
						<p>Lists are very helpful in organizing your content especially if you have a content heavy web site. We have just about every style of lists you will ever need.</p>
					</div>
				</div>
				
				<h3>Styled List</h3>
				<div class="row no-style">
					<ul>
						<li>You can be my wingman any time</li>
						<li>Gutsiest move I ever saw, Mav</li>
						<li>I'm gonna hit the brakes, he'll fly right by
							<ul class="styled-list-circle">
								<li>He can't be a dog. He drives a car and wears a hat</li>
								<li>Chopper! Sic'em, boy!</li>
								<li>Don't call me any of your mother's pet names
									<ul class="styled-list-square">
										<li>Silly Caucasian girl likes to play with Samurai swords</li>
										<li>That really was a Hattori Hanzo sword</li>
										<li>I didn't say "sell me", I said "give me"</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ul>
							<li>/*You can be my wingman any time*/</li>
							<li>/*Gutsiest move I ever saw, Mav*/</li>
							<li>/*I'm gonna hit the brakes, he'll fly right by*/
								<ul class="styled-list-circle">
									<li>/*He can't be a dog. He drives a car and wears a hat*/</li>
									<li>/*Chopper! Sic'em, boy!*/</li>
									<li>/*Don't call me any of your mother's pet names*/
										<ul class="styled-list-square">
											<li>/*Silly Caucasian girl likes to play with Samurai swords*/</li>
											<li>/*That really was a Hattori Hanzo sword*/</li>
											<li>/*I didn't say "sell me", I said "give me"*/</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					]]></script>
				</div>

				<h3>Unstyled List</h3>
				<div class="row no-style">
					<ul class="unstyled-list">
						<li>You couldn't hear a dump truck driving through a nitroglycerin plant</li>
						<li>Oh dear, did I break wind?</li>
						<li>I'm sorry. This is our family's first kidnapping
							<ul class="unstyled-list">
								<li>Uh oh, fifteen minutes to Judge Wapner</li>
								<li>Gotta get my boxer shorts at K-Mart</li>
								<li>Of course you can't have pancakes without maple syrup</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ul class="unstyled-list">
							<li>/*You couldn't hear a dump truck driving through a nitroglycerin plant*/</li>
							<li>/*Oh dear, did I break wind?*/</li>
							<li>/*I'm sorry. This is our family's first kidnapping*/
								<ul class="unstyled-list">
									<li>/*Uh oh, fifteen minutes to Judge Wapner*/</li>
									<li>/*Gotta get my boxer shorts at K-Mart*/</li>
									<li>/*Of course you can't have pancakes without maple syrup*/</li>
								</ul>
							</li>
						</ul>
					]]></script>
				</div>

				<h3>Ordered List</h3>
				<div class="row no-style">
					<ol>
						<li>Goonies never say die!</li>
						<li>So... that's why they call you One-Eyed Willie... One-Eyed Willie</li>
						<li>Ruth! Ruth! Baby! Ruth!
							<ol class="styled-list-upper-alpha">
								<li>Run, Forrest! Run!</li>
								<li>Me and Jenny goes together like peas and carrots</li>
								<li>I was born with big gums, sir
									<ol class="styled-list-lower-alpha">
										<li>Here's to swimmin' with bow-legged women</li>
										<li>It's only an island if you look at it from the water</li>
										<li>I'm not going to waste my time arguing with a man who's lining up to be a hot lunch
											<ol class="styled-list-upper-roman">
												<li>What are you looking at, nerd?</li>
												<li>Excuse please, but why do they call you "booger"?</li>
												<li>You're *jocks*! Go live in the gym!
													<ol class="styled-list-lower-roman">
														<li>When you pray for rain, you gotta deal with the mud too</li>
														<li>I don't have a lot of time. Which means you don't have any</li>
														<li>Man gotta be the man, fish gotta be the fish</li>
													</ol>
												</li>
											</ol>
										</li>
									</ol>
								</li>
							</ol>
						</li>
					</ol>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ol>
							<li>/*Goonies never say die!*/</li>
							<li>/*So... that's why they call you One-Eyed Willie... One-Eyed Willie*/</li>
							<li>/*Ruth! Ruth! Baby! Ruth!*/
								<ol class="styled-list-upper-alpha">
									<li>/*Run, Forrest! Run!*/</li>
									<li>/*Me and Jenny goes together like peas and carrots*/</li>
									<li>/*I was born with big gums, sir*/
										<ol class="styled-list-lower-alpha">
											<li>/*Here's to swimmin' with bow-legged women*/</li>
											<li>/*It's only an island if you look at it from the water*/</li>
											<li>/*I'm not going to waste my time arguing with a man who's lining up to be a hot lunch*/
												<ol class="styled-list-upper-roman">
													<li>/*What are you looking at, nerd?*/</li>
													<li>/*Excuse please, but why do they call you "booger"?*/</li>
													<li>/*You're *jocks*! Go live in the gym!*/
														<ol class="styled-list-lower-roman">
															<li>/*When you pray for rain, you gotta deal with the mud too*/</li>
															<li>/*I don't have a lot of time. Which means you don't have any*/</li>
															<li>/*Man gotta be the man, fish gotta be the fish*/</li>
														</ol>
													</li>
												</ol>
											</li>
										</ol>
									</li>
								</ol>
							</li>
						</ol>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Blockquotes</h2>
					<div class="showcase">
						<p>Sometimes you just really want to express your thoughts but might not know exactly how or what to say. You never can go wrong using a quote from someone else.</p>
					</div>
				</div>
				
				<div class="ctn-12">
					<blockquote>
						The scientists of today think deeply instead of clearly. One must be sane to think clearly, but one can think deeply and be quite insane.
						<cite>Nikola Tesla</cite>
					</blockquote>
				</div>

				<div class="ctn-12">
					<blockquote>
						Nature is the source of all true knowledge. She has her own logic, her own laws, she has no effect without cause nor invention without necessity.
						<cite>Leonardo da Vinci</cite>
					</blockquote>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<blockquote>
							/*The scientists of today think deeply instead of clearly. One must be sane to think clearly, but one can think deeply and be quite insane.*/
							<cite>/*Nikola Tesla*/</cite>
						</blockquote>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Tables</h2>
					<div class="showcase">
						<p>In the past, tables were used to build everything for the web. Today, the div element has happly replaced tables. However, tables are still the way to go for displaying tabular data.</p>
					</div>
				</div>
				
				<h3>Basic Table</h3>
				<div class="row">
					<table>
						<thead>
							<tr>
								<th>Leonardo</th>
								<th>Michelangelo</th>
								<th>Raphael</th>
								<th>Donatello</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>We were awesome!</td>
								<td>God, I LOVE *BEING A TURTLE*!</td>
								<td>Totally tubular, dude!</td>
								<td>We were awesome</td>
							</tr>
							<tr>
								<td>I know Splinter's out there</td>
								<td>Oh man, I could go for a little deep dish action right about now</td>
								<td>How about a five-minute game misconduct for roughing, pal?</td>
								<td>I think he's actually turning red</td>
							</tr>
							<tr>
								<td>I never said I was a great leader</td>
								<td>Yes, Dudes and Dudettes, major-league butt-kicking is back in town</td>
								<td>Look, I don't wanna fight you</td>
								<td>Uh... he just needs to blow off some steam</td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<table>
							<thead>
								<tr>
									<th>/*Leonardo*/</th>
									<th>/*Michelangelo*/</th>
									<th>/*Raphael*/</th>
									<th>/*Donatello*/</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>/*We were awesome!*/</td>
									<td>/*God, I LOVE *BEING A TURTLE*!*/</td>
									<td>/*Totally tubular, dude!*/</td>
									<td>/*We were awesome*/</td>
								</tr>
								<tr>
									<td>/*I know Splinter's out there*/</td>
									<td>/*Oh man, I could go for a little deep dish action right about now*/</td>
									<td>/*How about a five-minute game misconduct for roughing, pal?*/</td>
									<td>/*I think he's actually turning red*/</td>
								</tr>
								<tr>
									<td>/*I never said I was a great leader*/</td>
									<td>/*Yes, Dudes and Dudettes, major-league butt-kicking is back in town*/</td>
									<td>/*Look, I don't wanna fight you*/</td>
									<td>/*Uh... he just needs to blow off some steam*/</td>
								</tr>
							</tbody>
						</table>
					]]></script>
				</div>

				<h3>Table With Caption</h3>
				<div class="row">
					<table>
						<caption>We're reviving a canceled undercover police program from the '80s and revamping it for modern times. You see the guys in charge of this stuff lack creativity and are completely out of ideas, 
						so all they do now is recycle shit from the past and expect us all not to notice.</caption>
						<thead>
							<tr>
								<th>Jenko</th>
								<th>Schmidt</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Those are jocks, those are nerds...</td>
								<td>Sir, I know we may look like a couple of lady-killers, but me and my partner will be super professional...</td>
							</tr>
							<tr>
								<td>It obviously starts with... you have the right to... remain an attorney...</td>
								<td>When did I get stabbed? That's awesome!</td>
							</tr>
							<tr>
								<td>Chemistry's the one with the shapes and shit, right?</td>
								<td>We're like, in the end of "Die Hard" right now, only it's our actual life!</td>
							</tr>
							<tr>
								<td>It's arguably, like, an airplane throwing up.</td>
								<td>Um, I would just like to say that I would give a shit if he were black.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<table>
							<caption>/*We're reviving a canceled undercover police program from the '80s and revamping it for modern times. You see the guys in charge of this stuff lack creativity and are completely out of ideas, 
							so all they do now is recycle shit from the past and expect us all not to notice.*/</caption>
							<thead>
								<tr>
									<th>/*Jenko*/</th>
									<th>/*Schmidt*/</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>/*Those are jocks, those are nerds...*/</td>
									<td>/*Sir, I know we may look like a couple of lady-killers, but me and my partner will be super professional...*/</td>
								</tr>
								<tr>
									<td>/*It obviously starts with... you have the right to... remain an attorney...*/</td>
									<td>/*When did I get stabbed? That's awesome!*/</td>
								</tr>
								<tr>
									<td>/*Chemistry's the one with the shapes and shit, right?*/</td>
									<td>/*We're like, in the end of "Die Hard" right now, only it's our actual life!*/</td>
								</tr>
							</tbody>
						</table>
					]]></script>
				</div>

				<h3>Table With Hover State</h3>
				<div class="row">
					<table class="table-hover">
						<thead>
							<tr>
								<th>Willy Wonka</th>
								<th>Charlie Bucket</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>I always thought a verruca was a type of wart you got on the bottom of your foot.</td>
								<td>You can eat the grass?</td>
							</tr>
							<tr>
								<td>Let's go put him in the taffy puller!</td>
								<td>Candy doesn't have to have a point. That's why it's candy.</td>
							</tr>
							<tr>
								<td>Oh, thank you. You smell like... old people. And soap. I like it.</td>
								<td>So, if I go with you to the factory, I won't ever see my family again?</td>
							</tr>
							<tr>
								<td>Where all the other bad nuts go, to the garbage chute.</td>
								<td>Are the Oompa Loompas really joking, Grandpa?</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<table class="table-hover">
							<thead>
								<tr>
									<th>/*Willy Wonka*/</th>
									<th>/*Charlie Bucket*/</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>/*I always thought a verruca was a type of wart you got on the bottom of your foot.*/</td>
									<td>/*You can eat the grass?*/</td>
								</tr>
								<tr>
									<td>/*Let's go put him in the taffy puller!*/</td>
									<td>/*Candy doesn't have to have a point. That's why it's candy.*/</td>
								</tr>
								<tr>
									<td>/*Oh, thank you. You smell like... old people. And soap. I like it.*/</td>
									<td>/*So, if I go with you to the factory, I won't ever see my family again?*/</td>
								</tr>
								<tr>
									<td>/*Where all the other bad nuts go, to the garbage chute.*/</td>
									<td>/*Are the Oompa Loompas really joking, Grandpa?*/</td>
								</tr>
							</tbody>
						</table>
					]]></script>
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