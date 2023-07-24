<?php

$style = <<<STYLE
<style>
    #video_modal_background {
        display: none;
        z-index: 900;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .7);
        opacity: 0;
        -webkit-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    #video_modal_container {
        display: none;
        position: fixed;
        top: 0;
        max-width: 500px;
        padding: 20px;
        z-index: 999;
        -webkit-transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        -ms-transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        transform: translate(calc(50vw - 51.5%), calc(50vh - 52%));
        border-radius: 2px;
        font-family: sans-serif;
        color: #fff;
        -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, .5);
        box-shadow: 0 4px 8px rgba(0, 0, 0, .5);
        background-color: #004c97;
        background: #004c97;
        background: -o-linear-gradient(315deg, #004c97 0, #002951 100%);
        background: linear-gradient(135deg, #004c97 0, #002951 100%);
        opacity: 0;
        -webkit-transition: all .5s ease-in-out;
        -o-transition: all .5s ease-in-out;
        transition: all .5s ease-in-out
    }

    #video_modal_container #video_modal_close_x {
        position: absolute;
        top: 0;
        right: 10px;
        z-index: 900;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        color: #fff;
        font-size: 32px;
        cursor: pointer
    }

    .showVideo {
        display: block !important;
        opacity: 1 !important;
    }

    .play-video-btn {
        background-color: var(--semper-red);
        margin: -50px 0 10px 10px;
        max-width: 189px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .5);
        cursor: pointer;
    }
</style>
STYLE;
new Page_CSS($style);

function returnFAQsByCategory($category, $categories, $all_faqs, $max = 0)
{
    $faq_item_counter = 1;
    echo "<div class=\"accordion rounded\" id=\"faq_accordion_{$category}\"><h2 class=\"mt-5\">{$categories[$category]}</h2>";

    foreach ($all_faqs[$category] as $cat => $faq) :
        $show = ($faq_item_counter == 1) ? 'show' : '';
        $faq_number = $category . "_" . $faq_item_counter;

?>

        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?php echo $faq_number; ?>">
                <button class="accordion-button <?php echo ($faq_item_counter == 1) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_number; ?>" aria-expanded="true" aria-controls="collapse<?php echo $faq_number; ?>">
                    <strong><?php echo $faq['question']; ?></strong>
                </button>
            </h2>
            <div id="collapse<?php echo $faq_number; ?>" class="accordion-collapse collapse <?php echo $show ?>" aria-labelledby="heading<?php echo $faq_number; ?>" data-bs-parent="#faq_accordion_<?php echo $category; ?>">
                <div class="accordion-body">
                    <?php echo $faq["answer"] ?>
                </div>
                <?php

                if (isset($faq["video_id"]) && $faq["video_id"] != "") :

                ?>
                    <div class="video-container p-3" onclick="launchVideo(this.dataset.videoId)" data-video-id="<?php echo $faq['video_id']; ?>">
                        <br><br>
                        <div class="play-video-btn position-relative rounded text-white px-4 py-2">
                            <p class="m-0"><strong>Click to Play Video</strong></p>
                        </div>
                    </div>
                <?php

                endif;

                ?>
            </div>
        </div>

<?php
        if ($max != 0 && $max == $faq_item_counter) :
            echo "</div>";
            return;
        endif;
        $faq_item_counter++;
    endforeach;
    echo "</div>";
}

add_action('wp_footer', 'video_modal');
function video_modal()
{
    echo <<<MODAL
    <div id="video_modal_background" onclick="showModal()"></div>
    <div id="video_modal_container">
        <div id="video_modal_close_x" onclick="showModal()">+</div>
        <div id="video_modal_content_container"></div>
    </div>
    <script>
        var videoEmbedContainer = document.getElementById('video_modal_content_container');

        function showModal() {
            if (document.getElementById('video_modal_container').classList.contains('showVideo')) videoEmbedContainer.innerHTML = "";
            document.getElementById('video_modal_background').classList.toggle('showVideo');
            document.getElementById('video_modal_container').classList.toggle('showVideo');
        }

        function launchVideo(id) {
            showModal();
            videoEmbedContainer.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/\${id}?autoplay=1" title="Answers to Your Questions" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        }
    </script>
    MODAL;
}

$categories = [
    "about"     => "Semper Solaris FAQs",
    "solar"     => "Solar Questions",
    "install"   => "Solar Installation Questions",
    "battery"   => "Battery Storage Questions",
    "roofing"   => "Roofing Questions",
    // "hvac"      => "Heating & Air Conditioning Questions",
    // "sgip"      => "SGIP Questions",
    "financing" => "Financing Questions",
    "misc"      => "Other Questions"
];

$all_faqs = [
    "about" => [
        [
            "question" => "What does it mean to go solar and roofing American style?",
            "video_id" => "efnSIvH-mX4",
            "answer" => "Going solar American Style means deciding to take a step forward and help the environment through <a href=\"/solar-panels/\">Solar Power</a>. Also, save some money and do it through a company that embraces American values and American tradition as well as having deep ties into first responders and the American military.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "American%20Style"
        ],
        [
            "question" => "Do military veterans work at Semper?",
            "video_id" => "piVJi9WxpUU",
            "answer" => "Yes, we do. We are genuinely veteran-owned here, and we do want to be able to help everyone and the environment. We are always looking to hire more veterans or hard working people. Check out our <a href=\"/careers/\">Careers</a> page to see our job opportunities.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Military%20Veterans"
        ],

        [
            "question" => "Why we prefer in-home visits over ballpark figures when considering solar",
            "video_id" => "3m2jGJDeJYQ",
            "answer" => "When our consultants come to your home, they look at all the factors that are going to play into the overall cost of the installation. This includes roof conditions and orientation.<br>They're also going to look at the service panel to see whether or not it needs to be upgraded. So the in-home visit allows us to give you an accurate proposal right out of the gate. Getting things done right the first time is the Semper way.",
            "respondent_name" => "John Huey",
            "respondent_title" => "Appointment Coordinator",
            "thumbnail" => "In%20Home%20Over%20Ballpark"
        ],
        [
            "question" => "What is Semper Cares?",
            "video_id" => "qBYygZYjJdk",
            "answer" => "Semper Solaris has a department called <a href=\"https://www.sempersolaris.com/semper-cares-initiative/\">Semper Cares Initiative</a>. The Semper Cares Initiative is program for providing relief for veterans that are struggling with high energy costs by furnishing their home with solar panels, a new roof, solar battery storage solutions, heating or an air conditioning system. ",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Exec. Director of Operations",
            "thumbnail" => "Semper%20Cares"
        ],

        [
            "question" => "Does Semper Solaris offer scholarships?",
            "video_id" => "",
            "answer" => "Yes! Semper Solaris offers current college students and graduating high school seniors the opportunity at a money prize towards your education. You can submit your entry <a href=\"https://www.sempersolaris.com/semper-cares-initiative/scholarships/\">here <span style=\"visibility:hidden;position:absolute;z-index:0\"> Semper Solaris Scholarship</span></a>.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => ""
        ],
    ],
    "solar" => [
        [
            "question" => "Are your panels American made?",
            "video_id" => "dUv16mJVti8",
            "answer" => "Short answer is Yes! We prefer to use the best Solar Panels made in America.",
            "respondent_name" => "John Huey",
            "respondent_title" => "Appointment Coordinator",
            "thumbnail" => "American%20Solar"
        ],
        [
            "question" => "Does solar work in the winter?",
            "video_id" => "B_gxQ41l0dk",
            "answer" => "The short answer is YES they do. Although, given the cloud cover and weather exposure and the time of the year, the annual yield might be slightly less than what you would see in the summertime. However, solar panels can be more efficient in colder temperatures depending on location. No matter the weather conditions, Semper Solaris has experience designing solar panel systems to endure cold weather conditions.",
            "respondent_name" => "Trevor Decker",
            "respondent_title" => "San Diego Branch Manager",
            "thumbnail" => "Winter%20Solar"
        ],
        [
            "question" => "How many solar panels do I need?",
            "video_id" => "uB3thunP0TM",
            "answer" => "The number of <a href=\"/solar-panels/\">solar panels</a> that you need will vary depending on the amount of your electric bill. The average home in a sunny climate typically needs anywhere from 18-20 panels and will usually offset an electric bill of about $200 a month.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Exec. Director of Operations",
            "thumbnail" => "Number%20of%20Panels"
        ],
        [
            "question" => "What happens if there is an issue with my solar?",
            "video_id" => "",
            "answer" => "If, by any chance, there are issues with your panels, we try to troubleshoot with you through the phone remotely. If that does not work, we try to get one of our technicians out there by the next day, or sometimes the same day. If the problem still persists, please fill out our <a href=\"https://sempersolaris.force.com/selfschedule/s/book\">schedule service form</a>.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20Issues"
        ],
        [
            "question" => "What happens after my solar is installed?",
            "video_id" => "",
            "answer" => "After your installation is complete, we then need to coordinate with the local jurisdiction to have your system inspected. We will meet with the city or county representatives on-site the day of the inspection and get it signed off so we can have all of our permits balanced.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "After%20Install"
        ],
        [
            "question" => "How do solar panels work?",
            "video_id" => "hoxIhTw7__I",
            "answer" => "Well, <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> work very simply:<ul><li>you put them on a roof</li><li>you expose them to the sun</li><li>the sun hits the solar panels and it creates DC power</li></ul>From there, it will go into an inverter which converts the DC power into AC power, which is then connected directly to the home. All that AC power will power the home and cover the home's loads.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => " Exec. Director of Operations",
            "thumbnail" => "How%20Does%20Solar%20Work"
        ],
        [
            "question" => "How long is the warranty on solar panels?",
            "video_id" => "ykpRsAse2A4",
            "answer" => "Many people ask: How long is the warranty for the panels we sell? And regardless of the kind of panel, the warranty is going to be 25 years. Read more on the different warranties we offer <a href=\"https://www.sempersolaris.com/warranties/\">here<span style=\"visibility:hidden;position:absolute;z-index:0\"> Semper Solaris Warranty Information</span></a>.",
            "respondent_name" => "Sami Elmi",
            "respondent_title" => "Human Resources Generalist",
            "thumbnail" => "Warranty%20Length"
        ],
        [
            "question" => "Do I need to maintain my solar panels?",
            "video_id" => "SDfrX8wyl78",
            "answer" => "No. Once the system is installed, if it was done right with the utmost quality, panels are maintenance-free and should require pretty much no maintenance. This includes check-up, or upkeep for at least ten years, except for maybe minimal washing, if you don't live in an area that gets a lot of rain.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Executive Director of Operations",
            "thumbnail" => "Solar%20Maintenance"
        ],
        [
            "question" => "How do I clean my solar panels?",
            "video_id" => "Uy0QjvyS0tQ",
            "answer" => "To clean <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> on your roof, you would either early in the morning or late in the afternoon, take a hose with a spray nozzle and shoot water up onto the roof. Rinse off any dirt, or dust, or other debris that has built-up.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Exec. Director of Operations",
            "thumbnail" => "Clean%20Panels"
        ],
        [
            "question" => "What is the difference between monocrystalline and polycrystalline solar panels?",
            "video_id" => "n3NcaCjzPak",
            "answer" => "Both panels are the same, in the sense that they're both a crystalline product. However, polycrystalline has a speckled look to it, whereas monocrystalline has a very solid look. Monocrystalline is also slightly more efficient because of how it's made.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Exec. Director of Operations",
            "thumbnail" => "Mono%20Poly"
        ],
        [
            "question" => "If I lose power from the utility company, will my solar still work?",
            "video_id" => "1ofTx1Bsbao",
            "answer" => "No. For your solar system to power your home in a grid outage, you would require <a href=\"https://www.sempersolaris.com/battery-storage/\">battery storage</a> for your home. We do offer those here at Semper so, if you are interested, please ask your sales rep.",
            "respondent_name" => "Trevor Decker",
            "respondent_title" => "San Diego Branch Manager",
            "thumbnail" => "Power%20Loss"
        ],
        [
            "question" => "Can solar help me if my electric bill is already low?",
            "video_id" => "jkn5p6zG2ss",
            "answer" => "We've seen bills as low as $60. We're still able to save money monthly. What we need to think about is locking in your gas rates. 20 years ago at a buck-a-gallon, if you could've done that, then would you have done it? It's the same thing with solar having the ability to lock in your rates now will save you money for years to come.",
            "respondent_name" => "Chris Benedetto",
            "respondent_title" => "Call Center Manager",
            "thumbnail" => "Low%20Bill"
        ],
        [
            "question" => "Can I add panels to my existing solar system?",
            "video_id" => "5NHN8_Kdf9g",
            "answer" => "You can include panels to your existing system, as long as they are compatible with the current system.",
            "respondent_name" => "John Huey",
            "respondent_title" => "Appointment Coordinator",
            "thumbnail" => "Add%20Panels"
        ],
        [
            "question" => "Can you make money from your solar panels?",
            "video_id" => "Fejauh2UEcU",
            "answer" => "You can't necessarily make money off your <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a>. However, you can earn credit with your utility. Many of our sales reps and engineers size your system to cover your utility and make a little extra. So that way, you do have a credit with your utility and make money in a sense.",
            "respondent_name" => "Cassandra Spindler",
            "respondent_title" => "Customer Ops. Support Representative",
            "thumbnail" => "Solar%20Money"
        ],
        [
            "question" => "Do you work with systems installed by other companies?",
            "video_id" => "87lmYus_Kg8",
            "answer" => "We can work with systems installed by other companies, except when they are a leased system.",
            "respondent_name" => "John Huey",
            "respondent_title" => "Appointment Coordinator",
            "thumbnail" => "Other%20Companies"
        ],
        [
            "question" => "What happens to my solar If I move?",
            "video_id" => "7HO22P-_-zk",
            "answer" => "When a customer moves, they have a few options. You can opt into uninstalling your system and moving it to your new home. We can give you a quote for that, or you can potentially increase the value of your home based on leaving the panels there for the next homeowner.",
            "respondent_name" => "Whitney Crotty",
            "respondent_title" => "Monitoring Support Specialist",
            "thumbnail" => "Moving%20With%20Solar"
        ],
        [
            "question" => "What happens if a solar panel breaks?",
            "video_id" => "Hd2YXlxizzo",
            "answer" => "If a <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panel</a> ends up breaking on your house as the results of our monitoring technology that'll be instantly picked up.<br /><br />These solar panels are by default under <a href=\"https://www.sempersolaris.com/warranties/\">warranty for 25 years</a>, so if a solar panel breaks on the house it will be known by us very quickly and it will be replaced as course of the warranty.",
            "respondent_name" => "Nicolas Brush",
            "respondent_title" => "Nicolas Brush",
            "thumbnail" => "Broken%20Panels"
        ],
        [
            "question" => "How do solar panels help the environment?",
            "video_id" => "kCUsda8ZtI0",
            "answer" => "Traditional electricity is derived from fossil fuels such as coal or natural gas. <a href=\"https://www.sempersolaris.com/going-solar-can-benefit-the-environment/\">Solar panel systems help the environment</a> by generating clean electricity without producing carbon dioxide and other pollutants that negatively affect the atmosphere.",
            "respondent_name" => "Nicolas Brush",
            "respondent_title" => "PV Designer",
            "thumbnail" => "Environmental%20Panels"
        ],
        [
            "question" => "How do earthquakes affect solar panels?",
            "video_id" => "Vk2ojENj4hw",
            "answer" => "Your roof-mounted solar system is rated and certified by independent labs. They have been verified through rigorous structural calculations and structural reviews. The solar system will not do any additional damage to your home that would not have already been done by an earthquake.<br /><br />All structures are built to earthquake standards. The solar that is put on the roof is upheld to those standards. There are no dangers associated basically with putting PV on your roof, that wouldn't already be there if you were just under a standard roof.",
            "respondent_name" => "Josh Crootonk",
            "respondent_title" => "Lead Designer",
            "thumbnail" => "Solar%20Earthquake"
        ],
        [
            "question" => "Can I use my solar if there is a power outage?",
            "video_id" => "B2sUC7sVY5E",
            "answer" => "Unfortunately, your solar system does also turn off during the power outage unless you have <a href=\"https://www.sempersolaris.com/battery-storage/\">battery storage</a>. These are all grid-tied systems. They do need power recognized to be able to convert the energy from the Sun into usable power to the grid.",
            "respondent_name" => "Matthew Ward",
            "respondent_title" => "Construction Manager",
            "thumbnail" => "Power%20Outage"
        ],
        [
            "question" => "What is an overlay?",
            "video_id" => "beIp7gQzk6U",
            "answer" => "When you're considering solar, one of the things that comes to mind is aesthetic and design, or, simply put, \"what will my solar panels look like?\"<br /><br />In order to ensure you enjoy what your panels look like on your roof, our design team creates what we call an overlay. The overlay shows you the layout of the <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> and where Semper Solaris is planning on installing them, and you can either approve or reject the design to your liking! Our goal is for you to love your panels!",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20Is%20An%20Overlay"
        ],
        [
            "question" => "Who can I contact for questions about my solar?",
            "video_id" => "",
            "answer" => "You can call the mainline, 619-715-4054. Press option 2 and then 3 to reach the Service Department.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Contact%20Solar"
        ],
        [
            "question" => "Can you install a solar system on an old roof?",
            "video_id" => "",
            "answer" => "Technically, you can, but you will be facing issues.<br /><br />Older roofs tend not to be able to be as waterproofed. Also, if you are going to put <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> on an old roof, your roof is not going to last twenty years if it's not in great shape.<br /><br />When you go to <a href=\"/roofing/\">replace your roof</a>, you're going to have to remove all the solar panels and then reinstall them. At the time that you buy your solar, it's always a great idea to make sure that you're installing them on a new roof.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Old%20Roof"
        ],
        [
            "question" => "Can I Use Existing Solar Panels With A New Pool?",
            "video_id" => "9-y3Q0RBrWg",
            "answer" => "So you have an existing solar system but you're thinking about adding a pool. What you would want to do is determine the size of the pool motor and determine how many hours per day you plan on filtering your pool.<br /><br />Based on that we can run calculations to determine how many additional panels you need to cover the additional electrical load of that pump. Typically a pool pump will require about 0.75 kilowatts for every horsepower of the motor that you want to run.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "New%20Pool"
        ],
        [
            "question" => "How Will Shade Affect My Solar Panels?",
            "video_id" => "-AbsfH6MDgc",
            "answer" => "When <a href=\"https://www.sempersolaris.com/solar-panels/\">installing a solar system</a>, shading is always a concern that should be taken into consideration. A lot of times people will ask, “I have a tree over there what happens when the tree shades my panels?” or “I have a chimney” or “I have a roof obstruction like a vent or a satellite dish, how will it affect the output of my system?”<br /><br />All systems are currently designed with optimizers or microinverters and what's great about this system design is that if you do get spot shading or shading from a tree or other obstacle during certain parts of the day, it won't negatively affect the overall output of the system as every panel’s individual from the one next to it.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20Shade"
        ],
        [
            "question" => "How Will I Be Billed For The Power My Solar Panels Produce?",
            "video_id" => "x0I2NiMJs9w",
            "answer" => "When you go solar you'll enter into a <a href=\"https://www.sempersolaris.com/what-is-net-metering/\">net energy metering agreement</a> with the local utility company. What's going to happen is rather than being billed once a month like you are now, you're going to be put on a yearly billing cycle.<br /><br />From month to month within that billing cycle, you will get a statement but no money is due. You only have to pay at the end of the year which is called your true-up. When you get your true-up bill if you've produced more solar than you need and you have no fixed charges, then you would owe no money. However, if you have not produced enough solar power and there are fixed charges as part of your true bill you would have to make that payment to the utility.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Production%20Billing"
        ],
        [
            "question" => "What Will Happen if the Power Goes Out?",
            "video_id" => "2tNuKBVqGeM",
            "answer" => "What happens if the power goes out? Under normal circumstances, if the power goes out at your home, unfortunately, your Solar will turn off. However, a way to combat this would be to add a <a href=\"https://www.sempersolaris.com/battery-storage/\">battery storage</a> unit.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "No%20Power"
        ],
        [
            "question" => "How Do I Reset My System After The Power Goes Out?",
            "video_id" => "B5mQOcfBaBA",
            "answer" => "Unfortunately, if the power goes out your system will turn off. However, there's nothing you need to do to reset your system because when the power comes back on the system will automatically reboot and turn itself back on. An easy way to confirm that this has happened is you can go online and check your monitoring portal to confirm that your system is producing.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20Power%20Outage"
        ],
        [
            "question" => "Can I use Existing Solar Panels With A New Electric Car?",
            "video_id" => "r0CZIxFjpEQ",
            "answer" => "So you have an existing solar system, and you're thinking of adding an electric car. What you'd want to do is you would want to add more <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> to produce more electricity to cover the usage from that electric car. In addition to adding more electrical panels to your system, you'd want to install an electric car charger with a plug that's compatible with the electric car of your choice.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Electric%20Car"
        ],
    ],
    "install" => [
        [
            "question" => "How will the solar panels be mounted?",
            "video_id" => "rE6x3ZZO2iI",
            "answer" => "Design and engineering are one of our central departments here at Semper Solaris, and they work with the city's jurisdiction to ensure that your panels are going to meet your city code. While some people may like their panels on a specific portion of their roof or aligned a certain way.<ol><li>It might not meet the best production</li><li>It might not be in-line with your city's jurisdiction</li></ol>Our design &amp; engineering team takes pride in what they do, and they go the extra mile to make sure that your system is going to be as productive as possible and meet all the city codes for permitting.",
            "respondent_name" => "Heather Richards",
            "respondent_title" => "Quality Control Lead",
            "thumbnail" => "Mount%20Panels"
        ],
        [
            "question" => "When can I turn on my solar system?",
            "video_id" => "yBEMDOCVbMA",
            "answer" => "It usually takes about two weeks with SDG&amp;E and inspection approval.",
            "respondent_name" => "Sergio Corona",
            "respondent_title" => " Solar Foreman",
            "thumbnail" => "Turn%20System%20On"
        ],
        [
            "question" => "Can you install solar on any type of roof?",
            "video_id" => "j1PJG_X4nDc",
            "answer" => "Our contractors have installed on many different types of roofs, and there are very few limitations with our team. The main thing is that the mounting hardware will vary depending on material and panels used.",
            "respondent_name" => "Michael Focht",
            "respondent_title" => "Scheduling Coordinator.",
            "thumbnail" => "Roof%20Type"
        ],
        [
            "question" => "How will I be updated on the install progress?",
            "video_id" => "j1PJG_X4nDc",
            "answer" => "The local branch will reach out to the customers about every couple of weeks to give you an update as to where the project stands.",
            "respondent_name" => "Veronica Mosqueda",
            "respondent_title" => "Operations Support Specialist",
            "thumbnail" => "Progress%20Update"
        ],
        [
            "question" => "How long does it take to get an install date?",
            "video_id" => "MK8jxxW5Ezg",
            "answer" => "Once you sign a solar contract with us, you can expect your panels to be installed within 6-10 weeks.",
            "respondent_name" => "Justine Crane",
            "respondent_title" => "Finance Specialist",
            "thumbnail" => "Install%20Date"
        ],
        [
            "question" => "What time will the installers arrive?",
            "video_id" => "nAF-5JRGy6c",
            "answer" => "Our installers will get there at approximately 7:00 AM and we usually wrap up at 5:00 PM which is the end of our day.",
            "respondent_name" => "Chris Ybarra",
            "respondent_title" => "Solar Roof Lead",
            "thumbnail" => "Installers%20Arrive"
        ],
        [
            "question" => "How long will my solar installation take?",
            "video_id" => "wfr6wVcRsDs",
            "answer" => "A typical installation with Semper Solaris takes 1-2 days. Some of the more significant projects will go on a little bit longer. Larger projects will expand that timeline, and that will be identified before the project start date.",
            "respondent_name" => "Matthew Ward",
            "respondent_title" => "Construction Manager",
            "thumbnail" => "Installation%20Install%20Length"
        ],

    ],
    "battery" => [
        [
            "question" => "What is battery storage?",
            "video_id" => "",
            "answer" => "<a href=\"https://www.sempersolaris.com/battery-storage/\">Battery storage</a> consists of a device that reserves energy for later consumption that is charged by a connected solar system.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20is%20Battery%20Storage_"
        ],
        [
            "question" => "Why do I need battery storage?",
            "video_id" => "",
            "answer" => "Having a <a href=\"https://www.sempersolaris.com/battery-storage/\">solar battery storage system</a> can help control the amount of energy you use during peak-hours. It can store the extra energy generated from your <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panels</a> during the day for you to use at more expensive rate times.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Need%20Battery%20Storage"
        ],
        [
            "question" => "What types of battery storage does Semper carry?",
            "video_id" => "",
            "answer" => "At Semper Solaris, we carry <a href=\"https://www.sempersolaris.com/battery-storage/tesla-powerwall/\">Tesla Powerwall</a>, and introducing the cutting-edge <a href=\"https://www.sempersolaris.com/battery-storage/enphase/\">Enphase battery series</a>. Both solar batteries are designed to store energy to be used at your discretion whenever necessary. Though, each solar battery does have its own unique qualities for storage. So call today and ask your sales rep which solar battery storage is right for your home.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Battery%20Types"
        ],
        [
            "question" => "How does battery storage work?",
            "video_id" => "",
            "answer" => "The electricity that is stored in your battery is consumed after sundown, during energy demand peaks, or during a power outage. The battery will continue to power your home despite the lack of energy from the electric company.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "How%20does%20Battery%20Storage%20Work_"
        ],
        [
            "question" => "What Is The Difference Between Full & Partial Home Backup?",
            "video_id" => "VH_n7BFY3bw",
            "answer" => "If you have an existing <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panel system</a> and you don't currently have a battery, one of the great things you can do with the <a href=\"https://www.sempersolaris.com/battery-storage/tesla-powerwall/\">Tesla Powerwall</a> is you can install two or more power walls and do what's called whole-home backup.<br /><br />When you do a whole home back up what we do is we take all the circuits in your existing main service panel and we move it to a dedicated sub-panel. We then install your gateway and what will happen is that if the power goes out all the circuits in your home will be backed up, which means that you can run anything in your home on the powerwalls for as long as the powerwalls have power.<br /><br />If you only have one Tesla Powerwall we can do what's called a partial home backup. We would take certain circuits out of your main service panel and put it into a dedicated load center. Whenever the power would go out that power wall would then power those dedicated circuits.<br /><br />Typical circuits that people backup would be refrigerators, deep freezes, maybe basic lights in the bathroom or the kitchen, alarm systems, internet, computer or entertainment systems.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Full%20Partial%20Home%20Backup"
        ],
        [
            "question" => "With Tesla Powerwall, Will I Be Affected by Blackouts?",
            "video_id" => "Tvtj4-fFsro",
            "answer" => "If the power goes out and you have a <a href=\"https://www.sempersolaris.com/battery-storage/tesla-powerwall/\">Tesla Battery</a> that is set up as partial backup all of your backup loads will immediately be powered and you won't even notice. If you have whole home backup which means you have 2 Powerwalls or more, again you will not notice that the powers gone out.<br /><br />If you're sitting in your living room and you're playing video games you won't even notice. If your <a href=\"https://hvac.sempersolaris.com/\">air-conditioning</a> is on you won't even notice. If your fish tank is on you won't even notice, the lights won't dim, it's instantaneous and you would never know what the power's out unless you went outside to see that all their neighbors are in the dark.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Tesla%20Blackouts"
        ],
        [
            "question" => "Do I need to Set My Tesla Powerwall to Backup Power Mode?",
            "video_id" => "OUADdJW2uBE",
            "answer" => "One of the other cool functions of <a href=\"https://www.sempersolaris.com/battery-storage/tesla-powerwall/\">Tesla Powerwall</a> is that, in the case of emergency, Tesla will send a notification to your Powerwall if there's going to be a prolonged blackout and emergency to change the setting on your Powerwall for the time of use arbitrage into a 100% full backup.<br /><br />Now if you know this is going to happen, you can manually change your Powerwall to go into 100% backup mode but because Tesla is so smart it can do it for you.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Tesla%20Powerwall%20Backup"
        ],
        [
            "question" => "Can I Install a Battery to Already Existing Solar Panels?",
            "video_id" => "tvNLSytNJEU",
            "answer" => "YES! If you have an existing <a href=\"https://www.sempersolaris.com/solar-panels/\">solar panel system</a> and you're interested in adding <a href=\"https://www.sempersolaris.com/battery-storage/\">battery storage</a> in the future, it's very easy to do. One of the examples of batteries out there is made by a company called Tesla. <a href=\"https://www.sempersolaris.com/battery-storage/tesla-powerwall/\">Tesla Powerwall 2</a> is an AC coupled battery, which means that that battery can be easily retrofitted into any existing system that already has solar.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Battery%20Existing%20Solar"
        ],
    ],
    "roofing" => [
        [
            "question" => "What does it mean to be an Owens Corning Platinum Roofing Preferred Contractor?",
            "video_id" => "zeDLJ-kg_Ns",
            "answer" => "<img class=\"alignnone size-full wp-image-29878\" src=\"https://www.sempersolaris.com/wp-content/uploads/2019/02/owenscorning-roofing-contractor.png\" alt=\"Owens Corning\" /><br /><br />It means we're in a very select group of contractors. We're 1-in-500 in the nation. We offer some of the <a href=\"https://www.sempersolaris.com/warranties/\">best warranties</a> in roofing including a <a href=\"https://www.sempersolaris.com/wp-content/uploads/2020/09/Owens-Corning-Warranty.pdf\">50-year workmanship warranty</a> on all Owens-Corning projects that we install and a lifetime warranty on their materials.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Executive Director of Roofing Division",
            "thumbnail" => "Owens%20Corning%20Platinum"
        ],
        [
            "question" => "Can I get a new roof if I already have solar panels installed?",
            "video_id" => "LiHR1ax5c-Q",
            "answer" => "The great thing about working with Semper is we're a <a href=\"/solar-panels/\">solar contractor</a>, and we're a <a href=\"/roofing/\">roofing contractor</a>. A majority of systems we can remove and reinstall for you without getting anyone else involved.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "Roof%20Solar"
        ],
        [
            "question" => "Does Semper do roofing as well?",
            "video_id" => "z6ZnVpSAuYI",
            "answer" => "We are a <a href=\"https://www.sempersolaris.com/roofing/\">roofing company</a>. So you can have the safety and guarantee of knowing that when we are on your roof, we know how to handle installing the solar. Also, if you're looking for a dual project, we can handle both your solar and roofing needs.",
            "respondent_name" => "Francisco Ortiz-Gomez",
            "respondent_title" => "Scheduling Coordinator",
            "thumbnail" => "Roofing%20Too"
        ],
        [
            "question" => "How long does a roofing project usually take?",
            "video_id" => "vP7k4_kkSX4",
            "answer" => "It varies, but for most houses, we'll be in and out within 3-4 days. If you have a big house, it's going to take longer. 3-4 days is a pretty good average time for a roofing project.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "Roofing%20Project%20Length"
        ],
        [
            "question" => "Do I need to be home for a new roof installation?",
            "video_id" => "85KxIzdGurg",
            "answer" => "It's pretty noisy and it can get a little messy, so even though we clean up at the end of every single day, no need to be home, we'll look after it.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "Be%20Home"
        ],
        [
            "question" => "How do I know if my roof is fit for solar?",
            "video_id" => "V1n0MVlpLXk",
            "answer" => "Just ask us. We have a very knowledgeable staff on hand and we're aware of a wide variety of roofs. <br /><br />Even if it's something that's not quite so common, we're very capable of adapting our installation tactics in order to make it fit your given roof surface.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "Roof%20Fit%20For%20Solar"
        ],
        [
            "question" => "What goes into a roof system?",
            "video_id" => "",
            "answer" => "A durable roof is made of more than just shingles. Protecting your home requires a <a href=\"/roofing/\">complete roofing system</a> that creates a waterproof barrier, defends against nature’s elements, and provides proper ventilation. In hot areas, homeowners need to think about the extra heat and sun exposure, too.<br /><br />Your total roof system needs to consist of barriers, underlayment, starter shingles, hip and ridge shingles, ventilation products, and insulation. In order to prevent leaks, you need to start with the right underlayment.<br /><br />Water barrier products, such as the Owens Corning Weather Lock, protect your new roof from wind, rain, and other elements, while barriers and underlayment stop moisture and mold from seeping through your roof. For added quality, synthetic material like Owens Corning ProArmour with Fusion Back Coating Technology is stronger than traditional felt underlayment, reducing the chance of tears and leaks.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "California%20Roof"
        ],
        [
            "question" => "How Are Tile Roof Systems Constructed?",
            "video_id" => "UOkxGoQ8X6A",
            "answer" => "JP McEvenue, executive director of roofing operation at Semper Solaris, discusses how tile roof systems are installed. In the video, you'll learn about both standard <a href=\"https://www.sempersolaris.com/roofing/\">roof installation</a> and energy-efficient roof installation. From how to remove an existing roof, to cleaning the bare wood deck, to installing the underlayment, to allowing airflow under the roofing tiles in order to keep temperatures cooler. Semper Solaris is proud to offer a wide selection of roofing contractors including Owens Corning, Eagle Roofing, Boral, Genflex, IB Roof and Polyglass.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Tile%20Roof%20Construction"
        ],
    ],
    /*"sgip" => [
        [
            "question" => "How long does the SGIP application process take?",
            "video_id" => "7BRpYFxiX4Y",
            "answer" => "Self-Generation Incentive Program (SGIP) takes 6-9 months to process. The process starts when our team submits the RRF (Reservation Request Form). Once the installation is complete, we will submit the final part of the process also known as the Incentive Claim Form (ICF).",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "How%20Long%20Does%20the%20SGIP%20Process%20Take"
        ],
        [
            "question" => "What is the RRF (Reservation Request Form)?",
            "video_id" => "wygnYs9wQsw",
            "answer" => "The RRF stands for “Reservation Request Form”. It’s the initial part of the SGIP(Self-Generation Incentive Program) process which provides incentives and/or rebates to support new and existing energy resources installed on the customer’s side of the utility meter.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20is%20the%20RRF"
        ],
        [
            "question" => "What is the Self-Generation Incentive Program (SGIP)?",
            "video_id" => "k8Y53JHppsg",
            "answer" => "The Self-Generation Incentive Program (SGIP) is one of the longest running incentive programs that is offered by the State of California. This incentive program is for homeowners who purchase a battery backup system such as the Tesla Powerwall. The SGIP offers incentives for energy storage systems as it is a battery backup rebate and solar is not a requirement to be able to participate in the program.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20is%20SGIP"
        ],
        [
            "question" => "Are there rate schedule requirements to apply for the SGIP?",
            "video_id" => "LrDcHGm1EMA",
            "answer" => "The short answer is “Yes”. It is an SGIP requirement to be on an approved rate schedule when adding a backup battery to your home.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Are%20there%20Rate%20Schedule%20Requirments"
        ],
        [
            "question" => "What are the different SGIP budget categories?",
            "video_id" => "YpHWHw0VBP8",
            "answer" => "There are four different budget categories that Semper Solaris applies for. Those four categories are the <i>equity resiliency budget</i>, <i>equity budget</i>, <i>large-scale residential budget</i>, and the <i>small-scale residential budget</i>.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20are%20the%20different%20SGIP%20Budget%20Catagories"
        ],
        [
            "question" => "What information is required for the SGIP audit?",
            "video_id" => "24RCL7DF5NU",
            "answer" => "The SGIP(Self-Generation Incentive Program) is a five year program. With this program, one in six applicants will be chosen for a random inspection audit. At the time of request, the SGIP will require you to submit discharge data(overview of battery production in 15 minute intervals over 7 days). Semper Solaris will obtain that data for you and submit on your behalf as needed.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20information%20is%20required%20for%20an%20SGIP%20audit"
        ],
        [
            "question" => "What is the difference between SGIP and Federal Tax Credit?",
            "video_id" => "jOAhnIxYi-c",
            "answer" => "The biggest difference between SGIP and Federal Tax Credit is the SGIP rebate is an incentive from the state of California in which a check is sent to you once the rebate process is complete. The Federal Tax Credit is a credit that helps you reduce your tax burden at the end of the year.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20is%20the%20difference%20between%20the%20SGIP%20and%20Federal%20Tax%20Credit"
        ],
        [
            "question" => "What is the ICF for SGIP rebate?",
            "video_id" => "9uxgwtj2Liw",
            "answer" => "ICF stands for “Incentive Claim Form”. Once your project is complete, the Semper Solaris team will fill out the ICF, send it to you to be signed, and once we receive it back, we will submit it to the SGIP on your behalf.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "What%20is%20the%20ICF"
        ]
    ],*/
    "financing" => [
        [
            "question" => "Are there financing options available?",
            "video_id" => "uNtOVBaHS6E",
            "answer" => "Yes, we have multiple different kinds of <a href=\"https://www.sempersolaris.com/solar-panels/solar-financing/\">financing options</a>. I would recommend talking to your sales rep to find out more.",
            "respondent_name" => "Tanner Gervais",
            "respondent_title" => "Staff Accountant",
            "thumbnail" => "Financing%20Options"
        ],
        [
            "question" => "What is a PACE Program?",
            "video_id" => "yyKYhlyeAfQ",
            "answer" => "A PACE Program is an equity-based loan that is tied to your property taxes. You pay your monthly payments into a reserve account, and then it's paid at the end of the year for your property taxes.",
            "respondent_name" => "Alaina Barlow",
            "respondent_title" => "Sale Support Specialist",
            "thumbnail" => "Pace%20Program"
        ],
        [
            "question" => "What are the payment terms for my solar system?",
            "video_id" => "4MqB2lXSKng",
            "answer" => "Different people in the home may have different questions. Also, numerous decisions need to be made, such as panel type and inverter type, or where the mount is going to take place. So, when we have everyone in the household present, it makes answering those questions much easier. Also, we don't have to come back and have to answer questions multiple times.",
            "respondent_name" => "John Huey",
            "respondent_title" => "Appointment Coordinator",
            "thumbnail" => "Payment%20Terms"
        ],
        [
            "question" => "What is a PPA?",
            "video_id" => "PLh_9TOcqaM",
            "answer" => "PPA stands for a <a target=\"_blank\" rel=\"noopener\" href=\"https://betterbuildingssolutioncenter.energy.gov/financing-navigator/option/power-purchase-agreement\">Power Purchase Agreement</a>. It is an agreement between you and a third party financier where we put solar on your roof, and you pay for the actual output of what the solar produces.",
            "respondent_name" => "Robert Bessler",
            "respondent_title" => "Exec. Director of Operations",
            "thumbnail" => "Solar%20PPA"
        ],
        [
            "question" => "When should I fund my solar loan?",
            "video_id" => "mboe4rJnJGo",
            "answer" => "We suggest that you submit all required documentation to the credit union as soon as possible to get your loan ready to fund. Once we are within 1 to 2 weeks of installation, we will request that you fund the loan at that time so we can avoid delays. It is best if you contact your loan processor as soon as possible to finalize the loan and make sure there are no outstanding items.",
            "respondent_name" => "Justine Crane",
            "respondent_title" => "Financing Coordinator",
            "thumbnail" => "Solar%20Loan%20Fund"
        ],
        [
            "question" => "What is the difference between a Solar Lease and a PPA?",
            "video_id" => "CRHBLKVK-1A",
            "answer" => "With a <a href=\"https://www.sempersolaris.com/what-you-need-to-know-about-solar-leases/\">Solar Lease</a>, you agree to pay a fixed monthly rent, which is calculated using the estimated amount of electricity the system will produce. With a Solar PPA, instead of paying to rent the solar system, you agree to purchase the power generated by the system at a per-kilowatt price in exchange for the right to use the solar system.",
            "respondent_name" => "Alaina Barlow",
            "respondent_title" => "Sales Support Specialist",
            "thumbnail" => "Solar%20Lease%20Vs.%20PPA"
        ],
        [
            "question" => "What is a Solar Lease?",
            "video_id" => "",
            "answer" => "A <a href=\"https://www.sempersolaris.com/what-you-need-to-know-about-solar-leases/\">solar lease</a> is an agreement between you as the homeowner and a third party financer where you make monthly payments for the solar. It usually comes with no money upfront.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20Lease"
        ],
        [
            "question" => "What Financial Options Are Available When Going Solar?",
            "video_id" => "FhmQcSdux28",
            "answer" => "When going solar there are multiple <a href=\"https://www.sempersolaris.com/solar-panels/solar-financing/\">financial options</a> that you can consider. One of the most common ways out there to go solar is to either pay cash or do some sort of financing.<br /><br />Another option would be to do a PPA or a lease agreement. A PPA is a power purchase agreement where you sign up with a third-party entity and you basically pay for the power as it's produced on a monthly basis.<br /><br />A lease, on the other hand, would be an agreement that you would sign with a third party owner and you would pay a fixed payment every month regardless of the output of the system.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20Finance%20Options"
        ],
    ],
    "misc" => [
        [
            "question" => "Why do both homeowners need to be home for the consultation?",
            "video_id" => "53R6hIn5edU",
            "answer" => "We want to make sure everyone gets all the information in the same sitting. Being able to answer all questions at the same time is important, and it helps you get through the process much faster.",
            "respondent_name" => "Christ Benedetto",
            "respondent_title" => "Call Center Manager",
            "thumbnail" => "Homeowners%20Home%20Consultation"
        ],
        [
            "question" => "How long does the permitting process take?",
            "video_id" => "PF00B9_cwcM",
            "answer" => "Depending on your jurisdiction, it can take anywhere from 2 to 4 weeks.",
            "respondent_name" => "Billie Yako",
            "respondent_title" => "Operations Specialist",
            "thumbnail" => "Permitting%20Process"
        ],
        [
            "question" => "Why is it important to heed the advice of the designer?",
            "video_id" => "d_m1UxMSFTM",
            "answer" => "Many variables play into the production of a system and what makes a sound solar system. Our solar design team has upwards of 10 years of experience between them.we've been designing jobs; we've probably done over 10,000 jobs all together. What that experience gives us is knowledge of what makes a sound solar system, which makes a solar system produce best, and what benefits the customers. If you listen to the designers, it's more likely that the system is going to produce and be as beneficial to you as it can be.",
            "respondent_name" => "Josh Crootonk",
            "respondent_title" => "Lead Designer",
            "thumbnail" => "Designer%20Advice"
        ],
        [
            "question" => "How long will a roofing or solar install take?",
            "video_id" => "jU-QpjxY2SQ",
            "answer" => "If you are going to be doing a <a href=\"https://www.sempersolaris.com/roofing/\">roofing project</a> with us, that can take anywhere from 3 to 4 days, depending on the size of your roof. A <a href=\"https://www.sempersolaris.com/solar-panels/\">solar project</a> can take anywhere from 2 to 3 days. This is depending on how many panels being installed. Then on each project following that will be your inspections.",
            "respondent_name" => "Laura Vargas,",
            "respondent_title" => "Purchaser",
            "thumbnail" => "Roofing%20Solar%20Length"
        ],
        [
            "question" => "What are the benefits to having both projects done by the same company?",
            "video_id" => "lPkBiT6Eysw",
            "answer" => "Beyond one company carrying both warranties, if you've ever done a construction project before with multiple trades, it's messy when they're stepping on each other's toes. So having one point of contact to really manage that project makes it a much, much smoother process.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "Company%20Projects"
        ],
        [
            "question" => "Is it a good idea to install solar and roofing at the same time?",
            "video_id" => "PBdckrPTdA8",
            "answer" => "It's a fantastic time to do that. The <a href=\"https://www.sempersolaris.com/warranties/\">warranty periods</a> are about the same. We have a 50-year warranty on most of our roof systems 25-year warranty on the solar. It's great to start them at the same time.",
            "respondent_name" => "JP McEvenue",
            "respondent_title" => "Exec. Director of Roofing Division",
            "thumbnail" => "rooft-solar-same-time"
        ],
        [
            "question" => "How do I get my referral check?",
            "video_id" => "3f4M0c4lbtg",
            "answer" => "If you <a href=\"https://www.sempersolaris.com/refer-friend/\">refer someone to Semper Solaris</a> and they put you on their application as their referral, our accounting department sends you a check for $550 once their project is installed, completed, and paid in full.",
            "respondent_name" => "Annie Shalita",
            "respondent_title" => "Sales Administrator",
            "thumbnail" => "referral-check"
        ],
        [
            "question" => "Is there a reward for referrals?",
            "video_id" => "EiQoPhbx9v0",
            "answer" => "If you <a href=\"https://www.sempersolaris.com/refer-friend/\">refer someone</a> you can get $550 if it is a solar job and $200 if it's a roofing job.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Referral%20Reward"
        ],
    ]
];

////////////////////////////////////////////
/*
 * "hvac" => [
        [
            "question" => "What Heating and Air Conditioning unit do I need?",
            "video_id" => "",
            "answer" => "Our technicians are skilled in finding the correct size heating and air conditioning unit for your home. Each building is different and we will be able to analyze the amount of BTUs you will need for your residential or commercial building. For example, a 1,000 square foot house will most likely need 25,000 BTUs.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "HVAC%20Unit"
        ],
        [
            "question" => "How do Solar and Heating and Air Conditioning work together?",
            "video_id" => "",
            "answer" => "<a href=\"https://www.sempersolaris.com/solar-panels/\">Solar</a> and <a href=\"https://hvac.sempersolaris.com/\">Heating and Air conditioning</a> are the perfect pair. By pairing the two systems together, the Semper team will put fewer panels on your home. Your home will still be powered by solar and your unit will also be powered by solar energy.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Solar%20and%20HVAC"
        ],
        [
            "question" => "How long will my Heating and Air Conditioning unit last?",
            "video_id" => "",
            "answer" => "Typically a <a href=\"https://hvac.sempersolaris.com/\">heating and air conditioning</a> unit will last 15-20 years with proper maintenance, tune-ups, and check-ups.",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "HVAC%20Unit%20Last"
        ],
        [
            "question" => "When should I replace my Heating and Air Conditioning unit?",
            "video_id" => "",
            "answer" => "If you are noticing the following signs, it is time to replace your heating and air conditioning unit:<ul><li>Your home is uncomfortable</li><li>Your unit is not turning on</li><li>Your unit is not blowing cold air</li><li>Your experiencing lack of airflow</li><li>You notice your thermostat is having issues</li></ul>",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "Replace%20HVAC%20Unit"
        ],
        [
            "question" => "Are Semper Solaris’ Heating and Air Conditioning units American Made?",
            "video_id" => "",
            "answer" => "Yes, all of our heating and air conditioning units are made in the state of California",
            "respondent_name" => "",
            "respondent_title" => "",
            "thumbnail" => "American%20Made%20HVAC"
        ],
    ],
[
    [
        "question" => "Why should I call a professional to repair my heating and Air Conditioning Unit?",
        "category" => 32408,
        "video_id" => "",
        "answer" => "Hiring a professional to repair your <a href=\"https://hvac.sempersolaris.com/\">heating and air conditioning unit</a> will save you money in the end. Our technicians have the tools and knowledge needed to properly repair your unit.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => "Professional%20HVAC"
    ],
    [
        "question" => "What's Included In The HVAC Tune-Up?",
        "category" => 32853,
        "video_id" => "Umi4dPEqk8c",
        "answer" => "The tune-up is a check-up of the complete heating cycle, the refrigeration, and the filters. We clean the condensated drains, check the coils, make sure that the ductwork is secure and check your thermostat to make sure it's working correctly.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => "HVAC%20Tune-Up"
    ],





    [
        "question" => "What is Net Metering?",
        "category" => 32151,
        "video_id" => "KsvEi9HUHnI",
        "answer" => "<a href=\"https://www.sempersolaris.com/what-is-net-metering/\">Net metering</a> (also called net energy metering) is a solar energy incentive that permits you to store energy in the electric network or grid. At the point when your solar panels produce more power than you need, that energy is shipped off to the grid in return for credits.<br /><br />During specific times or occasions when your solar panels are under production, you will be able to pull energy from the grid and utilize these credits to balance the expenses of that energy.",
        "respondent_name" => "Alaina Barlow",
        "respondent_title" => "Sale Support Specialist",
        "thumbnail" => "Net%20Metering"
    ],

    [
        "question" => "What is PTO and when will I get it?",
        "category" => 32190,
        "video_id" => "a_p8b8SQAJU",
        "answer" => "PTO is permission to operate that is granted by your local utility company. So once your project is installed, we need to apply to get permission to operate your system. This is a lot of paperwork that needs to get submitted, so Semper Solaris helps you throughout this process, but the answer is not super simple. It's really once the utility company grants it, so we can do the best we can to get all of our paperwork submitted and get that permission to operate as soon as your system is installed.",
        "respondent_name" => "Heather Richards",
        "respondent_title" => "Quality Control Lead",
        "thumbnail" => "What%20is%20PTO"
    ],
    [
        "question" => "How do I set up solar monitoring?",
        "category" => 32191,
        "video_id" => "2FfnT5hBeRE",
        "answer" => "Once your system is set up, you're going to receive a notification, via email, that your monitoring is ready to go. Then you log in to the system, create your username and password, and voila! You have your monitoring set up. It's that easy! Customers should also be careful to monitor their equipment on-site as online monitoring is not always reliable.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => "Solar%20Monitoring"
    ],
    
    [
        "question" => "Is there an app to check my solar energy production? Pt. 1",
        "category" => 32193,
        "video_id" => "Znw3QrpgCU8",
        "answer" => "Each system does have its monitoring app available, whether it be Enphase or SolarEdge. All of them have their personal qualities to monitor your system. We can walk you through how to read every one.<br>Upon the completion of the installation of your system, we provide you access to monitoring your solar panels through either a mobile app or online on your home computer. Depending upon the type of system you have installed, that particular app may vary.",
        "respondent_name" => "Kassandra Spindler",
        "respondent_title" => "Customer Ops Support Representative",
        "thumbnail" => "Solar%20Production%20App%20Pt.%201"
    ],
    [
        "question" => "Is there an app to check my solar energy production? Pt. 2",
        "category" => 32194,
        "video_id" => "lSHi8TJuneg",
        "answer" => "Upon the completion of the installation of your system, we in the monitoring department provide you access to monitoring your solar panels through either a mobile app mobile device or online on your home computer Depending upon the type of system you have installed that particular app may vary.",
        "respondent_name" => "Whitney Crotty",
        "respondent_title" => "Monitoring Support Specialist",
        "thumbnail" => "Solar%20Production%20App%20Pt.%202"
    ],
    [
        "question" => "How do I monitor my solar system?",
        "category" => 32198,
        "video_id" => "Ya6pto2skuM",
        "answer" => "All of our <a href=\"https://www.sempersolaris.com/solar-panels/\">solar systems</a> do come with monitoring. Depending on the type of panels and inverters you have, there are various apps available for them. They are set up in-house and released to the homeowner with instructions on how to view your production and consumption. Customers should also be careful to monitor their equipment on-site as online monitoring is not always reliable.",
        "respondent_name" => "Matthew Ward",
        "respondent_title" => "Construction Manager",
        "thumbnail" => "Solar%20Monitoring"
    ],

    

    [
        "question" => "What is the HERO program?",
        "category" => 33193,
        "video_id" => "",
        "answer" => "The HERO Program offers a unique, affordable financing option for energy-efficient upgrades for increased efficiency, comfort and savings. Water-saving upgrades are also available in drought-impacted areas.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "How do I get financing through HERO?",
        "category" => 33194,
        "video_id" => "",
        "answer" => "HERO Financing is a simple 4-step process:<br /><br />1. Apply - Find out how much your home is approved for.2. Select - Choose the eligible products and select the contractor for your job.3. Sign - Sign your financing documents.4. Complete - Finish the installation.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "How is HERO different from other forms of financing?",
        "category" => 33195,
        "video_id" => "",
        "answer" => "HERO is a PACE (Property Assessed Clean Energy) program that provides financing for energy-efficient and renewable energy products. In the state of California, HERO provides these same financing options for water-saving and drought-resistant products.<br /><br />HERO offers more consumers access to energy-efficient options because HERO is financed as an <strong>assessment on your property. The interest on these payments may be tax-deductible.*</strong> Approval for HERO is primarily based on the equity in your home and your debt payment history, rather than your credit score. HERO finances 100% of the cost to purchase and install eligible products, with fixed rates and flexible terms of 5-20 years, depending on the improvements you choose.<br /><br />Should you decide to sell your property before your HERO assessment is paid in full, any remaining balance may be able to transfer to a new property owner.<br /><br />*Property owners should consult their tax advisor regarding potential tax benefits.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "How is HERO financing paid through property taxes?",
        "category" => 33196,
        "video_id" => "",
        "answer" => "You will see a line item titled “HERO FINANCING” on your property tax bill. If you make property tax payments through an impound escrow account, your lender will adjust your monthly payment to include the amount due for HERO financing.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "What does \"HERO\" stand for?",
        "category" => 33192,
        "video_id" => "",
        "answer" => "HERO is an acronym that stands for Home Energy Renovation Opportunity.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "Who can apply for HERO?",
        "category" => 33197,
        "video_id" => "",
        "answer" => "Any property owner who lives in a city or county where HERO has been approved by the local government can apply for HERO financing. To find out if HERO is available in your community, please check our communities list or call 855-HERO-411 (855-437-6411).",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "Are all contractors qualified to install eligible HERO products?",
        "category" => 33198,
        "video_id" => "",
        "answer" => "No. Only HERO Registered Contractors can install HERO eligible products. Each state has different qualification requirements in order to register for HERO. Contractors can determine applicable eligibility requirements on our website.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "What are the eligibility criteria for HERO?",
        "category" => 33199,
        "video_id" => "",
        "answer" => "Specific eligibility requirements for residential properties include, but are not limited to, the following:<br /><br />1. Applicant(s) must be the owner(s) of record for the respective Property.2. Mortgage-related debt on the Property must not exceed 90% of the value of the Property.Property owner(s) must be current on their property taxes and there must be no more than one late payment in the past three years.3. Property owners must be current on all Property debt of the subject Property at the time of application and cannot have had more than one 30 day mortgage late payment over the previous 12 months.4. Property owner(s) must not have any declared bankruptcies within the past seven years, and the Property must not be an asset in any bankruptcy proceeding.5. The Property must not have any federal or state income tax liens, judgment liens, mechanic’s liens, or similar involuntary liens.<br /><br />Some criteria can vary from state to state or city to city. For a full list of your eligibility requirements, give us a call at 855-HERO-411 (437-6411).",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
    [
        "question" => "What products are eligible for HERO?",
        "category" => 33200,
        "video_id" => "",
        "answer" => "There are more than one million energy-efficient, and renewable energy products that qualify for financing through HERO. You can explore our list of eligible products for more information. Water-saving and drought-resistant products are available in some states. If you wish to install a product that is not on the list, contact us at 855-HERO-411 (855-437-6411) to get an application.",
        "respondent_name" => "",
        "respondent_title" => "",
        "thumbnail" => ""
    ],
];
*/
