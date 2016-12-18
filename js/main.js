function Dom(el){
     this.dom = document.querySelectorAll(el);
}
  Dom.prototype = {
    constructor : Dom,
    map : function(cb){
      [].map.call(this.dom,cb);
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


function $(el){
  return document.querySelectorAll(el);
}
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



  var backTop = new Dom('#backTop');
  var toggleNav = new Dom('.toggle-nav');
  var nav = new Dom('nav'); 
  var code = new Dom('pre code');
  var tags = new Dom('.tags a');
  var dirs = new Dom('article h3'); 
  var dirPanel = $('.sidebar-inner .post-dir')[0];
  var infoPanel = $('.sidebar-inner .info')[0];
  var tab = new Dom('.sidebar-inner .tabs a');
   function addElementA(v) { 
  　　　　var a = document.createElement("a"); 
  　　　　a.setAttribute("href","#"+v); 
  　　　　a.innerHTML = i+". "+v;
        i++; 
        return a;
  　}
 
  if(dirPanel!=null){
     var i=1;
    dirs.map(function(e){
      e.id=e.innerHTML;
      dirPanel.appendChild(addElementA(e.innerHTML));
    });

    var dirA=$('.sidebar-inner .post-dir a');

    [].map.call(dirA,function(e){
      e.onclick = function(){
        [].map.call(dirA,function(e1){ 
          removeClass(e1,'active');
        })
        addClass(e,'active'); 
      }
    })

    tab.dom[0].onclick = function(){ 
      if(style(dirPanel,'opacity') == 0)
        tab.toggleClass('active');
      dirPanel.style.opacity = 1;  
      infoPanel.style.opacity = 0;
    }
    tab.dom[1].onclick = function(){
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


  var li = new Dom('nav li');
      navH = li.dom.length*39+"px"; 
  toggleNav.click(function(){
      if(nav.dom[0].style.height==navH)
        nav.dom[0].style.height=0;
      else 
        nav.dom[0].style.height=navH;
      nav.toggleClass('show');
  });
    window.onscroll=function(){
      if(window.scrollY>800)
        backTop.removeClass('hide');
      else backTop.addClass('hide');

      if(dirPanel!=null){
        if(window.scrollY>$('.sidebar-inner')[0].offsetTop){
          $('.sidebar-inner')[0].style.cssText="position:fixed;top:0";
        }else{
          $('.sidebar-inner')[0].style.cssText="";
        }
         dirs.map(function(e,i){
          if(window.scrollY>e.offsetTop){
            [].map.call(dirA,function(e){ 
              removeClass(e,'active');
            }) 
            addClass(dirA[i],'active'); 
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


})();