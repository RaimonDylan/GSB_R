xhr = creationXHR();

function selectVilles(){
  xhr.open('GET','Php/getVilles',false);
  xhr.send(null);

  if(xhr.status == 200){
    response = JSON.parse(xhr.responseText)
    var arr = response.toString().split(",");

    for(var i in arr){
      var option = document.createElement("option");
      option.value = arr[i];
      option.text = arr[i];

      document.getElementById("ville").add(option);
    }

  }
}
