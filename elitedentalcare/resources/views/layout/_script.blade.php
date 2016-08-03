<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var divheader = document.querySelector("#elite-header") ;
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 200,
                    header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                header.classList.add("smaller") ;
                divheader.classList.remove("edc-header-img") ;
                divheader.classList.add("edc-content-smaller") ;
            } else {
                header.classList.remove("smaller") ;
                divheader.classList.remove("edc-content-smaller") ;
                if(!divheader.classList.contains("edc-header-img"))
                    divheader.classList.add("edc-header-img") ;
            }
        });
    }
</script>