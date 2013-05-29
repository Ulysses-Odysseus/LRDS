// //Get the search query
// function getVal() {
//     var search = document.getElementById("searchform");
//     //alert(search);

//     if (search.value == '' || search.value == 'Enter keyword here...') {
//       alert("You must Enter a keyword!");
//     } else {
//       var query = search.value;
//       searchInsta(query);
//     }

//     setTimeout( function() { toggle(); }, 1000);
// }

// //Open and Close the navigation
// function toggle() {
//   var sidebarClass = $('#sidebar').attr('class');
//   var contentClass = $('#content').attr('class');

//   if(sidebarClass == "hidden" && contentClass == "closed") {
//     $('#sidebar').removeClass('hidden').addClass('visible');
//     $('#content').removeClass('closed').addClass('open');
//   } else {
//     $('#sidebar').removeClass('visible').addClass('hidden');
//     $('#content').removeClass('open').addClass('closed');
//   }
// }

// //Clear the search bar
// function clearVal(x) {
//   if(x.value == "Enter keyword here...") {
//     x.value = '';
//   } else if(x.value == "") {
//     x.value = 'Enter keyword here...';
//   }
// }
//


  
  //Submit search with return key
  // $("#searchform").keypress( function(e) {
  //   if(e.which == 13) {
  //     getVal();
  //     return false;
  //   }
  // });

  var token_id = "326971560.8f90a0a.cc2a338121584e6d80a25400c2257d5f";
  var count    = 5;

  $.ajax({
      type: "GET",
      dataType: "jsonp",
      cache: false,
      async: false,
      url: "https://api.instagram.com/v1/tags/cats/media/recent?count="+count+"&access_token="+token_id,
      success: function(data) {

          //Check if data actually has data
          if (typeof data.data != "undefined") {

              var newsFeed = {};

              for (var i = 0; i < data.data.length; i++) {

                  if ( typeof data.data[i].link != "undefined" ) {
                      var links = data.data[i].link;
                      var image = data.data[i].images.low_resolution.url;
                      var date  = data.data[i].created_time;
                      
                      //var instagram = new Array();
                      // var arr = ["object", "date", "link", "image"];
                      var arr = [ {"object":"instagram", "link": links, "image":image} ];

                      // arr.push({
                      //   object: 'instagram',
                      //   link: links,
                      //   image: image
                      // });

                      newsFeed[date] = arr;
                  }
              }
              //console.log(newsFeed);
              for (var key in newsFeed) {

                var obj = newsFeed[key];

                for (var prop in obj) {
                  // var object = obj[i]['object'];
                  // var link   = obj[i]['link'];
                  // var image  = obj[i]['image'];

                  console.log(prop);
                }
                console.log(key);
                // alert(obj['']);

                // for(var i = 0; i < obj.length; i++){
                //   var image = obj[i]['image'];
                //   $(".socialFeedArea").append('<li class="socialItem small instagram"><img src="' + image + '" /></a></li>');
                //   console.log(item);
                // }

                // console.log(obj);
                // if(newsFeed.hasOwnProperty(item)) {
                //   //alert(item['link']);
                //   for(var obj in item) {
                //       console.log(obj);
                //   }
                //   //var image = newsFeed[i]['image'];
                //   //$(".socialFeedArea").append('<li class="socialItem small instagram"><img src="' + image + '" /></a></li>');
                // }
              }

              // console.log(data.data);
              //console.log(newsFeed);

          } else {
              //It instagram has an error
              var error = data.meta.error_message;
              alert(error);
          }
      }
  });

  //Api Stuff
  // var fburl = "http://graph.facebook.com/m0g13y?callback=?"

  // $.getJSON(fburl, function(data){

  //      //console.log(data);

  //      var name = data["name"];
  //      $("#feed").append("<h3>" + name + "</h3>");
    
  // });