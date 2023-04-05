 // Replace YOUR_API_KEY with your YouTube API key
 var API_KEY = 'AIzaSyDYYDLRjZuiH-yOftuD55fnqshhCp84EnA';

 // Replace YOUR_CHANNEL_ID with the ID of the YouTube channel you want to retrieve the live stream for
 var CHANNEL_ID = 'UCDF8swGFhmIOm0PY_iGopaA';
 
 
 // Retrieve the latest active live stream for the channel
 fetch(`https://www.googleapis.com/youtube/v3/search?part=id&channelId=${CHANNEL_ID}&eventType=live&type=video&key=${API_KEY}`)
   .then(response => response.json())
   .then(data => {
     // Check if there are any active live streams for the channel
     if (data.items && data.items.length > 0) {
       // Get the video ID of the latest active live stream
       var videoId = data.items[0].id.videoId;
 
       // Embed the live stream on the webpage
       document.getElementById('player').innerHTML = `
         <iframe src="https://www.youtube.com/embed/${videoId}?autoplay=0" frameborder="0" allowfullscreen></iframe>
       `;
 
       // Embed the chat on the webpage
       var chatUrl = `https://www.youtube.com/live_chat?v=${videoId}&embed_domain=localhost`;
       document.getElementById('chat').setAttribute('src', chatUrl);

 // Check if the live stream has ended
 fetch(`https://www.googleapis.com/youtube/v3/videos?part=liveStreamingDetails&id=${videoId}&key=${API_KEY}`)
             .then(response => response.json())
             .then(data => {
               if (data.items && data.items.length > 0) {
                 var liveDetails = data.items[0].liveStreamingDetails;
                 if (liveDetails.actualEndTime) {
                   // Show the live stream ended message
                   document.querySelector('.ended-message').style.display = 'block';
                }
               }
            })
             .catch(error => {
               console.error(error);
            });
 
        } else {
           // Handle the case where there are no active live streams for the channel
           console.error('No active live streams found for the channel.');
           document.getElementById("message").style.display = "block";
 
        }
       })
       .catch(error => {
         console.error(error);
       });
   