<!DOCTYPE html>
<html>
@include('include/css')
<body>
<div id="page">
@include('include/header')

@yield('content')
@include('include/footer')
</div>
@include('include/js')

</body>
</html>
