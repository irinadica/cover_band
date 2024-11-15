const faders=document.querySelectorAll(".fadein");
const initfaders=document.querySelectorAll(".fadein-first");
const appearOptions={treshold: 1,rootMargin: "500px 0px 0px 0px"};
const appearOnScroll=new IntersectionObserver(function(entries,
    appearOnScroll) {
        entries.forEach(entry => {
            if(!entry.isIntersecting)
            {
                return;
            }
            else
            {
                entry.target.classList.add("appear");
                appearOnScroll.unobserve(entry.target);
            }
        })
},appearOptions);

// initfaders.forEach(initfader => {
//     appearOnScroll.observe(initfader);
// });

faders.forEach(fader => {
    appearOnScroll.observe(fader);
})