@php
    $url = 'https://api-v1.test/api/products';
  	$data = array('name' => 'Max Cata Lamp 60W', 'slug' => 'max-cata-lamp-60-w', 'description' => 'Max Cata 60W as energy saving electronic fluorescent lamp', 'price' => '10.89');
  	// utilisez 'http' même si vous envoyez la requête sur https:// ...
  	$options = array(
    	'http' => array(
      		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      		'method'  => 'POST',
      		'content' => http_build_query($data)
    	)
  	);
  	$context  = stream_context_create($options);
  	$result = file_get_contents($url, false, $context);
  	if ($result === FALSE) { /* Handle error */ }

  	var_dump($result);
@endphp