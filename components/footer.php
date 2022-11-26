<footer class="footer">

   <section class="grid">

   <div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>What`s our purpose?</h1>
				</div>
				<div class="content">
					
					
  <div class="card-holder">

<div class="card">

  <div class="card-contents">
	<p>
	This concept was created out of the curiosity of <span id="dots">...</span>

	  <span class="card__read-more">5 Highschool students from Hunedoara. Being surrounded by alot of teachers during our 12 year stay in this educational system, we saw that alot of the problems regarding the way that pupils recieve information from their teacher is granted to the lack of communication and feedback towards eachother.  <br>That`s why, today, we present you, our solution to this common problem that we are all facing.</span>
	</p>
	<br><br><br><br><br><br><br>
	<p class="read-more-btn" onclick="readmore()" id="myBtn">Read More</p>


  </div>


</div>
					
	</div>
				<div class="social">
					<a href=""><i class="fab fa-facebook-f"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			
			</div>
		</div>
		<div class="image-section">
				<img src="images/doamneduma.png">
	</div>
	
     
</footer>

<div class="loader">
   <img src="images/loader.gif" alt="">




<script>

const btn = document
    .querySelector('.read-more-btn');

const text = document
    .querySelector('.card__read-more');

const cardHolder = document
    .querySelector('.card-holder');

cardHolder
    .addEventListener('click', e => {

        const current = e.target;

        const isReadMoreBtn = current.className.includes('read-more-btn');

        if (!isReadMoreBtn)
            return;

        const currentText = e.target.parentNode.querySelector('.card__read-more');

        currentText.classList.toggle('card__read-more--open');

        current.textContent = current.textContent.includes('Read More') ? 'Read Less' : 'Read More';

    });

</script>
   
</div>