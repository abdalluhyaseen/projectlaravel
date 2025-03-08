 @include("dashbord.include.top")




    <div class="container-scroller">
 @include("dashbord.include.sidbar")

      <div class="container-fluid page-body-wrapper">







 @include("dashbord.include.nav")

        <div class="main-panel">





  @yield("content")











 @include("dashbord.include.footer")

        </div>
      </div>
    </div>










 @include("dashbord.include.bottom")


