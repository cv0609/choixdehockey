// Toggle Menu Functionaliy Start
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".menu-btn").addEventListener("click", function () {
    document.body.classList.add("menuToggle");
  });

  document.querySelector(".close-btn").addEventListener("click", function () {
    document.body.classList.remove("menuToggle");
  });
});
// Toggle Menu Functionaliy End

// Header Scroll JS Start
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    var header = document.querySelector(".main-header");
    if (window.scrollY > 0) {
      header.classList.add("fixed-header");
    } else {
      header.classList.remove("fixed-header");
    }
  });
});
// Header Scroll JS Start

// AOS JS Start
AOS.init();
// AOS JS Start

let count = document.querySelectorAll(".count")
let arr = Array.from(count)



arr.map(function(item){
  let startnumber = 0

  function counterup(){
  startnumber++
  item.innerHTML= startnumber
   
  if(startnumber == item.dataset.number){
      clearInterval(stop)
  }
}

let stop =setInterval(function(){
  counterup()
},50)

})



// Newsletter Validations JS Start
function validateEmail() {
  const emailInput = document.getElementById("email-input");
  const emailValue = emailInput.value.trim();

 
  if (!emailValue) {
      alert("Παρακαλώ εισάγετε το Email σας.");
      emailInput.focus();
      return false;
  }


  const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (!emailPattern.test(emailValue)) {
      alert("Παρακαλώ εισάγετε μια έγκυρη διεύθυνση email.");
      emailInput.focus();
      return false;
  }

  alert("Επιτυχής εγγραφή!");
}
// Newsletter Validations JS End

$('.tab').on('click', function (evt) {
  evt.preventDefault();

  // Remove 'active' class from all tabs and add to the clicked tab
  $('.tab').removeClass('active');
  $(this).addClass('active');

  // Get the target content associated with the clicked tab
  var sel = $(this).attr('data-toggle-target');

  // Remove 'active' class from all tab contents and add to the selected one
  $('.tab-content').removeClass('active');
  $(sel).addClass('active');
});







document.getElementById("avatar-content").addEventListener("click", function(event) {

  event.stopPropagation();


  var dropdown = document.getElementById("dropdown");
  dropdown.style.display = (dropdown.style.display === "block" ? "none" : "block");
});


document.addEventListener("click", function(event) {
  var dropdown = document.getElementById("dropdown");
  var avatarContent = document.getElementById("avatar-content");


  if (!avatarContent.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.style.display = "none";
  }
});
