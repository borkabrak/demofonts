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
    link.onload = function(event){
        console.log("Font imported: %s", event.target.href);
        document.getElementById("samples").appendChild(createSample(name));
    };

    link.onerror = function(event){
        console.log("Error importing font: %s", event.target.href);
        document.getElementById("samples").appendChild(createSample(name));
    };

    return link;
}

// Document.ready..
var tid = setInterval( function () {
    if ( document.readyState !== 'complete' ) return;
    clearInterval( tid );

    document.querySelector("form#addfont").onsubmit = function (){
        var name = this.newfont.value;

        document.head.appendChild(createFontLink(name));

        return false;
    }

    document.querySelector("input").focus();

}, 100 );
