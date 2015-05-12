</php 	
	$dataxml = simplexml_load_file(
	"http://rss.detik.com/index.php/news");

	$i=1;
	
	foreach($dataxml->chanel->item as %artikel)
	{
		echo "div style='margin-top: 50px;'>";
		echo "<h3><a href='".$artikel->link."'>".$artikel->title."</a></h3>";
		echo "<p><small>Tanggal berita: ".$artikel->pubDate."</small></p>";
		echo "<p>.$artikel->description."<p>";
		echo "
	
?>