<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coastline Website</title>

    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Css link -->
     <link rel="stylesheet" href="asset/css/style.css">
     
     <!-- favicon icon -->
     <link rel="icon" type="image/x-icon" href="asset/image/logo-rbg.png">

     <!-- font awesome cdn -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

       <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <head>
    <!-- Include Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3PxeVh53VI2C7aeTW1LEsP0L9BMX05T2YYxCNhIab6VflJ0dXvcf5dFkVpNUKaCm7/oq/oxkTff3d4LuulHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-p16e02+c4W7Mi09NuoGfYwD5+59rGJ7m4DfWJAFo1YemRqfdb1U9K07fdS2UE3OAKtA5b33PjJ5uZ7/7+b5gGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

    
</head>


<script>
    // Script for change title dynamically when user on different website

  window.onload = function() {

  var pageTitle = document.title;
  var attentionMessage = '*Come Back!';
  var blinkEvent = null;

  document.addEventListener('visibilitychange', function(e) {
    var isPageActive = !document.hidden;

    if(!isPageActive){
      blink();
    }else {
      document.title = pageTitle;
      clearInterval(blinkEvent);
    }
  });

  function blink(){
    blinkEvent = setInterval(function() {
      if(document.title === attentionMessage){
        document.title = pageTitle;
      }else {
        document.title = attentionMessage;
      }
    }, 100);
  }
};
</script>


