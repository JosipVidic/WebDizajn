$(document).ready(function(){
    /* $("#ocisti").click(function(){
                 $('#content').empty();
     });

    $("#xml").click(function(){
       $.ajax({
		type: "GET",
		url: "podaci/korisnici.xml",
		dataType: "xml",
		success: function(xml) {
                            $('#content').empty();
                            var tablica = $('<table id="tablica">');
                            tablica.append('<thead><tr><th>Id korisnik</th><th>Id status</th><th>Id_tip</th><th>Ime</th><th>Korisničko ime</th><th>Prezime</th><th>Email</th><th>Lozinka</th><th>Neuspješne prijave</th><th>Blokiran do</th><th>Aktivacijski kod</th></tr></thead>');
                            var tbody = $("<tbody>");
                            $(xml).find("korisnik").each(function(){
                            var red = "<tr>";
                            red += "<td>" + $(this).attr("id_korisnik") + "</td>";
                            red += "<td>" + $(this).attr("id_status") + "</td>";
                            red += "<td>" + $(this).attr("id_tip") + "</td>";
                            red += "<td>" + $(this).attr("ime") + "</td>";
                            red += "<td>" + $(this).attr("korisnicko_ime") + "</td>";
                            red += "<td>" + $(this).attr("prezime") + "</td>";
                            red += "<td>" + $(this).attr("email") + "</td>";
                            red += "<td>" + $(this).attr("lozinka") + "</td>";
                            red += "<td>" + $(this).attr("neuspjesne_prijave") + "</td>";
                            red += "<td>" + $(this).attr("blokiran_do") + "</td>";
                            red += "<td>" + $(this).attr("aktivacijski_kod") + "</td>";
                            red += "</tr>";
                            tbody.append(red);
                            });
                            tablica.append(tbody);
                            $('#content').html(tablica);
                            $('#tablica').dataTable();                
                                        }
            });
            });
    
    $('#json').click(function(){
        $.getJSON('podaci/korisnici.json', function(data){
                    $('#content').empty();
            var tablica = $('<table id="tablica">');
            tablica.append('<thead><tr><th>Id korisnik</th><th>Id status</th><th>Id_tip</th><th>Ime</th><th>Korisničko ime</th><th>Prezime</th><th>Email</th><th>Lozinka</th><th>Neuspješne prijave</th><th>Blokiran do</th><th>Aktivacijski kod</th></tr></thead>');
            var tbody = $('<tbody>');
            for(i = 0; i < data.length; i++) {
                tbody.append('<tr><td>' + data[i].id_korisnik + '</td><td>' + data[i].id_status + '</td><td>' + data[i].id_tip + '</td><td>' + data[i].ime + '</td><td>' + data[i].korisnicko_ime + '</td><td>' + data[i].prezime+'</td><td>'+data[i].email+'</td><td>' + data[i].lozinka + '</td><td>' + data[i].neuspjesne_prijave + '</td><td>' + data[i].blokiran_do + '</td><td>' + data[i].aktivacijski_kod + '</td></tr>')  ;              
            }
            tablica.append(tbody);
            $('#content').html(tablica);
            $('#tablica').dataTable();
        });
    });
         $("#datoteke").click(function(){
        $('#content').empty();
        $('#content').load('korisnici_iz_datoteke.php');
    });

     */  
  
    $('#content').load('ispis_korisnika.php');

   $("#kupi").click(function(){
        window.open('kupi.php','_self',false);
    });
    
    $("#prijavi").click(function(){
        window.open('prijava.php','_self',false);
    });
    
    
});