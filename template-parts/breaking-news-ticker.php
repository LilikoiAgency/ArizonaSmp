<style>
        .red-call-out{
            color: white;
            background-color: #CE0009;
            border-left: solid 5px white;
            border-right: solid 5px white;
            margin-bottom: 0px;
            padding: 2px 5px 2px 5px;
            font-weight: 600;
            margin-top: 0px;
        }
        .topOffer {
            font-family: "Barlow";
            background-color: #0B4E97;
            height: fit-content;
            color: white;
            margin-bottom: 0px;
            width: 100vw;
            position: relative;
            font-size: 18px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            box-shadow: 0px 2px 7px -2px rgb(0 0 0 / 40%);
        }

        .ticker-container {
            text-align: center;
            overflow: hidden;
            width: 60%;
            background-color: #0B4E97;

        }

        .ticker-wrapper {
            width: 100%;
            padding-left: 100%;
            background-color: transparent;
        }

        @keyframes ticker {
            0% {
                transform: translate3d(0, 0, 0);
            }

            100% {
                transform: translate3d(-100%, 0, 0);
            }
        }

        .ticker-transition {
            display: inline-block;
            white-space: nowrap;
            padding-right: 100%;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            animation-name: ticker;
            animation-duration: 45s;
        }

        .ticker-transition:hover {
            animation-play-state: paused;
            cursor: pointer;
        }

        .ticker-item {
            display: inline-block;
            padding: 0 2rem;
        }

        #content.with-banner {
            padding-top: 117px !important;
        }

        .site-header {

            width: 100%;
            z-index: 600;
            max-height: 114px;
            /* overflow: hidden; */
        }
        .learn-more-ticker-link{
            color: white !important;
            text-decoration: underline !important;
            font-weight: bold !important;
        }

        @media (max-width: 600px) {
            .ticker-container{
                width: 50% !important;
            }
            .ticker-transition {
            animation-duration: 45s !important;
            }
            #content.with-banner {
            padding-top: 80px !important;
            }

            .red-call-out{
                width: 50%;
                border-left: none;
                font-size: 12px !important;
                padding: 0px;
                padding-left: 5px;
                padding-right: 5px;
                line-height: 2;
                margin-bottom: 0px !important;
            }
           
        }

    </style>
    <div class="text-center topOffer d-flex justify-content-center">
        <p class="red-call-out" role="none">LOCAL & VETERAN OWNED</p>
        <div class="ticker-container  <?php if(!wp_is_mobile()): echo 'w-50'; endif; ?>">
            <div class="ticker-wrapper">
                <div class="ticker-transition">
                    <div class="ticker-item"><a class="learn-more-ticker-link" href="/solar-panels/"> <strong> HUGE SAVINGS: CUT YOUR ELECTRIC BILL UP TO HALF! </strong></a></div>
					<div class="ticker-item"><a class="learn-more-ticker-link" href="/locations/phoenix-az/phoenix-solar-power/"><strong> Are you in Phoenix? Go solar with the best solar company in Phoenix! </strong></a></div>
					<div class="ticker-item"><a class="learn-more-ticker-link" href="/solar-panels/"><strong> HUGE SAVINGS: CUT YOUR ELECTRIC BILL UP TO HALF! </strong></a></div>
					<div class="ticker-item"><a class="learn-more-ticker-link" href="/about-arizona-solar-panels/"> <strong> Go solar with one of the best solar companies in Arizona!</strong></a></div>
                    <div class="ticker-item"><strong>BREAKING NEWS!</strong> <a class="learn-more-ticker-link" href="/battery-storage/tesla-powerwall/"> Tesla Powerwall in stock! | Order now click here </a></div>
                </div>
            </div>
        </div>
    </div>
