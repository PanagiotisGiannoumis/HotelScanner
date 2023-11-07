document.addEventListener("DOMContentLoaded", () => {
    const $form = document.querySelector("form");
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

    let $name  = document.querySelector("#name");
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

      $form.addEventListener("submit", (e) => {

        e.preventDefault();
        const value = e.target.FormPage_AddReview.value;
        if (value === "") {
          return;
        }

        let date = new Date().toLocaleString();

        if($('.review-container .review-container2 img').hasClass('stars1')) {
          notes.push(
            "<span class='review-name'>"+$namevalue+": </span>"+value+` <div class="review-container2">
            <img src="../img/stars-1.png" class="stars1" alt="">
          </div> `+"<br><br><p>Add time: "+date+"</p>"
          );
        }
        else if($('.review-container .review-container2 img').hasClass('stars2')) {
          notes.push(
            "<span class='review-name'>"+$namevalue+": </span>"+value+` <div class="review-container2">
            <img src="../img/stars-2.png" class="stars2" alt="">
          </div> `+"<br><br><p>Add time: "+date+"</p>"
          );
        }
        else if($('.review-container .review-container2 img').hasClass('stars3')) {
          notes.push(
            "<span class='review-name'>"+$namevalue+": </span>"+value+` <div class="review-container2">
            <img src="../img/stars-3.png" class="stars3" alt="">
          </div> `+"<br><br><p>Add time: "+date+"</p>"
          );
        }
        else if($('.review-container .review-container2 img').hasClass('stars4')) {
          notes.push(
            "<span class='review-name'>"+$namevalue+": </span>"+value+` <div class="review-container2">
            <img src="../img/stars-4.png" class="stars4" alt="">
          </div> `+"<br><br><p>Add time: "+date+"</p>"
          );
        }
        else if($('.review-container .review-container2 img').hasClass('stars5')) {
          notes.push(
            "<span class='review-name'>"+$namevalue+": </span>"+value+` <div class="review-container2">
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
  