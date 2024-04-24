function sendmail(){
  var params={
    name : document.getElementById("name").value,
    email : document.getElementById("email").value,
    message: document.getElementById("adr").value
  };
  const serviceID= "service_0kpk6gb";
  const templateID= "template_spkxisd";
  emailjs.send(serviceID,templateID,params)
  .then(
    res =>{
      document.getElementById("name").value="";
      document.getElementById("email").value="";
      document.getElementById("adr").value="";
      console.log(res);
      alert("your message sent successfully");
    }
  )
  .catch((err)=>console.log(err));
}