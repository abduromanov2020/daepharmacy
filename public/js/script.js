// Sidebar
let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");

btn.onclick = function() {
    sidebar.classList.toggle("bg-transparent");
    sidebar.classList.toggle("bg-purple");
    sidebar.classList.toggle("active");
}



window.addEventListener(`load`, function() {
    const spinnerWrapper = document.querySelector(`.spinner-wrapper`);
    spinnerWrapper.className += ` hidden`;
    document.body.className += "fixed";
})


// Particles
// particlesJS.load('particles-js', 'js/particles.json', function() {
//     console.log('callback - particles.js config loaded');
//   });


// Running-Txt
const typedTextSpan = document.querySelector(".typed-text");  
const cursorSpan = document.querySelector(".cursor");  
const textArray = ["Alfatih", "Ninys", "Alya", "Zhafira", "Adib", "Faza"];  
const typingDelay = 100;  
const erasingDelay = 100;  
const newTextDelay = 1500; // Delay between current and next text  
let textArrayIndex = 0;  
let charIndex = 0;  
function type() {  
 if (charIndex < textArray[textArrayIndex].length) {  
  if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");  
  typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);  
  charIndex++;  
  setTimeout(type, typingDelay);  
 }   
 else {  
  cursorSpan.classList.remove("typing");  
      setTimeout(erase, newTextDelay);  
 }  
}  
function erase() {  
     if (charIndex > 0) {  
  if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");  
  typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);  
  charIndex--;  
  setTimeout(erase, erasingDelay);  
 }   
 else {  
  cursorSpan.classList.remove("typing");  
  textArrayIndex++;  
  if(textArrayIndex>=textArray.length) textArrayIndex=0;  
  setTimeout(type, typingDelay + 1100);  
 }  
}  
document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect  
 if(textArray.length) setTimeout(type, newTextDelay - 1000);  
});  


// Chart

const ctx = document.getElementById('myChart').getContext('2d');

// Gradient Fill
let gradient = ctx.createLinearGradient(0,0,0, 400);
gradient.addColorStop(0,'#dd7732');
gradient.addColorStop(1, 'rgba(0, 210, 255, 0.3');

const labels = [
    'Jan',
    'Feb',
    'March',
    'April',
    'May',
    'June',
    'July',
    'Aug',
    'Sept',
    'Oct',
    'Nov',
    'Dec'
];

const data = {
    labels,
    datasets: [
        {
            data:[311, 426, 265, 450, 520, 470, 600, 475, 515, 302, 780, 432],
            label:"Sale This Month",
            fill:true,
            backgroundColor: gradient,
            borderColor: "#6998AB",
            pointBackgroundColor: "#406882",
            tension:0.4
        },
    ],
};

const config = {
    type: 'line',
    data: data,
    options: {
        radius: 5,
        hitRadius: 30,
        hoverRadius:12,
        responsive: true,
        scales: {
            y: {
                ticks: {
                    // callback: function (value){
                    //     return value + "pcs"
                    // },
                    color: "#fff",
                    font: {
                        size:9,
                        weight:"600",
                        family:"Montserrat",
                      },
                }
            },
            x: { 
                ticks: {
                  color: "#fff",
                  font: {
                        weight:"600",
                        size:9,
                        family:"Montserrat",
                  },
                }
              }
        },
        plugins: {
            legend: {
                labels: {
                    color:"#fff",
                    // This more specific font property overrides the global property
                    font: {
                        size: 16,
                        weight:"600",
                        family:"Montserrat",
                    }
                }
            }
    },
}
};

const myChart = new Chart(ctx, config);
