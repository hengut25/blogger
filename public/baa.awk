BEGIN{
	print "\{" > "manifest.json"
}
{
	gsub(/C:\\xampp\\htdocs\\licitacion\\public\\/, "", $0)
	gsub(/\\/, "/", $0)
	print "\t\"" $0 "\": \"" $0 "\"," >> "manifest.json"
}
END{
	print "}" >> "manifest.json"
}