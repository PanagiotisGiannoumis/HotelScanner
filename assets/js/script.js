const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav ul");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav ul li a");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");	
}

// LIST PAGE
if ( window.location.href.indexOf("list.php") > -1  )
{
  // Price range slider
  const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
  let priceGap = 50;

  priceInput.forEach(input =>{
      input.addEventListener("input", e =>{
          let minPrice = parseInt(priceInput[0].value),
          maxPrice = parseInt(priceInput[1].value);
          
          if((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max){
              if(e.target.className === "input_min"){
                  rangeInput[0].value = minPrice;
                  range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
              }else{
                  rangeInput[1].value = maxPrice;
                  range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
              }
          }
      });
  });

  rangeInput.forEach(input =>{
      input.addEventListener("input", e =>{
          let minVal = parseInt(rangeInput[0].value),
          maxVal = parseInt(rangeInput[1].value);

          if((maxVal - minVal) < priceGap){
              if(e.target.className === "range_min"){
                  rangeInput[0].value = maxVal - priceGap
              }else{
                  rangeInput[1].value = minVal + priceGap;
              }
          }else{
              priceInput[0].value = minVal;
              priceInput[1].value = maxVal;
              range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
              range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
          }
      });
  });

  const $formListPage = document.querySelector(".list-page form");
  const $CountOfGuestsListPage = document.querySelector("#ListPageForm_CountOfGuests");
  const $RoomTypeListPage = document.querySelector("#ListPageForm_RoomType");
  const $CityListPage = document.querySelector("#ListPageForm_City");
  const $InputMin = document.querySelector(".input_min");
  const $InputMax = document.querySelector(".input_max");

  $formListPage.addEventListener("submit", (e) => {
    e.preventDefault();
    const { ListPageForm_CountOfGuests, ListPageForm_RoomType, ListPageForm_City, input_min, input_max} = e.target.elements;
    const values = {
        guests: ListPageForm_CountOfGuests.value,
        roomtype: ListPageForm_RoomType.value,
        city: ListPageForm_City.value,
        inputmin: input_min.value,
        inputmax: input_max.value,
    };
    console.log(values);
    console.log(values.inputmin);
    if(values.guests === "one" && values.city === "athens") {
      $(".guests-2.thessaloniki").hide();
      $(".guests-3.athens").hide();
    }
    else if (values.guests === "two" && values.city === "athens") {
      $(".guests-1").hide();
      $(".guests-2").hide();
      $(".guests-3").hide();
    }
    else if (values.guests === "three" && values.city === "athens") {
      $(".guests-1.athens").hide();
      $(".guests-2.thessaloniki").hide();
    }
    else if (values.guests === "one" && values.city === "thessaloniki") {
      $(".guests-1").hide();
      $(".guests-2").hide();
      $(".guests-3").hide();
    }
    else if (values.guests === "two" && values.city === "thessaloniki") {
      $(".guests-1.athens").hide();
      $(".guests-3.athens").hide();
    }
    else if (values.guests === "three" && values.city === "thessaloniki") {
      $(".guests-1").hide();
      $(".guests-2").hide();
      $(".guests-3").hide();
    }
  //   else if(values.inputmax <= 350) {
  //     $(".guests-1").hide();
  //     $(".guests-2").hide();
  //     $(".guests-3").hide();
  //   }
  //   else if(values.inputmin > 350 && values.inputmax < 400) {
  //     $(".guests-1").hide();
  //     $(".guests-2").hide();
  //     $(".guests-3").hide();
  //   }
  // console.log($(".per-night").text());
  });
}
// LIST PAGE

//LOGIN PAGE
if ( window.location.href.indexOf("login.php") > -1  )
{
    document.addEventListener("DOMContentLoaded", () => {

        const $formLoginPage = document.querySelector(".login-page form");
        const $emailLoginPage = document.querySelector("#LoginPage_Email");
        const $passwordLoginPage = document.querySelector("#LoginPage_Password");
        const $emailErrorLoginPage = document.querySelector(".login-page .email-error");
        const $passwordErrorLoginPage = document.querySelector(".login-page .password-error");
    
        const getValidations = ({ email, password }) => {
        let emailIsValid = false;
        let passwordIsValid = false;
    
        if (
            email !== "" &&
            /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)
        ) {
            emailIsValid = true;
        }
    
        if (password !== "" && password.length > 5) {
            passwordIsValid = true;
        }
    
        return {
            emailIsValid,
            passwordIsValid,
        };
        };
    
        $formLoginPage.addEventListener("submit", (e) => {
        e.preventDefault();
        const { LoginPage_Email, LoginPage_Password } = e.target.elements;
        const values = {
            email: LoginPage_Email.value,
            password: LoginPage_Password.value,
        };
        const validations = getValidations(values);
    
        if (!validations.emailIsValid) {
            $emailLoginPage.classList.add("is-invalid");
            $emailErrorLoginPage.classList.remove("d-none");
        } else {
            $emailLoginPage.classList.remove("is-invalid");
            $emailErrorLoginPage.classList.add("d-none");
        }
    
        if (!validations.passwordIsValid) {
            $passwordLoginPage.classList.add("is-invalid");
            $passwordErrorLoginPage.classList.remove("d-none");
        } else {
            $passwordLoginPage.classList.remove("is-invalid");
            $passwordErrorLoginPage.classList.add("d-none");
        }
    
        if (validations.emailIsValid && validations.passwordIsValid) {
            $formLoginPage.submit();
        }
        });
    
        $emailErrorLoginPage.classList.add("d-none");
        $passwordErrorLoginPage.classList.add("d-none");  
    }); 
}
//LOGIN PAGE


//REGISTER PAGE
if ( window.location.href.indexOf("register.php") > -1  )
{
    document.addEventListener("DOMContentLoaded", () => {

        const $formRegisterPage = document.querySelector(".register-page form");
        const $emailRegisterPage = document.querySelector("#RegisterPage_Email");
        const $emailRepeatRegisterPage = document.querySelector("#RegisterPage_EmailRepeat");
        const $passwordRegisterPage = document.querySelector("#RegisterPage_Password");
        const $emailErrorRegisterPage = document.querySelector(".register-page .email-error");
        const $emailErrorRepeatRegisterPage = document.querySelector(".register-page .email-error-repeat");
        const $passwordErrorRegisterPage = document.querySelector(".register-page .password-error");
      
        const getValidations = ({ email, emailrepeat, password }) => {
          let emailIsValid = false;
          let emailRepeatIsValid = false;
          let passwordIsValid = false;
      
          if (email !== "" && /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
            emailIsValid = true;
          }
    
          if (emailrepeat !== "" && /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailrepeat)) {
            emailRepeatIsValid = true;
          }
      
          if (password !== "" && password.length > 5) {
            passwordIsValid = true;
          }
      
          return {
            emailIsValid,
            emailRepeatIsValid,
            passwordIsValid,
          };
        };
      
        $formRegisterPage.addEventListener("submit", (e) => {
          e.preventDefault();
          const { RegisterPage_Email, RegisterPage_EmailRepeat, RegisterPage_Password } = e.target.elements;
          const values = {
            email: RegisterPage_Email.value,
            emailrepeat: RegisterPage_EmailRepeat.value,
            password: RegisterPage_Password.value,
          };
          const validations = getValidations(values);
      
          if (!validations.emailIsValid) {
            $emailRegisterPage.classList.add("is-invalid");
            $emailErrorRegisterPage.classList.remove("d-none");
          } else {
            $emailRegisterPage.classList.remove("is-invalid");
            $emailErrorRegisterPage.classList.add("d-none");
          }
    
          if(values.email !== values.emailrepeat) {
            $emailRepeatRegisterPage.classList.add("is-invalid");
            $emailErrorRepeatRegisterPage.classList.remove("d-none");
          }
          else {
            $emailRepeatRegisterPage.classList.remove("is-invalid");
            $emailErrorRepeatRegisterPage.classList.add("d-none");
          }
      
          if (!validations.passwordIsValid) {
            $passwordRegisterPage.classList.add("is-invalid");
            $passwordErrorRegisterPage.classList.remove("d-none");
          } else {
            $passwordRegisterPage.classList.remove("is-invalid");
            $passwordErrorRegisterPage.classList.add("d-none");
          }
      
          if (validations.emailIsValid && validations.emailRepeatIsValid && validations.passwordIsValid) {
            $formRegisterPage.submit();
          }
        });
      
        $emailErrorRegisterPage.classList.add("d-none");
        $emailErrorRepeatRegisterPage.classList.add("d-none");
        $passwordErrorRegisterPage.classList.add("d-none");      
    });
}
//REGISTER PAGE

// ROOM PAGE
if ( window.location.href.indexOf("room") > -1  )
{
    document.addEventListener("DOMContentLoaded", () => {
        const $formRoomPage = document.querySelector(".room-page form");
        const $notesContainer = document.querySelector(".reviews");
        const notes = JSON.parse(localStorage.getItem("notes")) || [];
    
        const renderNotes = () => {
          $notesContainer.innerHTML = "<h2>Reviews</h2>";
    
          notes.forEach((note, i) => {
            let $el = document.createElement("div");
            $el.id = `note-${i}`;
            $el.classList.add("note", "review");    
            // let date = new Date();
              $el.innerHTML = `
                <div>${note}
                  
                </div>
              
                <div><button id="delete-${i}" class="btn btn-danger">Delete</button></div>
              `;
            $notesContainer.appendChild($el);        
          });
          
        };
    
        let $name  = document.querySelector(".room-page #name");
        $name.addEventListener("input", (e) => {
    
          $('.review-container div:first-child').click(function(){
            $('.review-container .review-container2 img').attr('src', '../img/stars-1.png');
            $('.review-container .review-container2 img').addClass("stars1");
            $('.review-container .review-container2 img').removeClass("stars2 stars3 stars4 stars5");
            $('.review-container .review-container2').css('z-index', '2');
          });
          $('.review-container div:nth-child(2)').click(function(){
            $('.review-container .review-container2 img').attr('src', '../img/stars-2.png');
            $('.review-container .review-container2 img').addClass("stars2");
            $('.review-container .review-container2 img').removeClass("stars1 stars3 stars4 stars5");
            $('.review-container .review-container2').css('z-index', '2');
          });
          $('.review-container div:nth-child(3)').click(function(){
            $('.review-container .review-container2 img').attr('src', '../img/stars-3.png');
            $('.review-container .review-container2 img').addClass("stars3");
            $('.review-container .review-container2 img').removeClass("stars2 stars1 stars4 stars5");
            $('.review-container .review-container2').css('z-index', '2');
          });
          $('.review-container div:nth-child(4)').click(function(){
            $('.review-container .review-container2 img').attr('src', '../img/stars-4.png');
            $('.review-container .review-container2 img').addClass("stars4");
            $('.review-container .review-container2 img').removeClass("stars2 stars3 stars1 stars5");
            $('.review-container .review-container2').css('z-index', '2');
          });
          $('.review-container div:nth-child(5)').click(function(){
            $('.review-container .review-container2 img').attr('src', '../img/stars-5.png');
            $('.review-container .review-container2 img').addClass("stars5");
            $('.review-container .review-container2 img').removeClass("stars2 stars3 stars4 stars1");
            $('.review-container .review-container2').css('z-index', '2');
          });
    
          $('.star').click(function(e){
            var length = $('.review-container .star').length;
            var selected = $('.review-container .star').index($(this));
            
            $( ".review-container .star" ).each(function( index ) {
              if(index <= selected){
                $(this).addClass("active");
              }else{
                $(this).removeClass("active");
              } 
            }); 
          });
    
          $namevalue = e.target.value;
          // console.log($namevalue);
    
          $formRoomPage.addEventListener("submit", (e) => {
    
            e.preventDefault();
            const value = e.target.FormPage_AddReview.value;
            if (value === "") {
              return;
            }
    
            let date = new Date().toLocaleString();
    
            if($('.review-container .review-container2 img').hasClass('stars1')) {
              notes.push(
                "<p class='review-name'>"+$namevalue+"<span class='review-p'>"+":"+value+"</span></p>"+` <div class="review-container2">
                <img src="../img/stars-1.png" class="stars1" alt="">
              </div> `+"<br><br><p>Add time: "+date+"</p>"
              );
            }
            else if($('.review-container .review-container2 img').hasClass('stars2')) {
              notes.push(
                "<p class='review-name'>"+$namevalue+"<span class='review-p'>"+":"+value+"</span></p>"+` <div class="review-container2">
                <img src="../img/stars-2.png" class="stars2" alt="">
              </div> `+"<br><br><p>Add time: "+date+"</p>"
              );
            }
            else if($('.review-container .review-container2 img').hasClass('stars3')) {
              notes.push(
                "<p class='review-name'>"+$namevalue+"<span class='review-p'>"+":"+value+"</span></p>"+` <div class="review-container2">
                <img src="../img/stars-3.png" class="stars3" alt="">
              </div> `+"<br><br><p>Add time: "+date+"</p>"
              );
            }
            else if($('.review-container .review-container2 img').hasClass('stars4')) {
              notes.push(
                "<p class='review-name'>"+$namevalue+"<span class='review-p'>"+":"+value+"</span></p>"+` <div class="review-container2">
                <img src="../img/stars-4.png" class="stars4" alt="">
              </div> `+"<br><br><p>Add time: "+date+"</p>"
              );
            }
            else if($('.review-container .review-container2 img').hasClass('stars5')) {
              notes.push(
                "<p class='review-name'>"+$namevalue+"<span class='review-p'>"+":"+value+"</span></p>"+` <div class="review-container2">
                <img src="../img/stars-5.png" class="stars5" alt="">
              </div> `+"<br><br><p>Add time: "+date+"</p>"
              );
            }
               
            localStorage.setItem("notes", JSON.stringify(notes));
            e.target.FormPage_AddReview.value = "";
            renderNotes(); 
            
          });
    
        })
      
        $notesContainer.addEventListener("click", (e) => {
          e.preventDefault();
          if (e.target.className.includes("btn")) {
            const id = e.target.id;
            const stringParts = id.split("-");
            const index = parseInt(stringParts[1]);
            notes.splice(index, 1);
            localStorage.setItem("notes", JSON.stringify(notes));
      
            renderNotes();
          }
        });
      
      renderNotes();
    
    });
}
//ROOM PAGE

// PROFILE PAGE
if ( window.location.href.indexOf("profile.php") > -1  )
{
  $('.nav ul li:nth-child(2) a').html("<i class='fa-solid fa-user'></i>Profile");
}
// PROFILE PAGE