@extends('layouts.app')

@section('content')
    <div class="page section2 section" id="page-2">
        <div class="container with-page2-content">
            <div class="with-page2-content-company-details col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div style="font-size:24px;">Company 公司介绍</div>
                <div style="font-size:16px;">Introdution</div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="with-page2-content-img"></div>
            </div>

            <div class="with-page2-content-text ">
                ISU DESIGN<br>
                <p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。</p>
            </div>

        </div>
    </div>
    <div class="page section3 section" id="page-3">
        <div class="with-page3-contain">
            <div class="container with-page3-content-box1">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                    <div class="with-page3-content-team-details-title">
                        <div style="font-size:24px;">Team 团队介绍</div>
                        <div style="font-size:16px;">Introdution</div>
                    </div>
                    <div class="with-page3-content-team-details-text col-xs-12 col-sm-12 col-md-12 col-lg-12"
                         onclick="translator(this)">
                        我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。
                    </div>
                    <ul class="with-page3-content-team-details-title-list col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <li>
                            <div>
                                <img src="image/point.png"/>
                                <span> 对待设计，我们一丝不苟，不容许有任何差池和不满意。</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="image/point.png"/>
                                <span> 对待设计，我们与国际接轨，引领高水平品味。</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="image/point.png"/>
                                <span> 对待设计，我们想在人前，为客户做好一切准备。</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="image/point.png"/>
                                <span> 对待设计，我们致以最高的诚信和诚意。</span>
                            </div>
                        </li>

                    </ul>
                </div>


                <div class="team_details_allimg col-xs-12 col-sm-12 col-md-12 col-lg-5">
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img1"></div>
                            <div class="with-page3-content-team-details-name">郭沁</div>
                            <div class="with-page3-content-team-details-position">首席设计总监</div>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img2"></div>
                            <div class="with-page3-content-team-details-name">方泽飞</div>
                            <div class="with-page3-content-team-details-position">创意设计总监</div>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img3"></div>
                            <div class="with-page3-content-team-details-name">严墙</div>
                            <div class="with-page3-content-team-details-position">GUI设计师</div>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img4"></div>
                            <div class="with-page3-content-team-details-name">安坤</div>
                            <div class="with-page3-content-team-details-position">UED设计师</div>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img5"></div>
                            <div class="with-page3-content-team-details-name">杨涵韵</div>
                            <div class="with-page3-content-team-details-position">天猫设计总监</div>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img6"></div>
                            <div class="with-page3-content-team-details-name">薛让</div>
                            <div class="with-page3-content-team-details-position">视觉动效设计师</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container with-page3-content-box2">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="with-page3-content-box2-img-box">
                    <div class="with-page3-content-box2-img"></div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="with-page3-content-box2-text">我们的设计师们，怀着对设计最强烈的<br>
                    热枕和最尊敬的态度，把最美好的设计呈现给您。
                </div>
            </div>
        </div>
@endsection
