<!DOCTYPE html>
<html lang="en">

<?php include('templets/header.php'); ?>

<h1 class="title">Initial Control panel</h1>
    <div class="box">
        <form  method="POST">

            <button class="button button1" type="submit" name="forword"><svg>
                    <text x="-32" y="60" font-size="80px" fill="blue" text-anchor="middle" style=" transform: rotate(-90deg);">&#10162;</text>
                </svg> </button>
            <br>
            <button class="button button2" type="submit" name="L"><svg>
                    <text x="-32" y="-6" font-size="80px" fill="blue" text-anchor="middle" style=" transform: rotate(-180deg);">&#10162;</text>
                </svg></button>
            <button class="button button3" type="submit" name="stop"><svg>
                    <text class="button" x="33" y="40" stroke="" fill="white" text-anchor="middle" font-size="20px">
                        STOP</text></svg> </button>
            <button class="button button4" type="submit" name="R"><svg><text x="32" y="63" font-size="84px" fill="blue" text-anchor="middle">&#10162;</text></svg></button>
            <br>
            <button class="button button5" type="submit" name="backword"><svg><text x="33" y="-3" font-size="84px" fill="blue" text-anchor="middle" style=" transform: rotate(90deg);">&#10162;</text></svg></button>

              
        </form>
      
    </div>

 <script>
  window.watsonAssistantChatOptions = {
      integrationID: "640899c8-1ce2-4ae4-902a-6a1659a3a1f0", // The ID of this integration.
      region: "eu-de", // The region your integration is hosted in.
      serviceInstanceID: "2943ab48-8f7d-4adf-ae08-2b216d9b6bef", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
<?php

    include('conn.php');
    
$state = null;
if (isset($_POST['forword']))
  $state = 'forword';
elseif (isset($_POST['L']))
  $state = 'L';
elseif (isset($_POST['stop']))
  $state = 'stop';
elseif (isset($_POST['R']))
  $state = 'R';
elseif (isset($_POST['backword']))
  $state = 'backword';



if(isset($_POST[$state])){
$sql = "INSERT INTO manual_control ($state) VALUES('$state')";
$result = mysqli_query($connect, $sql);
if (!$result)
  die('error in insert query');

}



?>
<div>


 </div>


<?php include('templets/footer.php'); ?>

</html>
