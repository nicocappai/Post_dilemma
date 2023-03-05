

/* ========================== theme light and dark mode =========================== */
const dayNight = document.querySelector(".day-night");

dayNight.addEventListener("click", () => {
    dayNight.querySelector("i").classList.toggle("fa-sun");
    dayNight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");

})
const dayLight = document.querySelector(".day-light");
dayLight.addEventListener("click", () => {
    dayLight.querySelector("i").classList.toggle("fa-sun");
    dayLight.querySelector("i").classList.toggle("fa-moon");
    document.nav.classList.toggle("light");

})

window.addEventListener("load", () => {
    if(document.body.classList.contains("dark") )

    {
        dayNight.querySelector("i").classList.add("fa-sun");
    }
    else
    {
        dayNight.querySelector("i").classList.add("fa-moon");
    }
})
