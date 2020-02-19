<h1 style="text-align: center;"><span style="background-color: #ff6600;">ALPHA NUMERO IOT DASHBOARD</span></h1>
<h2 style="text-align: center;"><strong><span style="text-decoration: underline;"><span style="text-align: center; color: #0000ff; text-decoration: underline;">WEATHER MONITORING SYSTEM&nbsp;</span></span></strong></h2>


<table>
    <tr>
	<th> SL.NO
	<th> TEMPERATURE
	<th> TIMESTAMP
    </tr>

    <tbody id="data"></tbody>
</table>

<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "data.php", true);
    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //converting JSON back to array
            var data = JSON.parse(this.responseText);
            console.log(data);

            var html = "";
            for(var a = 0, sl=1; a < data.length; a++,sl++) {
                var firstName = sl;
                var lastName = data[a].temperature;
                

                html += "<tr>";
                    html += "<td>" + firstName + "</td>";
                    html += "<td>" + lastName + "</td>";
                    
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script>