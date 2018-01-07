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
    var h = document.body.scrollHeight - document.body.clientHeight;
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
    $('.depth-8').children('.children').find('.reply').click(function(){ //class=".depth-8"子元素class=".children"下的class=".reply"的点击事件，注意：模板不同HTML结构可能不同，需调整！
        var rid= $(this).parent().attr("id"); //取得所回复的评论id，可能需要调整！
        var rna= $(this).next().text(); //取得所回复的评论用户名，可能需要调整！
        $("#comment").attr("value","<a href='#"+rid+"'>@"+rna+"</a> ").focus(); //在输入框添加"@用户名"和链接

    });

    $('#cancel-comment-reply-link').click(function() {
        $("#comment").attr("value",''); //点击取消回复时清空输入框
    });
})
