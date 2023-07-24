<?php

/**
 * Template Name: FAQs
 * 
 * @param array     $hvac_faqs      associative array containing the questions and answers
 * @param int       $faq_counter    iterative number used to numerate the invidual elements for the Bootstrap JS that opens each FAQ
 * @param string    $faq, $details          key and value of the foreach loop that generates each FAQ block
 * 
 */

// get_template_part("template-parts/faq", "array");
get_header();
include ABSPATH . "/wp-content/themes/semper-arizona-child/template-parts/faq-array.php";


?>
<style>
    .jumbotron.header {
        background: url('<?php echoDomainName(); ?>/wp-content/uploads/2021/05/customer-service-semper-style-scaled.jpg') 50% 15% no-repeat;
        background-size: cover;
    }

    .jumbotron .overlay {
        top: 0;
        height: 525px;
        background-color: rgba(0, 0, 0, .5);
    }

    .faq-hr {
        border-color: var(--semper-red);
    }

    .collapsed svg {
        -webkit-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .video-container {
        cursor: pointer;
    }
</style>
<div class="jumbotron position-relative overflow-hidden p-3 p-md-5 header mb-0 text-center bg-dark">
    <div class="overlay position-absolute w-100"></div>
    <div class="container position-relative">
        <h2 class="display-4 text-white mb-0"><span class="fw-bold">Semper Solaris</span><br class="d-block d-md-none" /> arizona</h2>
        <h2 class="display-4 text-white m-0"><strong>Frequently Asked Questions</strong></h2>
        <p class="lead text-white mt-2">Most Common Questions Answered</p>
    </div>
</div>
<div class="mb-5" style="height:30px;background-image:var(--semper-blue-gradient);border-bottom:10px solid var(--semper-red)"></div>

<main id="primary" class="container">
    <div class="row g-5">
        <section class="col-md-8">

            <p>Solar questions that we get asked regularly. If you have any questions you can <strong><a href="/contact/">contact us</a></strong>. No more questions? Ready to make an appointment? Fill out our <strong><a href="https://sempersolaris.force.com/selfschedule/s/book/">book an appointment form</a></strong>.</p>


            <?php

            returnFAQsByCategory('about', $categories, $all_faqs);
            //returnFAQsByCategory('sgip', $categories, $all_faqs);
            returnFAQsByCategory('solar', $categories, $all_faqs);
            returnFAQsByCategory('install', $categories, $all_faqs);
            returnFAQsByCategory('battery', $categories, $all_faqs);
            returnFAQsByCategory('roofing', $categories, $all_faqs);
            // returnFAQsByCategory('hvac', $categories, $all_faqs);
            returnFAQsByCategory('financing', $categories, $all_faqs);
            returnFAQsByCategory('misc', $categories, $all_faqs);

            ?>

        </section>
        <aside class="col-md-4">
            <div class="position-sticky bg-light p-3 rounded" style="top:2em">
                <h3>FAQ Categories</h3>
                <hr />

                <?php

                foreach ($categories as $key => $value) :
                    echo "<p class=\"lead fw-bold\"><a href=\"#faq_accordion_{$key}\" class=\"text-decoration-none text-dark\">$value</a></p>";
                endforeach;

                ?>

            </div>
        </aside>
    </div>
</main>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What does it mean to go solar and roofing American style?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Going solar American Style means deciding to take a step forward and help the environment through <a href=/solar-panels/>Solar Power</a>. Also, save some money and do it through a company that embraces American values and American tradition as well as having deep ties into first responders and the American military."
        }
      }, {
        "@type": "Question",
        "name": "Do military veterans work at Semper?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, we do. We are genuinely veteran-owned here, and we do want to be able to help everyone and the environment. We are always looking to hire more veterans or hard working people. Check out our <a href=/careers/>Careers</a> page to see our job opportunities."
        }
      }, {
        "@type": "Question",
        "name": "Why we prefer in-home visits over ballpark figures when considering solar",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p>When our consultants come to your home, they look at all the factors that are going to play into the overall cost of the installation. This includes roof conditions and orientation. They're also going to look at the service panel to see whether or not it needs to be upgraded. So the in-home visit allows us to give you an accurate proposal right out of the gate. Getting things done right the first time is the Semper way.</p>"
        }
      }, {
        "@type": "Question",
        "name": "What is Semper Cares?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Semper Solaris has a department called <a href=https://www.sempersolaris.com/semper-cares-initiative/>Semper Cares Initiative</a>. The Semper Cares Initiative is program for providing relief for veterans that are struggling with high energy costs by furnishing their home with solar panels, a new roof, solar battery storage solutions, heating or an air conditioning system."
        }
      }, {
        "@type": "Question",
        "name": "Does Semper Solaris offer scholarships?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Yes! Semper Solaris offers current college students and graduating high school seniors the opportunity at a money prize towards your education. You can submit your entry <a href=https://www.sempersolaris.com/semper-cares-initiative/scholarships/>here</a>."}
        }, {
        "@type": "Question",
        "name": "Are your panels American made?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Short answer is Yes! Our panels are made in New York State and we only use the best “made in America” products."}
        }, {
        "@type": "Question",
        "name": "Does solar work in the winter?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"The short answer is YES they do. Although, given the cloud cover and weather exposure and the time of the year, the annual yield might be slightly less than what you would see in the summertime. However, solar panels can be more efficient in colder temperatures depending on location. No matter the weather conditions, Semper Solaris has experience designing solar panel systems to endure cold weather conditions."}
        }, {
        "@type": "Question",
        "name": "How many solar panels do I need?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"The number of <a href=/solar-panels/>solar panels</a> that you need will vary depending on the amount of your electric bill. The average home in a sunny climate typically needs anywhere from 18-20 panels and will usually offset an electric bill of about $200 a month."}
        }, {
        "@type": "Question",
        "name": "What happens if there is an issue with my solar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If, by any chance, there are issues with your panels, we try to troubleshoot with you through the phone remotely. If that does not work, we try to get one of our technicians out there by the next day, or sometimes the same day. If the problem still persists, please fill out our <a href=https://sempersolaris.force.com/selfschedule/s/book>schedule service form</a>."}
        }, {
        "@type": "Question",
        "name": "What happens after my solar is installed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"After your installation is complete, we then need to coordinate with the local jurisdiction to have your system inspected. We will meet with the city or county representatives on-site the day of the inspection and get it signed off so we can have all of our permits balanced."}
        }, {
        "@type": "Question",
        "name": "Does Semper Solaris offer scholarships?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Yes! Semper Solaris offers current college students and graduating high school seniors the opportunity at a money prize towards your education. You can submit your entry <a href=https://www.sempersolaris.com/semper-cares-initiative/scholarships/>here</a>."}
        }, {
        "@type": "Question",
        "name": "How do solar panels work?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Well, <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> work very simply:<ul><li>you put them on a roof</li><li>you expose them to the sun</li><li>the sun hits the solar panels and it creates DC power</li></ul>From there, it will go into an inverter which converts the DC power into AC power, which is then connected directly to the home. All that AC power will power the home and cover the home's loads."}
        }, {
        "@type": "Question",
        "name": "How long is the warranty on solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Many people ask: How long is the warranty for the panels we sell? And regardless of the kind of panel, the warranty is going to be 25 years. Read more on the different warranties we offer <a href=https://www.sempersolaris.com/warranties/>here</a>."}
        }, {
        "@type": "Question",
        "name": "Do I need to maintain my solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"No. Once the system is installed, if it was done right with the utmost quality, panels are maintenance-free and should require pretty much no maintenance. This includes check-up, or upkeep for at least ten years, except for maybe minimal washing, if you don't live in an area that gets a lot of rain."}
        }, {
        "@type": "Question",
        "name": "How do I clean my solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"To clean <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> on your roof, you would either early in the morning or late in the afternoon, take a hose with a spray nozzle and shoot water up onto the roof. Rinse off any dirt, or dust, or other debris that has built-up."}
        }, {
        "@type": "Question",
        "name": "What is the difference between monocrystalline and polycrystalline solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Both panels are the same, in the sense that they're both a crystalline product. However, polycrystalline has a speckled look to it, whereas monocrystalline has a very solid look. Monocrystalline is also slightly more efficient because of how it's made."}
        }, {
        "@type": "Question",
        "name": "If I lose power from the utility company, will my solar still work?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"No. For your solar system to power your home in a grid outage, you would require <a href=https://www.sempersolaris.com/battery-storage/>battery storage</a> for your home. We do offer those here at Semper so, if you are interested, please ask your sales rep."}
        }, {
        "@type": "Question",
        "name": "Can solar help me if my electric bill is already low?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"We've seen bills as low as $60. We're still able to save money monthly. What we need to think about is locking in your gas rates. 20 years ago at a buck-a-gallon, if you could've done that, then would you have done it? It's the same thing with solar having the ability to lock in your rates now will save you money for years to come."}
        }, {
        "@type": "Question",
        "name": "Can I add panels to my existing solar system?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"You can include panels to your existing system, as long as they are compatible with the current system."}
        }, {
        "@type": "Question",
        "name": "Can you make money from your solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"You can't necessarily make money off your <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a>. However, you can earn credit with your utility. Many of our sales reps and engineers size your system to cover your utility and make a little extra. So that way, you do have a credit with your utility and make money in a sense."}
        }, {
        "@type": "Question",
        "name": "Do you work with systems installed by other companies?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"We can work with systems installed by other companies, except when they are a leased system."}
        }, {
        "@type": "Question",
        "name": "What happens to my solar If I move?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"When a customer moves, they have a few options. You can opt into uninstalling your system and moving it to your new home. We can give you a quote for that, or you can potentially increase the value of your home based on leaving the panels there for the next homeowner."}
        }, {
        "@type": "Question",
        "name": "What happens if a solar panel breaks?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If a <a href=https://www.sempersolaris.com/solar-panels/>solar panel</a> ends up breaking on your house as the results of our monitoring technology that'll be instantly picked up.<br /><br />These solar panels are by default under <a href=https://www.sempersolaris.com/warranties/>warranty for 25 years</a>, so if a solar panel breaks on the house it will be known by us very quickly and it will be replaced as course of the warranty."}
        }, {
        "@type": "Question",
        "name": "How do solar panels help the environment?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Traditional electricity is derived from fossil fuels such as coal or natural gas. <a href=https://www.sempersolaris.com/going-solar-can-benefit-the-environment/>Solar panel systems help the environment</a> by generating clean electricity without producing carbon dioxide and other pollutants that negatively affect the atmosphere."}
        }, {
        "@type": "Question",
        "name": "How do earthquakes affect solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Your roof-mounted solar system is rated and certified by independent labs. They have been verified through rigorous structural calculations and structural reviews. The solar system will not do any additional damage to your home that would not have already been done by an earthquake.<br /><br />All structures are built to earthquake standards. The solar that is put on the roof is upheld to those standards. There are no dangers associated basically with putting PV on your roof, that wouldn't already be there if you were just under a standard roof."}
        }, {
        "@type": "Question",
        "name": "Can I use my solar if there is a power outage?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Unfortunately, your solar system does also turn off during the power outage unless you have <a href=https://www.sempersolaris.com/battery-storage/>battery storage</a>. These are all grid-tied systems. They do need power recognized to be able to convert the energy from the Sun into usable power to the grid."}
        }, {
        "@type": "Question",
        "name": "What is an overlay?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"When you're considering solar, one of the things that comes to mind is aesthetic and design, or, simply put, what will my solar panels look like?<br /><br />In order to ensure you enjoy what your panels look like on your roof, our design team creates what we call an overlay. The overlay shows you the layout of the <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> and where Semper Solaris is planning on installing them, and you can either approve or reject the design to your liking! Our goal is for you to love your panels!"}
        }, {
        "@type": "Question",
        "name": "Who can I contact for questions about my solar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"You can call the mainline, 619-715-4054. Press option 2 and then 3 to reach the Service Department."}
        }, {
        "@type": "Question",
        "name": "Can you install a solar system on an old roof?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Technically, you can, but you will be facing issues.<br /><br />Older roofs tend not to be able to be as waterproofed. Also, if you are going to put <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> on an old roof, your roof is not going to last twenty years if it's not in great shape.<br /><br />When you go to <a href=/roofing/>replace your roof</a>, you're going to have to remove all the solar panels and then reinstall them. At the time that you buy your solar, it's always a great idea to make sure that you're installing them on a new roof."}
        }, {
        "@type": "Question",
        "name": "Can I Use Existing Solar Panels With A New Pool?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"So you have an existing solar system but you're thinking about adding a pool. What you would want to do is determine the size of the pool motor and determine how many hours per day you plan on filtering your pool.<br /><br />Based on that we can run calculations to determine how many additional panels you need to cover the additional electrical load of that pump. Typically a pool pump will require about 0.75 kilowatts for every horsepower of the motor that you want to run."}
        }, {
        "@type": "Question",
        "name": "How Will Shade Affect My Solar Panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"When <a href=https://www.sempersolaris.com/solar-panels/>installing a solar system</a>, shading is always a concern that should be taken into consideration. A lot of times people will ask, “I have a tree over there what happens when the tree shades my panels?” or “I have a chimney” or “I have a roof obstruction like a vent or a satellite dish, how will it affect the output of my system?”<br /><br />All systems are currently designed with optimizers or microinverters and what's great about this system design is that if you do get spot shading or shading from a tree or other obstacle during certain parts of the day, it won't negatively affect the overall output of the system as every panel’s individual from the one next to it."}
        }, {
        "@type": "Question",
        "name": "How Will I Be Billed For The Power My Solar Panels Produce?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"When you go solar you'll enter into a <a href=https://www.sempersolaris.com/what-is-net-metering/>net energy metering agreement</a> with the local utility company. What's going to happen is rather than being billed once a month like you are now, you're going to be put on a yearly billing cycle.<br /><br />From month to month within that billing cycle, you will get a statement but no money is due. You only have to pay at the end of the year which is called your true-up. When you get your true-up bill if you've produced more solar than you need and you have no fixed charges, then you would owe no money. However, if you have not produced enough solar power and there are fixed charges as part of your true bill you would have to make that payment to the utility."}
        }, {
        "@type": "Question",
        "name": "What Will Happen if the Power Goes Out?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"What happens if the power goes out? Under normal circumstances, if the power goes out at your home, unfortunately, your Solar will turn off. However, a way to combat this would be to add a <a href=https://www.sempersolaris.com/battery-storage/>battery storage</a> unit."}
        }, {
        "@type": "Question",
        "name": "How Do I Reset My System After The Power Goes Out?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Unfortunately, if the power goes out your system will turn off. However, there's nothing you need to do to reset your system because when the power comes back on the system will automatically reboot and turn itself back on. An easy way to confirm that this has happened is you can go online and check your monitoring portal to confirm that your system is producing."}
        }, {
        "@type": "Question",
        "name": "Can I use Existing Solar Panels With A New Electric Car?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"So you have an existing solar system, and you're thinking of adding an electric car. What you'd want to do is you would want to add more <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> to produce more electricity to cover the usage from that electric car. In addition to adding more electrical panels to your system, you'd want to install an electric car charger with a plug that's compatible with the electric car of your choice."}
        }, {
        "@type": "Question",
        "name": "How will the solar panels be mounted?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Design and engineering are one of our central departments here at Semper Solaris, and they work with the city's jurisdiction to ensure that your panels are going to meet your city code. While some people may like their panels on a specific portion of their roof or aligned a certain way.<ol><li>It might not meet the best production</li><li>It might not be in-line with your city's jurisdiction</li></ol>Our design &amp; engineering team takes pride in what they do, and they go the extra mile to make sure that your system is going to be as productive as possible and meet all the city codes for permitting."}
        }, {
        "@type": "Question",
        "name": "When can I turn on my solar system?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It usually takes about two weeks with SDG&amp;E and inspection approval."}
        }, {
        "@type": "Question",
        "name": "Can you install solar on any type of roof?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Our contractors have installed on many different types of roofs, and there are very few limitations with our team. The main thing is that the mounting hardware will vary depending on material and panels used."}
        }, {
        "@type": "Question",
        "name": "How will I be updated on the install progress?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"The local branch will reach out to the customers about every couple of weeks to give you an update as to where the project stands."}
        }, {
        "@type": "Question",
        "name": "How long does it take to get an install date?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Once you sign a solar contract with us, you can expect your panels to be installed within 6-10 weeks."}
        }, {
        "@type": "Question",
        "name": "What time will the installers arrive?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Our installers will get there at approximately 7:00 AM and we usually wrap up at 5:00 PM which is the end of our day."}
        }, {
        "@type": "Question",
        "name": "How long will my solar installation take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"A typical installation with Semper Solaris takes 1-2 days. Some of the more significant projects will go on a little bit longer. Larger projects will expand that timeline, and that will be identified before the project start date."}
        }, {
        "@type": "Question",
        "name": "What is battery storage?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"<a href=https://www.sempersolaris.com/battery-storage/>Battery storage</a> consists of a device that reserves energy for later consumption that is charged by a connected solar system."}
        }, {
        "@type": "Question",
        "name": "Why do I need battery storage?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Having a <a href=https://www.sempersolaris.com/battery-storage/>solar battery storage system</a> can help control the amount of energy you use during peak-hours. It can store the extra energy generated from your <a href=https://www.sempersolaris.com/solar-panels/>solar panels</a> during the day for you to use at more expensive rate times."}
        }, {
        "@type": "Question",
        "name": "How does battery storage work?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"The electricity that is stored in your battery is consumed after sundown, during energy demand peaks, or during a power outage. The battery will continue to power your home despite the lack of energy from the electric company."}
        }, {
        "@type": "Question",
        "name": "What Is The Difference Between Full & Partial Home Backup?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If you have an existing <a href=https://www.sempersolaris.com/solar-panels/>solar panel system</a> and you don't currently have a battery, one of the great things you can do with the <a href=https://www.sempersolaris.com/battery-storage/tesla-powerwall/>Tesla Powerwall</a> is you can install two or more power walls and do what's called whole-home backup.<br /><br />When you do a whole home back up what we do is we take all the circuits in your existing main service panel and we move it to a dedicated sub-panel. We then install your gateway and what will happen is that if the power goes out all the circuits in your home will be backed up, which means that you can run anything in your home on the powerwalls for as long as the powerwalls have power.<br /><br />If you only have one Tesla Powerwall we can do what's called a partial home backup. We would take certain circuits out of your main service panel and put it into a dedicated load center. Whenever the power would go out that power wall would then power those dedicated circuits.<br /><br />Typical circuits that people backup would be refrigerators, deep freezes, maybe basic lights in the bathroom or the kitchen, alarm systems, internet, computer or entertainment systems."}
        }, {
        "@type": "Question",
        "name": "With Tesla Powerwall, Will I Be Affected by Blackouts?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If the power goes out and you have a <a href=https://www.sempersolaris.com/battery-storage/tesla-powerwall/>Tesla Battery</a> that is set up as partial backup all of your backup loads will immediately be powered and you won't even notice. If you have whole home backup which means you have 2 Powerwalls or more, again you will not notice that the powers gone out.<br /><br />If you're sitting in your living room and you're playing video games you won't even notice. If your <a href=https://hvac.sempersolaris.com/>air-conditioning</a> is on you won't even notice. If your fish tank is on you won't even notice, the lights won't dim, it's instantaneous and you would never know what the power's out unless you went outside to see that all their neighbors are in the dark."}
        }, {
        "@type": "Question",
        "name": "Do I need to Set My Tesla Powerwall to Backup Power Mode?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"One of the other cool functions of <a href=https://www.sempersolaris.com/battery-storage/tesla-powerwall/>Tesla Powerwall</a> is that, in the case of emergency, Tesla will send a notification to your Powerwall if there's going to be a prolonged blackout and emergency to change the setting on your Powerwall for the time of use arbitrage into a 100% full backup.<br /><br />Now if you know this is going to happen, you can manually change your Powerwall to go into 100% backup mode but because Tesla is so smart it can do it for you."}
        }, {
        "@type": "Question",
        "name": "Can I Install a Battery to Already Existing Solar Panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"YES! If you have an existing <a href=https://www.sempersolaris.com/solar-panels/>solar panel system</a> and you're interested in adding <a href=https://www.sempersolaris.com/battery-storage/>battery storage</a> in the future, it's very easy to do. One of the examples of batteries out there is made by a company called Tesla. <a href=https://www.sempersolaris.com/battery-storage/tesla-powerwall/>Tesla Powerwall 2</a> is an AC coupled battery, which means that that battery can be easily retrofitted into any existing system that already has solar."}
        }, {
        "@type": "Question",
        "name": "What does it mean to be an Owens Corning Platinum Roofing Preferred Contractor?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It means we're in a very select group of contractors. We're 1-in-500 in the nation. We offer some of the <a href=https://www.sempersolaris.com/warranties/>best warranties</a> in roofing including a <a href=https://www.sempersolaris.com/wp-content/uploads/2020/09/Owens-Corning-Warranty.pdf>50-year workmanship warranty</a> on all Owens-Corning projects that we install and a lifetime warranty on their materials."}
        }, {
        "@type": "Question",
        "name": "Can I get a new roof if I already have solar panels installed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"The great thing about working with Semper is we're a <a href=/solar-panels/>solar contractor</a>, and we're a <a href=/roofing/>roofing contractor</a>. A majority of systems we can remove and reinstall for you without getting anyone else involved."}
        }, {
        "@type": "Question",
        "name": "How long does a roofing project usually take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It varies, but for most houses, we'll be in and out within 3-4 days. If you have a big house, it's going to take longer. 3-4 days is a pretty good average time for a roofing project."}
        }, {
        "@type": "Question",
        "name": "Do I need to be home for a new roof installation?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It's pretty noisy and it can get a little messy, so even though we clean up at the end of every single day, no need to be home, we'll look after it."}
        }, {
        "@type": "Question",
        "name": "How long does a roofing project usually take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It varies, but for most houses, we'll be in and out within 3-4 days. If you have a big house, it's going to take longer. 3-4 days is a pretty good average time for a roofing project."}
        }, {
        "@type": "Question",
        "name": "How do I know if my roof is fit for solar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Just ask us. We have a very knowledgeable staff on hand and we're aware of a wide variety of roofs. <br /><br />Even if it's something that's not quite so common, we're very capable of adapting our installation tactics in order to make it fit your given roof surface."}
        }, {
        "@type": "Question",
        "name": "What goes into a roof system?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"A durable roof is made of more than just shingles. Protecting your home requires a <a href=/roofing/>complete roofing system</a> that creates a waterproof barrier, defends against nature’s elements, and provides proper ventilation. In hot areas, homeowners need to think about the extra heat and sun exposure, too.<br /><br />Your total roof system needs to consist of barriers, underlayment, starter shingles, hip and ridge shingles, ventilation products, and insulation. In order to prevent leaks, you need to start with the right underlayment.<br /><br />Water barrier products, such as the Owens Corning Weather Lock, protect your new roof from wind, rain, and other elements, while barriers and underlayment stop moisture and mold from seeping through your roof. For added quality, synthetic material like Owens Corning ProArmour with Fusion Back Coating Technology is stronger than traditional felt underlayment, reducing the chance of tears and leaks."}
        }, {
        "@type": "Question",
        "name": "How Are Tile Roof Systems Constructed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"JP McEvenue, executive director of roofing operation at Semper Solaris, discusses how tile roof systems are installed. In the video, you'll learn about both standard <a href=https://www.sempersolaris.com/roofing/>roof installation</a> and energy-efficient roof installation. From how to remove an existing roof, to cleaning the bare wood deck, to installing the underlayment, to allowing airflow under the roofing tiles in order to keep temperatures cooler. Semper Solaris is proud to offer a wide selection of roofing contractors including Owens Corning, Eagle Roofing, Boral, Genflex, IB Roof and Polyglass."}
        }, {
        "@type": "Question",
        "name": "Are there financing options available when getting solar panels?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Yes, we have multiple different kinds of <a href=https://www.sempersolaris.com/solar-panels/solar-financing/>financing options</a>. I would recommend talking to your sales rep to find out more."}
        }, {
        "@type": "Question",
        "name": "What is a PACE Program?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"A PACE Program is an equity-based loan that is tied to your property taxes. You pay your monthly payments into a reserve account, and then it's paid at the end of the year for your property taxes."}
        }, {
        "@type": "Question",
        "name": "What are the payment terms for my solar system?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Different people in the home may have different questions. Also, numerous decisions need to be made, such as panel type and inverter type, or where the mount is going to take place. So, when we have everyone in the household present, it makes answering those questions much easier. Also, we don't have to come back and have to answer questions multiple times."}
        }, {
        "@type": "Question",
        "name": "What is a PPA?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"PPA stands for a Power Purchase Agreement. It is an agreement between you and a third party financier where we put solar on your roof, and you pay for the actual output of what the solar produces."}
        }, {
        "@type": "Question",
        "name": "When should I fund my solar loan?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"We suggest that you submit all required documentation to the credit union as soon as possible to get your loan ready to fund. Once we are within 1 to 2 weeks of installation, we will request that you fund the loan at that time so we can avoid delays. It is best if you contact your loan processor as soon as possible to finalize the loan and make sure there are no outstanding items."}
        }, {
        "@type": "Question",
        "name": "What is the difference between a Solar Lease and a PPA?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"With a <a href=https://www.sempersolaris.com/what-you-need-to-know-about-solar-leases/>Solar Lease</a>, you agree to pay a fixed monthly rent, which is calculated using the estimated amount of electricity the system will produce. With a Solar PPA, instead of paying to rent the solar system, you agree to purchase the power generated by the system at a per-kilowatt price in exchange for the right to use the solar system."}
        }, {
        "@type": "Question",
        "name": "What is a Solar Lease?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"A <a href=https://www.sempersolaris.com/what-you-need-to-know-about-solar-leases/>solar lease</a> is an agreement between you as the homeowner and a third party financer where you make monthly payments for the solar. It usually comes with no money upfront."}
        }, {
        "@type": "Question",
        "name": "What Financial Options Are Available When Going Solar?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"When going solar there are multiple <a href=https://www.sempersolaris.com/solar-panels/solar-financing/>financial options</a> that you can consider. One of the most common ways out there to go solar is to either pay cash or do some sort of financing.<br /><br />Another option would be to do a PPA or a lease agreement. A PPA is a power purchase agreement where you sign up with a third-party entity and you basically pay for the power as it's produced on a monthly basis.<br /><br />A lease, on the other hand, would be an agreement that you would sign with a third party owner and you would pay a fixed payment every month regardless of the output of the system."}
        }, {
        "@type": "Question",
        "name": "Why do both homeowners need to be home for the consultation?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"We want to make sure everyone gets all the information in the same sitting. Being able to answer all questions at the same time is important, and it helps you get through the process much faster."}
        }, {
        "@type": "Question",
        "name": "How long does the permitting process take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Depending on your jurisdiction, it can take anywhere from 2 to 4 weeks."}
        }, {
        "@type": "Question",
        "name": "Why is it important to heed the advice of the designer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Many variables play into the production of a system and what makes a sound solar system. Our solar design team has upwards of 10 years of experience between them.we've been designing jobs; we've probably done over 10,000 jobs all together. What that experience gives us is knowledge of what makes a sound solar system, which makes a solar system produce best, and what benefits the customers. If you listen to the designers, it's more likely that the system is going to produce and be as beneficial to you as it can be."}
        }, {
        "@type": "Question",
        "name": "How long will a roofing or solar install take?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If you are going to be doing a <a href=https://www.sempersolaris.com/roofing/>roofing project</a> with us, that can take anywhere from 3 to 4 days, depending on the size of your roof. A <a href=https://www.sempersolaris.com/solar-panels/>solar project</a> can take anywhere from 2 to 3 days. This is depending on how many panels being installed. Then on each project following that will be your inspections."}
        }, {
        "@type": "Question",
        "name": "What are the benefits to having both projects done by the same company?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Beyond one company carrying both warranties, if you've ever done a construction project before with multiple trades, it's messy when they're stepping on each other's toes. So having one point of contact to really manage that project makes it a much, much smoother process."}
        }, {
        "@type": "Question",
        "name": "Is it a good idea to install solar and roofing at the same time?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"It's a fantastic time to do that. The <a href=https://www.sempersolaris.com/warranties/>warranty periods</a> are about the same. We have a 50-year warranty on most of our roof systems 25-year warranty on the solar. It's great to start them at the same time."}
        }, {
        "@type": "Question",
        "name": "How do I get my referral check?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If you <a href=https://www.sempersolaris.com/refer-friend/>refer someone to Semper Solaris</a> and they put you on their application as their referral, our accounting department sends you a check for $550 once their project is installed, completed, and paid in full."}
        }, {
        "@type": "Question",
        "name": "Is there a reward for referrals?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"If you <a href=https://www.sempersolaris.com/refer-friend/>refer someone</a> you can get $550 if it is a solar job and $200 if it's a roofing job."}
        }]
    }
    </script>
<?php
get_footer();
