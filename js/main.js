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

window.onload=(function(){

  var backTop = new Dom('#backTop');
  var toggleNav = new Dom('.toggle-nav');
  var nav = new Dom('nav'); 
  var code=new Dom('pre code');
  var tags=new Dom('.tags a');

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

  toggleNav.click(function(){ 
      nav.toggleClass('show');
  });
  	window.onscroll=function(){
  		if(window.scrollY>800)
  			backTop.removeClass('hide');
  		else backTop.addClass('hide');
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