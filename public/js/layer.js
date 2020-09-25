// creation of the layer
let main = document.getElementsByTagName("main")[0];
let layer = document.getElementById("layer");

// 
layer.setAttribute("id", "layer");
main.appendChild(layer);

// button creation
let buttonWarningLayer = document.createElement("button");
main.appendChild(buttonWarningLayer);

// AJAX request
let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE){

        if(httpRequest.status === 200){

            //  store the json file in a variable
            layer.innerText = httpRequest.responseText;
        }
        else {
            // there was a problem with the request,
            console.log("une erreur est survenue");
        }
    } 
    else {
        // not ready yet,
        console.log("en attente de réponse");
    }
}

// opening and sending of the request,
httpRequest.open("GET", "layer.txt", true);
httpRequest.send();

// button function
buttonWarningLayer.addEventListener("click", function(){
    layer.style.display = "none";
    buttonWarningLayer.style.display = "none";
});

// style of layer
layer.style.width = "80%";
layer.style.height = "auto";
layer.style.position = "absolute";
layer.style.textAlign = "center";
layer.style.top = "10%"
layer.style.opacity = "90%";
layer.style.fontSize = "2em";
layer.style.backgroundColor = "red";
layer.style.color = "black";

// style of button 
buttonWarningLayer.innerText = "J'accepte les conditions d'utilisation.";
buttonWarningLayer.style.padding = "1em";
buttonWarningLayer.style.borderRadius = "25px";
buttonWarningLayer.style.position = "absolute";
buttonWarningLayer.style.top= "10%";
buttonWarningLayer.style.right = "10%";
buttonWarningLayer.style.backgroundColor = "black";
buttonWarningLayer.style.color = "white";