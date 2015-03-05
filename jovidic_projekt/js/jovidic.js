var RegExime_prezime = /^[A-ZČĆŠDŽĐ]+[a-zčćšdžđ]{2,15}$/;
var RegEx_email2 = /^\w{2,}@(foi\.){1,2}\w{2,}$/;
var RegEx_tel = /\d\d\d \d\d\d\d\d\d\d/;

window.onload = function () {
	if (document.getElementById("lozinka2") !== null) {
		document.getElementById("lozinka2").addEventListener("blur", validacijaLozinke, false);               
                document.getElementById("lozinka2").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("lozinka2").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
        if (document.getElementById("ime") !== null) {
		document.getElementById("ime").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("ime").addEventListener("blur", provjeraImena, false);

                document.getElementById("ime").addEventListener("mouseover", promjeniKlasuHover, false);
                        }
        if (document.getElementById("korisnicko") !== null) {
		document.getElementById("korisnicko").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("korisnicko").addEventListener("mouseover", promjeniKlasuHover, false);

                document.getElementById("korisnicko").addEventListener("change", provjerauser, false);
                        }
        if (document.getElementById("prezime") !== null) {
		document.getElementById("prezime").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("prezime").addEventListener("blur", provjeraprezimena, false);
                document.getElementById("prezime").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
        if (document.getElementById("grad") !== null) {
		document.getElementById("grad").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("grad").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
       if (document.getElementById("email") !== null) {
		document.getElementById("email").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("email").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
        if (document.getElementById("tel") !== null) {
		document.getElementById("tel").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("tel").addEventListener("mouseover", promjeniKlasuHover, false);
                document.getElementById("tel").addEventListener("blur", provjeratel, false);

                        }
        /*if (document.getElementById("zivotopis") !== null) {
		document.getElementById("zivotopis").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("zivotopis").addEventListener("mouseover", promjeniKlasuHover, false);

                        }*/
        if (document.getElementById("lozinka1") !== null) {
		document.getElementById("lozinka1").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("lozinka1").addEventListener("mouseover", promjeniKlasuHover, false);
                document.getElementById("lozinka1").addEventListener("blur", provjeralozinke, false);

                        }
       if (document.getElementById("date") !== null) {
		document.getElementById("date").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("date").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
       if (document.getElementById("spol") !== null) {
		document.getElementById("spol").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("spol").addEventListener("mouseover", promjeniKlasuHover, false);

                        }
 
       if (document.getElementById("kime") !== null) {
		document.getElementById("kime").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("kime").addEventListener("mouseover", promjeniKlasuHover, false);
                        }
       if (document.getElementById("lozinka") !== null) {
		document.getElementById("lozinka").addEventListener("focus", promjeniKlasu, false);
                document.getElementById("lozinka").addEventListener("mouseover", promjeniKlasuHover, false);
                        }
       if (document.getElementById("submit") !== null) {
			document.getElementById("submit").addEventListener("mousedown", provjeraspola, false);
		}
                var labelica = document.getElementsByTagName("label");
                for (i=0;i<labelica.length;i++){
                labelica[i].addEventListener('mouseover', promjeniKlasulabele);
                labelica[i].addEventListener('mouseout', promjeniKlasulabeleout);
}


} ;


function validacijaLozinke(){
    var lozinka1 = document.getElementById('lozinka1');
    var lozinka2 = document.getElementById('lozinka2');
    var poruka = document.getElementById('error_password');
		if(lozinka1.value === lozinka2.value){
                            poruka.className='crveno';
                            poruka.innerHTML = "Lozinke se podudaraju";
                           
                }else{
                            poruka.className='crveno';
                            poruka.innerHTML = "Lozinke se ne podudaraju!";
                            lozinka1.value="";
                            lozinka2.value="";
                            lozinka1.focus();
                }
    }
    

function promjeniKlasu () {
	this.className = "inputklasa";
}

function promjeniKlasuHover () {
	this.className = "borderzahover";
}

function promjeniKlasulabele () {
	this.className = "labele";
}
function promjeniKlasulabeleout () {
	this.className = "labelaout";
}



function provjeraImena (e){
	var ime = this.value;	
	var imeOK = RegExime_prezime.test(ime);
        var porukaime = document.getElementById('error_name');
	if (imeOK === true) {
		porukaime.innerHTML = "";
	} else {
		porukaime.innerHTML = "Ime je neispravno!";
		porukaime.className = 'crveno';
                this.focus();
                this.value = "";
                e.preventDefault();
	}
}
function provjeraimenaprazno(e){
        var ime=this.value;
        if (ime.length===0){
            e.preventDefault();
        }
}

function provjeralozinke (){
	var lozinka1 = this.value;
        var porukalozinka = document.getElementById('error_password2');
	if (lozinka1.length>5) {
		porukalozinka.innerHTML ="";
	} else {
                    porukalozinka.innerHTML = "Lozinka mora sadržavati barem 6 znakova!";
                    porukalozinka.className = 'crveno';
                    this.focus();
                    this.value="";
                    
	}
}


function provjeraprezimena (e){
	var prezime = this.value;
	var prezimeOK = RegExime_prezime.test(prezime);
        var porukaprez = document.getElementById("error_surname");
	if (prezimeOK === true) {
		porukaprez.innerHTML = "";
	} else {
		porukaprez.innerHTML = "Prezime je neispravno!";
                porukaprez.className='crveno';
                this.focus();
                this.value = "";
                e.preventDefault();
	}
        
}

function provjeratel (e){
	var tel = this.value;
	var telOK = RegEx_tel.test(tel);
        var porukatel = document.getElementById("error_tel");
	if (telOK === true) {
		porukatel.innerHTML = "";
	} else {
		porukatel.innerHTML = "Broj je neispravan!";
                porukatel.className='crveno';
                this.focus();
                this.value = "";
                e.preventDefault();
	}
        
}


function provjeraspola(e){
    var spol = document.getElementById('spol');
    var porukaspol = document.getElementById('error_gender');
    if (spol.value===""){
        porukaspol.className='crveno';
        porukaspol.innerHTML="Odaberite spol!";
        spol.focus();
        e.preventDefault();
    }  
    if (spol.value!==""){
        porukaspol.innerHTML = "";
    }  
}


function provjerauser(){
        var korisnicko = document.getElementById('korisnicko');
        var porukakorisnicko=document.getElementById("error_user");
        if (korisnicko.value===""){
        porukakorisnicko.className='crveno';
        porukakorisnicko.innerHTML="Odaberite korisnicko ime!";
        korisnicko.focus();
    }  
    if (korisnicko.value!==""){
        porukakorisnicko.innerHTML = "";
    }  
};
