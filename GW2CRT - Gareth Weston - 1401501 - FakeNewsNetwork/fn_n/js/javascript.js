$(document).ready(function() {
  
var keywords = ['trump', 'penis', 'donald', 'news', 'story', 'yorkshire', 'fake', 'american', 'sheep', 'fantasy', 'donald trump', 'blink', 'blink 182', 'oreo', 'no more', 'demand', 'vine', 'meme', 'hey now', 'hey', 'say', 'it', 'aint', 'so'];
    
var keywords = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // `states` is an array of state names defined in "The Basics"
  local: keywords
});

$('#bloodhound .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'keywords',
  source: keywords
});
    
     
    
});