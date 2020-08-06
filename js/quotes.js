
// $('.startowa').waypoint(function() {
    
//     //document.getElementById("link0").style.width="150%";
//     //document.getElementById("link0").style.height="150%";

// });

var foty = Array.from(document.getElementsByClassName("galfoto"));
foty.forEach(function(elem) {
    elem.addEventListener("click", function() {
        if(this.style.height != "90vh") this.style.height = "90vh";
        else this.style.height = "300px";
    });
});


//var htmlStyle = document.getElementById("htmlStyle");


var cover2 = Array.from(document.getElementsByClassName("cover2"));
cover2.forEach(function(elem) {
    elem.addEventListener("click", function() {
        if(this.style.height != "64px") 
        {
            this.style.height = "64px";
            //this.style.border = "0 white solid";
            this.parentNode.childNodes[3].style = "height:"+this.parentNode.childNodes[3].scrollHeight+"px; padding: 90px 50px;";
            //this.parentNode.childNodes[3].style.display = "block";
        }
        else 
        {
            this.style.height = "35vh";
            //this.style.borderBottom = "50px white solid";
            this.parentNode.childNodes[3].style = "height:1px; padding:0 50px;";
            //this.parentNode.childNodes[3].style.display = "none";
        }
    });
});


var cover = Array.from(document.getElementsByClassName("cover"));

cover.forEach(function(elem) {

    elem.style.border = (window.innerWidth<=641 ? "30px white solid" : "100px white solid");

    elem.addEventListener("click", function() {
        //console.log(this.parentNode.childNodes[3].childNodes[19].tagName);
        if(this.style.height != "90px") 
        {
            this.style.height = "90px";
            this.style.border = "0px white solid";
            this.parentNode.style = "min-height: 100vh;";
            try {
                if(this.parentNode.childNodes[3].childNodes[19].tagName == 'SECTION') cover2.forEach(function(elem) {elem.style.position = "absolute"});
            } catch {}

        }
        else 
        {
            this.style.height = "100vh";
            this.style.border = (window.innerWidth<=641 ? "30px white solid" : "100px white solid" );
            this.parentNode.style = "height: 100vh;";
            //htmlStyle.innerHTML = ".page { height: calc(100vh - 70px); }";
            try {
                if(this.parentNode.childNodes[3].childNodes[19].tagName == 'SECTION') cover2.forEach(function(elem) {elem.style.position = "static"});
            } catch {}
        }
    });
});

var lista = Array.from(document.getElementsByClassName("lista-rozw"));
lista.forEach(function(elem) {
    elem.addEventListener("click", function() {
        if(Array.from(this.childNodes)[3].style.display != "block")
        {
            Array.from(this.childNodes)[3].style.display = "block"
        }
        else Array.from(this.childNodes)[3].style.display = "none";
    });
});



