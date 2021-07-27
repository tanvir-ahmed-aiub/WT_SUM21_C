var g_flag = false;
function viewOutput(e){
	//var op = get("uname").value;
	var op = e.value;
	get("op").innerHTML = op;
}
function hideinfo(){
	get("info").style.display="none";
}
function showinfo(){
	get("info").style.display="block";
}
function turnOn(){
	var buld_i = get("bulb");
	buld_i.src = "pic_bulbon.gif";
}
function turnOff(){
	var buld_i = get("bulb");
	buld_i.src = "pic_bulboff.gif";
}
function get(id){
	return document.getElementById(id);
}
function viewGoogle(){
	var g_f = get("g_form");
	var btn_g = get("btn_g");
	if(g_flag){
		g_f.style.display="none";
		btn_g.innerHTML ="Login with Google";
		g_flag = false;
	}else{
		g_f.style.display="block";
		btn_g.innerHTML ="Hide Google Login";
		g_flag = true;
	}
}