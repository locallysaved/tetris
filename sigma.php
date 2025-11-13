<?php 
$apilink = file_get_contents('https://ch.tetr.io/api/general/stats', false, stream_context_create(['http' => ['method' => 'GET']]));
$chess = json_decode($apilink, true);
$http_code = $http_response_header[0];
// echo $chess['data']['gamesfinished'] ?? 'User count not available';
?>
<html>
<body> 
    <title>tretr rio</title>
</body>
</html>