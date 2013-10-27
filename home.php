<a class="forkMe" href="http://github.com/silvestreh/onScreen/fork"><i class="fa fa-github"></i>Fork me</a>
<section class="desc">
  <div class="wrapper">
    <h1>.onScreen();</h1>
    <p>A jQuery plugin that does stuff to elements when they enter or leave the viewport</p>
    <a href="https://github.com/silvestreh/onScreen/archive/master.zip" class="button"><i class="fa fa-download"></i>Download</a>
  </div>
  <i class="fa fa-chevron-down scrollHint"></i>
</section>
<section class="demos">
  <h1>Demos</h1>
  <div class="col append">
    <a href="?demo=appenditems">
      <i class="fa fa-plus"></i>
      <span>Append new items when you reach the footer</span>
    </a>
  </div>
  <div class="col lazy">
    <a href="?demo=lazy">
      <i class="fa fa-picture-o"></i>
      <span>Lazy load for images</span>
    </a>
  </div>
  <div class="col horiz">
    <a href="?demo=horizontal">
      <i class="fa fa-resize-horizontal"></i>
      <span>Append new items while scrolling horizontally</span>
    </a>
  </div>
</section>
<section class="usage">
  <i class="fa fa-question-circle iconHowto"></i>
  <h1>How to use</h1>
  <h2>Basic usage</h2>
  <p>The basic form <code>$('element').onScreen();</code> will only toggle the <code>onScreen</code> class on the matched elements. This is optimal for CSS animations, like the demos section above. <i class="fa fa-smile-o"></i></p>
  <p>You can set the <code>tolerance</code> parameter and allow the elements to enter the viewport certain amount of pixels before doing anything.</p>
  <h2>A lil' bit more complex...</h2>
  <p><code>onScreen()</code> also has two methods called <code>doIn()</code> and, obviously, <code>doOut()</code> that will execute when the matched elements enter and leave the viewport. It's pretty straight forward. Here's a full example with all the parameters:</p>
  <pre class="prettyprint">$('elements').onScreen({
  direction: 'vertical',
  doIn: function() {
   // Do something to the matched elements as they come in
  },
  doOut: function() {
   // Do something to the matched elements as they get off screen
  },
  tolerance: 0,
  toggleClass: true,
  lazyAttr: null,
  lazyPlaceholder: 'someImage.jpg'
});</pre>
  <p><code>onScreen()</code> can work as a lazy loader for your images, that way you can minimize unnecessary <code>http</code> requests of content that isn't even visible. To enable it, all you have to do is set the <code>lazyAttr</code> parameter and <code>onScreen()</code> will look for that attribute on <code>img</code> tags and then set its value as the <code>src</code> attribute once the image enters the viewport.</p>
</section>

<script type="text/javascript">
  function vAlignDesc() {
    var descHeight = $('section.desc').height();
    var wrapperHeight = $('section.desc div.wrapper').height();
    
    $('section.desc div.wrapper').css({
      top: (descHeight/2) - (wrapperHeight/2)
    });
  }
  
  $(function() {
    
    $('section.demos').onScreen({
      tolerance: 200,
      toggleClass: false,
      doIn: function() {
        $(this).addClass('onScreen')
      }
    });
    
    vAlignDesc();
    
  });
  
  $(window).resize(function(){
    vAlignDesc()
  });
  
  $(window).scroll(function(){
    var pos = $(window).scrollTop();

    $('section.desc i.scrollHint').css('opacity',1 - (pos/200))
  });
  
</script>