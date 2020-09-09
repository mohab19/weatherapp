/*api */
var allData=[];

$(".location .box").click(function(){
   
    var cityName=$("#cityInp").val();
    var request=new XMLHttpRequest();

    request.open("GET","http://api.weatherapi.com/v1/forecast.json?key=c5e3af3bed8d47699c6200421200609&q="+cityName+"&days=7");
    
    request.send();
    
    request.onreadystatechange=function(){
    if(request.readyState == 4 && request.status==200)
    {
        allData=JSON.parse(request.response);
        console.log(allData);
        display();
    }
    }
});


function getDayName(appDate, seperator){


    // Name of the days as Array
    var dayNameArr = new Array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thrusday", "Friday", "Saturday");
    var dateArr = appDate.split(seperator); // split the date into array using the date seperator
    var month = eval(dateArr[0]); 
    var day = eval(dateArr[1]);
    var year = eval(dateArr[2]);
   // Calculate the total number of days, with taking care of leapyear 
   var totalDays = day + (2*month) + parseInt(3*(month+1)/5) + year + parseInt(year/4) - parseInt(year/100) + parseInt(year/400) + 2;
   // Mod of the total number of days with 7 gives us the day number
   var dayNo = (totalDays%7);
   // if the resultant mod of 7 is 0 then its Saturday so assign the dayNo to 7
   if(dayNo == 0){
        dayNo = 7;
   }
 return dayNameArr[dayNo-1]; // return the repective Day Name from the array


}

var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
// var d = new Date('09/07/2020');
var dayName = days[d.getDay()];

function display()
{
var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    // var d = new Date('09/07/2020');
    // var dayName = days[d.getDay()];    
$(".city").text(allData.location.name);
$(".weather-info h1").text(allData.current.temp_c );
$(".icon").attr("src",allData.current.condition.icon);
$(".weather-info .d1").text(allData.forecast.forecastday[0].day.avgtemp_c);
$(".weather-info .d2").text(allData.forecast.forecastday[1].day.avgtemp_c);
$(".weather-info .d3").text(allData.forecast.forecastday[2].day.avgtemp_c);  
 var d=new Date(allData.forecast.forecastday[0].date);
$(".weather-info .day1").text(days[d.getDay()]);
var d=new Date(allData.forecast.forecastday[1].date);
$(".weather-info .day2").text(days[d.getDay()]);
var d=new Date(allData.forecast.forecastday[2].date);
$(".weather-info .day3").text(days[d.getDay()]);
var d=new Date(allData.forecast.forecastday[3].date);
$(".weather-info .day4").text(days[d.getDay()]);
}

