
var countDownDate = new Date("Dec 5, 2023 15:37:25").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "يوم <br>" + hours + "ساعة <br>"
  + minutes + "دقيقة <br>" + seconds + "ثانية <br>";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "نأسف!انتهى وقت التسجيل ";
  }
}, 1000);
var refTeam =document.getElementById("refTeam");
var serch =document.getElementById("serchbutt");
var team =document.querySelector(".loader-con");
var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard:false
    })
serch.addEventListener('click',function(){
    team.style.display="block"
    sim = setInterval(progressSim, 30);
    
    
    

});
refTeam.addEventListener('click',function(){ team.style.display="none"
});
var ctx = document.getElementById('circularLoader').getContext('2d');
var al = 0;
var start = 4.72;
var cw = ctx.canvas.width;
var ch = ctx.canvas.height; 
var diff;
var sim;
function progressSim(){
	diff = ((al / 100) * Math.PI*2*10).toFixed(2);
	ctx.clearRect(0, 0, cw, ch);
	ctx.lineWidth = 17;
	ctx.fillStyle = '#4285f4';
	ctx.strokeStyle = "#4285f4";
	ctx.textAlign = "center";
	ctx.font="28px monospace";
	ctx.fillText(al+'%', cw*.52, ch*.5+5, cw+12);
	ctx.beginPath();
	ctx.arc(100, 100, 75, start, diff/10+start, false);
	ctx.stroke();
	if(al >= 100){
		clearTimeout(sim);
	    // Add scripting here that will run when progress completes
        myModal.show(); 
	}
	al++;
}

