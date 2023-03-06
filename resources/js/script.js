// setTimeout:
let loading = document.querySelector('#loading');
let pageContent = document.querySelector('#pageContent');

setTimeout(() => {
    loading.classList.add('d-none');
    pageContent.classList.remove('d-none');
}, 1000);


// Sezione contatori

if(document.querySelector('#firstNumber') != null){
    let firstNumber = document.querySelector('#firstNumber');
    let secondNumber = document.querySelector('#secondNumber');
    let thirdNumber = document.querySelector('#thirdNumber');



    function createCounter (element, final, number) {
        let counter = 0;
        let interval = setInterval(() => {
            if(counter <final){
                counter++;
                element.innerHTML = counter
            }else{
                clearInterval(interval);
            }
        }, number);
    };


    let isChecked = false;

    let observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting && isChecked == false){
                createCounter(firstNumber, 50, 70);
                createCounter(secondNumber, 10, 150);
                createCounter(thirdNumber, 18, 100);
                isChecked = true;
            }
        })
    })

    observer.observe(firstNumber);

}

// swiper2
let swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
