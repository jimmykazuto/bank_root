let card = document.getElementById("card");
// AJAX request
let httpRequest = new XMLHttpRequest();

httpRequest.onreadystatechange = function() {

    if (httpRequest.readyState === XMLHttpRequest.DONE) {
         if (httpRequest.status === 200) {
            //  Store the json file in a variable
            let blog = JSON.parse(httpRequest.responseText);
            console.log(blog);
       
            // create a loop for each object of the json
            for (let article of blog) {
                let section = document.createElement("section");
                // mais WTF
                card.appendChild(section);
                // card.style.

                let id = document.createElement("id");
                id.innerText = article.id;
                card.appendChild(id);
                // id.style.

                let titre = document.createElement("titre");           
                titre.innerText = article.titre;
                // cardTitle.style.

                let contenu = document.createElement("p");    
                contenu.innerText = article.contenu;
                // cardContent.style.

                // let button = document.createElement("a");
                
                section.appendChild(id);
                section.appendChild(titre);
                section.appendChild(contenu);
            }

        } 
         else {
            // there was a problem with the request,
            console.log("ERROR");
         }

     } 
    else {
        // not ready yet,
        console.log("chargement en cours");
    }
};
// opening and sending of the request,
httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles', true);
httpRequest.send();