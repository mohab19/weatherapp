function op() {
    1 == document.getElementById("a").disabled
    ?
    ( ee = 0, selected =
        document.getElementById("hour").selectedIndex, document.getElementById("all").style.display = "none", document.getElementById("s").style.display = "block", document.getElementById("a").disabled =! 1, document.getElementById("b").disabled =! 0
    )
    :
    ( 50 > selected && (
            document.getElementById("hour").selectedIndex = selected
        ),
        document.getElementById("all").style.display = "block", document.getElementById("s").style.display = "none", document.getElementById("b").disabled =! 1, document.getElementById("a").disabled =! 0);
        update()
}

function chang(b) {
    "+" == b
    ?
    document.getElementById("hour").selectedIndex+1 < document.getElementById("hour").length && (
        document.getElementById("hour").selectedIndex = document.getElementById("hour").selectedIndex+1,
        update()
    )
    :
    0 < document.getElementById("hour").selectedIndex && (
        document.getElementById("hour").selectedIndex = document.getElementById("hour").selectedIndex-1,
        update()
    )
}

function showloading() {
    document.getElementById("loading").style.visibility = "visible"
}

function hideloading() {
    document.getElementById("loading").style.visibility="hidden"
}

function update() {
    if( 1 == document.getElementById("a").disabled ) {
        showloading(),
        C = document.getElementById("script").value,
        B = document.getElementById("hour").value,
        document.getElementById("img").src = C + B;
    }
    else
    {
        if( document.getElementById("hour").length > document.getElementById("hour").selectedIndex+1 )
        {
            if(0 < ee) {
                document.getElementById("hour").selectedIndex += 1;
                C = document.getElementById("script").value,
                B = document.getElementById("hour").value,
                document.getElementById("img").src = C + B;
                var b = new Image, c = C + B;
                b.onload = function() {
                    var a = document.getElementById("hour"),
                    a = a.options[a.selectedIndex].text;
                    document.getElementById("s").innerHTML = a;
                    setTimeout(function() {
                        update()
                    },1E3);
                }
            }
            else
            {
                document.getElementById("hour").selectedIndex = 0,
                C = document.getElementById("script").value,
                B = document.getElementById("hour").value,
                document.getElementById("img").src = C + B,
                b = new Image,
                c = C + B,
                b.onload = function() {
                    var a = document.getElementById("hour"),
                    a = a.options[a.selectedIndex].text;
                    document.getElementById("s").innerHTML = a;
                    setTimeout(function() {
                        ee = 2;
                        update()
                    },1E3);
                };
            }
        }
        else
        {
            document.getElementById("hour").selectedIndex = 0,
            B = document.getElementById("hour").value,
            b = new Image,
            c = C + B,
            b.onload = function() {
                var a = document.getElementById("hour"),
                b = a.options[a.selectedIndex].text;
                setTimeout(function() {
                    document.getElementById("s").innerHTML = b;
                    ee = 0;
                    update()
                },3E3);
            };
            b.src = c
        }
    }
}

function setVisibility(b) {
    b = document.getElementsByClassName(b);
    var c;
    "\u0625\u062e\u0641\u0627\u0621 \u0623\u0633\u0645\u0627\u0621 \u0627\u0644\u0645\u062f\u0646" == document.getElementById("bt1").innerHTML
    ?
    (
        document.getElementById("bt1").value = "Show Layer",
        document.getElementById("bt1").innerHTML = "\u0625\u0638\u0647\u0627\u0631 \u0623\u0633\u0645\u0627\u0621 \u0627\u0644\u0645\u062f\u0646",
        c = "hidden"
    )
    :
    (
        document.getElementById("bt1").value = "\u0625\u062e\u0641\u0627\u0621 \u0627\u0644\u062e\u0631\u064a\u0637\u0629",
        document.getElementById("bt1").innerHTML = "\u0625\u062e\u0641\u0627\u0621 \u0623\u0633\u0645\u0627\u0621 \u0627\u0644\u0645\u062f\u0646",
        c = "visible"
    );
    for ( var a = 0; a < b.length; a++ )
        b[a].style.visibility = c;
}

function setCookie(b, c, a) {
    var d = new Date;
    d.setTime(d.getTime() + 864E5 * a);
    a = "expires=" + d.toGMTString();
    document.cookie = b + "=" + c + "; " + a
}

function getCookie(b) {
    b += "=";
    for(var c = document.cookie.split(";"), a= 0; a < c.length; a++) {
        for(var d = c[a]; " " == d.charAt(0); ) {
            d = d.substring(1);
            if(0 == d.indexOf(b))
                return d.substring(b.length, d.length);
        }
    }
    return "";
}

function change() {
    "Show Layer" == document.getElementById("bt1").value
    ?
    ( setCookie("showo", "hide"), YYY = "hide" )
    :
    ( setCookie("showo", "show"), YYY = "show" );
}
