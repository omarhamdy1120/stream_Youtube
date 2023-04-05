
<!DOCTYPE html>
<html>
  <head>
    <title>Embed YouTube</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
  <div class="container">
    <div class="video-wrapper">
      <span id="player"></span>
    </div>
    <div id="message" style="display: none;">
      <h1>Live stream has ended!</h1>
      <p>Subscribe to our channel to be notified of future live streams</p>
      <div class="g-ytsubscribe" data-channelid="XXXXXXXXXXXXX" data-layout="full" data-count="hidden"></div>
    </div>
    <div class="chat-wrapper">
      <iframe id="chat" src="" frameborder="0"></iframe>
    </div>
    
  </div>
  <script src="https://apis.google.com/js/platform.js"></script>
  <script src="script.js"></script>
  </body>



</html>
