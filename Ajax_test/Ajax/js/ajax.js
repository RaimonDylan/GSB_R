/*
    VARIABLES
*/

xhr = creationXHR(); 
loadAllSelect();
loadPersonnel();

function loadAllSelect(){   // Chargement des selects
    xhr.open("GET", "php/loadSelect.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(null);
    
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var params = xhr.responseText.split(";");
            
            var ville = params[0].split(",");
            var sexe = params[1].split(",");
            var codeprojet = params[2].split(",");
            
            var villeOptions;
            var sexeOptions;
            var codeprojetOptions;
            
            for(var i = 0; i < ville.length; i++){
                villeOptions += "<option value=" + ville[i] + "\">" + ville[i] + "</option>";
            }
            
            for(var i = 0; i < sexe.length; i++){
                sexeOptions += "<option value=" + sexe[i] + "\">" + sexe[i] + "</option>";
            }
            
            for(var i = 0; i < codeprojet.length; i++){
                codeprojetOptions += "<option value=" + codeprojet[i] + "\">" + codeprojet[i] + "</option>";
            }
            
            document.getElementById("villes").innerHTML = villeOptions;
            document.getElementById("sexes").innerHTML = sexeOptions;
            document.getElementById("codes_projet").innerHTML = codeprojetOptions;
        }
    }
}

function loadPersonnel(){
    xhr.open("POST", "php/getPersonnel.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            
            var result = JSON.parse(xhr.responseText);
            
            if(result.length > 0){
                var liste = "<caption>Enregistrements trouvés</caption>" +
                            "<tr>" +
                               "<th>NUMEMP</th>" +
                               "<th>SUPERIEUR</th>" +
                               "<th>NOMEMP</th>" +
                               "<th>PRENOMEMP</th>" +
                               "<th>CP</th>" +
                               "<th>VILLE</th>" +
                               "<th>SEXE</th>" +
                               "<th>CODEPROJET</th>" +
                               "<th>POSTE</th>" +
                               "<th>SALAIRE</th>" +
                           "</tr>";

                for(var i = 0; i < result.length; i++){
                    liste += "<tr>" +
                                   "<td>" + result[i]["NUMEMP"] + "</td>" +
                                   "<td>" + result[i]["SUPERIEUR"] + "</td>" +
                                   "<td>" + result[i]["NOMEMP"] + "</td>" +
                                   "<td>" + result[i]["PRENOMEMP"] + "</td>" +
                                   "<td>" + result[i]["CP"] + "</td>" +
                                   "<td>" + result[i]["VILLE"] + "</td>" +
                                   "<td>" + result[i]["SEXE"] + "</td>" +
                                   "<td>" + result[i]["CODEPROJET"] + "</td>" +
                                   "<td>" + result[i]["POSTE"] + "</td>" +
                                   "<td>" + result[i]["SALAIRE"] + "</td>" +
                               "</tr>";
                }

                document.getElementById('personnel').innerHTML = liste;
            }else{
                document.getElementById('personnel').innerHTML = "<caption>Aucun enregistrement trouvé.</caption>";
            }
        }
    }
    
    xhr.send("ville=NULL&sexe=NULL&codeprojet=NULL");
    
}





















function creationXHR(){ // Création de l'objet XMLHTTPRequest
    var resultat = null;
    
    try{
        resultat = new XMLHttpRequest();
    }catch(Erreur){
        try{
            resultat = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(Erreur){
            try{
                resultat = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(Erreur){
                resultat = null;
            }
        }
    }
    
    return resultat;
}
