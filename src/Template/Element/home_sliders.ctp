<!-- Slider Revolution Start -->
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul>
            <?php $index = 0; ?>
            <?php foreach ($HomeSliders as $HomeSlider): ?>
                <?php if ($HomeSlider['locale'] == $this->request->session()->read('lang')): ?>
                    <?php $index ++; ?>
                    <?php $borderRadius = $HomeSlider['border'] == "circular" ? "border-radius:45px;" : "" ?>
                    <li data-index="rs-<?= $index ?>" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="images/bg/bg14.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="<?= str_replace("webroot/", "", $HomeSlider['dir']) . $HomeSlider['photo'] ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-dark-transparent-5 pl-15 pr-15"
                             id="rs-<?= $index ?>-layer-1"

                             data-x="['<?= $HomeSlider['align'] ?>']"
                             data-hoffset="['30']"
                             data-y="['middle']"
                             data-voffset="['-110']" 
                             data-fontsize="['30']"
                             data-lineheight="['50']"

                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;s:500"
                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap; font-weight:600; <?= $borderRadius ?>">
                                 <?= $HomeSlider['layer1'] ?>
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme text-uppercase text-white bg-theme-colored-transparent pl-15 pr-15"
                             id="rs-<?= $index ?>-layer-2"

                             data-x="['<?= $HomeSlider['align'] ?>']"
                             data-hoffset="['30']"
                             data-y="['middle']"
                             data-voffset="['-45']" 
                             data-fontsize="['48']"
                             data-lineheight="['70']"

                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;s:500"
                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap; font-weight:600; <?= $borderRadius ?>">
                                 <?= $HomeSlider['layer2'] ?>
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme text-black" 
                             id="rs-<?= $index ?>-layer-3"

                             data-x="['<?= $HomeSlider['align'] ?>']"
                             data-hoffset="['35']"
                             data-y="['middle']"
                             data-voffset="['35','45','55']"
                             data-fontsize="['16','18','24']"
                             data-lineheight="['28']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;s:500"
                             data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                             data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1400" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">
                                 <?= $HomeSlider['layer3'] ?>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption" 
                             id="rs-<?= $index ?>-layer-4"

                             data-x="['<?= $HomeSlider['align'] ?>']"
                             data-hoffset="['35']"
                             data-y="['middle']"
                             data-voffset="['110','120','140']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1400" 
                             data-splitin="none" 
                             data-splitout="none" 
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap; letter-spacing:1px;">
                            <a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#"><?= $HomeSlider['layer4'] ?></a> 
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div><!-- end .rev_slider -->
</div>
<!-- end .rev_slider_wrapper -->
<script>
    $(document).ready(function (e) {
        var revapi = $(".rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {h_align: "left", v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {h_align: "right", v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [600, 668, 860, 620],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off", fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    });
</script>
<!-- Slider Revolution Ends -->