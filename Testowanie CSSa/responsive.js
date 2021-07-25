$( document ).ready( function(){
function wstaw_przed(rodzic, obiekt_dziecko){
	var rodzic=document.querySelector(rodzic);
	rodzic.insertBefore(obiekt_dziecko, rodzic.firstChild);
};

var label=document.createElement("label");
label.setAttribute("for", "tm");
label.setAttribute("id", "toggle-menu");
label.innerHTML="Menu<span class=\"drop-icon\"><svg class=\"ham hamRotate ham8\" viewBox=\"0 0 100 100\" width=\"2.9em\" onclick=\"this.classList.toggle('active')\"><path class=\"line top\" d=\"m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20\" /><path class=\"line middle\"	d=\"m 30,50 h 40\" /><path class=\"line bottom\" d=\"m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20\" /></svg></span>";
var inp1=document.createElement("input");
inp1.setAttribute("type", "checkbox");
inp1.setAttribute("id", "tm");

wstaw_przed("nav", inp1);
wstaw_przed("nav", label);

function submenu(obiekt, tryb_pracy){
	for(var i=0;i<obiekt.length;i++){
		if(tryb_pracy==0){
			var x=obiekt[i].firstElementChild.innerHTML;
			obiekt[i].firstElementChild.innerHTML=x+"<span class=\"drop-icon\"></span><label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm"+sm+"\">▾</label>";
			var y=document.createElement("input");
			y.setAttribute("id", "sm"+sm);
			y.setAttribute("type", "checkbox");
			obiekt[i].insertBefore(y, obiekt[i].lastElementChild);
		}else if(tryb_pracy==1){
			var x=obiekt[i].firstElementChild.innerHTML;
			obiekt[i].firstElementChild.innerHTML=x+"<span class=\"drop-icon\">▸</span><label title=\"Toggle Drop-down\" class=\"drop-icon\" for=\"sm"+sm+"\">▾</label>";
			var y=document.createElement("input");
			y.setAttribute("id", "sm"+sm);
			y.setAttribute("type", "checkbox");
			obiekt[i].insertBefore(y, obiekt[i].lastElementChild);
		};
		sm++;
	};
};

var sm=0;
var submenus=document.querySelectorAll("nav > ul > .deeper.parent");
var susbsubmenus=document.querySelectorAll("nav > ul > .deeper.parent > ul .deeper.parent");

submenu(submenus, 0);
submenu(susbsubmenus, 1);
});