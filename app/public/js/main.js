document.addEventListener('DOMContentLoaded',function (){  
    var anchorx = document.querySelectorAll("#editbtn");
    var divconf = document.querySelector(".cambios");
    var contador = 0;
 
   for (let i = 0; i < anchorx.length; i++) {
    anchorx[i].addEventListener("click",function (e){
        
        e.preventDefault();
 
        var iframex = document.createElement("iframe");
 
        iframex.src = anchorx[i].getAttribute("href");
        iframex.style.position = "fixed";
        iframex.style.top = "0";
        iframex.style.left = "0";
        iframex.style.width = "100%";
        iframex.style.height = "100%";
        iframex.style.border = "none";
        iframex.style.zIndex = "9999";
 
        document.body.appendChild(iframex);
 
        iframex.addEventListener("load", function() {
 
            var iframeWindow = iframex.contentWindow;
 
            var elementoIframe = iframeWindow.document.querySelector(".bg-yellow-300");
            var cancbtn = iframeWindow.document.querySelector("#cancbtn");

            cancbtn.addEventListener("click",function(){
                document.body.removeChild(iframex);
            })

 
            elementoIframe.addEventListener("click", function(){
                contador++;
                divconf.innerHTML= contador.toString() + " Cambios realizados con exito actualiza la ventana para visualizarlos en la tabla";
                iframex.style.display = "none";
            })
 
        })
 
 
    })
 
 
   }
 
})