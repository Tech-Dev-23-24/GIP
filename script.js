//  navbar
let english = document.getElementById("language");

let dutch = document.getElementById("language1");

let french = document.getElementById("language2");

if (localStorage.getItem('selectedLanguage') == "en") {

  english.classList.add('encircled');
  french.classList.remove("encircled");
  dutch.classList.remove("encircled");


  
} else if (localStorage.getItem('selectedLanguage') == "fr") {

  french.classList.add('encircled');
  english.classList.remove("encircled");
  dutch.classList.remove("encircled");
  
} else {

  dutch.classList.add('encircled');

  french.classList.remove("encircled");
  english.classList.remove("encircled");

}

const menu = document.getElementsByClassName('menu')[0]
const ul = document.getElementsByClassName('ul')[0]
const languages = document.getElementsByClassName('languages')[0]

menu.addEventListener('click', () => {
    ul.classList.toggle('active')
    languages.classList.toggle('languagesactive')
   
  })



let menunav = document.getElementById("ul");
let nav = document.getElementById("nav"); 
let li = document.getElementById("li");
let li1 = document.getElementById("li1");
let li2 = document.getElementById("li2");
let li3 = document.getElementById("li3");
let logo = document.getElementById("logo");
let green = document.getElementById("green");
let logoandmenu = document.getElementById("logoandmenu");
let languagesnav = document.getElementById("languages");
let language = document.getElementById("language");
let language1 = document.getElementById("language1");
let language2 = document.getElementById("language2");
let threelanguages = document.getElementById("threelanguages");
let subscribe = document.getElementById("subscribe");
let a = document.getElementById("a");
let a1 = document.getElementById("a1");
let a2 = document.getElementById("a2");
let a3 = document.getElementById("a3");

          window.onscroll = function (){
              if (  menunav.offsetTop <= window.pageYOffset ) {
                
                menunav.classList.add("dark");
                nav.classList.add("dark");
                li.classList.add("dark");
                li1.classList.add("dark");
                li2.classList.add("dark");
                li3.classList.add("dark");
                logo.classList.add("dark");
                green.classList.add("dark");
                logoandmenu.classList.add("dark");
                languagesnav.classList.add("dark");
                threelanguages.classList.add("dark");
                subscribe.classList.add("dark");
                language.classList.add("dark");
                language1.classList.add("dark");
                language2.classList.add("dark");
                a.classList.add("dark");
                a1.classList.add("dark");
                a2.classList.add("dark");
                a3.classList.add("dark");
                  
              }else {
                menunav.classList.remove("dark");
                nav.classList.remove("dark");
                li.classList.remove("dark");
                li1.classList.remove("dark");
                li2.classList.remove("dark");
                li3.classList.remove("dark");
                logo.classList.remove("dark");
                green.classList.remove("dark");
                logoandmenu.classList.remove("dark");
                languagesnav.classList.remove("dark");
                threelanguages.classList.remove("dark");
                subscribe.classList.remove("dark");
                a.classList.remove("dark");
                a1.classList.remove("dark");
                a2.classList.remove("dark");
                a3.classList.remove("dark");
  
              }
          }


       

          window.addEventListener('scroll', () => {
            const scrollLine = document.querySelector('.scroll-line');
            var viewportHeight = window.innerHeight;
            let scrollY = window.scrollY;
            let percentage = (scrollY / (document.body.scrollHeight - viewportHeight + 130)) * 100;
            
            scrollLine.style.width = `${percentage}%`;
        });

// navbar


function ChangeLanguage(language) {

let english = document.getElementById("language");

let dutch = document.getElementById("language1");

let french = document.getElementById("language2");

  
  if (language == "en") {

    english.classList.add('encircled');
    french.classList.remove("encircled");
    dutch.classList.remove("encircled");
    localStorage.setItem('selectedLanguage', "en");

    
  } else if (language == "fr") {

    french.classList.add('encircled');
    english.classList.remove("encircled");
    dutch.classList.remove("encircled");
    localStorage.setItem('selectedLanguage', "fr");
    
  } else {

    dutch.classList.add('encircled');

    french.classList.remove("encircled");
    english.classList.remove("encircled");
    localStorage.setItem('selectedLanguage', "nl");
  }

}
