

$(function(){
var marvelAPI = 'http://gateway.marvel.com/v1/public/characters?ts=1&apikey=9aa7e7bc2747a95b3800ec6bd3df4d84&hash=6c9777b819af78bdc997e9be3a0b2037';
$.getJSON( marvelAPI).done(function( response ) {
      var results = response.data.results;     
      var resultsLen = results.length;
      var output = '<ul id="rig">';

      for(var i=0; i<resultsLen; i++){     
      if(imgPath!=''){
        if(results[i].name!='Aegis (Trey Rollins)'){  //* This image not listing */
        var imgPath = results[i].thumbnail.path + '/portrait_fantastic.jpg';
        output += '<li><a class="rig-cell"><img src="' + imgPath + '" class="rig-img"/><span class="rig-overlay"></span></a><h3>'+results[i].name+'</h3></li>';
        console.log(results[i]);

           } 
         }  
      }  
      output += '</ul>'
      $('#results').append(output);
  });
   
});