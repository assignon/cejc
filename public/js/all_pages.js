window.addEventListener("load", function(){
   var home = document.getElementById('huis');
   var blog_img = document.getElementById('blog');
   blog_img.addEventListener("mouseover", function(){

     blog_img.src = "../../public/images/menu_icons/blog_hover.png";

   })

   blog_img.addEventListener("mouseout", function(){

     blog_img.src = "../../public/images/menu_icons/blog.png";

   })


   var events = document.getElementById('event');
   events.addEventListener("mouseover", function(){

     events.src = "../../public/images/menu_icons/events_hover.png";

   })

   events.addEventListener("mouseout", function(){

     events.src = "../../public/images/menu_icons/events.png";

   })


   var forum = document.getElementById('forum');
   forum.addEventListener("mouseover", function(){

     forum.src = "../../public/images/menu_icons/forum_hover.png";

   })

   forum.addEventListener("mouseout", function(){

     forum.src = "../../public/images/menu_icons/forum.png";

   })


   var contact = document.getElementById('contact');
   contact.addEventListener("mouseover", function(){

     contact.src = "../../public/images/menu_icons/contact_hover.png";

   })

   contact.addEventListener("mouseout", function(){

     contact.src = "../../public/images/menu_icons/contact.png";

   })


    var eng = document.getElementById('english');
    eng.addEventListener("mouseover", function(){

     eng.src = "../../public/images/menu_icons/eng_hover.png";

   })

    eng.addEventListener("mouseout", function(){

     eng.src = "../../public/images/menu_icons/eng.png";

   })


    var fr = document.getElementById('france');
    fr.addEventListener("mouseover", function(){

     fr.src = "../../public/images/menu_icons/fr_hover.png";

   })

    fr.addEventListener("mouseout", function(){

     fr.src = "../../public/images/menu_icons/fr.png";

   })

    var ned = document.getElementById('ned');
    ned.addEventListener("mouseover", function(){

     ned.src = "../../public/images/menu_icons/ned_hover.png";

   })

    ned.addEventListener("mouseout", function(){

     ned.src = "../../public/images/menu_icons/ned.png";

   })


   var face = document.getElementById('face');
   face.addEventListener("mouseover", function(){

    face.src = "../../public/images/menu_icons/facebook_hover.png";

  })

   face.addEventListener("mouseout", function(){

    face.src = "../../public/images/menu_icons/facebook.png";

  })


  var twitter = document.getElementById('twitter');
  twitter.addEventListener("mouseover", function(){

   twitter.src = "../../public/images/menu_icons/twitter_hover.png";

 })

  twitter.addEventListener("mouseout", function(){

   twitter.src = "../../public/images/menu_icons/twitter.png";

 })


 var mail = document.getElementById('mail');
 mail.addEventListener("mouseover", function(){

  mail.src = "../../public/images/menu_icons/mail_hover.png";

})

 mail.addEventListener("mouseout", function(){

  mail.src = "../../public/images/menu_icons/mail.png";

})

})
