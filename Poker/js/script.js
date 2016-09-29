$(document).ready(function() {
	(function(poker, $, undefined) {
		var newHand = true;
		var createDeckOfCardsArray = [];
		var randomNumber;
		var cards = [];
		var cardsInHand = [];
		var acesCount = 0;
		var kingsCount = 0;
		var queensCount = 0;
		var jacksCount = 0;
		var clubsCount = 0;
		var heartsCount = 0;
		var spadesCount = 0;
		var diamondsCount = 0;
		var pairCount = 0;
		var highCardCount = 0;
		var straight = false;
		var flush = false;
		var logMessage = '';
		var winner = false;
		var currentBalance = $('#money').html();
		var betAmount = $('#bet > img').attr('alt');
		var betAmountNumber;
		var winAmount;
		var currentBalanceNumber;
		var newValue;
		var winAmountTotal;
		var weHaveDeuces = false;

		function createDeckOfCards() {
			for(var i = 1; i < 53; i++) {
				var buildImage = '<img class="this-card" src="./images/cards/' + i +'.png"' + ' width="100%" alt="Card" />';
				createDeckOfCardsArray.push(buildImage);
			}
		}

		function startNewHand() {
			for(var i = 1; i < 6; i++) {
				$('#dynamic-card-wrapper-' + i + '> img.not-flipped').remove();
			}
			createDeckOfCards();
			createRandomCards();
			dealCards();
		}

		function addHoldCardImages() {
			for(var i = 1; i < 6; i++) {
				var holdCardImage = '<img id="hold-slot-' + i + '"' + ' src="./images/cards/hold.png"' + ' width="80%" alt="hold" />';
				$('#hold-' + i + '').append(holdCardImage);
				if(holdCardImage) {
					$('#hold-slot-' + i + '').click( function() {
						$(this).toggleClass('hold-true');
						$(this).parent().prev().children().toggleClass('hold-this-card');
					});
				}
			}
		}

		function drawCards() {
			var getNextFiveCardsInArray = cards.slice(5, 11);
			var incrementTime = 50;
			for(var i = 1; i < getNextFiveCardsInArray.length; i++) {
				$('#hold-slot-' + i).remove();
				if(!$('#dynamic-card-wrapper-' + i + '> img').hasClass('hold-this-card')) {
					$('#dynamic-card-wrapper-' + i + '> img').replaceWith(getNextFiveCardsInArray[i]);
					incrementTime = incrementTime + 200;
					function delayDrawCards(i) {
						setTimeout(function() {$('#dynamic-card-wrapper-' + i + '> img').removeClass('this-card')}, incrementTime);
					}
					delayDrawCards(i);
				}
			}
		}

		function createRandomNumber() {
			randomNumber = Math.floor(Math.random() * 52);
		}

		function createRandomCards() {
			var randomNumberArray = [];
			while(randomNumberArray.length <= 10) {
				createRandomNumber();

				var foundDuplicate = false;
				for(var i = 1; i < randomNumberArray.length; i++) {
					if(randomNumberArray[i] == randomNumber) {
						foundDuplicate = true;
						break
					}
				}
				if(!foundDuplicate) {
					randomNumberArray[randomNumberArray.length] = randomNumber;
					cards.push(createDeckOfCardsArray[randomNumber]);
				}
			}
		}

		function dealCards() {
			var incrementTime = 200;
			// cards[1] = '<img class="this-card" src="./images/cards/' + 1 +'.png"' + ' width="100%" alt="Card" />';
			// cards[2] = '<img class="this-card" src="./images/cards/' + 2 +'.png"' + ' width="100%" alt="Card" />';
			// cards[3] = '<img class="this-card" src="./images/cards/' + 3 +'.png"' + ' width="100%" alt="Card" />';
			// cards[4] = '<img class="this-card" src="./images/cards/' + 43 +'.png"' + ' width="100%" alt="Card" />';
			// cards[5] = '<img class="this-card" src="./images/cards/' + 18 +'.png"' + ' width="100%" alt="Card" />';
			for(var i = 1; i < cards.length; i++) {
				$('#dynamic-card-wrapper-' + i).append(cards[i]);
				incrementTime = incrementTime + 200;
				function delayDealCards(i) {
					setTimeout(function() {$('#dynamic-card-wrapper-' + i + '> img').show()}, incrementTime);
				}
				delayDealCards(i);
			}
		}

		function sortCards() {
			function sortNumber(a,b) {
				   return a - b;
				}
				cardsInHand.sort(sortNumber);
		}

		function evaluateCards() {
			for(var i = 1; i < 6; i++) {
				var getOnlyNumbers = $('#dynamic-card-wrapper-' + i + '> img').attr('src').replace(/\D/g,'');
				cardsInHand.push(getOnlyNumbers);
			}
		}

		function resetBalanceAfterBet() {
			currentBalance = $('#money').html();
			currentBalanceNumber = parseInt(currentBalance);
			betAmountNumber = parseInt(betAmount);
			newValue = currentBalanceNumber - betAmountNumber
			return $('#money').html(newValue);
		}

		function updateBalance() {
			setTimeout(function() {
				if(winner == false) {
					newValue = currentBalanceNumber;
					return $('#money').html(newValue);
				}
				return $('#money').html(newValue);
			}, 500);
		}

		function balance(winAmount, betAmountNumber, currentBalanceNumber) {
			currentBalance = $('#money').html();
			currentBalanceNumber = parseInt(currentBalance);
			betAmountNumber = parseInt(betAmount);
			newValue = winAmount * betAmountNumber + currentBalanceNumber;
			winAmountTotal = winAmount * betAmountNumber;
		}

		function checkForPairs() {
			for(var i = 0; i < cardsInHand.length; i++) {
				var cardNumber = parseInt(cardsInHand[i]);
				var second = cardNumber + 13;
				var third =  cardNumber + 26;
				var fourth =   cardNumber + 39;
				if(cardsInHand[i + 1] == second || cardsInHand[i + 2] == second || cardsInHand[i + 3] == second || cardsInHand[i + 4] == second) {
					pairCount++;
				}
				if(cardsInHand[i + 1] == third || cardsInHand[i + 2] == third || cardsInHand[i + 3] == third || cardsInHand[i + 4] == third) {
					pairCount++;
				}
				if(cardsInHand[i + 1] == fourth || cardsInHand[i + 2] == fourth || cardsInHand[i + 3] == fourth || cardsInHand[i + 4] == fourth) {
					pairCount++;
				}
			}
				if(pairCount == 2) {
					if(newHand === false) {
						winner = true;
						setTimeout(function(){balance(20)}, 50);
					}
					logMessage = 'Two pair';
					prizeBoxCome(logMessage);
				}
				if(pairCount == 3) {
					if(newHand === false) {
						winner = true;
						setTimeout(function(){balance(30)}, 50);
					}
					logMessage = 'Three of a kind';
					prizeBoxCome(logMessage);
				}
				if(pairCount == 4) {
					if(newHand === false) {
						winner = true;
						setTimeout(function(){balance(40)}, 50);
					}
					logMessage = 'Full house';
					prizeBoxCome(logMessage);
				}
				if(pairCount == 6) {
					if(newHand === false) {
						winner = true;
						setTimeout(function(){balance(50)}, 50);
					}
					logMessage = 'Four of a kind';
					prizeBoxCome(logMessage);
				}
		}

		function checkForFlush() {
			for(var i = 0; i < cardsInHand.length; i++) {
				var cardNumber = parseInt(cardsInHand[i]);

				if(cardsInHand[i] <= 13) {
					clubsCount++;
				}
				if(cardsInHand[i] > 13 && cardsInHand[i] <= 26) {
					heartsCount++;
				}
				if(cardsInHand[i] > 26 && cardsInHand[i] <= 39) {
					spadesCount++;
				}
				if(cardsInHand[i] > 39 && cardsInHand[i] <= 52) {
					diamondsCount++;
				}
				if(clubsCount == 5 || heartsCount == 5 || spadesCount == 5 || diamondsCount == 5) {
					flush = true; 
					checkForStraight();
					if(straight !== true) {
						if(newHand === false) {
							winner = true;
							setTimeout(function(){balance(60)}, 50);
						}
						logMessage = 'Flush';
						prizeBoxCome(logMessage);
					}
				}
			}
		}

		function checkForStraight() {
			for(var i = 0; i < cardsInHand.length; i++) {
				if(cardsInHand[i] == 13 || 26 || 39 || 52) {
					weHaveDeuces = true;
				}
				cardsInHand[i] = cardsInHand[i] % 13;
			}
			sortCards();
			if((cardsInHand[0] == cardsInHand[1] - 1 ||  cardsInHand[0] == 0) && (cardsInHand[0] == cardsInHand[1] - 1 || cardsInHand[0] == cardsInHand[1] - 9) && (cardsInHand[1] == cardsInHand[2] - 1 || cardsInHand[1] == cardsInHand[2] - 9) && (cardsInHand[2] == cardsInHand[3] - 1) && (cardsInHand[3] == cardsInHand[4] - 1)) {
				straight = true;
			}
			if(cardsInHand[0] == 0 && cardsInHand[1] == 1 && cardsInHand[2] == 2 && cardsInHand[3] == 3 && cardsInHand[4] == 4 && weHaveDeuces == true) {
				straight = false;
			}
		}

		function checkForStraightFlush() {
			for(var i = 0; i < cardsInHand.length; i++) {
				if(cardsInHand[i] <= 5) {
					highCardCount++;
				}
				if(cardsInHand[i] > 13 && cardsInHand[i] < 19) {
					highCardCount++;
				}
				if(cardsInHand[i] > 26 && cardsInHand[i] < 32) {
					highCardCount++;
				}
				if(cardsInHand[i] > 39 && cardsInHand[i] < 45) {
					highCardCount++;
				}
			}
		}

		function checkForTypeOfStraight() {
			if(straight == true && flush == true && highCardCount == 5) {
				if(newHand === false) {
					winner = true;
					setTimeout(function(){balance(90)}, 50);
				}
				logMessage = 'Royal Straight Flush';
				prizeBoxCome(logMessage);
			}
			if(straight == true && flush == true && highCardCount !== 5) {
				if(newHand === false) {
					winner = true;
					setTimeout(function(){balance(80)}, 50);
				}
				logMessage = 'Straight Flush';
				prizeBoxCome(logMessage);
			}
			if(straight == true && flush !== true) {
				if(newHand === false) {
					winner = true;
					setTimeout(function(){balance(70)}, 50);
				}
				logMessage = 'Straight';
				prizeBoxCome(logMessage);
			}
		}

		function checkForWinningHand() {
			for(var i = 0; i < cardsInHand.length; i++) {
				var counter = cardsInHand[i] % 13;
				if(counter == 1) {
					acesCount++;
				}
				if(counter == 2) {
					kingsCount++;
				}
				if(counter == 3) {
					queensCount++;
				}
				if(counter == 4) {
					jacksCount++;
				}
			}
			if((acesCount == 2 || kingsCount == 2 || queensCount == 2 || jacksCount == 2) && pairCount == 1) {
				if(newHand === false) {
					winner = true;
					setTimeout(function(){balance(10)}, 50);
				}
				logMessage = 'Pair';
				prizeBoxCome(logMessage);
			}
		}

		function prizeBoxCome() {
			$('.prize-box').css('display', 'block');
				setTimeout(function() {
					$('.prize-box').animate({
				    	opacity: 1,
				  		}, 500, function() {
				  			$('.prize-box').html(logMessage);
				  });
				}, 1000);
		}

		function prizeBoxGo() {
				setTimeout(function() {
					$('.prize-box').animate({
				    	opacity: 0,
				  		}, 500, function() {
				  			$('.prize-box').html(logMessage);
				  });
				}, 5);
		}

		function clearCards() {
			for(var i = 1; i < 6; i++) {
				var cardBack = '<img class="not-flipped" src="./images/cards/card_back.png" width="215" height="300" alt="Card" />';
				$('#dynamic-card-wrapper-' + i + '> img').replaceWith(cardBack);
				$('#hold-slot-' + i).remove();
				cards = [];
				newHand = true;
				cardsInHand = [];
				acesCount = 0;
				kingsCount = 0;
				queensCount = 0;
				jacksCount = 0;
				clubsCount = 0;
				heartsCount = 0;
				spadesCount = 0;
				diamondsCount = 0;
				pairCount = 0;
				highCardCount = 0;
				straight = false;
			}
		}

		function resetEverything() {
			acesCount = 0;
			kingsCount = 0;
			queensCount = 0;
			jacksCount = 0;
			clubsCount = 0;
			heartsCount = 0;
			spadesCount = 0;
			diamondsCount = 0;
			pairCount = 0;
			highCardCount = 0;
			straight = false;
			logMessage = '';
			winner = false;
		}

		function chips(value) {

			var chip = 'chip' + value;
			chip = '<img id="chip-'+ value + '" ' + 'class="chip-'+ value + '" ' + 'src="./images/chip_'+ value + '.png" ' + 'width="100%" alt="' + value + '" />';
			
			var chipId = '#chip-' + value;

			$(chipId).click(function() {
				currentBalance = $('#money').html();
				currentBalanceNumber = parseInt(currentBalance);
				var betAlt = $(chipId).attr('alt');
				var number = parseInt(betAlt);

					if($(money).html() == 0) {
						alert('Hey, you are broke! We feel bad so here is $10.00');
						$(money).html(10);
						return;
					}
					
					if(currentBalanceNumber < number) {
						$('#bet').empty();
						alert("You don't have enough money to make this bet!");
						return;
					}
					$('#bet').empty();
					setTimeout(function(){$('#bet').append($(chip))}, 10);
					setTimeout(function(){
						betAmount = ($('#bet > img').attr('alt'))
					}, 20);
			});
		}
		chips(5);
		chips(10);
		chips(20);
		chips(50);

		function showHideDealDrawBtns(deal) {
			
				if(deal) {
					$(winAmount).html(0);
					$( ".chips-wrapper" ).animate({ "top": "420px" }, "slow" );
					$('#deal').hide();
					$('.btns').addClass('disabled-draw');
					setTimeout(function() {
						$('.btns').removeClass('disabled-draw');
						$('#draw').show();
					}, 1500);
				}
				if(!deal) {
					$('#draw').hide();
					$( ".chips-wrapper" ).animate({ "top": "360px" }, "slow" );
					$('.btns').addClass('disabled-deal');
					setTimeout(function() {
						$('.btns').removeClass('disabled-deal');
						$('#deal').show();
					}, 2800);
					$('#draw').hide();
				}
			
		}
		if(currentBalance == 0) {
			$(money).html(10);
		}

		$('#deal').click(function() {	
			if($(money).html() == 0) {
				alert('You are broke! We feel bad so here is $10.00');
				$(money).html(10);
				return;
			}
			if($('#bet').html().length < 1) {
				alert('Please make a bet');
				return;
			}
			clearCards();
			prizeBoxGo();
			startNewHand();
			setTimeout(addHoldCardImages, 1500);
			evaluateCards();
			sortCards();
			checkForPairs();
			checkForWinningHand();
			checkForStraightFlush();
			checkForFlush();
			checkForStraight();
			checkForTypeOfStraight();
			cardsInHand = [];
			showHideDealDrawBtns(deal);
			resetBalanceAfterBet();
			$('.game-over').css('display', 'none');
		});

		$('#draw').click(function() {
			newHand = false;
			prizeBoxGo();
			resetEverything();
			drawCards();
			evaluateCards();
			sortCards();
			checkForPairs();
			checkForWinningHand();
			checkForStraightFlush();
			checkForFlush();
			checkForStraight();
			checkForTypeOfStraight();
			setTimeout(function() {
				$('.game-over').css('display', 'block');
			}, 3000);

			if(winner == false) {
				setTimeout(balance, 50);
				setTimeout(function() {
					$('#bet > img').animate({
				    	top: 70,
				    	left: -490,
				  		}, 300, function() {
				  			$('#bet').empty();
				  });
				}, 2000);
			}

			function updateWinAmount() {
				winAmount = $('#win-amount');
				var counter = 0;
				var setWinAmountInterval = setInterval(function() {
					if(counter <= winAmountTotal) {
						$(winAmount).html(counter);
						if(winAmountTotal > 500) {
							counter += 10;	
						}else {
							counter++;
						}
					}else {
						clearInterval(setWinAmountInterval);
						updateBalance();
					}
				}, 1);
			}
			if(winner == true) {
				setTimeout(updateWinAmount, 1000);
			}
			showHideDealDrawBtns();
		});

	}( window.poker = window.poker || {}, jQuery ));
});

