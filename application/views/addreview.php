<div class="container">
    <div class="reviews">
      <div class="arrow1 arrows">
        <i class="fas fa-chevron-left"></i>
      </div>
      <style>
        
        @import url('https://fonts.googleapis.com/css?family=Sulphur+Point&display=swap');

body {
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
  font-family: 'Sulphur Point', sans-serif;
}

.container {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.reviews {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 20%;
}

.review {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 80%;
  padding: 0 50px;
  font-size: 1.1rem;
  overflow: hidden;
}

.reviewstuff{
  width: 80%;
}

.input {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
}

.reviewinp {
  width: 300px;
  height: 70px;
  outline: none;
  border-radius: 5px;
  border: none;
  background-color: #f5f5f5; 
  resize: none;
  padding: 10px 5px 10px 10px;
  font-family: 'Sulphur Point', sans-serif;
  font-size: 1rem;
}

.stars {
  display: flex;
  padding: 0 20px;
}

.star1, .star2, .star3, .star4, .star5 {
  margin-right: 5px;
  font-size: 1.3rem;
  cursor: pointer;
}

.submit {
  color: white;
  background-color: #036bfc;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  font-family: 'Sulphur Point', sans-serif;
  font-size: 1rem;
  transition: all .2s ease-in-out;
}

.submit:hover {
  background-color: #4592ff;
}

.arrows {
  font-size: 1.8rem;
  cursor: pointer;
}

.input-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  background-color: white;
  padding: 30px;
  border-radius: 10px;
  border: 1.5px solid #d1d1d1;
  width: 100%;
}

.names {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  margin-bottom: 20px;
}

.firstname, .lastname {
  width: 100%;
  padding: 10px 0 10px 10px;
  outline: none;
  border-radius: 5px;
  border: none;
  background-color: #f5f5f5;
  font-family: 'Sulphur Point', sans-serif;
  font-size: 1rem;
}

.firstname {
  margin-right: 10px;
}

.lastname {
  margin-left: 10px;
}

.reviewstuff {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.rname {
  display: flex;
  justify-content: center;
  margin-right: 30px;
}

.rfname {
  margin-right: 2.5px;
  white-space: nowrap;
}

.rlname {
  margin-left: 2.5px;
  white-space: nowrap;
}

.bottomreview {
  display: flex;
  width: 40%;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}

.stars2 {
  display: flex;
}

.errorcontainer {
  width: 85%;
  justify-content: center;
  align-items: center;
  margin-bottom: 50px;
  position: absolute;
  background-color: #ff4242;
  color: white;
  padding: 10px 75px;
  text-align: center;
  display: flex;
  opacity: 0;
  transition: opacity, .5s;
}

.display {
  opacity: 1;
}

.exc {
  margin-right: 20px;
  font-size: 1.3rem;
}

.thank-you-container {
  font-size: 2rem;
  color: #919191;
  display: none;
  visibility: hidden;
  justify-content: center;
  align-items: center;
  transition: all .7s;
  opacity: 0;
}

.thank-you {
  white-space: nowrap;
}

.fa-kiss-wink-heart{
  color: #ff429a;
  margin-left: 10px;
}
      </style>
      <div class="reviewstuff">
        <form action="<?php echo base_url('index.php/Welcome/write');?>" method="post" >
        <p class="review">
          



        </p>
        <div class="bottomreview">
          <div class="rname">
            <div class="rfname"></div>
            <div class="rlname"></div>
          </div>
          <div class="stars2">
            <div><i class="far fa-star rstar1"></i></div>
            <div><i class="far fa-star rstar2"></i></div>
            <div><i class="far fa-star rstar3"></i></div>
            <div><i class="far fa-star rstar4"></i></div>
            <div><i class="far fa-star rstar5"></i></div>
          </div>
        </div>
      </div>


      <div class="arrow2 arrows">
        <i class="fas fa-chevron-right"></i>
      </div>
    </div>
    <div class="errorcontainer">
      <i class="fas fa-exclamation-circle exc"></i>
      <div class="error">Your review must be legible! Try again!</div>
    </div>
    <div class="report-header">
                <h1 class="recent-Articles">Add Review</h1>

                    <button class="view">View All</button>
                </div>

    <div class="input-container">
      <div class="thank-you-container">
        <div class="thank-you">Thank you for your review!</div>
        <i class="fas fa-kiss-wink-heart"></i>
      </div> 
      <h2>AddReview</h2>
    
      <div class="names">
        <input type="text" name="firstname" class="firstname" id="firstname" placeholder="First name">
        <input type="text" name="lastname" class="lastname" id="lastname" placeholder="Last name">
      </div>
      <div class="input">
        <div class="inputbox">
          <textarea type="text" name="reviewinp" class="reviewinp" id="reviewinp" placeholder="Write a review"></textarea>
        </div>
        <div class="stars">
          <div class="star1"><i class="far fa-star starj1"></i></div>
          <div class="star2"><i class="far fa-star starj2"></i></div>
          <div class="star3"><i class="far fa-star starj3"></i></div>
          <div class="star4"><i class="far fa-star starj4"></i></div>
          <div class="star5"><i class="far fa-star starj5"></i></div>
        </div>
        <div class="submitbtn">
          <button class="submit">Submit Review</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
  <script src="https://kit.fontawesome.com/850830ed04.js" crossorigin="anonymous"></script>
  <script>
    var star1 = document.querySelector('.starj1');
var star2 = document.querySelector('.starj2');
var star3 = document.querySelector('.starj3');
var star4 = document.querySelector('.starj4');
var star5 = document.querySelector('.starj5');

//making the star system work

star1.addEventListener('click', function(){
  if(star1.classList.contains('far')){
    star1.classList.remove('far')
    star1.classList.add('fas')
  }else if(star2.classList.contains('far') && star3.classList.contains('far') && star4.classList.contains('far') && star5.classList.contains('far')){
    star1.classList.remove('fas')
    star1.classList.add('far')
  }
  if(star2.classList.contains('fas')){
    star2.classList.remove('fas')
    star2.classList.add('far')
  }
  if(star3.classList.contains('fas')){
    star3.classList.remove('fas')
    star3.classList.add('far')
  }
  if(star4.classList.contains('fas')){
    star4.classList.remove('fas')
    star4.classList.add('far')
  }
  if(star5.classList.contains('fas')){
    star5.classList.remove('fas')
    star5.classList.add('far')
  }
})

star2.addEventListener('click', function(){
  if(star2.classList.contains('far')){
    star2.classList.remove('far')
    star2.classList.add('fas')
    star1.classList.remove('far')
    star1.classList.add('fas')
  }
  if(star3.classList.contains('fas')){
    star3.classList.remove('fas')
    star3.classList.add('far')
  }
  if(star4.classList.contains('fas')){
    star4.classList.remove('fas')
    star4.classList.add('far')
  }
  if(star5.classList.contains('fas')){
    star5.classList.remove('fas')
    star5.classList.add('far')
  }
})

star3.addEventListener('click', function(){
  if(star3.classList.contains('far')){
    star3.classList.remove('far')
    star3.classList.add('fas')
    star2.classList.remove('far')
    star2.classList.add('fas')
    star1.classList.remove('far')
    star1.classList.add('fas')
  }
  if(star4.classList.contains('fas')){
    star4.classList.remove('fas')
    star4.classList.add('far')
  }
  if(star5.classList.contains('fas')){
    star5.classList.remove('fas')
    star5.classList.add('far')
  }
})

star4.addEventListener('click', function(){
  if(star4.classList.contains('far')){
    star4.classList.remove('far')
    star4.classList.add('fas')
    star3.classList.remove('far')
    star3.classList.add('fas')
    star2.classList.remove('far')
    star2.classList.add('fas')
    star1.classList.remove('far')
    star1.classList.add('fas')
  }
  if(star5.classList.contains('fas')){
    star5.classList.remove('fas')
    star5.classList.add('far')
  }
})

star5.addEventListener('click', function(){
  if(star5.classList.contains('far')){
    star5.classList.remove('far')
    star5.classList.add('fas')
    star4.classList.remove('far')
    star4.classList.add('fas')
    star3.classList.remove('far')
    star3.classList.add('fas')
    star2.classList.remove('far')
    star2.classList.add('fas')
    star1.classList.remove('far')
    star1.classList.add('fas')
  }else{
    star5.classList.remove('fas')
    star5.classList.add('far')
  }
})

//making the submit button push the input from the user to the html content

var submitBtn = document.querySelector('.submitbtn')
var firstNameInp = document.querySelector('.firstname');
var lastNameInp = document.querySelector('.lastname');
var reviewInp = document.querySelector('.reviewinp');
var review = document.querySelector('.review');
var lastName = document.querySelector('.rlname');
var firstName = document.querySelector('.rfname');
var error = document.querySelector('.errorcontainer')

//check for no spaces

function hasNoSpaces(string){
  return string.indexOf(' ') === -1;
}

function displayNone(){
  error.style.opacity = 0;
}

function displayThanks(){
  thankYou.style.visibility = "visible";
  thankYou.style.opacity = 1;
}


//submit button event

var rstar1 = document.querySelector('.rstar1');
var rstar2 = document.querySelector('.rstar2');
var rstar3 = document.querySelector('.rstar3');
var rstar4 = document.querySelector('.rstar4');
var rstar5 = document.querySelector('.rstar5');

var thankYou = document.querySelector('.thank-you-container');

var names = document.querySelector('.names');
var input = document.querySelector('.input');

submitBtn.addEventListener('click', function(){
  if(hasNoSpaces(reviewInp.value) == true){
    error.style.opacity = 1;
    setTimeout(displayNone, 5000);
  }else{
    error.style.display = "none";
    review.innerHTML = '"' + reviewInp.value + '"';
    lastName.innerHTML = lastNameInp.value;
    firstName.innerHTML = firstNameInp.value;
    names.style.display = "none";
    input.style.display = "none";
    thankYou.style.display = "flex";
    setTimeout(displayThanks, 25);
    if(star1.classList.contains('fas')){
      rstar1.classList.remove('far');
      rstar1.classList.add('fas');
    }
    if(star1.classList.contains('fas') && star2.classList.contains('fas')){
      rstar1.classList.remove('far');
      rstar1.classList.add('fas');
      rstar2.classList.remove('far');
      rstar2.classList.add('fas');
    }
    if(star1.classList.contains('fas') && star2.classList.contains('fas') && star3.classList.contains('fas')){
      rstar1.classList.remove('far');
      rstar1.classList.add('fas');
      rstar2.classList.remove('far');
      rstar2.classList.add('fas');
      rstar3.classList.remove('far');
      rstar3.classList.add('fas');
    }
    if(star1.classList.contains('fas') && star2.classList.contains('fas') && star3.classList.contains('fas') && star4.classList.contains('fas')){
      rstar1.classList.remove('far');
      rstar1.classList.add('fas');
      rstar2.classList.remove('far');
      rstar2.classList.add('fas');
      rstar3.classList.remove('far');
      rstar3.classList.add('fas');
      rstar4.classList.remove('far');
      rstar4.classList.add('fas');
    }
    if(star1.classList.contains('fas') && star2.classList.contains('fas') && star3.classList.contains('fas') && star4.classList.contains('fas') && star5.classList.contains('fas')){
      rstar1.classList.remove('far');
      rstar1.classList.add('fas');
      rstar2.classList.remove('far');
      rstar2.classList.add('fas');
      rstar3.classList.remove('far');
      rstar3.classList.add('fas');
      rstar4.classList.remove('far');
      rstar4.classList.add('fas');
      rstar5.classList.remove('far');
      rstar5.classList.add('fas');
    }
  }
})
  </script>