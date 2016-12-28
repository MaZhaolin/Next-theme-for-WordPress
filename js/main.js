var
$ = function(el){
  return new $.fn.init(el);
}

$.fn=$.prototype = {
    constructor :$,
    __proto__ : [],
    init : function(el){
      var elements=document.querySelectorAll(el);
      for (var i = 0; i < elements.length; i++) {
        elements[i].prototype=$.fn;
        this.push(elements[i]);
      }
    },
    click : function(cb){
        this.map(function(v){
          v.onclick = cb;
        })
    },
    addClass : function(className){
      this.map(function(v){
        var classNames = v.className.split(' ');
            index = classNames.indexOf(className);
        if(index < 0)
          classNames.push(className);
        v.className=classNames.join(' ');
      })
    },
    removeClass : function(className){
      this.map(function(v){
        var classNames = v.className.split(' ');
            index = classNames.indexOf(className);
        if(index >= 0)
          classNames.splice(index,1);
        v.className=classNames.join(' ');
      })
    },
    toggleClass : function(className){
      this.map(function(v){
        var classNames = v.className.split(' ');
            index = classNames.indexOf(className);
        if(index < 0){
          classNames.push(className);
        }else{
          classNames.splice(index,1);
        }
        v.className=classNames.join(' ');
      })
    },
    toggle : function(){
      this.map(function(v){
        var display=v.style.display;
        if(display == 'none')
          v.style.display = "inline-block";
        else v.style.display = "none";
      })
    },
    show : function(){
        this.map(function(v){
          v.style.display = "inline-block";
        })
    },
    hide : function(){
      this.map(function(v){
        v.style.display = "none";
      })
    },
    css : function(property,value){
      this.map(function(v){
        v.style.setProperty(property,value);
      })
    }
  }

$.fn.init.prototype=$.fn;

addClass = function(v,className){
    var classNames = v.className.split(' ');
        index = classNames.indexOf(className);
    if(index < 0)
      classNames.push(className);
    v.className=classNames.join(' ');
}

removeClass = function(v,className){
    var classNames = v.className.split(' ');
        index = classNames.indexOf(className);
    if(index >= 0)
      classNames.splice(index,1);
    v.className=classNames.join(' ');
}


 function style(element,attr) {
  if(typeof window.getComputedStyle!='undefined'){
          //如果支持W3C，使用getComputedStyle来获取样式
          return  parseInt(window.getComputedStyle(element,null)[attr]);
      }else if(element.currentStyle){
        return  parseInt(element.currentStyle[attr]);
      }
 }
window.onload=(function(){

  var backTop = $('#backTop');
  var toggleNav = $('.toggle-nav');
  var nav = $('nav');
  var code = $('pre code');
  var tags = $('.tags a');
  var dirs = $('article h3');
  var dirPanel = $('.sidebar-inner .post-dir')[0];
  var infoPanel = $('.sidebar-inner .info')[0];
  var tab = $('.sidebar-inner .tabs a');

  if(dirPanel!=null){

    tab[0].onclick = function(){
      if(style(dirPanel,'opacity') == 0)
        tab.toggleClass('active');
      dirPanel.style.opacity = 1;
      infoPanel.style.opacity = 0;
    }
    tab[1].onclick = function(){
      if(style(dirPanel,'opacity') == 1)
        tab.toggleClass('active');
      dirPanel.style.opacity = 0;
      infoPanel.style.opacity = 1;
    }
  }



  tags.map(function(e){
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

  code.map(function( block,i) {
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
    window.onscroll=function(){
      if(window.scrollY>800)
        backTop.removeClass('hide');
      else backTop.addClass('hide');

      if (typeof dirPanel != "undefined" || dirPanel != null){
        if(window.scrollY>$('.sidebar-inner')[0].offsetTop){
          $('.sidebar-inner')[0].style.cssText="position:fixed;top:0";
        }else{
          $('.sidebar-inner')[0].style.cssText="";
        }
        $('article h2').map(function(e){
          if(window.scrollY >= e.offsetTop){
            $('.level-1').removeClass('active');
            addClass($('a[href="#' + e.id + '"]')[0].parentNode, 'active');
          }
        })
        $('article h3').map(function(e){
          if(window.scrollY >= e.offsetTop){
            $('.level-2').removeClass('active');
            addClass($('a[href="#' + e.id + '"]')[0].parentNode, 'active');
          }
        })
      }


  }
  var isScroll=false;
   backTop.click(function(){
     if(!isScroll){
       isScroll=true;
       var scrollY=window.scrollY;
       var t=setInterval(function(){
         window.scrollTo(0,scrollY);
         scrollY-=30;
         if(scrollY<0){
           clearInterval(t);
           isScroll=false;
         }
       },1)
     }
   });



if (typeof dirPanel != "undefined" || dirPanel != null)
(function(){
    var
    args = arguments,
    list = $(args[1]),
    init = function(){
        var dirs = getDir();
        show(dirs, $(args[0])[0]);
    },
    getDir = function(){
        var length = list.length - 1,
             i = length,
             dirs = [],
             e;
        for (; i >= 0; i--) {
            e = list[i];
            e.id  = e.innerHTML;
            dirs [i] = [];
            $(args[1] + '[id="' + e.innerHTML + '"]~' + args[2]).map(function(e){
                if(i != length && dirs [i + 1].lastIndexOf(e.innerHTML) != -1) return ;
                e.id = e.innerHTML;
                dirs [i].push(e.innerHTML);
            })
        }
        return dirs;
    },
   show = function(dirs, dirsPanel){
        var parents = createElement('ol');
        dirsPanel.appendChild(parents);
        dirs.map(function(v,i){
            var name, className;
            if(typeof v == "object"){
                name = list[i].innerHTML;
                className = 'level-1';
            }else {
                name = v;
                className = 'level-2';
            }
            var child = createElement('li',{'class' : className});
                 childA = createElement('a', {'href' : '#' + name});
            childA.innerHTML = name;
            child.appendChild(childA);
            parents.appendChild(child);
            if(typeof v == "object"){
                show(v, child);
            }
        })
    },
    createElement = function(tagName, attr) {
        var a = document.createElement(tagName);
        if(typeof attr !== "undefined"){
            for(var i in attr){
                a.setAttribute(i,attr[i]);
            }
        }
        return a;
  　};
    return {
        init: init
    }
})('.sidebar-inner .post-dir','article h2','h3').init();

$('.level-1').click(function(){
    $('.level-1').removeClass('active');
    addClass(this, 'active');
})
$('.level-2').click(function(){
    $('.level-2').removeClass('active');
    addClass(this, 'active');
})

})();
