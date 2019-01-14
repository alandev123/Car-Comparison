$(function(){
	"use strict";
	$.ajax({
		url:"getcar.php",
		success: function(result){

			var obj=JSON.parse(result);
			for (var i=0;i<obj.ad.length;i++)
				{
					$("#selcomp").append("<option value="+obj.ad[i].mid+">"+obj.ad[i].cname+"</option>");
					$("#selcomp1").append("<option value="+obj.ad[i].mid+">"+obj.ad[i].cname+"</option>");
				}

		}
	});
});
function getcar(val)
	{
		$.ajax({
			type: "POST",
			url: "getcname.php",
			data:'mid='+val,
			success: function(data){
			if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);
					$("#selcar").html("<option>carname</option>");
				for(var i=0;i<obj.ad.length;i++){


					$("#selcar").append("<option value="+obj.ad[i].carid+">"+obj.ad[i].carname+"</option>");
				}
			}

		}
	});

}
function getcar1(val)
	{
		$.ajax({
			type: "POST",
			url: "getcname.php",
			data:'mid='+val,
			success: function(data){
			if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);
					$("#selcar1").html("<option>carname</option>");
				for(var i=0;i<obj.ad.length;i++){


					$("#selcar1").append("<option value="+obj.ad[i].carid+">"+obj.ad[i].carname+"</option>");
				}
			}

		}
	});
}
function getvar(val)
	{
		$.ajax({
			type: "POST",
			url: "getvarient.php",
			data:'carid='+val,
			success: function(data){

			if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);
					$("#selvar").html("<option>Varient</option>");
				for(var i=0;i<obj.ad.length;i++){

//document.getElementById('boot').value="+obj.ad[i].boot+";
					$("#selvar").append("<option value="+obj.ad[i].cid+">"+obj.ad[i].varient+"</option>");
				}
			}

		}
	});

}

function getvar1(val)
	{
		$.ajax({
			type: "POST",
			url: "getvarient.php",
			data:'carid='+val,
			success: function(data){

			if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);
					$("#selvar1").html("<option>Varient</option>");
				for(var i=0;i<obj.ad.length;i++){

//document.getElementById('boot').value="+obj.ad[i].boot+";
					$("#selvar1").append("<option value="+obj.ad[i].cid+">"+obj.ad[i].varient+"</option>");
				}
			}

		}
	});

}


// ---------------------- All Details of car -----------------//

function getdet(val)
	{
		$.ajax({
			type: "POST",
			url: "getdetails.php",
			data:'cid='+val,
			success: function(data){

				if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);

				//	$("#selvar").html("<option>Varient</option>");
				for(var i=0;i<obj.ad.length;i++){

			//	$("#image1").style.backgroundColor="green";
				//alert(obj.ad[i].image);
				document.getElementById('carimage1').style.backgroundImage="url('../theme/pics/car/"+obj.ad[i].image+"')";
			document.getElementById('type').value=obj.ad[i].type;
			document.getElementById('fuel').value=obj.ad[i].fuel;
			document.getElementById('cc').value=obj.ad[i].cc+" CC";
			document.getElementById('transm').value=obj.ad[i].transm;
			document.getElementById('gear').value=obj.ad[i].gear;
			document.getElementById('power').value=obj.ad[i].power;
			document.getElementById('torque').value=obj.ad[i].torque;
			document.getElementById('cylinder').value=obj.ad[i].cylinder;
			document.getElementById('fcap').value=obj.ad[i].fcap+"Litre";
			document.getElementById('milage').value=obj.ad[i].milage+"  KMPL";
			document.getElementById('ground').value=obj.ad[i].ground+"  cm";
			document.getElementById('wheelbase').value=obj.ad[i].wheelbase+"  mm";
			document.getElementById('kweight').value=obj.ad[i].kweight+"  Kg";

			document.getElementById('boot').value=obj.ad[i].boot+"  Litre";
			document.getElementById('length').value=obj.ad[i].length+"  mm";
			document.getElementById('height').value=obj.ad[i].height+"  mm";
			document.getElementById('width').value=obj.ad[i].width+"  mm";
			document.getElementById('tyres').value=obj.ad[i].tyres;
			document.getElementById('seat').value=obj.ad[i].seat;
			document.getElementById('pw').value=obj.ad[i].pw;
			document.getElementById('abs').value=obj.ad[i].abs;
			document.getElementById('cl').value=obj.ad[i].cl;
			document.getElementById('awd').value=obj.ad[i].awd;
			document.getElementById('alloy').value=obj.ad[i].alloy;
			document.getElementById('tube').value=obj.ad[i].tube;
			document.getElementById('tsn').value=obj.ad[i].tsn;
			document.getElementById('sun').value=obj.ad[i].sun;
			document.getElementById('rc').value=obj.ad[i].rc;
			document.getElementById('rs').value=obj.ad[i].rs;
			document.getElementById('fl').value=obj.ad[i].fl;
			document.getElementById('dtrl').value=obj.ad[i].dtrl;
			document.getElementById('cruise').value=obj.ad[i].cruise;
			document.getElementById('orvm').value=obj.ad[i].orvm;
			document.getElementById('cost').value=obj.ad[i].cost+"  Lakh";
					//$("#selvar").append("<option value="+obj.ad[i].cid+">"+obj.ad[i].varient+"</option>");
				}
			}

		}
	});
}

//----------------------------------------------

function getdet1(val)
	{
		$.ajax({
			type: "POST",
			url: "getdetails.php",
			data:'cid='+val,
			success: function(data){

			if(data=="false"){

				alert("No data Found");
			}
			else {
				var obj = JSON.parse(data);

				//	$("#selvar").html("<option>Varient</option>");
				for(var i=0;i<obj.ad.length;i++){

			//document.getElementById('image').value="+obj.ad[i].image+";
			document.getElementById('carimage2').style.backgroundImage="url('../theme/pics/car/"+obj.ad[i].image+"')";
			document.getElementById('type1').value=obj.ad[i].type;
			document.getElementById('fuel1').value=obj.ad[i].fuel;
			document.getElementById('cc1').value=obj.ad[i].cc+" CC";
			document.getElementById('transm1').value=obj.ad[i].transm;
			document.getElementById('gear1').value=obj.ad[i].gear;
			document.getElementById('power1').value=obj.ad[i].power;
			document.getElementById('torque1').value=obj.ad[i].torque;
			document.getElementById('cylinder1').value=obj.ad[i].cylinder;
			document.getElementById('fcap1').value=obj.ad[i].fcap+"  Litre";
			document.getElementById('milage1').value=obj.ad[i].milage+"  KMPL";
			document.getElementById('ground1').value=obj.ad[i].ground+"  cm";
			document.getElementById('wheelbase1').value=obj.ad[i].wheelbase+"  mm";
			document.getElementById('kweight1').value=obj.ad[i].kweight+"  Kg";

			document.getElementById('boot1').value=obj.ad[i].boot+"  Litre";
			document.getElementById('length1').value=obj.ad[i].length+"  mm";
			document.getElementById('height1').value=obj.ad[i].height+"  mm";
			document.getElementById('width1').value=obj.ad[i].width+"  mm";
			document.getElementById('tyres1').value=obj.ad[i].tyres;
			document.getElementById('seat1').value=obj.ad[i].seat;
			document.getElementById('pw1').value=obj.ad[i].pw;
			document.getElementById('abs1').value=obj.ad[i].abs;
			document.getElementById('cl1').value=obj.ad[i].cl;
			document.getElementById('awd1').value=obj.ad[i].awd;
			document.getElementById('alloy1').value=obj.ad[i].alloy;
			document.getElementById('tube1').value=obj.ad[i].tube;
			document.getElementById('tsn1').value=obj.ad[i].tsn;
			document.getElementById('sun1').value=obj.ad[i].sun;
			document.getElementById('rc1').value=obj.ad[i].rc;
			document.getElementById('rs1').value=obj.ad[i].rs;
			document.getElementById('fl1').value=obj.ad[i].fl;
			document.getElementById('dtrl1').value=obj.ad[i].dtrl;
			document.getElementById('cruise1').value=obj.ad[i].cruise;
			document.getElementById('orvm1').value=obj.ad[i].orvm;
			document.getElementById('cost1').value=obj.ad[i].cost+"  Lakh";
					//$("#selvar").append("<option value="+obj.ad[i].cid+">"+obj.ad[i].varient+"</option>");
				}
			}

		}
	});
}
