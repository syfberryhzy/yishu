@extends('layouts.app')

@section('content')
    <div class="page section2 section" id="page-2">

        <div class="win-page2-contain container">
            <div class="win-page2-contain-header">
                <h1 class="win-page2-contain-header-title">获奖说明</h1>
                <hr class="win-hr"/>
                <h6 class="win-page2-contain-header-text">获得红点奖，IF奖，世界之星包装奖等一系列国内外大奖</h6>
                <div class="win-page2-contain-header-artice">

                    <div class="win-page2-contain-header-artice-img" style="margin: auto;align-items: center"></div>

                    <div class="win-page2-contain-header-artice-text">
                        <div>
                            <div class="win-page2-contain-header-artice-text-point"></div>
                            <span> 囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。</span>
                        </div>
                        <div>
                            <div class="win-page2-contain-header-artice-text-point"></div>
                            <span>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。</span>
                        </div>
                        <div>
                            <div class="win-page2-contain-header-artice-text-point"></div>
                            <span>获得6项世界之星包装奖（联合国世界包装组织）</span>
                        </div>
                        <div>
                            <div class="win-page2-contain-header-artice-text-point"></div>
                            <span>公司成员获得设计人才的国家级奖项： 2016中国光华龙腾提名奖设计业10大杰
                        出青年（国家科技奖励办公室）</span>
                        </div>
                        <div>
                            <div class="win-page2-contain-header-artice-text-point"></div>
                            <span>获得中国包装科学技术奖,公司骨干入选国家双创人才计划重点人才库。
                         <br>获得国家专利20多项……</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="win-page2-contain-section row">
              @foreach($datas as $key => $data)
                <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                        <div class="win-page2-contain-section-winner-img-team win-page2-contain-section-winner-img1" style="align-items: center;margin: auto;background: url(storage/{{$data['image']}}) no-repeat;"></div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                        <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                            {{$data->name}}<br>
                            {{$data->english_name}}<br>
                            {{$data->ranking}}<br>
                            {{$data->date}}<br>
                        </div>
                    </div>

                </div>
              @endforeach            
          </div>

        </div>
@endsection
