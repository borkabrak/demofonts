var sample_text = "And that, I think, was the handle—that sense of inevitable victory over the forces of Old and Evil. Not in any mean or military sense; we didn't need that. Our energy would simply prevail. There was no point in fighting—on our side or theirs. We had all the momentum; we were riding the crest of a high and beautiful wave.…";

function createSample(name){
    // create a sample div with the given font face
    var sample = document.createElement("div");
    sample.textContent = sample_text;
    sample.style.fontFamily = name;
    return sample;
}

function createFontLink(name){
    // add the given font from Google Fonts to the page
    var link = document.createElement("link");
    link.rel = "stylesheet";
    link.type = "text/css";
    link.href = "http://fonts.googleapis.com/css?family=" + name;
    return link;
}

function checkFont(name){
    
    //var xhr = new XMLHttpRequest();

    //xhr.open("GET", "http://fonts.googleapis.com/css?family=", true);

    //xhr.onreadystatechange = function(){
    //    if (xhr.status == 
    //};
    return true;
}

// Document.ready..
var tid = setInterval( function () {
    if ( document.readyState !== 'complete' ) return;
    clearInterval( tid );       

    document.querySelector("form#addfont").onsubmit = function (){
        var name = this.newfont.value;

        if (checkFont(name)){
            document.head.appendChild(createFontLink(name));
            document.getElementById("samples").appendChild(createSample(name));
        } else {
            console.log(name + " does not exist");
        }

        return false;
    }

}, 100 );
