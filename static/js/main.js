window.onload=(function(){
  $("img").lazyload({
      threshold : 200,
      effect:"fadeIn"
  });
  $("a.fancybox").fancybox();   
  var backTop = $('#backTop');
  var toggleNav = $('.toggle-nav');
  var nav = $('nav');
  var code = $('pre code');
  var tags = $('.tags a');
  var dirs = $('article h3');
  var dirPanel = $('.sidebar-inner .post-dir');
  var infoPanel = $('.sidebar-inner .info');
  var tab = $('.sidebar-inner .tabs a');

  if (dirPanel.length != 0){
    $(tab[0]).click(function(){
        tab.toggleClass('active');
        infoPanel.slideToggle('fast',function(){
            dirPanel.slideToggle()
        });
    })
    $(tab[1]).click(function(){
        tab.toggleClass('active');
        dirPanel.slideToggle('fast',function(){
            infoPanel.slideToggle()
        });
    })

    $('article .content').catalog({'box':'.post-dir'})
    if (!navigator.userAgent.match(/mobile/i)) {
      setTimeout(function(){
        toggleSidebar()
      },1000)
    }
  }



  tags.map(function(i,e){
    var fontSize=parseInt(e.style.fontSize);
    if(fontSize>10)
        e.style.color="#999";
    if(fontSize>13)
        e.style.color="#888";
    if(fontSize>16)
        e.style.color="#777";
    if(fontSize>19)
        e.style.color="#555";
    if(fontSize>22)
        e.style.color="#111";

    switch(fontSize) {
      case 10:
        break;
      case 10:
         e.style.color="#ccc";
        break;
      case 10:
         e.style.color="#ccc";
        break;
      case 22:
         e.style.color="#111";
        break;
    }
  })

  code.map(function(i, block) {
    hljs.highlightBlock(block);
  });


  var li = $('nav li');
      navH = li.length*39+"px";
  toggleNav.click(function(){
      if(nav[0].style.height==navH)
        nav[0].style.height=0;
      else
        nav[0].style.height=navH;
      nav.toggleClass('show');
  });

  function windowScroll() {
    if(window.scrollY>800)
        backTop.removeClass('hide');
      else backTop.addClass('hide');

      if (dirPanel.length != 0){
        if(window.scrollY>$('.sidebar-inner')[0].offsetTop){
          $('.sidebar-inner')[0].style.cssText="position:fixed;top:0";
        }else{
          $('.sidebar-inner')[0].style.cssText="";
        }
      }
  }
    windowScroll();
    $(window).scroll(windowScroll);
   backTop.click(function(){
     $('body,html').animate({
            scrollTop: 0
        });
   });

   function toggleSidebar(){
      $('#sidebar-toggle').toggleClass('active');
      $('.sidebar .sidebar-inner').toggleClass('active')
      $('.main').toggleClass('active')
   }

   $('#sidebar-toggle').click(toggleSidebar)
})
