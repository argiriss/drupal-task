    function openColorBox(){
if (localStorage.value != "ok"){
		document.getElementById("popup").style.visibility = "visible";
		document.getElementById('modalbackground').style.display='block';
		document.onclick= function(){
			document.getElementById("popup").style.visibility = "hidden";
			document.getElementById('modalbackground').style.display='none';
		}
      }
}
     setTimeout(openColorBox, 5000);
