@include('admin.head', ['title' => $title])
<div class="wrapper">
  @include('admin.header')
  @include('admin.sidebar')
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{$title}}</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  @include('admin.footer')
</div>
</body>
</html>