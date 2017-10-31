<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->delete();

        \DB::table('posts')->insert([
           0 => [
               'id' => 1,
               'title' => 'TOMWOOD',
               'description' => 'tomwood品牌落地页设计',
               'body' => 'tomwood品牌落地页设计',
               'category_id' => 8,
               'image' => 'upload/cate_introduce/images/bb335f3240ac45f9ae099636ab83b13f.png',
               'banner_image' => ''
           ],
            1 => [
                'id' => 2,
                'title' => '巴黎Asunal展会设计',
                'description' => 'Asunal展会墙绘设计',
                'body' => 'Asunal展会墙绘设计',
                'category_id' => 11,
                'image' => 'upload/cate_introduce/images/abbed201e975006512e66ea9e4a7cc6c.png',
                'banner_image' => ''
            ],
            2 => [
                'id' => 3,
                'title' => 'RUSEEL BRAND',
                'description' => '英格兰品牌设计',
                'body' => '英格兰品牌设计',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/dcdf80272bbdf84a783ad6cd704b719a.png',
                'banner_image' => ''
            ],
            3 => [
                'id' => 4,
                'title' => '懒熊体育',
                'description' => '懒熊体育响应式用户体验设计',
                'body' => '懒熊体育响应式用户体验设计',
                'category_id' => 8,
                'image' => 'upload/cate_introduce/images/36af2edd3b15f134305d44585c0f67b9.png',
                'banner_image' => ''
            ],
            4 => [
                'id' => 5,
                'title' => 'GXG女装广告设计',
                'description' => 'GXG新加坡发布会预告广告视频',
                'body' => 'GXG新加坡发布会预告广告视频',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/ecf497dd3504db31fe5f6c934d2ccb41.png',
                'banner_image' => ''
            ],
            5 => [
                'id' => 6,
                'title' => '7喜两周年广告设计',
                'description' => '7喜7up两周年广告设计',
                'body' => '7喜7up两周年广告设计',
                'category_id' => 11,
                'image' => 'upload/cate_introduce/images/a7e5e3ccea9dee7d084a5875447a16a1.png',
                'banner_image' => ''
            ],
            6 => [
                'id' => 7,
                'title' => '第六感包装设计',
                'description' => '第六感乳胶包装设计',
                'body' => '第六感乳胶包装设计',
                'category_id' => 11,
                'image' => 'upload/cate_introduce/images/a21bb2c365282b443959d28d25e80498.jpeg',
                'banner_image' => ''
            ],
            7 => [
                'id' => 8,
                'title' => '怪兽耳机',
                'description' => '怪兽耳机产品设计',
                'body' => '怪兽耳机产品设计',
                'category_id' => 8,
                'image' => 'upload/cate_introduce/images/3801dce8f0d19b5267d50894730482bb.png',
                'banner_image' => ''
            ],
            8 => [
                'id' => 9,
                'title' => '板材品牌VI设计',
                'description' => 'FUSIONWOODEN谨慎标注设计',
                'body' => 'FUSIONWOODEN谨慎标注设计',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/1ca930796dd7435a9b5381922cac2e35.png',
                'banner_image' => ''
            ],

            9 => [
                'id' => 10,
                'title' => '凤歌',
                'description' => 'VI设计--凤歌应用',
                'body' => '<p>VI设计--凤歌应用</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。获得6项世界之星包装奖。获国家专利20多项。中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。</p><p></p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 8,
                'image' => 'upload/cate_introduce/images/e00fa0ec5f7035e142a7965260e5738e.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/e39fca95f6d13c3c44459d4fa7882ea5.jpeg","upload\/cate_introduce\/banner_image\/3510821b3eefd45ee86e212b2fdb35c4.jpeg","upload\/cate_introduce\/banner_image\/7323d95cd46773ed8cd5fd5976b7ee08.jpeg"]'
            ],
            10 => [
                'id' => 11,
                'title' => '古韵',
                'description' => 'VI设计--古韵应用',
                'body' => '<p>VI设计--古韵应用</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 8,
                'image' => 'upload/cate_introduce/images/c8073a820b9a9cb6b4a30e7fe80c3593.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/5f503e5ca4072360561dd5ad1a6872b3.jpeg","upload\/cate_introduce\/banner_image\/d735d2c31a7d976de33294b821b21d53.jpeg","upload\/cate_introduce\/banner_image\/9d1f9544b5ca727193fad925500fb5fc.jpeg","upload\/cate_introduce\/banner_image\/b4ef75ea559e2b8980e367af37f92592.jpeg","upload\/cate_introduce\/banner_image\/812621832926d288c3828c697c5cd355.jpeg"]'
            ],
            11 => [
                'id' => 12,
                'title' => '果真好',
                'description' => '包装设计--果真好',
                'body' => '<p>包装设计--果真好</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/5637f73035fd6d4a591b56ec7e9792f2.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/3e46935aa123088f7d9019e481c33c1f.jpeg","upload\/cate_introduce\/banner_image\/1b4f43cacc977b1ed8e063f4e480fac7.jpeg"]'
            ],
            12 => [
                'id' => 13,
                'title' => '太古',
                'description' => '包装设计--太古',
                'body' => '<p>包装设计--太古</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/8838e5fccf4cf0f437bd7fae481175b6.png',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/86e001188138474013ac3dee1224bd80.png","upload\/cate_introduce\/banner_image\/c240d416843b823bc1b6e7f951b1c3fd.png"]'
            ],
            13 => [
                'id' => 14,
                'title' => '土司古茶',
                'description' => '包装设计--土司古茶',
                'body' => '<p>包装设计--土司古茶</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/2882c5f2aef38ff7b3e39f6966188728.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/1b400b0d9d296057210058bc5fd9e1f5.jpeg","upload\/cate_introduce\/banner_image\/7ee98d43f4eea45bdbd69263a16ce1cc.jpeg"]'
            ],
            14 => [
                'id' => 15,
                'title' => '野',
                'description' => '包装设计--野',
                'body' => '<p>包装设计--野</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 12,
                'image' => 'upload/cate_introduce/images/734d61532aa999e8fbf9778249b8ee62.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/31bd625375607bcb6bebaae450567b15.jpeg","upload\/cate_introduce\/banner_image\/b03ca394a301df2d928e39b04b59c763.jpeg"]'
            ],
            15 => [
                'id' => 16,
                'title' => '生长的椅子',
                'description' => '文创设计--生长的椅子',
                'body' => '<p>文创设计--生长的椅子</p><p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：
</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。
</p><p>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。
</p><p>获得6项世界之星包装奖。
</p><p>获国家专利20多项。
</p><p>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。
</p><p>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。
</p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 11,
                'image' => 'upload/cate_introduce/images/0e66ae25defb3ebdf1c21aac1f6c53aa.jpeg',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/bd77037a4e9652ae95b3351bef997f28.jpeg","upload\/cate_introduce\/banner_image\/abb932219fa81798e2f60a01fc0283c3.jpeg"]'
            ],
            16 => [
                'id' => 17,
                'title' => 'ISU DESIGN',
                'description' => '品·牌·故·事',
                'body' => '<p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。取得了一系列重要成果：</p><p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。<br>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。<br>获得6项世界之星包装奖。<br>获国家专利20多项。<br>中国2016光华龙腾奖设计业10大杰出青年提名（全国20名，国家奖励办公室批准、路甬祥亲自颁发）。<br>获得省部级包装科学技术奖,入选教育部、财政部双创人才计划国家重点人才库成员。</p><p></p><p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。</p><p><br></p>',
                'category_id' => 13,
                'image' => 'upload/webindex/image/68092149f8cadfc60ac9e8125dd1e935.png',
                'banner_image' => ''
            ],
            17 => [
                'id' => 18,
                'title' => '恩施富硒茶',
                'description' => '恩施富硒茶',
                'body' => '<p>商业的角度深入挖掘产业背后的故事，为中国商业体育产业的前进提供一线的资讯<br>发现成功的线索，理清商业脉络。 懒熊体育力争做成体育与商业跨界的第一媒体<br>nicedesign奈思设计为懒熊体育提供体育资讯、体育创业融投资平台的整合、用户体验设计及平台开发等服务</p><p><br></p>',
                'category_id' => 13,
                'image' => 'upload/cate_introduce/images/41ad4f3579d24bd7ac1b28b428ff3e54.png',
                'banner_image' => '["upload\/cate_introduce\/banner_image\/639cd6c8e9f8b609796bc30af41958c5.png","upload\/cate_introduce\/banner_image\/78353e4cdec6ea4d0d05696f4521623b.png"]'
            ],
            18 => [
                'id' => 19,
                'title' => '获奖说明',
                'description' => '获奖说明',
                'body' => '<p>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。获得6项世界之星包装奖（联合国世界包装组织）公司成员获得设计人才的国家级奖项： 2016中国光华龙腾提名奖设计业10大杰 出青年（国家科技奖励办公室）获得中国包装科学技术奖,公司骨干入选国家双创人才计划重点人才库。&nbsp;<br>获得国家专利20多项……</p><p><br></p>',
                'category_id' => 2,
                'image' => 'upload/webindex/image/a3603b0f04b60af13f5d5d2c2b3f4857.png',
                'banner_image' => ''
            ],
            19 => [
                'id' => 20,
                'title' => 'Company Introdution 公司介绍',
                'description' => 'Company Introdution 公司介绍',
                'body' => '<p>ISU DESIGN<br>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设<br>计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。</p><p><br></p>',
                'category_id' => 9,
                'image' => 'upload/company_introduce/image/0e823e0cd17382e1fca3af96199b596b.png',
                'banner_image' => ''
            ],
            20 => [
                'id' => 21,
                'title' => 'Team Introdution 团队介绍',
                'description' => '我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。',
                'body' => '<p>我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。
</p><p> 对待设计，我们一丝不苟，不容许有任何差池和不满意。
</p><p> 对待设计，我们与国际接轨，引领高水平品味。
</p><p> 对待设计，我们想在人前，为客户做好一切准备。
</p><p> 对待设计，我们致以最高的诚信和诚意。</p><p><br></p>',
                'category_id' => 10,
                'image' => 'upload/webindex/image/930b45a9d71124c29779f7abb48fddc7.png',
                'banner_image' => ''
            ],
            21 => [
                'id' => 22,
                'title' => '团队简介',
                'description' => '团队简介',
                'body' => '<p>我们的设计师们，怀着对设计最强烈的<br>热枕和最尊敬的态度，把最美好的设计呈现给您。</p><p><br></p>',
                'category_id' => 10,
                'image' => 'upload/webindex/image/47d653a00533ab7541975b2606dd6ddd.png',
                'banner_image' => ''
            ]
        ]);
    }
}
