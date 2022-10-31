

function bigFunction() {

    document.getElementById("textbox").style.fontSize = "32px";
        
    }

function fancyFunction() {

    document.getElementById("textbox").style.fontWeight = 'bold';
    document.getElementById("textbox").style.color = 'blue';
    document.getElementById("textbox").style.textDecoration = "underline";
        
    }
    
    
function boringFunction() {

    document.getElementById("textbox").style.fontWeight = null;
    document.getElementById("textbox").style.color = null;
    document.getElementById("textbox").style.textDecoration = null;
    document.getElementById("textbox").style.fontSize = null; 
    }

    function mooFunction() {

        document.getElementById("textbox").value = document.getElementById("textbox").value.toUpperCase();

        var str = document.getElementById("textbox").value;
        var parts = str.split(".");  // ["How", "are", "you?"]
        str = parts.join("-Moo.");       // "How_are_you?"

        document.getElementById("textbox").value = str;


       
      
        
     }

   

