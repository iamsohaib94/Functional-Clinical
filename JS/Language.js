const about = document.querySelector('.about');
const ebs = document.querySelector('.ebs');
const fca = document.querySelector('.fca');
const booking = document.querySelector('.booking');
const certified = document.querySelector('.certified');
const contact = document.querySelector('.contact');
const about2 = document.querySelector('.about2');
const ebs2 = document.querySelector('.ebs2');
const fca2 = document.querySelector('.fca2');
const booking2 = document.querySelector('.booking2');
const certified2 = document.querySelector('.certified2');
const contact2 = document.querySelector('.contact2');
const FCAH = document.querySelector('.FCAH');
const Term = document.querySelector('.Term');
const Term2 = document.querySelector('.Term2');
const BTNSUBMIT = document.querySelector('.BTN-SUBMIT');


$('.lang').click(function() {
	
	$(this).addClass('active').siblings().removeClass('active');
	
	const attr = $(this).text();

	about.textContent = data[attr].about;
	ebs.textContent = data[attr].ebs;
	fca.textContent = data[attr].fca;
	booking.textContent = data[attr].booking;
	certified.textContent = data[attr].certified;
	contact.textContent = data[attr].contact;
	about2.textContent = data[attr].about2;
	ebs2.textContent = data[attr].ebs2;
	fca2.textContent = data[attr].fca2;
	booking2.textContent = data[attr].booking2;
	certified2.textContent = data[attr].certified2;
	contact2.textContent = data[attr].contact2;
	FCAH.textContent = data[attr].FCAH;
	$('.Full-Name').attr("placeholder", data[attr].FullName);
	$('.TXT-AREA').attr("placeholder", data[attr].TxtArea);
	Term.textContent = data[attr].Term;
	Term2.textContent = data[attr].Term2;
	BTNSUBMIT.textContent = data[attr].BTNSUBMIT;
});

var data = {
	  "English": 
	  {
//		Header
		"about": "ABOUT US",
		"ebs": "EBS",
		"fca": "FCA",
		"booking": "BOOKING",
		"certified": "CERTIFIED",
		"contact": "CONTACT",
		"about2": "ABOUT US",
		"ebs2": "EBS",
		"fca2": "FCA",
		"booking2": "BOOKING",
		"certified2": "CERTIFIED",
		"contact2": "CONTACT",
//		FCA TEST PAGE
		"FCAH": "FCA TEST",
		"FullName": "FULL NAME",
		"TxtArea": "YOUR MESSAGE HERE",
		"Term": "I agree all statement in",
		"Term2": "Term & Condition",
		"BTNSUBMIT": "SUBMIT",
		
	  },
	  "Italiano": 
	  {
//		 Header //English 2 to it
		"about": "CHI SIAMO",
		"ebs": "EBS",
		"fca": "FCA",
		"booking": "prenotazione",
		"certified": "certificato",
		"contact": "contatto",
		"about2": "CHI SIAMO",
		"ebs2": "EBS",
		"fca2": "FCA",
		"booking2": "prenotazione",
		"certified2": "certificato",
		"contact2": "contatto",
//		  FCA TEST PAGE
		"FCAH": "FCA TEST",
		"FullName": "NOME E COGNOME",
		"TxtArea": "IL TUO MESSAGGIO QUI",
		"Term": "Accetto tutta l'affermazione in",
		"Term2": "Termini e condizioni",
		"BTNSUBMIT": "SOTTOSCRIVI",
	  },
	  "Espanol": 
	  {
//		 Header
		"about": "Sobre nosotras",
		"ebs": "EBS",
		"fca": "FCA",
		"booking": "reserva",
		"certified": "certificado",
		"contact": "contacto",
		"about2": "Sobre nosotras",
		"ebs2": "EBS",
		"fca2": "FCA",
		"booking2": "reserva",
		"certified2": "certificado",
		"contact2": "contacto",
//		  FCA TEST PAGE
		"FCAH": "FCA PRUEBA",
		"FullName": "NOMBRE COMPLETO",
		"TxtArea": "SU MENSAJE AQUÍ",
		"Term": "Estoy de acuerdo con todas las declaraciones en",
		"Term2": "Términos y Condiciones",
		"BTNSUBMIT": "ENVIAR",
	  },
	"Francais": 
	  {
//		  Header
		"about": "à propos de nous",
		"ebs": "EBS",
		"fca": "FCA",
		"booking": "réservation",
		"certified": "agréé",
		"contact": "CONTACT",
		"about2": "à propos de nous",
		"ebs2": "EBS",
		"fca2": "FCA",
		"booking2": "réservation",
		"certified2": "agréé",
		"contact2": "CONTACT",
//		  FCA TEST PAGE
		"FCAH": "FCA TEST",
		"FullName": "NOM ET PRÉNOM",
		"TxtArea": "VOTRE MESSAGE ICI",
		"Term": "Je suis d'accord avec toutes les déclarations",
		"Term2": "Termes et conditions",
		"BTNSUBMIT": "NOUS FAIRE PARVENIR",
	  }
	
	};