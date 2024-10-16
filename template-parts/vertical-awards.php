        
        <?php 
        global $parent_id;
         $service = '';
         switch(get_post_field( 'post_name', get_post($parent_id) )) : 
             case 'solar-panels': 
                 $service ='solar';
             break; 
             case 'battery-storage': 
                 $service ='battery';
             break;
             case 'roofing': 
                 $service ='roofing';
             break;
             case 'heating-air-conditioning': 
                 $service ='hvac';
             break;
             case null:
                 $service = 'hvac';
             break;
         endswitch;
        ?>  

       
        
<!--  HVAC AWARDS  -->
    <?php if( $service === 'hvac' ) : ?>
        <style>
            .awards-background{
                background: url('https://texas.sempersolaris.com/wp-content/uploads/2022/05/05-05-SMPCA-HVAC-Awards-Desktop-Blue-Background-1.jpg') no-repeat;
               max-width: 1800px;
               margin:auto;
            }
        </style>
       
        <section style="background-color:#06385D">
            <?php if(!wp_is_mobile()) : ?>
            <div class="awards-background" >
                <div class="justify-content-around p-5 text-white text-center" style="max-width:1100px; margin:auto; position:relative;">
                    <p class="m-0" style="font-size: 20px;" role="heading">HEATING AND AIR CONDITIONING AWARDS</p>
                    <p  style="font-size: 28px;" role="heading"><strong role="heading"> Over the Years Semper Solaris Has Won Many Awards </strong></p>
                    <div class="d-flex row justify-content-center my-auto gap-3">
                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="180" height="160" src="https://texas.sempersolaris.com/wp-content/themes/semper-texas-child/assets/icons/awards/05 05 SMPCA HVAC 2021 Samsung.png" alt="2021 Samsung Highest Year Over Year Growth award" /> 
                            <figcaption style="line-height: 20px;">2021 Samsung <br> Highest Year Over <br> Year Growth </figcaption>
                        </figure>
                        <figure class="col-2 p-0 " style="margin-top: auto; role="none"">
                            <img loading="lazy" width="110" height="145" src="https://texas.sempersolaris.com/wp-content/themes/semper-texas-child/assets/icons/awards/05 05 SMPCA HVAC Residential Top Producer.png" alt="Residential National Top Producer of the Year award" />
                            <figcaption style="line-height: 20px;">Residential National <br> Top Producer <br> of the Year</figcaption>
                        </figure>
                        <figure class="col-2 p-0  " style="margin-top: auto; role="none"" >
                            <img loading="lazy" width="110" height="165"  src="https://texas.sempersolaris.com/wp-content/themes/semper-texas-child/assets/icons/awards/05 05 SMPCA HVAC Residential National Dealer.png" alt="Residential HVAC Nation Dealer of the Year award" />
                            <figcaption style="line-height: 20px;">Residential <br> National Dealer <br> of the Year</figcaption>
                        </figure>
                    </div>
                    <p style="font-size: 28px;" role="heading"> <strong role="heading">And We're Just Warming Up </strong> </p>
                </div>
            <?php else : ?> 
                <img loading="lazy" src="https://texas.sempersolaris.com/wp-content/uploads/2022/05/05-05-SMPCA-HVAC-Awards-Mobile-Layout-Background.jpg" alt="Heating and Air Conditioning awards" />   
            <?php endif; ?>
            </div>
        </section>
<!-- SOLAR AWARDS -->
        <?php elseif( $service === 'solar') : ?>
            <style>
            .awards-background{
                background: url('https://texas.sempersolaris.com/wp-content/uploads/2022/05/05-05-SMPCA-HVAC-Awards-Desktop-Blue-Background-1.jpg') no-repeat;
               background-position: center;
               margin:auto;
               background-size: cover;
               

            }
        </style>
            <section style="background-color:#06385D">
            <?php if(!wp_is_mobile()) : ?>
            <div class="awards-background" >
                <div class="justify-content-around p-5 text-white text-center" style="max-width:1100px ; margin:auto ; position:relative;">
                    <p class="m-0" style="font-size: 20px;" role="heading">SOLAR AWARDS</p>
                    <p  style="font-size: 28px;" role="heading"><strong role="heading"> Over the Years Semper Solaris Has Won Many Awards </strong></p>
                    <div class="d-flex flex-wrap  justify-content-center my-auto gap-2 ">
                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy" width="135" height="160" src="https://smpstage.wpengine.com/wp-content/uploads/2023/08/SMP-Solar-Power-World-Award-2023.png" alt="2023 Top Solar + Storage Residential Installer Award" style="margin-bottom: 9px;" />
                            <figcaption style="line-height: 20px;">2023 Top Solar<br> + Storage <br>Residential Installer </figcaption>
                        </figure>

                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="135" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/08/SMP-Solar-Power-World-Top-Solar-Storage-Residential-Installer-2022.png" alt="2022 Top Solar + Storage Residential Installer Award" style="margin-bottom: 9px;" /> 
                            <figcaption style="line-height: 20px;">2022 Top Solar<br> + Storage <br>Residential Installer </figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="135" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2021-Top-Solar-Storage-Installer.png" alt="2021 Top Solar + Storage Installer Award" /> 
                            <figcaption style="line-height: 20px;">2021 Top Solar<br> + Storage <br> Installer Award </figcaption>
                        </figure>
                        <figure class="col-2 p-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy" width="135" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2019-Residential-Installer.png" alt="2019 Residential Installer of the Year Award" />
                            <figcaption style="line-height: 20px;">2019 Residential<br> Installer of the  <br>Year Award</figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy" width="135" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2018-Solar-Vet50.png" alt="Inc. 5000 Vet 50 2018 award" />
                            <figcaption style="line-height: 20px;">Inc. 5000 <br>Vet 50 2018 <br> </figcaption>
                        </figure>
                    </div>

                    <div class="d-flex row justify-content-center my-auto gap-3">
                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="145" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2017-Solar-Residential-Volume.png" alt="2017 Residential Volume Dealer Of the Year award"> 
                            <figcaption style="line-height: 20px;">2017 Residential <br> Volume Dealer <br> of the Year</figcaption>
                        </figure>
                        <figure class="col-2 p-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy" width="145" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2016-Solar-Residential-National.png" alt="2016 Residential National Dealer of the Year award">
                            <figcaption style="line-height: 20px;">2016 Residential <br> National Dealer <br> of the Year </figcaption>
                        </figure>
                        <figure class="col-2 p-0  " style="margin-top: auto;" role="none">
                            <img loading="lazy" width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2016-Solar-Residential-National-Producer.png" alt="2016 Residential National Top Producer of the Year award">
                            <figcaption style="line-height: 20px;">2016 Residential <br> National Top <br> Producer of the Year</figcaption>
                        </figure>
                        <figure class="col-2 p-0  " style="margin-top: auto;" role="none">
                            <img loading="lazy" width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2015-Solar-Residential-National.png" alt="2015 Residential National Dealer of the Year award">
                            <figcaption style="line-height: 20px;">2015 Residential <br> National Dealer <br> of the Year <br></figcaption>
                        </figure>
                        <figure class="col-2 p-0  mt-0" style="margin-top: auto;" role="none">
                            <img loading="lazy"  width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2014-Solar-Residential-Rising-Star-1.png" alt="2014 Residential National Rising Star award">
                            <figcaption style="line-height: 20px;">2014 Residential <br> National Rising Star</figcaption>
                        </figure>
                    </div>


                    <p style="font-size: 28px;" role="heading"> <strong role="heading">And We're Just Warming Up </strong> </p>
                </div>
            <?php else : ?> 
                <img class="mx-auto" loading="lazy" src="https://smpstage.wpengine.com/wp-content/uploads/2023/08/SMP-Solar-Awards-Mobile.jpg" alt="awards">   
            <?php endif; ?>
            </div>
        </section>
    <!-- Roofing Section -->
        <?php elseif($service == 'roofing') : ?> 
            <style>
            .awards-background{
                background: url('https://texas.sempersolaris.com/wp-content/uploads/2022/05/05-05-SMPCA-HVAC-Awards-Desktop-Blue-Background-1.jpg') no-repeat;
               background-position: center;
               margin:auto;
               background-size: cover;
               

            }
        </style>
            <section style="background-color:#06385D">
            <?php if(!wp_is_mobile()) : ?>
            <div class="awards-background" >
                <div class="justify-content-around p-5 text-white text-center" style="max-width:1100px ; margin:auto ; position:relative;">
                    <p class="m-0" style="font-size: 20px;" role="heading">ROOFING AWARDS</p>
                    <p  style="font-size: 28px;" role="heading"><strong role="heading"> Over the Years Semper Solaris Has Won Many Awards </strong></p>
                    <div class="d-flex flex-wrap  justify-content-center my-auto gap-2 ">
                         <figure class="col-2 p-0 mt-0" role="none">
                            <img loading="lazy" width="140" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/05-05-23-Owens-Corning-Platinum-Top-Performer-2023-1-e1683321313981.png" alt="2023 Best roofing contractor" />
                            <figcaption style="line-height: 20px;">2023 Owens Corning<br> Top Performer Platinum Warranty<br></figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0" role="none">
                            <img loading="lazy" width="140" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/05-05-23-Owens-Corning-Platinum-Excellence-Award-2023-1-2-e1683323144918.png" alt="2023 Best roofing companies" />
                            <figcaption style="line-height: 20px;">2023 Owens Corning <br> Product Excellence <br></figcaption>
                        </figure>


                        <figure class="col-2 p-0 mt-0" role="none">
                            <img style="margin-top: 62px;" loading="lazy" width="140" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/08/SMP-Roofing-Award-Excellence-Desktop.png" alt="2022 Platinum Excellence award" />
                            <figcaption style="line-height: 20px;">2022 Owens Corning<br> Platinum Excellence <br> </figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0" role="none">
                            <img style="margin-top: 62px;" loading="lazy" width="140" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/08/SMP-Roofing-Award-Performer-Desktop.png" alt="2022 Roofing Platinum Top Performer Award" />
                            <figcaption style="line-height: 20px;">2022 Owens Corning <br> Top Performer <br></figcaption>
                        </figure>
                      
                        
                    </div>

                    <div class="d-flex flex-wrap  justify-content-center my-auto gap-2 ">
                        <figure class="col-2 p-0 mt-0" role="none">
                            <img loading="lazy"  width="140" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2022-Platinum-Excellence.png" alt="2022 Platinum Excellence award" /> 
                            <figcaption style="line-height: 20px;">2022 Owens Corning<br> Platinum Excellence <br>  </figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0" role="none">
                            <img loading="lazy"  width="140" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2022-Platinum-Top-Performer.png" alt="2022 Platinum Top Performer award" />
                            <figcaption style="line-height: 20px;">2022 Owens Corning <br> Platinum Top Performer  <br></figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy"  width="140" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2021-Product-Excellence.png" alt="2021 Product Excellence award" />
                            <figcaption style="line-height: 20px;">2021 Ownes Corning <br> Product Excellence <br> </figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy"  width="140" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2021-Top-Performer-MVP.png" alt="2021 Top Performer MVP award" />
                            <figcaption style="line-height: 20px;">2021 Ownes Corning <br> Top Performer MVP<br> </figcaption>
                        </figure>
                        <figure class="col-2 p-0 mt-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy"  width="140" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2021-Top-Performer-Platinum-Warranty.png" alt="2021 Top Performer Platinum Warranty award" />
                            <figcaption style="line-height: 20px;">2021 Ownes Corning <br> Top Performer <br> Platinum Warranty </figcaption>
                        </figure>
                    </div>

                    <div class="d-flex row justify-content-center my-auto gap-3">
                        <figure class="col-2 p-0 mt-auto" role="none">
                            <img loading="lazy"   width="145" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2020-Top-Performer-Platinum-Warranty.png" alt="2020 Top Performer Platinum Warranty award" /> 
                            <figcaption style="line-height: 20px;">2020 Owens Corning <br> Top Performer <br> Platinum Warranty</figcaption>
                        </figure>
                        <figure class="col-2 p-0 " style="margin-top: auto;" role="none">
                            <img loading="lazy"  width="145" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2019-Top-Performer-Warranty.png" alt="2019 Top Performer Platinum Warranty award" />
                            <figcaption style="line-height: 20px;">2019 Owens Corning<br> Top Performer<br> Warranty </figcaption>
                        </figure>
                        <figure class="col-2 p-0  my-auto" role="none">
                            <img loading="lazy"  width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2020-Product-Excellence-BP.png" alt="2020 Product Excellence award" />
                            <figcaption style="line-height: 20px;"> 2020 Owens Corning <br> Product Excellence <br> <br></figcaption>
                        </figure>
                        <figure class="col-2 p-0 my-auto "  role="none">
                            <img loading="lazy"  width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2020-Service-Excellence-BP.png" alt="2020 Service Excellence award" />
                            <figcaption style="line-height: 20px;"> 2020 Owens Corning <br> Service Excellence <br>  <br></figcaption>
                        </figure>
                        <figure loading="lazy"  class="col-2 p-0 my-auto " role="none" >
                            <img width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2019-Product-Excellence-BP.png" alt="2019 Product Excellence award" />
                            <figcaption style="line-height: 20px;"> 2019 Owens Corning <br> Product Excellence <br> Gold</figcaption>
                        </figure>
                    </div>


                    <p style="font-size: 28px;" role="heading"> <strong role="heading">And We're Just Warming Up </strong> </p>
                </div>
            <?php else : ?> 
                <img class="mx-auto" loading="lazy" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/05/SMP-Owens-Corning-Platinum-Top-Performer-2019-2023.png" alt="awards" />   
            <?php endif; ?>
            </div>
            </section>
        <?php else: ?>

            <!-- Battery Section -->
            <style>
            .awards-background{
                background: url('https://texas.sempersolaris.com/wp-content/uploads/2022/05/05-05-SMPCA-HVAC-Awards-Desktop-Blue-Background-1.jpg') no-repeat;
               background-position: center;
               margin:auto;
               background-size: cover;
            }
            @media screen and (min-width: 600px) {
                .awards-background .awards-text br {
                    display: none;
                }
            }
            @media screen and (max-width:600px) {
                .awards-text{
                    font-size: 18px !important;
                }
                .awards-text-end{
                    font-size: 18px !important;
                }
                .awards-background figcaption {
                    line-height: 17px !important;
                    font-size: 14px !important;
                }
            }
        </style>
            <section style="background-color:#06385D">
           
            <div class="awards-background" >
                <div class="justify-content-around pt-5 pb-5 pl-2 pr-2  p-md-5 text-white text-center" style="max-width:1100px ; margin:auto ; position:relative;">
                    <p class="m-0" style="font-size: 20px;" role="heading">BATTERY-STORAGE AWARDS</p>
                    <p class="awards-text" style="font-size: 28px;" role="heading"><strong role="heading"> Over the Years Semper Solaris Has <br> Won Many Awards </strong></p>
                    <div class="d-flex flex-wrap  justify-content-center my-auto gap-2 ">
                        <figure class="col-md-2 p-0 mt-auto" role="none">
                            <img loading="lazy" width="135" height="160" src="https://smpstage.wpengine.com/wp-content/uploads/2023/08/SMP-Solar-Power-World-Award-2023.png" alt="2023 Top Solar + Storage Residential Installer Award" style="margin-bottom: 9px;" />
                            <figcaption style="line-height: 20px;">2023 Top Solar<br> + Storage <br>Residential Installer </figcaption>
                        </figure>

                        <figure class="col-md-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="135" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/08/SMP-Solar-Power-World-Top-Solar-Storage-Residential-Installer-2022.png" alt="2022 Top Solar + Storage Residential Installer Award" style="margin-bottom: 8px;" /> 
                            <figcaption style="line-height: 20px;">2022 Top Solar<br> + Storage <br>Residential Installer </figcaption>
                        </figure>
                        <figure class="col-md-2 p-0 mt-auto" role="none">
                            <img loading="lazy"  width="135" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2021-Top-Solar-Storage-Installer.png" alt="2021 Top Solar + Storage Installer Award" /> 
                            <figcaption style="line-height: 20px;">2021 Top Solar<br> + Storage <br> Installer Award </figcaption>
                        </figure>
                        
                    </div>

                    <!-- <div class="d-flex row justify-content-center my-auto gap-3">
                        <figure class="col-2 p-0 mt-auto">
                            <img loading="lazy"  width="145" height="160" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2017-Solar-Residential-Volume.png" alt="2017 Residential Volume Dealer Of the Year award"> 
                            <figcaption style="line-height: 20px;">2017 Residential <br> Volume Dealer <br> Of the Year</figcaption>
                        </figure>
                        <figure class="col-2 p-0 " style="margin-top: auto;">
                            <img loading="lazy" width="145" height="145" src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2016-Solar-Residential-National.png" alt="2016 Residential National Dealer of the Year award">
                            <figcaption style="line-height: 20px;">2016 Residential <br> National Dealer <br> of the Year </figcaption>
                        </figure>
                        <figure class="col-2 p-0  " style="margin-top: auto;" >
                            <img loading="lazy" width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2016-Solar-Residential-National-Producer.png" alt="2016 Residential National Top Producer of the Year award">
                            <figcaption style="line-height: 20px;">2016 Residential <br> National Top <br> Producer of the Year</figcaption>
                        </figure>
                        <figure class="col-2 p-0  " style="margin-top: auto;" >
                            <img loading="lazy" width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2015-Solar-Residential-National.png" alt="2015 Residential National Dealer of the Year award">
                            <figcaption style="line-height: 20px;">2015 Residential <br> National Dealer <br> of the Year <br></figcaption>
                        </figure>
                        <figure class="col-2 p-0  mt-0" style="margin-top: auto;" >
                            <img loading="lazy"  width="145" height="145"  src="https://smpbackup.wpengine.com/wp-content/uploads/2022/06/05-24-SMP-Awards-2014-Solar-Residential-Rising-Star-1.png" alt="2014 Residential National Rising Star award">
                            <figcaption style="line-height: 20px;">2014 Residential <br> National Rising Star</figcaption>
                        </figure>
                    </div> -->


                    <p class="awards-text-end" style="font-size: 28px;" role="heading"> <strong role="heading">And We're Just Warming Up </strong> </p>
                </div>
         
            </div>
        </section>
        <?php endif; ?>