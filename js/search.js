const searchFunc = () => {
    let filter = document.getElementById('myInput').value.toUpperCase();
    let elements = document.querySelectorAll('.product-info');
    let elem2=document.querySelectorAll('.product-item');
    let l=document.getElementsByClassName("search_prod");
 
console.log(l.length);
    for (var i = 0; i < l.length; i++) {
        let a = elements[i].querySelector('.search_prod');
        let value =a.innerHTML.toUpperCase() || a.innerText.toUpperCase() ||a.textContent.toUpperCase();
       
     if(value.indexOf(filter)>-1)
     {
      elements[i].style.display="";
      elem2[i].style.display="";
    
  }  else
  {
    elements[i].style.display="none";
    elem2[i].style.display="none";

  }
    }  
}
