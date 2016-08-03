<header class="w3-top w3-card-4" >
    <div class="edc-header-img " id="elite-header">
        <div class="w3-display-topleft w3-margin-left w3-text-white">
            <div class="w3-jumbo w3-hide-small ">elite dental care</div>
            <div class="w3-large w3-hide-large">elite dental care</div>
            <div class="w3-small">#14, JS Complex, Ist Floor, (Next to Vibgyor High School), Jayanthi Nagar Main Road, Raghavendra Circle, Horamavu,  Bangalore-560016</div>
            <div class="w3-small ">
                <span class="w3-margin-right w3-tag w3-blue"><i class="fa fa-phone-square" aria-hidden="true"></i> &nbsp; +91 99-720-42551    </span>
                <span class="w3-tag w3-red"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;care@elitedentalcare.co.in</span>
            </div>
        </div>
    </div>
</header>

<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var divheader = document.querySelector("#elite-header") ;
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 200,
                    header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                header.classList.add("smaller") ;
                divheader.classList.add("edc-content-smaller") ;
                divheader.classList.remove("edc-header-img") ;
            } else {
                header.classList.remove("smaller")
                divheader.classList.remove("edc-content-smaller") ;
                divheader.classList.add("edc-header-img") ;
            }
        });
    }
    window.onload = init();
</script>