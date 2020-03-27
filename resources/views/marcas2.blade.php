<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>

<style type="text/css">
  body {
  font-family: "Century Gothic", 'Lato', sans-serif;
}

a {
  text-decoration: none;
}

.et-hero-tabs{
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
          flex-direction: column;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  height: 50vh;
  position: relative;
  text-align: center;
  padding: 0 2em;
}
.et-slide {
  height: 100vh;
}

.et-hero-tabs-container {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 70px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  background: #fff;
  z-index: 10;
}
.et-hero-tabs-container--top {
  position: fixed;
  top: 0;
}

.et-hero-tab {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-flex: 1;
          flex: 1;
  color: #000;
  letter-spacing: 0.1rem;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  font-size: 0.8rem;
}
.et-hero-tab:hover {
  color: white;
  background: rgba(102, 177, 241, 0.8);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

.et-hero-tab-slider {
  position: absolute;
  bottom: 0;
  width: 0;
  height: 6px;
  background: #66B1F1;
  -webkit-transition: left 0.3s ease;
  transition: left 0.3s ease;
}

@media (min-width: 800px) {
  .et-hero-tabs h1,
  .et-slide h1 {
    font-size: 3rem;
  }
  .et-hero-tabs h3,
  .et-slide h3 {
    font-size: 1rem;
  }

  .et-hero-tab {
    font-size: 1rem;
  }
}
</style>


<!--JQUERY-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript">
  class StickyNavigation {
  
  constructor() {
    this.currentId = null;
    this.currentTab = null;
    this.tabContainerHeight = 70;
    let self = this;
    $('.et-hero-tab').click(function() { 
      self.onTabClick(event, $(this)); 
    });
    $(window).scroll(() => { this.onScroll(); });
    $(window).resize(() => { this.onResize(); });
  }
  
  onTabClick(event, element) {
    event.preventDefault();
    let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
    $('html, body').animate({ scrollTop: scrollTop }, 600);
  }
  
  onScroll() {
    this.checkTabContainerPosition();
    this.findCurrentTabSelector();
  }
  
  onResize() {
    if(this.currentId) {
      this.setSliderCss();
    }
  }
  
  checkTabContainerPosition() {
    let offset = $('.et-hero-tabs').offset().top + $('.et-hero-tabs').height() - this.tabContainerHeight;
    if($(window).scrollTop() > offset) {
      $('.et-hero-tabs-container').addClass('et-hero-tabs-container--top');
    } 
    else {
      $('.et-hero-tabs-container').removeClass('et-hero-tabs-container--top');
    }
  }
  
  findCurrentTabSelector(element) {
    let newCurrentId;
    let newCurrentTab;
    let self = this;
    $('.et-hero-tab').each(function() {
      let id = $(this).attr('href');
      let offsetTop = $(id).offset().top - self.tabContainerHeight;
      let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
      if($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
        newCurrentId = id;
        newCurrentTab = $(this);
      }
    });
    if(this.currentId != newCurrentId || this.currentId === null) {
      this.currentId = newCurrentId;
      this.currentTab = newCurrentTab;
      this.setSliderCss();
    }
  }
  
  setSliderCss() {
    let width = 0;
    let left = 0;
    if(this.currentTab) {
      width = this.currentTab.css('width');
      left = this.currentTab.offset().left;
    }
    $('.et-hero-tab-slider').css('width', width);
    $('.et-hero-tab-slider').css('left', left);
  }
  
}

new StickyNavigation();
</script>
</head>
<body>
  <!-- Hero -->
  <section class="et-hero-tabs">
    <h1>STI</h1>
    <div class="et-hero-tabs-container">
      <a class="et-hero-tab" href="#tab-es6">ES6</a>
      <a class="et-hero-tab" href="#tab-flexbox">Flexbox</a>
      <a class="et-hero-tab" href="#tab-react">React</a>
      <a class="et-hero-tab" href="#tab-angular">Angular</a>
      <a class="et-hero-tab" href="#tab-other">Other</a>
      <span class="et-hero-tab-slider"></span>
    </div>
  </section>

  <!-- Main -->
  <main class="et-main">
    <section class="et-slide" id="tab-es6">
      <h1>ES6</h1>
      <h3>something about es6</h3>
    </section>
    <section class="et-slide" id="tab-flexbox">
      <h1>Flexbox</h1>
      <h3>something about flexbox</h3>
    </section>
    <section class="et-slide" id="tab-react">
      <h1>React</h1>
      <h3>something about react</h3>
    </section>
    <section class="et-slide" id="tab-angular">
      <h1>Angular</h1>
      <h3>something about angular</h3>
    </section>
    <section class="et-slide" id="tab-other">
      <h1>Other</h1>
      <h3>something about other</h3>
    </section>
  </main>
</body>
</html>