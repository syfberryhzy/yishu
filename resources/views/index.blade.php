@extends('layouts.app')

@section('content')

    <div class="page section2 section" id="page-2" style="display: flex">
        <div style="align-items: center;margin: auto">
            <div class="home-page2-header-content container">
                <h1 class="col-md-12  home-page2-big-title">定制属于你的设计</h1>
                <hr class="center-block home-hr"/>
                <h4 class="col-md-12  home-page2-big-title-txt">你需要的，由我们为你量身打造</h4>
            </div>
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="home-page2-container-content">
                        <div class="home-brand-box">
                            <div class="home-page2-container-image home-brand"></div>
                            <div class="home-page2-container-font-cn home-brand-cn">品牌设计</div>
                            <div class="home-page2-container-font-en home-brand-en">Brand Design</div>
                        </div>
                        <div class="home-page2-design-artice">
                            isual
                            Identity（视觉识别系统），这是一个国际全新的设计理念，包括图形（LOGO）设计，专用字体，标准色彩等。设计到位、实施科学的视觉识别系统，是传播企业经营理念、建立企业知名度、塑造企业形象的快速便捷之途。企业通过VI设计，对内可以征得员工的认同感，归属感，加强企业凝聚力，对外可以树立企业的整体形象。
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="home-page2-container-content">
                        <div class="home-package-box">
                            <div class="home-page2-container-image home-package"></div>
                            <div class="home-page2-container-font-cn home-package-cn">包装设计</div>
                            <div class="home-page2-container-font-en home-package-en">Package Design</div>
                        </div>
                        <div id="package">
                            <div class="home-page2-design-artice ">
                                isual
                                Identity（视觉识别系统），这是一个国际全新的设计理念，包括图形（LOGO）设计，专用字体，标准色彩等。设计到位、实施科学的视觉识别系统，是传播企业经营理念、建立企业知名度、塑造企业形象的快速便捷之途。企业通过VI设计，对内可以征得员工的认同感，归属感，加强企业凝聚力，对外可以树立企业的整体形象。
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="home-page2-container-content">
                        <div class="home-cultural-box">
                            <div class="home-page2-container-image home-cultural"></div>
                            <div class="home-page2-container-font-cn home-cultural-cn">文化创意</div>
                            <div class="home-page2-container-font-en home-cultural-en">Cultural Creativity</div>
                        </div>
                        <div id="cultural">
                            <div class="home-page2-design-artice">
                                isual
                                Identity（视觉识别系统），这是一个国际全新的设计理念，包括图形（LOGO）设计，专用字体，标准色彩等。设计到位、实施科学的视觉识别系统，是传播企业经营理念、建立企业知名度、塑造企业形象的快速便捷之途。企业通过VI设计，对内可以征得员工的认同感，归属感，加强企业凝聚力，对外可以树立企业的整体形象。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 第二屏结束 -->
    <!-- 第三屏 -->
    <div class="page section3 section" id="page-3">
        <div class="container">
            <h1 class="text-center home-page2-big-title">关于一树</h1>
            <hr class="center-block home-hr" style="background-color:#929292; width:116px;"/>
            <h4 class="text-center home-page2-big-title-txt">我们年轻活力，我们专业认真</h4>
        </div>
        <div class="container">
            <div style="overflow: hidden" class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <div class="home-page3-left-img" style="background: url(storage/{{$data['image']}}) no-repeat;"></div>
            </div>
            <div style="overflow: hidden" class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <div class="home-page3-right-content">
                    <div class="home-page3-right-title-en">{{$data['title']}}</div>
                    <div class="home-page3-right-title-cn">{{$data['description']}}</div>
                    <div style="margin-bottom:22px;">
                        <image src="image/hr.png"/>
                    </div>
                    <div class="home-page3-right-title-content">
                      {!! $data['body'] !!}
                        {{-- <p style="margin-bottom:20px;">
                            一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：</p>
                        <p style="margin-bottom:20px;">囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。<br>
                            获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。<br>
                            获得6项世界之星包装奖。<br>
                            获国家专利20多项。<br>
                            中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。<br>
                            获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。<br></p>
                        <p>
                            我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 第三屏结束 -->
    <!-- 第四屏 -->
    <div class="page section4 section" id="page-4">
        <div class="container">
            <h1 class="text-center home-page2-big-title">案例介绍</h1>
            <hr class="center-block hr" style="background-color:#929292; width:174px;"/>
            <h4 class="text-center home-page2-big-title-txt">每位伙伴，我们都用百分百的诚意来服务</h4>
        </div>
        <div class="container">
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="home-page4-img1-box" id="img_box1" style="position: relative">
                    <div class="home-page4-img1" id="home_page4_img1"></div>
                    <div id="home_page4_img1_alt" class="home-page4-img-alt home-page4-img1-box" style="">
                        <p>
                            我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="home-page4-img2-box " id="img_box2">
                        <div class="home-page4-img2" id="home_page4_img2"></div>
                        <div id="home_page4_img2_alt" class="home-page4-img-alt home-page4-img2-box hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="home-page4-img3-box">
                        <div class="home-page4-img3" id="home_page4_img3"></div>
                        <div
                                id="home_page4_img3_alt"
                                class="home-page4-img-alt home-page4-img3-box-bt hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="img_box2-son3" class="home-page4-img-box-team home-page4-img4-box">
                        <div class="home-page4-img4" id="home_page4_img4"></div>
                        <div
                                id="home_page4_img4_alt" class="home-page4-img-alt home-page4-img4-box hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="home-page4-img-box-team home-page4-img5-box">
                        <div class="home-page4-section4-child-img-size home-page4-img5"
                             id="home_page4_img5"></div>
                        <div
                                id="home_page4_img5_alt" class="home-page4-img-alt home-page4-img5-alt hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="home-page4-img-box-team home-page4-img6-box">
                        <div class="home-page4-section4-child-img-size home-page4-img6"
                             id="home_page4_img6"></div>
                        <div
                                id="home_page4_img6_alt"
                                class="home-page4-img-alt home-page4-img6-alt hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="home-page4-img-box-team home-page4-img7-box">
                        <div class="home-page4-section4-child-img-size home-page4-img7"
                             id="home_page4_img7"></div>
                        <div
                                id="home_page4_img7_alt"
                                class="home-page4-img-alt home-page4-img7-alt hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <div class="home-page4-img-box-team home-page4-img8-box">
                        <div class="home-page4-section4-child-img-size home-page4-img8"
                             id="home_page4_img8"></div>
                        <div
                                id="home_page4_img8_alt" class="home-page4-img-alt home-page4-img8-alt hiden">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
@endsection
