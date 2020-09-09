 
//scroll to top btn
$(window).scroll(function(){
if($(window).scrollTop() > 300)
$("#btnUp").fadeIn(200);
else
$("#btnUp").fadeOut(2000);
});

$("#btnUp").click(function(){
    $("body,html").animate({
    scrollTop:0},2000)
    });
/*calendar*/
try {
    fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
      return true;
    }).catch(function(e) {
      var carbonScript = document.createElement("script");
      carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
      carbonScript.id = "_carbonads_js";
      document.getElementById("carbon-block").appendChild(carbonScript);
    });
  } catch (error) {
    console.log(error);
  }
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

 /* news */ 

 var d = new Date();
 var today = d.getDate();
 document.getElementsByClassName("date")[0].innerHTML=today + "/" +(d.getMonth()+1);
 document.getElementsByClassName("date")[1].innerHTML=today+1 + "/" + (d.getMonth()+1);
 document.getElementsByClassName("date")[2].innerHTML=today+2 + "/" + (d.getMonth()+1);
 document.getElementsByClassName("date")[3].innerHTML=today+3 + "/" + (d.getMonth()+1);
if(today == 30 || today == 31)
{
    document.getElementsByClassName("date")[1].innerHTML=1;
}

