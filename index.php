<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello IBM World!"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
			<td>
				<input id='txtText' type="text"/>
			</td>
			<td>
				
			</td>
		</tr>
	</table>
	<script>
		var voice = 'en-US_AllisonVoice';
	var token = {
  "url": "",
  "password": "",
  "username": ""
};
	var wsURI = 'wss://stream.watsonplatform.net/text-to-speech/api/v1/synthesize?voice=' +
				  voice + '&watson-token=' + token;
	var websocket = new WebSocket(wsURI);
	websocket.onopen = function(evt) { onOpen(evt) };
	websocket.onclose = function(evt) { onClose(evt) };
	websocket.onmessage = function(evt) { onMessage(evt) };
	websocket.onerror = function(evt) { onError(evt) };
	function onOpen(evt){
			console.log(evt)
		}
		
		websocket.send(JSON.stringify(message));
		
	
	</script>
</body>
</html>
