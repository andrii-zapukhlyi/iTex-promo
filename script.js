let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          slides[slideIndex-1].style.display = "block";
          if (slides[slideIndex-1].style.display == "block"){
            let dur = slides[slideIndex-1].children[0].duration;
            if (dur == undefined){
              setTimeout(showSlides, 6000);
            } else{
              setTimeout(showSlides, dur*1000+50);
            }
          }
  } 


  const slides = document.querySelectorAll('#slider .slide');
  let currentSlide = 0;
  
  function showSlide() {
      slides[currentSlide].style.display = 'none';
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].style.display = 'flex';
  }
  
  showSlide(); // Show the first slide immediately
  
  setInterval(showSlide, 8000); 
  
  
  const names = ["people", "tanks", "planes", "helicopters", "ppo", "artilery", "bbm", "rszv", "auto", "bpla", "ships"];
  const titles = ["орків", "танків", "літаків", "гелікоптерів", "ППО", "артилерії", "ББМ", "РСЗВ", "автомобілів", "БПЛА", "кораблів"];
  
  document.addEventListener('DOMContentLoaded', function() {
      for (let i = 0; i < names.length; i++) {
          const name = names[i];
          const title = titles[i];
          fetch(`json/${name}.json`)
              .then(response => response.json())
              .then(data => {
                  const element = document.getElementById(name);
                  if (element) {
                      element.textContent = data.data[data.data.length - 1].val + ' ' + title;
                  } else {
                      console.error(`Element with ID ${name} not found.`);
                  }
              })
              .catch(error => {
                  console.error(`Error fetching JSON data for ${name}.json:`, error);
              });
      }
  });
  