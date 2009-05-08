<?php //require 'generator.php'; ?><html>
<head>
<title>Seven Signs Status</title>
<style>
body {margin: 0px; font: 10px Verdana, Arial, Helvetica, sans-serif;}
</style>
<!-- Generation Script -->
<script language="javascript" type="text/javascript" src="./world01.js"></script>
</head>
<body> 
<table border="0" cellpadding="0" cellspacing="0" width="569">
<tbody>
  <tr valign="top">
    <td style="background: url(./ssq_image/ssqViewBg.jpg)" height="225"><table>
        <tbody>
          <tr valign="top">
            <td><table style="margin: 18px 0px 0px 54px" cellspacing="0" cellpadding="0" border="0" width="141">
                <tbody>
                  <tr align="middle" height="26">
                    <td style="background: url(./ssq_image/ssqViewimg1.gif); COLOR:#FFF; font-size:11px;">
						<script language="JavaScript" type="text/javascript">
						if (0 == ssStatus) {
						document.write('Preparation');
						}
						else if (1 == ssStatus) {
						document.write('Competition <b style="color:#E10000"> Day ' + nthDay + '</b>');
						}
						else if (2 == ssStatus) {
						document.write('Calculation');
						}
						else if (3 == ssStatus) {
						document.write('Seal Effect <b style="color:#E10000"> Day ' + nthDay + '</b>');
						}
						</script>
					</td>
                  </tr>
                </tbody>
              </table>
              <table style="margin: 3px 0px 0px 10px" cellspacing="0" cellpadding="0" width="141" border="0">
                <tbody>
                  <tr>
                    <td></td>
                    <td><img height="16" src="./ssq_image/timeBox1.jpg" width="140" border="0" /></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td valign="bottom" rowspan="2"><img height="125" src="./ssq_image/timeBox2.jpg" width="45" border="0" /></td>
                    <td>
						<script language="JavaScript" type="text/javascript">
						var timeImage;
						var tempImageNum;
						
						if (1 == ssStatus) {
							tempImageNum = nthDay;
						}
						else if (0 == ssStatus) {
							tempImageNum = 0;
						}
						else if (3 == ssStatus || 2 == ssStatus) {
							tempImageNum = nthDay + 7;
						}
						
						timeImage = 'time'+tempImageNum+'.jpg';
						document.write('<img src="./ssq_image/'+ timeImage +'" width="140" height="139" border="0">');									
						</script>
					</td>
                    <td valign="bottom" rowspan="2"><img height="125" src="./ssq_image/timeBox3.jpg" width="66" border="0" /></td>
                  </tr>
                  <tr> 
                    <td><img height="12" src="./ssq_image/timeBox4.jpg" width="140" border="0" /></td>
                  </tr>
                </tbody>
              </table></td>
            <td><table style="margin: 27px 0px 0px 22px" cellspacing="0" cellpadding="0" width="200" border="0">
                <tbody>
                  <tr align="middle" bgcolor="#606d6f" height="17">
                    <td style="color:#FFF; font-size:11px;">
						<script language="JavaScript" type="text/javascript">
						document.write (currTime);
						</script>
					</td>
                  </tr>
                </tbody>
              </table>
              <table style="margin: 21px 0px 0px 22px" cellspacing="0" cellpadding="0" border="0">
                <colgroup>
                <col width="74" />
                <col width="*" />
                </colgroup>
                <tbody>
                  <tr>
                    <td style="font-size:11px; color:#000;"><img style="margin: 0px 6px 5px 0px" height="1" src="./ssq_image/dot.gif" width="1" border="0" />Dawn</td>
                    <td style="color: #000; font-size:11px;">
						<script language="JavaScript" type="text/javascript">
						var twilPointWidth = maxPointWidth * twilPoint / 1000;
						document.write('<img src="./ssq_image/ssqbar2.gif" width="' + twilPointWidth + '" height="9" border="0"> ' + twilPoint);
						</script>
					</td>
                  </tr>
                  <tr>
                    <td colspan="2" height="7"></td>
                  </tr>
                  <tr> 
                    <td style="font-size:11px; color:#000;"><img style="margin: 0px 6px 5px 0px" height="1" src="./ssq_image/dot.gif" width="1" border="0" />Dusk</td>
                    <td style="color: #000; font-size:11px;">
						<script language="JavaScript" type="text/javascript">
						var dawnPointWidth = maxPointWidth * dawnPoint / 1000;
						document.write('<img src="./ssq_image/ssqbar1.gif" width="' + dawnPointWidth + '" height="9" border="0"> ' + dawnPoint);
						</script>
					</td>
                  </tr>
                </tbody>
              </table>
              <table cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                  <tr valign="bottom" align="middle" height="95">
                    <td>
						<script language="JavaScript" type="text/javascript">
						if (3 == ssStatus)
						{
							if (0 == seal1)
								document.write('<img src="./ssq_image//bongin1close.gif" width="85" height="86" border="0">');
							else
								document.write('<img src="./ssq_image/bongin1open.gif" width="85" height="86" border="0">');
						}else{
							document.write('<img src="./ssq_image/bongin1.gif" width="85" height="86" border="0">');
						}
						</script>
					</td><td>
						<script language="JavaScript" type="text/javascript">
						if (3 == ssStatus)
						{
							if (0 == seal2)
								document.write('<img src="./ssq_image/bongin2close.gif" width="85" height="86" border="0">');
							else
								document.write('<img src="./ssq_image/bongin2open.gif" width="85" height="86" border="0">');
						}else{
							document.write('<img src="./ssq_image/bongin2.gif" width="85" height="86" border="0">');
						}
						</script>
					</td><td>
						<script language="JavaScript" type="text/javascript">
						if (3 == ssStatus)
						{
							if (0 == seal3)
								document.write('<img src="./ssq_image/bongin3close.gif" width="85" height="86" border="0">');
							else
								document.write('<img src="./ssq_image/bongin3open.gif" width="85" height="86" border="0">');
						}else{
							document.write('<img src="./ssq_image/bongin3.gif" width="85" height="86" border="0">');
						}
						</script>
					</td> 
                  </tr> 
                  <tr> 
                    <td colspan="3"><div align="center" style="margin-left:10px;"><img height="16" src="./ssq_image/bonginName.gif" width="258" border="0" /> </div></td> 
                  </tr> 
                </tbody> 
              </table></td> 
          </tr> 
        </tbody> 
      </table> 
</body>
</html>
