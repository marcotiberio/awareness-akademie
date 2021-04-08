function Blob(options){
  options = options || {};
  this.nameSpaces = {
      wrapper: options.wrapper || '.blob',
      layers: options.layers || '.blob-layer',
      deep: options.deep || 'data-blob-deep'
  };
  this.init = function() {
      var self = this,
          parallaxWrappers = document.querySelectorAll(this.nameSpaces.wrapper);
      for(var i = 0; i < parallaxWrappers.length; i++){
    (function(i){
      parallaxWrappers[i].addEventListener('mousemove', function(e){
        var x = e.clientX,
          y = e.clientY,
          layers = parallaxWrappers[i].querySelectorAll(self.nameSpaces.layers);
        for(var j = 0; j < layers.length; j++){
          (function(j){
            var deep = layers[j].getAttribute(self.nameSpaces.deep),
                disallow = layers[j].getAttribute('data-blob-disallow'),
                itemX = (disallow && disallow === 'x') ? 0 : x / deep,
                itemY = (disallow && disallow === 'y') ? 0 : y / deep;
                if(disallow && disallow === 'both') return;
                layers[j].style.transform = 'translateX(' + itemX + '%) translateY(' + itemY + '%)';
          })(j);  
        }
      })
    })(i);
      }
  };
  this.init();
  return this;
}

window.addEventListener('load', function(){
  new Blob();
});

function mouseMove(e) {
  let target = e.target.closest("a"),
      targetData = target.getBoundingClientRect(),
      targetIcon = target.querySelector("i"),
      offset = {
          x: ((e.pageX - (targetData.left + targetData.width / 2)) / 4) * -1,
          y: ((e.pageY - (targetData.top + targetData.height / 2)) / 4) * -1
      };
  target.style.transform = "translate(" + offset.x + "px," + offset.y + "px) scale(" + 1.1 + ")";
  target.style.webkitTransform = "translate(" + offset.x + "px," + offset.y + "px) scale(" + 1.1 + ")";
}