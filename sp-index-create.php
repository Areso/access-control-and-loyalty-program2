<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Sell-service Point</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="qrcode.js"></script>
	<script type="text/javascript" src="meteor.js"></script>
</head>
<body>
<input id="text" type="text" value="" style="width:80%" /><br />

<script type="text/javascript">
	myStringToEncode = "08-ED-B9-49-B2-E5-1024-2016/12/27 15:43";
	clFingerprint    = myStringToEncode.slice(0,22);
	clDateTime       = myStringToEncode.slice(23,42)+":00";
	var formatDate   = "2016/12/27";
	var responseDate = moment(formatDate).format('DD.MM.YYYY');
	alert(responseDate);
	//clTime           = new Date(clDateTime.slice(11,19));
	//clTime           = moment(clDateTime.slice(11,19)).format('HH:MM:SS');
	//alert(clTime);
	//alert(clDateTime.slice(11,19));
	//alert(clTime);
	//spDateTime    = getDate() + " "+getmyTime(0)+":00";
	//spTime        = new Date("""+getmyTime(0)+":00"+""");
	//alert(spTime);
	//var date1 = new Date("7/13/2010 15:43:01");
	/*
	var date3 = new Date("2010/07/13");
	var date4 = new Date("2010/07/14");
	var date2 = new Date("15:43:01");
	lol1 = spTime.getTime();
	lol2 = date2.getTime();
	var stringTime = "15:43:01";
	lol3 = new Date(stringTime);
	*/
	//alert(lol3);
	//diff = new Date("");
	//diff.setDate(spTime.getDate()-date3.getDate());
	//diff.setTime(spTime.getTime()-clTime.getTime());
	
	//alert(diff);
function getDate() {
	var cdate = new Date();
	var yy  = cdate.getUTCFullYear();
	var mo  = cdate.getUTCMonth()*1+1;
	var dd  = cdate.getUTCDate();
	nd = yy+"/"+mo+"/"+dd;
	return nd;
}
function getmyTime(type) {
	var d = new Date();
	var hh = d.getUTCHours();
	var mm = d.getUTCMinutes();
	var ss = d.getUTCSeconds();
	if (hh < 10) {
		hh = "0"+hh;
	}
	if (mm < 10) {
		mm = "0"+mm;
	}
	if (ss < 10) {
		ss = "0"+ss;
	}
	if (type=="0") {
		nt = hh+":"+mm;	
	}
	if (type=="1") {
		nt = hh+":"+mm+":"+ss;	
	}
	return nt;
}


document.getElementById("text").value = myStringToEncode;

</script>
</body>