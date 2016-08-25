<script>
    window.onscroll = function() {init()};
    function init() {
        var navbar = document.getElementById("elitenavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
        }
    }
</script>