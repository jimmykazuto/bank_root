// creation of the layer
// let main = document.getElementsByTagName("main")[0];
// let layer = document.getElementById("layer");

// 
// layer.setAttribute("id", "layer");
// main.appendChild(layer);

// button creation
// let buttonWarningLayer = document.createElement("button");
// main.appendChild(buttonWarningLayer);

// AJAX request
// let httpRequest = new XMLHttpRequest();

// httpRequest.onreadystatechange = function() {
//     if (httpRequest.readyState === XMLHttpRequest.DONE){

//         if(httpRequest.status === 200){

//             //  store the json file in a variable
//             layer.innerText = httpRequest.responseText;
//         }
//         else {
//             // there was a problem with the request,
//             console.log("une erreur est survenue");
//         }
//     } 
//     else {
//         // not ready yet,
//         console.log("en attente de réponse");
//     }
// }

// opening and sending of the request,
// httpRequest.open("GET", "layer.txt", true);
// httpRequest.send();

// button function
// buttonWarningLayer.addEventListener("click", function(){
//     layer.style.display = "none";
//     buttonWarningLayer.style.display = "none";
// });

// style of layer
// layer.style.width = "80%";
// layer.style.height = "auto";
// layer.style.position = "absolute";
// layer.style.textAlign = "center";
// layer.style.top = "10%"
// layer.style.opacity = "90%";
// layer.style.fontSize = "2em";
// layer.style.backgroundColor = "red";
// layer.style.color = "black";

// style of button 
// buttonWarningLayer.innerText = "J'accepte les conditions d'utilisation.";
// buttonWarningLayer.style.padding = "1em";
// buttonWarningLayer.style.borderRadius = "25px";
// buttonWarningLayer.style.position = "absolute";
// buttonWarningLayer.style.top= "10%";
// buttonWarningLayer.style.right = "10%";
// buttonWarningLayer.style.backgroundColor = "black";
// buttonWarningLayer.style.color = "white";



// Function to add on screen a transparent grey layer taking all the screen size
function addLayer() {
    let layer = document.createElement("div");
    layer.classList.add("layer");
    document.body.appendChild(layer);
  }
  
  // Function to make the layer and the message disapear
  function closeLayer() {
    document.querySelector(".layer").remove();
    document.querySelector(".messageBox").remove();
    // Store in session that user has seen the message
    sessionStorage.setItem("informed", true);
  }
  
  // Function to create a button to close the message box in the layer
  function makeCloseButton() {
    let closeButton = document.createElement("button");
    closeButton.classList.add("btn", "btn-danger");
    closeButton.innerText = "J'ai compris";
    closeButton.addEventListener("click", closeLayer);
    return closeButton;
  }
  
  // Function to generate the main text content of the message box in the layer
  // The text argument comes from an AJAX request to a document on the server
  function makeWarning(text) {
    let div = document.createElement("div");
    let title = document.createElement("h2");
    title.innerText = "Information Importante";
    let p = document.createElement("p");
    p.innerText = text;
    div.append(title, p);
    return div;
  }
  
  // Function to create in the layer a centered message box that the user can close
  // Take as an argument the message for the warning
  function addMessageBox(text) {
    let messageBox = document.createElement("div");
    messageBox.classList.add("messageBox");
    let warning = makeWarning(text);
    let closeButton = makeCloseButton();
    messageBox.append(warning, closeButton);
    document.body.appendChild(messageBox);
    // Calculate to always center the box horizontaly
    messageBox.style.left = `${((window.innerWidth - messageBox.clientWidth)/2)}px`;
    messageBox.style.top = "10vh";
  }
  
  // If the user has not seen the message yet
  if(!sessionStorage.getItem("informed")) {
    // Add the transparent layer on page loading
    addLayer();
    // Start the AJAX request
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          addMessageBox(httpRequest.responseText);
        }
        else {
          addMessageBox("Une erreur est survenue, fermez ce message sans en tenir-compte");
        }
      }
    };
    httpRequest.open('GET', 'model/data/info.txt', true);
    httpRequest.send();
  }