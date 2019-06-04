function hideTITLE(id){
    var form= document.getElementsByClassName("div");
    for(var i=0; i<form.length; i++){
        if(form[i].id==id){ 
            form[i].style.display='block';
        }
        else {
            form[i].style.display = 'none';
        }
    }
}