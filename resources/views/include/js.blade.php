<!-- jQuery -->
<script src="{{URL('client/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{URL('client/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL('client/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{URL('client/js/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{URL('client/js/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{URL('client/js/jquery.countTo.js')}}"></script>

<!-- Stellar -->
<script src="{{URL('client/js/jquery.stellar.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{URL('client/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{URL('client/js/magnific-popup-options.js')}}"></script>

<!-- Main -->
<script src="{{URL('client/js/main.js')}}"></script>
<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
