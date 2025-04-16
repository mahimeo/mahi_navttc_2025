let now =new Date();

let hour = now. getHours(); // hour 24

if (hour  <14) {
      
 document.body.innerHTML= " <h1>morning</h1> ";
} else {
   document.body.innerHTML=" <h1>afternoon</h1>" ; 
}